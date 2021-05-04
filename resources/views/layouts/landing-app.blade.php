<!doctype html>
<html lang="en">


<!-- Mirrored from appscred.com/html/saasly/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Apr 2021 10:48:32 GMT -->
<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>{{env('APP_NAME')}}</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{url('')}}/assets/images/logo.png" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{url('')}}/assets/css/bootstrap.min.css">

    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="{{url('')}}/assets/css/font-awesome.min.css">

    <!--====== magnific popup css ======-->
    <link rel="stylesheet" href="{{url('')}}/assets/css/magnific-popup.css">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{url('')}}/assets/css/slick.css">

    <!--====== animation css ======-->
    <link rel="stylesheet" href="{{url('')}}/assets/css/animate.min.css">

    <!--====== custom animation css ======-->
    <link rel="stylesheet" href="{{url('')}}/assets/css/custom-animation.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{url('')}}/assets/css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{url('')}}/assets/css/style.css">

    <!--====== jquery js ======-->
    <script src="{{url('')}}/assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="{{url('')}}/assets/js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{url('')}}/assets/js/bootstrap.min.js"></script>
    <script src="{{url('')}}/assets/js/popper.min.js"></script>

    <!--====== magnific popup js ======-->
    <script src="{{url('')}}/assets/js/jquery.magnific-popup.min.js"></script>

    <!--====== wow js ======-->
    <script src="{{url('')}}/assets/js/wow.js"></script>

    <!--====== Slick js ======-->
    <script src="{{url('')}}/assets/js/slick.min.js"></script>

    <!--====== counterup js ======-->
    <script src="{{url('')}}/assets/js/jquery.counterup.min.js"></script>
    <script src="{{url('')}}/assets/js/waypoints.min.js"></script>

    <!--====== Main js ======-->
    <script src="{{url('')}}/assets/js/main.js"></script>
    <style>
        .blackcolorlink{
            color: black!important;
        }
        .activenavlink{
            border-bottom: 2px solid;
        }
        hr.new5 {
            border: 2px solid #6b9ce8;
            /*border-radius: 5px;*/
        }
    </style>
</head>

<body>

<!--====== PRELOADER PART START ======-->

<div class="preloader" id="preloader">
    <div class="three ">
        <div class="loader" id="loader">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>

<header class="header-area">
    <div class="header-nav">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="navigation" >
                        <nav class="navbar navbar-expand-lg navbar-light " >
                            <a class="navbar-brand" href="{{url('')}}"><img src="{{url('')}}/assets/images/logo.png" style="width: 160px;height: 110px"></a>

                            <a class="navbar-brand-2"  href="{{url('')}}"><img src="{{url('')}}/assets/images/logo.png" style="width: 160px;height: 110px"></a> <!-- logo -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation" style="color: black">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button> <!-- navbar toggler -->

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent" >
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link {{!\Request::is('/') ? 'blackcolorlink ' : ''}}{{\Request::is('/') ? 'activenavlink' : ''}}" href="{{url('')}}">HOME</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{!\Request::is('/') ? 'blackcolorlink ' : ''}}{{\Request::is('features') ? 'activenavlink' : ''}}" href="{{url('features')}}">FEATURES </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{!\Request::is('/') ? 'blackcolorlink ' : ''}}{{\Request::is('search-work') ? 'activenavlink' : ''}}" href="{{url('search-work')}}">SEARCH WORK </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{!\Request::is('/') ? 'blackcolorlink ' : ''}}{{\Request::is('faqs') ? 'activenavlink' : ''}}" href="{{url('faqs')}}">FAQS </a>

                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{!\Request::is('/') ? 'blackcolorlink ' : ''}}{{\Request::is('reviews') ? 'activenavlink' : ''}}" href="{{url('reviews')}}">Reviews </a>

                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{!\Request::is('/') ? 'blackcolorlink ' : ''}}{{\Request::is('contact') ? 'activenavlink' : ''}}" href="{{url('contact')}}">CONTACT</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                            @if(!\Illuminate\Support\Facades\Session::has('userId'))
                            <div class="navbar-btn d-none d-sm-block">
                                <a class="main-btn" style="background: #6fc3e6!important;color: white" href="{{url('/register')}}">REGISTER</a>
                            </div>
                            <div class="navbar-btn d-none d-sm-block">
                                <a class="main-btn" style="background: white!important;color: #6fc3e6" href="{{url('/login')}}">SIGN IN</a>
                            </div>
                            @else
                                <div class="navbar-btn d-none d-sm-block">
                                    <a class="main-btn" style="background: #6fc3e6!important;color: white" href="{{url('/dashboard')}}">Dashboard</a>
                                </div>
{{--                                <div class="navbar-btn d-none d-sm-block">--}}
{{--                                    <a class="main-btn" href="{{url('/logout-user')}}">LOGOUT</a>--}}
{{--                                </div>--}}
                            @endif
                        </nav>
                    </div> <!-- navigation -->
                </div>
            </div> <!-- row -->
        </div>
    </div>
</header>

<!--====== HEADER PART ENDS ======-->
@yield('content')
<!--====== FOOTER PART START ======-->

