<?php

namespace App\Http\Controllers;

use App\CancelAutoRenew;
use App\CertificateFiles;
use App\Certificates;
use App\Subscription;
use App\User;
use App\UserCardDetails;
use App\UserTokens;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use services\email_messages\ForgotPasswordMessage;
use services\email_messages\ResetPassword;
use services\email_messages\WorkProtected;
use services\email_services\EmailAddress;
use services\email_services\EmailBody;
use services\email_services\EmailMessage;
use services\email_services\EmailSender;
use services\email_services\EmailSubject;
use services\email_services\MailConf;
use services\email_services\PhpMail;
use services\email_services\SendEmailService;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $userId = Session::get('userId');
        $user = User::where('id', $userId)->first();
        $user->tokenDetails = UserTokens::where('user_id', $userId)->first();
        $user->subscription = Subscription::where('user_id', $userId)->first();
        return view('dashboard.home')->with(['user' => $user]);
    }

    public function showUploadNewWorkPage()
    {
        return view('dashboard.upload-new-work');
    }

    public function showMyProtectedWorksPage()
    {
        $certificates = Certificates::where('user_id', Session::get('userId'))->get();
        return view('dashboard.my-protected-works')->with(['certificates' => $certificates]);
    }

    public function deleteCertificate($id)
    {
        $certificates = Certificates::where('id', $id)->first();
        $certificateFiles = CertificateFiles::where('certificate_id', $certificates->id)->get();
        foreach ($certificateFiles as $file){
            $file->delete();
        }
        $certificates->delete();

        //reviving token
        $token = UserTokens::where('user_id', Session::get('userId'))->first();
        $token->token = (int)$token->token + 1;
        $token->update();

        session()->flash('msg', 'Certificate deleted Successfully. Your token revived!');
        return redirect()->back();
    }

    public function addMoreTokens(){
        $userCard = UserCardDetails::where('user_id', Session::get('userId'))->first();
        return view('dashboard.add-more-tokens')->with(['cardNumber' => $userCard->card_number, 'month' => $userCard->expiry_month, 'year' => $userCard->expiry_year]);
    }

    public function saveNewToken(Request $request){
        try {
            $userCard = UserCardDetails::where('user_id', Session::get('userId'))->first();
            $stripe = \Cartalyst\Stripe\Laravel\Facades\Stripe::setApiKey(env('STRIPE_SECRET'));
            $token = $stripe->tokens()->create([
                'card' => [
                    'number' => $userCard->card_number,
                    'exp_month' => $userCard->expiry_month,
                    'exp_year' => $userCard->expiry_year,
                    'cvc' => $userCard->cvv,
                ],
            ]);

            if (!isset($token['id'])) {
                return redirect()->back()->withErrors("There is a problem with your Card!");
            }

            $charge = $stripe->charges()->create([
                'card' => $token['id'],
                'currency' => 'GBP',
                'amount' => $request->totalAmount,
                'description' => 'wallet',
            ]);
            if ($charge['status'] != 'succeeded') {
                return redirect()->back()->withErrors("Error in your payment method! Please try again!");
            }

            $token = UserTokens::where('user_id', Session::get('userId'))->first();
            $token->token = (int)$token->token + $request->certificateToken;
            $token->update();
            session()->flash('msg', 'Tokens Purchased Successfully!');
            return redirect()->back();

        }catch (\Exception $exception){
            return redirect()->back()->withErrors([$exception->getMessage()]);

        }
    }

    public function billing(){
        return view('dashboard.billing');
    }

    public function personalDetails(){
        $user = User::where('id', Session::get('userId'))->first();
        return view('dashboard.personal-details')->with(['user' => $user]);
    }

    public function saveProfileInfo(Request $request){
        try {
            $user = User::where('id', Session::get('userId'))->first();
            $user->first_name = $request->firstName;
            $user->last_name = $request->lastName;
            $user->address = $request->address;
            $user->city = $request->city;
            $user->postal_code = $request->postalCode;
            $user->state = $request->province;
            $user->country = $request->selectCountry;
            $user->telephone = $request->telephone;
            $user->profession = $request->profession;
            if (!empty($request->password)){
                if ($request->password != $request->conpassword){
                    return redirect()->back()->withErrors(["Password Mismatch Error."]);
                }else{
                    $user->password = md5($request->password);
                }
            }

            $result = $user->update();
            session()->flash('msg', 'Profile Updated Successfully!');
            return redirect()->back();
        }catch (\Exception $exception){
            return redirect()->back()->withErrors([$exception->getMessage()]);
        }
    }


    public function updateCardInfo(Request $request){
        try {
            $stripe = \Cartalyst\Stripe\Laravel\Facades\Stripe::setApiKey(env('STRIPE_SECRET'));
            $token = $stripe->tokens()->create([
                'card' => [
                    'number' => $request->cardNumber,
                    'exp_month' => $request->expiryMonth,
                    'exp_year' => $request->expiryYear,
                    'cvc' => $request->cvv,
                ],
            ]);

            if (!isset($token['id'])) {
                return redirect()->back()->withErrors("Invalid Card! Please try again!");
            }
            $userCardDetails = UserCardDetails::where('user_id', Session::get('userId'))->first();
            $userCardDetails->card_holder_name = $request->cardHolderName;
            $userCardDetails->card_number = $request->cardNumber;
            $userCardDetails->expiry_month = $request->expiryMonth;
            $userCardDetails->expiry_year = $request->expiryYear;
            $userCardDetails->cvv = $request->cvv;
            $result = $userCardDetails->update();
            session()->flash('msg', 'Card Updated Successfully!');
            return redirect()->back();
        }catch (\Exception $exception){
            return redirect()->back()->withErrors([$exception->getMessage()]);
        }
    }

    public function cancelAutoRenew(){
        $cancelAuto = new CancelAutoRenew();
        $cancelAuto->user_id = Session::get('userId');
        $cancelAuto->save();
        return redirect()->back();
    }

    public function turnOnAutoRenew(){
        $cancelAuto = CancelAutoRenew::where('user_id', Session::get('userId'))->first();
        $cancelAuto->delete();
        return redirect()->back();
    }

    public function viewCertificate($id){
        $certificate = Certificates::where('id', $id)->first();
        $certificate->files = CertificateFiles::where('certificate_id', $certificate->id)->get();
        $certificate->user = User::where('id', $certificate->user_id)->first();
        return view('dashboard.view-certificate')->with(['certificate' => $certificate]);
    }

    function getIPAddress() {
        //whether ip is from the share internet
        if(!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
        //whether ip is from the proxy
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
//whether ip is from the remote address
        else{
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

    public function resetCertificatePassword(Request $request){
        try {
            if ($request->password == ''){
                return redirect()->back()->withErrors(["Password Required."]);
            }
            if ($request->password != $request->conpassword){
                return redirect()->back()->withErrors(["Password Mismatch Error."]);
            }
            $certificate = Certificates::where('id', $request->certificateId)->first();
            $certificate->password = $request->password;
            $certificate->update();

            $user = User::where('id', Session::get('userId'))->first();

            $subject = new SendEmailService(new EmailSubject("New Certificate Password for Work Reference no: " . $certificate->id));
            $mailTo = new EmailAddress($user->email);
            $message = new ResetPassword();
            $emailBody = $message->message($certificate, $request->password);
            $body = new EmailBody($emailBody);
            $emailMessage = new EmailMessage($subject->getEmailSubject(), $mailTo, $body);
            $sendEmail = new EmailSender(new PhpMail(new MailConf("smtp.gmail.com", "admin@dispatch.com", "secret-2021")));
            $result = $sendEmail->send($emailMessage);

            session()->flash('msg', 'Certificate Password Updated Successfully!');
            return redirect()->back();
        }catch (\Exception $exception){
            return redirect()->back()->withErrors([$exception->getMessage()]);
        }

    }

    public function downloadCertificateFile($certificateId, $fileId){
        $file = CertificateFiles::where('id', $fileId)->first();
        $certificate = Certificates::where('id', $certificateId)->first();
        $user = User::where('id', $certificate->user_id)->first();
        $file =  base_path('/data') . '/Certificate-Files-' . $user->id . '/' . $file->file_name;
        $type = mime_content_type($file);
        header('Content-Type:' . $type);
        header('Content-Length: ' . filesize($file));
        return readfile($file);
    }

    public function showImage($fileId){
        $file =  base_path('/data') . '/downloads' . '/' . $fileId . '.png';
        $type = mime_content_type($file);
        header('Content-Type:' . $type);
        header('Content-Length: ' . filesize($file));
        header('Content-Disposition: attachment; filename="Warning-Logo.png"');
        return readfile($file);
    }

    public function downloadLogo($userId, $fileId){

        if ($fileId == 0){
            $file =  base_path('/data') . '/downloads' . '/zipFile.zip';
        }else{
            $file =  base_path('/data') . '/downloads' . '/' . $fileId . '.png';
        }

        $type = mime_content_type($file);
        header('Content-Type:' . $type);
        header('Content-Length: ' . filesize($file));
        if ($fileId == 0){
            header('Content-Disposition: attachment; filename="Warning-Logo-Zip.zip"');
        }else{
            header('Content-Disposition: attachment; filename="Warning-Logo-'.$fileId.'.png" ');
        }
        return readfile($file);
    }

    public function savingNewWork(Request $request)
    {
        try {
            $userId = Session::get('userId');
            $currentUser = User::where('id', $userId)->first();
            $userToken = UserTokens::where('user_id', $userId)->first();
            if ((int)$userToken->token <= 0){
                return redirect()->back()->withErrors(['You do not have tokens to create this certificate. Please buy more token from ADD MORE TOKENS section and try again!']);
            }

            if (!$request->hasfile('fileOne')) {
                return redirect()->back()->withErrors(['Atleast one File should be uploaded!']);
            }
            $certificates = new Certificates();
            $certificates->user_id = $userId;
            $certificates->title = $request->title;
            $certificates->ip = $this->getIPAddress();
            $randomPassword = $this->generateRandomString(10);
            $certificates->password = $randomPassword;
            $certificates->save();

            if ($request->hasfile('fileOne')) {
                $files = $request->file('fileOne');
                foreach ($files as $file) {
                    $name = $request->fileOneName . rand(0, 1000) .time() . '.' . $file->getClientOriginalExtension();
                    $file->move(base_path('/data') . '/Certificate-Files-' . $userId . '/', $name);
                    $certificateFiles = new CertificateFiles();
                    $certificateFiles->certificate_id = $certificates->id;
                    $certificateFiles->file_name = $name;
                    $certificateFiles->user_given_name = $request->fileOneName;
                    $certificateFiles->save();
                }
            } else {
                return redirect()->back()->withErrors(['Atleast one File should be uploaded!']);
            }
            if ($request->hasfile('fileTwo')) {
                $files = $request->file('fileTwo');
                foreach ($files as $file) {
                    $name = $request->fileTwoName . rand(0, 1000) . time() . '.' . $file->getClientOriginalExtension();
                    $file->move(base_path('/data') . '/Certificate-Files-' . $userId . '/', $name);
                    $certificateFiles = new CertificateFiles();
                    $certificateFiles->certificate_id = $certificates->id;
                    $certificateFiles->file_name = $name;
                    $certificateFiles->user_given_name = $request->fileTwoName;
                    $certificateFiles->save();
                }
            }
            if ($request->hasfile('fileThree')) {
                $files = $request->file('fileThree');
                foreach ($files as $file) {
                    $name = $request->fileThreeName . rand(0, 1000) . time() . '.' . $file->getClientOriginalExtension();
                    $file->move(base_path('/data') . '/Certificate-Files-' . $userId . '/', $name);
                    $certificateFiles = new CertificateFiles();
                    $certificateFiles->certificate_id = $certificates->id;
                    $certificateFiles->file_name = $name;
                    $certificateFiles->user_given_name = $request->fileThreeName;
                    $certificateFiles->save();
                }
            }
            if ($request->hasfile('fileFour')) {
                $files = $request->file('fileFour');
                foreach ($files as $file) {
                    $name = $request->fileFourName . rand(0, 1000) . time() . '.' . $file->getClientOriginalExtension();
                    $file->move(base_path('/data') . '/Certificate-Files-' . $userId . '/', $name);
                    $certificateFiles = new CertificateFiles();
                    $certificateFiles->certificate_id = $certificates->id;
                    $certificateFiles->file_name = $name;
                    $certificateFiles->user_given_name = $request->fileFourName;
                    $certificateFiles->save();
                }
            }
            if ($request->hasfile('fileFive')) {
                $files = $request->file('fileFive');
                foreach ($files as $file) {
                    $name = $request->fileFiveName . rand(0, 1000) . time() . '.' . $file->getClientOriginalExtension();
                    $file->move(base_path('/data') . '/Certificate-Files-' . $userId . '/', $name);
                    $certificateFiles = new CertificateFiles();
                    $certificateFiles->certificate_id = $certificates->id;
                    $certificateFiles->file_name = $name;
                    $certificateFiles->user_given_name = $request->fileFiveName;
                    $certificateFiles->save();
                }
            }
            $userToken = UserTokens::where('user_id', $userId)->first();
            $userToken->token = (int)$userToken->token - 1;
            $userToken->update();

            $subject = new SendEmailService(new EmailSubject("Your work has been protected by " . env('APP_NAME')));
            $mailTo = new EmailAddress($currentUser->email);
            $message = new WorkProtected();
            $emailBody = $message->message($currentUser , $certificates, $randomPassword);
            $body = new EmailBody($emailBody);
            $emailMessage = new EmailMessage($subject->getEmailSubject(), $mailTo, $body);
            $sendEmail = new EmailSender(new PhpMail(new MailConf("smtp.gmail.com", "admin@dispatch.com", "secret-2021")));
            $result = $sendEmail->send($emailMessage);

            session()->flash('msg', 'Certificate Created Successfully!');
            return redirect('my-protected-work');
        }catch (\Exception $exception){
            return redirect()->back()->withErrors([$exception->getMessage()]);

        }

    }

    function generateRandomString($length = 10) {
        return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
    }
}
