@extends('layouts.landing-app')

@section('content')
    <section class="pricing-area" style="margin-top: 100px">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-9">
                    <div class="section-title text-center">
                        <span>Features</span>
                        <h3 class="title"><span>Check What’s Our</span> Features</h3>
                        {{--                        <ul class="nav nav-pills" id="pills-tab-2" role="tablist">--}}
                        {{--                            <li class="nav-item" role="presentation">--}}
                        {{--                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"--}}
                        {{--                                   role="tab" aria-controls="pills-home" aria-selected="true">Monthly</a>--}}
                        {{--                            </li>--}}
                        {{--                            <li class="nav-item" role="presentation">--}}
                        {{--                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"--}}
                        {{--                                   role="tab" aria-controls="pills-profile" aria-selected="false">Yearly</a>--}}
                        {{--                            </li>--}}
                        {{--                        </ul>--}}
                    </div> <!-- SECTION TITLE -->
                </div>
            </div> <!-- row -->
            <div class="tab-content" id="pills-tabContent-2">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 col-md-12 col-sm-9 order-3 order-lg-2">
                            <div class="pricing-item text-center mt-30 center">
{{--                                <b>Recommended</b>--}}
{{--                                <h3 class="title">Gold Plan</h3>--}}
{{--                                <h1>£36.99 (ex. VAT)</h1>--}}
{{--                                <span>Billed Yearly</span>--}}
                                <ul>
                                    <li>
                                                <img src="{{url('')}}/assets/images/check.svg" alt="svg">

                                        Third Party Independent Witness
                                    </li>
                                    <li>
                                        <img src="{{url('')}}/assets/images/check.svg" alt="svg">

                                        Automatic Backup of Protected Work

                                    </li>
                                    <li>
                                        <img src="{{url('')}}/assets/images/check.svg" alt="svg">

                                        Convenient Email Registration

                                    </li>
                                    <li>
                                        <img src="{{url('')}}/assets/images/check.svg" alt="svg">

                                        Work Stored on Secure Server

                                    </li>
                                    <li>
                                        <img src="{{url('')}}/assets/images/check.svg" alt="svg">

                                        Confidentiality Guaranteed

                                    </li>
                                    <li>
                                        <img src="{{url('')}}/assets/images/check.svg" alt="svg">


                                        Immediate Digital Certificate



                                    </li>
                                    <li>
                                        <img src="{{url('')}}/assets/images/check.svg" alt="svg">

                                        14 Day Money Back Guarantee


                                    </li>
                                </ul>
                                <a class="main-btn" href="{{url('register')}}">Get Started</a>
                                {{--                                <a class="btn" href="error.html">View plan details <img--}}
                                {{--                                        src="{{url('')}}/assets/images/arrow.svg"--}}
                                {{--                                        alt=""></a>--}}
                            </div> <!-- pricing item -->
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-9 order-2 order-lg-3">
                            {{--                            <div class="pricing-item text-center mt-80">--}}
                            {{--                                <h3 class="title">Daimond Plan</h3>--}}
                            {{--                                <h1>$30.0</h1>--}}
                            {{--                                <span>Billed Monthly</span>--}}
                            {{--                                <ul>--}}
                            {{--                                    <li>Limited Acess Library</li>--}}
                            {{--                                    <li>Single User</li>--}}
                            {{--                                    <li>No Updates</li>--}}
                            {{--                                    <li>Hotline Support 24/7</li>--}}
                            {{--                                </ul>--}}
                            {{--                                <a class="main-btn" href="error.html">Get Started</a>--}}
                            {{--                                <a class="btn" href="error.html">View plan details <img--}}
                            {{--                                        src="{{url('')}}/assets/images/arrow.svg"--}}
                            {{--                                        alt=""></a>--}}
                            {{--                            </div> <!-- pricing item -->--}}
                        </div>
                    </div> <!-- row -->
                </div>
            </div>
        </div>
    </section>

@endsection
