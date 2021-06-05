<!DOCTYPE html>
<link rel="canonical" href="https://www.copyrightcover.com/login">
<!-- COMMON TAGS -->
<meta charset="utf-8">
<title>Copyright Cover Members Login</title>
<!-- Search Engine -->
<meta name="description" content="Login  for Copyright Cover members.Update your work and view your dashboard">
<meta name="image" content="https://www.copyrightcover.com/assets/images/logo.png">
<meta name="keywords" content="Copyright Review, how to copyright, copyright protection, copyright Cover,UK Copyright Service, registration" />
<meta name="ROBOTS" content="NOYDIR" />
<meta name="ROBOTS" content="NOODP" />
<meta name="copyright" content="Copyright Cover Limited" />
<!-- Schema.org for Google -->
<meta itemprop="name" content="Copyright Cover">
<meta itemprop="description" content="Login  for Copyright Cover members.Update your work and view your dashboard">
<meta itemprop="image" content="https://www.copyrightcover.com/assets/images/logo.png">
<!-- Twitter -->
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="Copyright Cover">
<meta name="twitter:description" content="Login  for Copyright Cover members.Update your work and view your dashboard">
<meta name="twitter:site" content="@CoverCopyright">
<meta name="twitter:creator" content="@CoverCopyright">
<meta name="twitter:image:src" content="https://www.copyrightcover.com/assets/images/logo.png">
<!-- Open Graph general (Facebook, Pinterest & Google+) -->
<meta property="og:title" content="Copyright Cover">
<meta property="og:description" content="Login  for Copyright Cover members.Update your work and view your dashboard">
<meta property="og:image" content="https://www.copyrightcover.com/assets/images/banner.png">
<meta property="og:locale" content="England">
<meta property="og:video" content="https://www.youtube.com/watch?v=g9g4g1wTtZI">
<meta property="fb:admins" content="100011001514131">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.copyrightcover.com/login">

<meta name="google-signin-client_id" content="407905395044-kr56ephrdivtkbjpd1crpdc1fl7d7oqo.apps.googleusercontent.com">
<style>
    #liab
    {
        display: none;
        background-color: rgb(46, 158, 247);
        padding: 13px;
        cursor: pointer;
        color: white;
        width: 350px;
        margin-top: 20px;
    }
    #liab img
    {
        height: 38px;
        background: white;
        padding: 5px;
        border-radius: 50
    }
    #liab span{margin-left:5px;}
</style>
@extends('layouts.landing-app')
<!--====== LOGIN PART START ======-->