<footer class="footer-area" style="background-image: url('/icons/clouds.png');padding-top: 0px;margin-top: -80px">
    <div class="container">
        <div class="footer-items" style="margin-top: 0px;border-top: 0px">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-about-1 mt-30" style="padding: 40px">
                        <a href="{{url('')}}"><img src="{{url('')}}/assets/images/logo.png" alt="" style="width: 200px;height: 130px"></a>
{{--                        <p>COPYRIGHT PROTECTION SERVICE</p>--}}
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
{{--                    <div class="footer-list mt-30">--}}
{{--                        <h3 class="title">Features</h3>--}}
{{--                        <ul>--}}
{{--                            <li >--}}
{{--                                <a  href="{{url('features')}}" style="padding-top: 5px">FEATURES </a>--}}
{{--                            </li>--}}
{{--                            <li >--}}
{{--                                <a  href="{{url('search-work')}}" style="padding-top: 5px">SEARCH WORK </a>--}}
{{--                            </li>--}}
{{--                            <li >--}}
{{--                                <a href="{{url('faqs')}}" style="padding-top: 5px">FAQS </a>--}}

{{--                            </li>--}}
{{--                            <li >--}}
{{--                                <a  href="{{url('reviews')}}" style="padding-top: 5px">Reviews </a>--}}

{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a  href="{{url('contact')}}" style="padding-top: 5px">CONTACT</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
{{--                    <div class="footer-list mt-30 ml-70">--}}
{{--                        <h3 class="title">Pages</h3>--}}
{{--                        <ul>--}}
{{--                            <li><a href="error.html">Home</a></li>--}}
{{--                            <li><a href="error.html">Our Services</a></li>--}}
{{--                            <li><a href="error.html">About US</a></li>--}}
{{--                            <li><a href="error.html">Faq</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
                </div>
                <div class="col-lg-3 col-md-6">
{{--                    <div class="footer-about mt-30">--}}
{{--                        <h3 class="title">Contact Us</h3>--}}
{{--                        <p>London, UK</p>--}}
{{--                        <ul>--}}
{{--                            <li>--}}
{{--                                <a href="#">--}}
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="18" viewBox="0 0 10 18">--}}
{{--                                        <path fill="#1B1B25"--}}
{{--                                              d="M2.385 18h3.527l.002-9 3.204-.001.343-3.102h-3.55l.005-1.552c0-.81.058-1.242 1.272-1.242h2.243V0H6.215C3.1 0 2.381 1.54 2.381 4.07l.004 1.827-2.366.001V9h2.366v9z"/>--}}
{{--                                    </svg>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="#">--}}
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="15" viewBox="0 0 18 15">--}}
{{--                                        <path fill="#1B1B25"--}}
{{--                                              d="M17.504.277c-.713.434-1.504.749-2.346.92C14.484.459 13.525 0 12.463 0c-2.04 0-3.694 1.696-3.694 3.787 0 .296.033.586.096.863-3.069-.158-5.79-1.666-7.612-3.958-.318.559-.5 1.21-.5 1.904 0 1.314.653 2.474 1.643 3.152-.605-.02-1.174-.191-1.673-.475v.047c0 1.835 1.274 3.366 2.963 3.715-.31.086-.636.132-.974.132-.238 0-.469-.024-.695-.068.47 1.505 1.834 2.6 3.45 2.631C4.202 12.745 2.61 13.351.88 13.351c-.298 0-.592-.018-.881-.053C1.633 14.372 3.574 15 5.659 15c6.794 0 10.508-5.772 10.508-10.777 0-.164-.003-.328-.01-.49.723-.532 1.35-1.2 1.844-1.958-.663.3-1.373.505-2.12.596.762-.468 1.347-1.211 1.623-2.094z"/>--}}
{{--                                    </svg>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="#">--}}
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">--}}
{{--                                        <path fill="#1B1B25"--}}
{{--                                              d="M17.188 0H.812C.364 0 0 .363 0 .811V17.19c0 .447.364.811.812.811h16.376c.448 0 .812-.364.812-.811V.81C18 .363 17.636 0 17.188 0zM12.14 9c0 1.735-1.406 3.141-3.141 3.141S5.859 10.735 5.859 9 7.265 5.859 9 5.859 12.141 7.265 12.141 9zm3.609 6.75H2.25V7.875h1.482c-.078.363-.123.74-.123 1.125 0 2.972 2.419 5.391 5.391 5.391S14.391 11.972 14.391 9c0-.386-.045-.762-.123-1.125h1.482v7.875zm0-10.125h-3.375V2.25h3.375v3.375z"/>--}}
{{--                                    </svg>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
{{--        <div class="row">--}}
{{--            <div class="col-lg-12">--}}
{{--                <div class="footer-copyright text-center pt-150 pb-40">--}}
{{--                    <p>Copyright 2021 @<span>{{env('APP_NAME')}}</span> All Right Reserved</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</footer>

<!--====== FOOTER PART ENDS ======-->

<!--====== BACK TO TOP START ======-->

<a class="back-to-top" style="display: none;opacity: 0">
    <i class="fal fa-angle-up"></i>
</a>

<!--====== BACK TO TOP ENDS ======-->




</body>


</html>

