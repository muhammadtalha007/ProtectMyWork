<?php

namespace services\email_messages;

class ForgotPasswordMessage
{
    public function invitationMessageBody(string $email, $password)
    {
        $emailBody = '
   <body>
             <div style="margin-left: 50px;font-size: 25px;padding-top: 40px">Here Is Your Credentials To Login:</div><br>
             <div style="margin-left: 50px;font-size: 25px;padding-top: 40px">Email: '. $email .'</div><br>
             <div style="margin-left: 50px;font-size: 25px;padding-top: 40px">Password: '. $password .'</div><br>
 <div style="padding-top: 30px;padding-bottom: 40px">
 <a href="'. url(''). '/login" style=" background-color: #1AAA55;
  border: none;
  color: white;
  padding: 10px 27px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 18px;
  cursor: pointer;
  border-radius: 3px;margin-left: 50px">Login</a>
  </div>
            </body>
            ';
        return $emailBody;
    }

}