@section('content')
    <section class="login-area singup-area" style="margin-bottom: 100px">
        {{--        <div class="login-bg">--}}
        {{--            <div class="login-shape">--}}
        {{--                <img src="{{url('')}}/assets/images/shapes/login-shape.png" alt="logo">--}}
        {{--            </div>--}}
        {{--        </div>--}}

        <form method="post" id="login_form" action="{{url("/login-user")}}">
            {{csrf_field()}}
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="login-title">
                            <h2 style="text-align: center;color: #6b9ce8">MEMBER LOGIN</h2>
                            <div style="margin: 0 auto;max-width: 100px">
                                <div style="border-bottom: 3px solid #6b9ce8;width: 100px" >

                                </div>
                            </div>
                            @if($errors->any())
                                <div class="alert alert-danger" style="margin-top: 10px">
                                    <h4 style="color: black;font-size: 14px">{{$errors->first()}}</h4>
                                </div>
                            @endif
                            @if(\Illuminate\Support\Facades\Session::has('msg'))
                                <div class="alert alert-success" style="margin-bottom: 0px!important;margin-top: 10px">
                                    <h4 style="color: black">{{\Illuminate\Support\Facades\Session::get("msg")}}</h4>
                                </div>
                            @endif
                            <p style="margin-top: 30px;color: black;font-weight: bold;font-size: 16px!important;">Please enter your registered email address and your password below.</p>
                        </div>
                        <div class="login-form">
                            <div class="input-box mt-30">
                                <input type="email" placeholder="Email*" id="email" name="email" required>
                            </div>
                            <div class="input-box mt-30">
                                <input type="password" name="password" placeholder="Password*">
                            </div>
                            <input type="hidden" id="google_signin" name="google_signin" value="">
                            <div id="gSignIn" style="margin-top:25px;"></div>
                            <div id="gerror" style="margin-top:25px;display:none;color:red;font-size:15px;"></div>
                            <div id="liab" onclick="submitg()">
                                <img  src="https://www.copyrightcover.com/assets/images/btn_google_signin_dark_pressed_web.png"alt="Google"/>
                                <span id="logged_in_as"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container" >
                <div class="row">
                    <div class="col-lg-3 mt-30">
                        <button type="submit"
                                style="background: #6b9ce8;letter-spacing: 3px;border: none;color: #fff;cursor: pointer;padding: 1.0rem 3rem;text-transform: uppercase;width: 100%;border-radius: 5px;line-height: 18px;font-size: 15px !important;">
                            Login
                        </button>


                        <div class="trustedsite-trustmark" data-type="213" data-width="94"  data-height="39"></div>
                    </div>
                </div>
                <br>
                <a style="margin-top: 5px" href="#"  data-toggle="modal" data-target="#myModal1"  >Forgot Password?</a>
        </form>
    </section>

    <div class="modal" id="myModal1">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h3 class="modal-title" id="selectedUseruser">Forgot Password</h3>

                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="{{url('send-reset-password-link')}}" method="post">
                                @csrf
                                <div style="padding: 20px">
                                    <label>Enter your email:</label>
                                    <br>
                                    <input type="email" name="forgotemail" required class="form-group">
                                    <button type="submit" class="btn btn-primary">SEND RESET PASSWORD LINK</button>
                                </div>

                            </form>
                        </div>

                    </div>

                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    <script>
        // Render Google Sign-in button
        function renderButton() {
            gapi.signin2.render('gSignIn', {
                'scope': 'profile email',
                'width': 240,
                'height': 50,
                'longtitle': true,
                'theme': 'dark',
                'onsuccess': onSuccess,
                'onfailure': onFailure
            });
        }

        // Sign-in success callback
        function onSuccess(googleUser) {
            // Get the Google profile data (basic)
            //var profile = googleUser.getBasicProfile();

            // Retrieve the Google account data
            gapi.client.load('oauth2', 'v2', function () {
                var request = gapi.client.oauth2.userinfo.get({
                    'userId': 'me'
                });
                request.execute(function (resp) {

                    console.log(resp.name);
                    var name = resp.name.split(" ");

                    document.getElementById("google_signin").value = resp.email;
                    document.getElementById("email").value = resp.email;
                    document.getElementById("gSignIn").style.display = "none";
                    document.getElementById("liab").style.display = "block";
                    document.getElementById("logged_in_as").innerHTML = "Continue as "+resp.name+"";
                    //document.getElementById("login_form").submit();
                    //document.getElementsByClassName("userContent")[0].style.display = "block";
                });
            });
        }

        function submitg()
        {
            document.getElementById("login_form").submit();
        }

        // Sign-in failure callback
        function onFailure(error) {
            // alert(error);
            document.getElementById("gerror").innerHTML="something went wrong please try again later";
            document.getElementById("gerror").style.display = "block";
        }

        // Sign out the user
        function signOut() {
            var auth2 = gapi.auth2.getAuthInstance();
            auth2.signOut().then(function () {
                // document.getElementsByClassName("userContent")[0].innerHTML = '';
                // document.getElementsByClassName("userContent")[0].style.display = "none";
                document.getElementById("gSignIn").style.display = "block";
            });

            auth2.disconnect();
        }
    </script>
    <script src="https://apis.google.com/js/client:platform.js?onload=renderButton" async defer></script>

@endsection
<!--====== LOGIN PART ENDS ======-->
