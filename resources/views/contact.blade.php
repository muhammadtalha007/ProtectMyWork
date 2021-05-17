<link rel="canonical" href="https://www.copyrightcover.com/contact"><!DOCTYPE html>
<!-- COMMON TAGS -->
<meta charset="utf-8">
<title>Copyright Cover Guides</title>
<!-- Search Engine -->
<meta name="description" content="Contact us Today by email. Telephone ">
<meta name="image" content="https://www.copyrightcover.com/assets/images/logo.png">
<meta name="keywords" content="Copyright Review, about copyright, copyright protection, copyright Cover,UK Copyright Service"/>
<meta name="ROBOTS" content="NOYDIR" />
<meta name="ROBOTS" content="NOODP" />
<meta name="Copyright" content="Copyright Cover Limited" />
<!-- Schema.org for Google -->
<meta itemprop="name" content="Copyright Cover">
<meta itemprop="description" content="Contact us Today by email | Telephone ">
<meta itemprop="image" content="https://www.copyrightcover.com/assets/images/logo.png">
<!-- Twitter -->
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="Copyright Cover">
<meta name="twitter:description" content="Contact us Today by email. Telephone ">
<meta name="twitter:site" content="@CoverCopyright">
<meta name="twitter:creator" content="@CoverCopyright">
<meta name="twitter:image:src" content="https://www.copyrightcover.com/assets/images/logo.png">
<!-- Open Graph general (Facebook, Pinterest & Google+) -->
<meta property="og:title" content="Copyright Cover">
<meta property="og:description" content="Contact us Today by email | Telephone ">
<meta property="og:image" content="https://www.copyrightcover.com/assets/images/banner.png">
<meta property="og:locale" content="England">
<meta property="og:video" content="https://www.youtube.com/watch?v=https://www.youtube.com/watch?v=X5FZgj0p814">
<meta property="fb:admins" content="100011001514131">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.copyrightcover.com/contact">

@extends('layouts.landing-app')
@section('content')

    <script src='https://www.google.com/recaptcha/api.js'></script>

    <section class="faq-area mt-30" style="margin-top: 200px">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <h2 style="text-align: center;color: #6b9ce8">CONTACT US</h2>
                    <div style="margin: 0 auto;max-width: 100px">
                        <div style="border-bottom: 3px solid #6b9ce8;width: 100px" >

                        </div>
                    </div>
{{--                    <div class="section-title text-center">--}}
{{--                        <span>CONTACT US</span>--}}

{{--                    </div> <!-- SECTION TITLE -->--}}
                </div>
            </div> <!-- row -->
            <p style="margin-top: 40px">
                Please see our contact details below. Feel free to email our tech support directly using the form underneath. We aim to respond within 1 working day. If you are missing an email from us, please check your junk mail before contacting us.

<div class="trustedsite-trustmark" data-type="211" data-width="120"  data-height="50"></div>
            </p>
            <form method="post" action="{{url("/sendmessage")}}" onsubmit="return validateForm()">
                {{csrf_field()}}
                <div class="container">
                    <div class="row" style="padding-top: 50px">
                        <div class="col-lg-6">
                            <div>
                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        <h4 style="color: black;font-size: 14px">{{$errors->first()}}</h4>
                                    </div>
                                @endif
                                @if(\Illuminate\Support\Facades\Session::has('msg'))
                                    <div class="alert alert-success" style="margin-bottom: 0px!important;">
                                        <h4 style="color: black">{{\Illuminate\Support\Facades\Session::get("msg")}}</h4>
                                    </div>
                                @endif
                                    <h6 class="title" style="font-size: 30px!important;margin-top: 10px">CONTACT <span>US</span>
                                    </h6>
                            </div>
                            <div class="login-form">
                                <div class="input-box">
                                    <input type="text" placeholder="Name*" name="name" required>
                                </div>
                                <div class="input-box mt-30">
                                    <input type="email" placeholder="Email*" name="email" required>
                                </div>
                                <div class="input-box mt-30">
                                    <input type="text" placeholder="Subject*" name="subject" required>
                                </div>
                                <div class="input-box mt-30">
                                    <textarea type="text" class="form-control" placeholder="Message*" name="message" required></textarea>
                                </div>
                                <div class="input-box mt-30">
                                    <div class="g-recaptcha"
                                         data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}">
                                    </div>
                                </div>

                                <div style="margin-top: 20px">
                                    <button type="submit" class="main-btn">
                                        SUBMIT
                                    </button>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div style="margin-top: 100px;margin-left: 50px">
                                <div style="padding: 5px;">
                                    Phone : <a href="tel:{{env('APP_PHONE')}}">{{env('APP_PHONE')}}</a>
                                </div>
                                <div style="padding: 5px;">
                                    EMAIL : <a href="mailto:{{env('APP_EMAIL')}}">{{env('APP_EMAIL')}}</a>
                                </div>
                                <div style="padding: 5px;">
                                    Address : {{env('APP_ADDRESS')}} <br>
                                    Company Registered in England & Wales No. 13335834
                                </div>
                            </div>



                        </div>
                    </div>
                </div>

            </form>
        </div>
    </section>

    <script>
        function validateForm()
        {
            var v = grecaptcha.getResponse();
            if(v.length === 0)
            {
                document.getElementById('captcha').innerHTML="You can't leave Captcha Code empty";
                return false;
            }
            else
            {
                document.getElementById('captcha').innerHTML="Captcha completed";
                return true;
            }
        }
    </script>


@endsection
