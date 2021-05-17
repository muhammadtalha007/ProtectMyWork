
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



@extends('layouts.landing-app')
<!--====== LOGIN PART START ======-->


@section('content')
    <section class="login-area singup-area" style="margin-bottom: 100px">
{{--        <div class="login-bg">--}}
{{--            <div class="login-shape">--}}
{{--                <img src="{{url('')}}/assets/images/shapes/login-shape.png" alt="">--}}
{{--            </div>--}}
{{--        </div>--}}

        <form method="post" action="{{url("/login-user")}}">
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
                                <input type="email" placeholder="Email*" name="email" required>
                            </div>
                            <div class="input-box mt-30">
                                <input type="password" name="password" placeholder="Password*">
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
        </form>
    </section>


@endsection
<!--====== LOGIN PART ENDS ======-->
