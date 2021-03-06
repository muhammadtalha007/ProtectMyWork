<?php

namespace App\Http\Controllers;

use App\CertificateFiles;
use App\Certificates;
use App\Subscription;
use App\User;
use App\UserCardDetails;
use App\UserTokens;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use services\email_messages\ContactForm;
use services\email_messages\ForgotPasswordMessage;
use services\email_messages\InvitationMessageBody;
use services\email_messages\JobCreationMessage;
use services\email_services\EmailAddress;
use services\email_services\EmailBody;
use services\email_services\EmailMessage;
use services\email_services\EmailSender;
use services\email_services\EmailSubject;
use services\email_services\MailConf;
use services\email_services\PhpMail;
use services\email_services\SendEmailService;

class AuthController extends Controller
{
    public function signup(Request $request)
    {
        try {
            if (!User::where('email', $request->emailAddress)->exists()) {
                if ($request->paymentMethod == "stripe"){
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
                        return redirect()->back()->withErrors("Token Id does not Exists! Please try again!");
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
                }

                $user = new User();
                $user->first_name = $request->firstName;
                $user->last_name = $request->lastName;
                $user->email = $request->emailAddress;
//                $user->company_name = $request->companyName;
//                $user->address = $request->addressLineOne . $request->addressLineTwo;
//                $user->city = $request->city;
//                $user->postal_code = $request->postalCode;
//                $user->state = $request->country;
//                $user->country = $request->selectCountry;
//                $user->telephone = $request->telephone;
//                $user->profession = $request->profession;
                $randomPassword = $request->password;
                $user->password = md5($randomPassword);
                $result = $user->save();


                $token = new UserTokens();
                $token->user_id = $user->id;
                $token->token = $request->certificateToken + 5;
                $token->save();

                $subscription = new Subscription();
                $subscription->user_id = $user->id;
                $oneYearOn = date('Y-m-d',strtotime(date("Y-m-d", time()) . " + 365 day"));
                $subscription->subscription_expiry = $oneYearOn;
                $subscription->save();
//                session()->flash('msg', 'Login Credentials sent to your email! Please check your inbox, junk or spam folder.');
                //Email
                $subject = new SendEmailService(new EmailSubject("Welcome to " . env('APP_NAME') . '. Here is your Credentials to Login!'));
                $mailTo = new EmailAddress($request->emailAddress);
                $invitationMessage = new ForgotPasswordMessage();
                $emailBody = $invitationMessage->invitationMessageBody($request->emailAddress , $randomPassword);
                $body = new EmailBody($emailBody);
                $emailMessage = new EmailMessage($subject->getEmailSubject(), $mailTo, $body);
                $sendEmail = new EmailSender(new PhpMail(new MailConf("smtp.gmail.com", "admin@dispatch.com", "secret-2021")));
                $result = $sendEmail->send($emailMessage);

                //Email to admin
                $subject = new SendEmailService(new EmailSubject("A new User just registered on " . env('APP_NAME')));
                $mailTo = new EmailAddress('support@copyrightcover.com');
                $invitationMessage = new JobCreationMessage();
                $emailBody = $invitationMessage->creationMessage($request->emailAddress , $user->first_name, $user->last_name);
                $body = new EmailBody($emailBody);
                $emailMessage = new EmailMessage($subject->getEmailSubject(), $mailTo, $body);
                $sendEmail = new EmailSender(new PhpMail(new MailConf("smtp.gmail.com", "admin@dispatch.com", "secret-2021")));
                $result = $sendEmail->send($emailMessage);


                Session::put('userId', $user->id);
                if ($request->paymentMethod == "stripe" && !empty($request->cardNumber)){
                    $userCardDetails = new UserCardDetails();
                    $userCardDetails->user_id = $user->id;
                    $userCardDetails->card_holder_name = $request->cardHolderName;
                    $userCardDetails->card_number = $request->cardNumber;
                    $userCardDetails->expiry_month = $request->expiryMonth;
                    $userCardDetails->expiry_year = $request->expiryYear;
                    $userCardDetails->cvv = $request->cvv;
                    $userCardDetails->save();
                }
                return redirect('dashboard');
//                return redirect('login');
            } else {
                return redirect()->back()->withErrors(['Email Already Exists!']);
            }
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors([$exception->getMessage()]);
        }
    }

    function generateRandomString($length = 10) {
        return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
    }

