<?php

namespace App\Http\Controllers;

use App\Subscription;
use App\User;
use App\UserCardDetails;
use App\UserTokens;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use services\email_messages\ForgotPasswordMessage;
use services\email_messages\InvitationMessageBody;
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
                $user = new User();
                $user->first_name = $request->firstName;
                $user->last_name = $request->lastName;
                $user->email = $request->emailAddress;
                $user->company_name = $request->companyName;
                $user->address = $request->addressLineOne . $request->addressLineTwo;
                $user->city = $request->city;
                $user->postal_code = $request->postalCode;
                $user->state = $request->country;
                $user->country = $request->selectCountry;
                $user->telephone = $request->telephone;
                $user->profession = $request->profession;
                $randomPassword = $this->generateRandomString(10);
                $user->password = md5($randomPassword);
                $result = $user->save();
                $userCardDetails = new UserCardDetails();
                $userCardDetails->user_id = $user->id;
                $userCardDetails->card_holder_name = $request->cardHolderName;
                $userCardDetails->card_number = $request->cardNumber;
                $userCardDetails->expiry_month = $request->expiryMonth;
                $userCardDetails->expiry_year = $request->expiryYear;
                $userCardDetails->cvv = $request->cvv;
                $userCardDetails->save();
                $token = new UserTokens();
                $token->user_id = $user->id;
                $token->token = $request->certificateToken + 5;
                $token->save();

                $subscription = new Subscription();
                $subscription->user_id = $user->id;
                $oneYearOn = date('Y-m-d',strtotime(date("Y-m-d", time()) . " + 365 day"));
                $subscription->subscription_expiry = $oneYearOn;
                $subscription->save();
                session()->flash('msg', 'Login Credentials sent to your email! Please check your inbox.');
                //Email
                $subject = new SendEmailService(new EmailSubject("Welcome to " . env('APP_NAME') . '. Here is your Credentials to Login!'));
                $mailTo = new EmailAddress($request->emailAddress);
                $invitationMessage = new ForgotPasswordMessage();
                $emailBody = $invitationMessage->invitationMessageBody($request->emailAddress , $randomPassword);
                $body = new EmailBody($emailBody);
                $emailMessage = new EmailMessage($subject->getEmailSubject(), $mailTo, $body);
                $sendEmail = new EmailSender(new PhpMail(new MailConf("smtp.gmail.com", "admin@dispatch.com", "secret-2021")));
                $result = $sendEmail->send($emailMessage);
                return redirect('login');
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

    public function login(Request $request)
    {
        try {
            if (User::where('email', $request->email)->exists()) {
                $user = User::where('email', $request->email)->first();
                if ($user->password == md5($request->password)) {
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
}