    public function findprotectedwork(Request $request){
        try {
            if(Certificates::where('id', $request->id)->where('password', $request->password)->exists()){
                $certificate = Certificates::where('id', $request->id)->first();
                $certificate->files = CertificateFiles::where('certificate_id', $certificate->id)->get();
                $certificate->user = User::where('id', $certificate->user_id)->first();
                return view('view-certificate')->with(['certificate' => $certificate]);
            }else{
                return redirect()->back()->withErrors(['Invalid Reference Number or Password. Please Try Again!']);

            }
        }catch (\Exception $exception){
            return redirect()->back()->withErrors([$exception->getMessage()]);

        }

    }

    public function login(Request $request)
    {
        try {
            if (User::where('email', $request->email)->exists()) {
                $user = User::where('email', $request->email)->first();
                if ($user->password == md5($request->password)) {
                    if ($user->active == 0){
                        return redirect()->back()->withErrors(['You are blocked by admin. Please contact support@copyrightcover.com for further assistance.']);
                    }
                    Session::put('userId', $user->id);
                    return redirect('dashboard');
                } else {

                    return redirect()->back()->withErrors(['Invalid Credentials. Please Try Again!']);
                }
            } else {
                return redirect()->back()->withErrors(['Invalid Credentials. Please Try Again!']);
            }
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors([$exception->getMessage()]);

        }
    }

    public function logout()
    {
        try {
            Session::remove('userId');
            return json_encode(['status' => true]);
        } catch (\Exception $exception) {
            return json_encode(['status' => false]);
        }
    }

    public function sendmessage(Request $request){
        try {
            $subject = new SendEmailService(new EmailSubject($request->name ." contacted you from " . env('APP_NAME')));
            $mailTo = new EmailAddress('support@copyrightcover.com');
            $invitationMessage = new ContactForm();
            $emailBody = $invitationMessage->invitationMessageBody($request);
            $body = new EmailBody($emailBody);
            $emailMessage = new EmailMessage($subject->getEmailSubject(), $mailTo, $body);
            $sendEmail = new EmailSender(new PhpMail(new MailConf("smtp.gmail.com", "admin@dispatch.com", "secret-2021")));
            $result = $sendEmail->send($emailMessage);
            session()->flash('msg', 'Message Sent Successfully.');
            return redirect()->back();

        } catch (\Exception $exception) {
            return redirect()->back()->withErrors([$exception->getMessage()]);
        }


    }

    public function about(){
        return view('about');
    }

    public function userAgreement(){
        return view('user-agreement');
    }

    public function privacyPolicy(){
        return view('privacy-policy');
    }

    public function sendresetpasswordlink(Request $request){
        if (!User::where('email', $request->forgotemail)->exists()){
            return redirect()->back()->withErrors("Email not Exists!");
        }
        try {
            $subject = new SendEmailService(new EmailSubject("Reset Password Link from " . env('APP_NAME')));
            $mailTo = new EmailAddress($request->forgotemail);
            $invitationMessage = new ForgotPasswordMessage();
            $token = JWT::encode($request->forgotemail, 'Secret-2021');
            $emailBody = $invitationMessage->forgotPasswordMessage($token);
            $body = new EmailBody($emailBody);
            $emailMessage = new EmailMessage($subject->getEmailSubject(), $mailTo, $body);
            $sendEmail = new EmailSender(new PhpMail(new MailConf("smtp.gmail.com", "admin@dispatch.com", "secret-2021")));
            $result = $sendEmail->send($emailMessage);
            session()->flash('msg', 'Link Sent Successfully! Please check your inbox.');
            return redirect()->back();
        }catch (\Exception $exception){
            return redirect()->back()->withErrors($exception->getMessage());

        }
    }


    public function resetPassword($token){
        $token = JWT::decode($token, 'Secret-2021', array('HS256'));
        if (empty($token)){
            return json_encode("Access Denied");
        }
        return view('reset-password')->with(['email' => $token]);
    }

    public function resetPasswordBackend(Request $request){
        if (!User::where('email', $request->email)->exists()){
            return redirect()->back()->withErrors("Email not Exists!");
        }
        if ($request->password != $request->confirmpassword){
            return redirect()->back()->withErrors("Password Mismatched!");

        }
        try {
            $user = User::where('email', $request->email)->first();
            $user->password = md5($request->password);
            $user->update();
            session()->flash('msg', 'Password Updated! Please login now!');
            return redirect('login');
        }catch (\Exception $exception){
            return redirect()->back()->withErrors($exception->getMessage());

        }
    }
}
