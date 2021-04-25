@extends('layouts.dashboard')

@section('content')
    <section class="sevices-area" style="margin-top: 30px">
        <div class="container">
            <div class="row justify-content-center">
{{--                <div class="col-lg-6 col-md-8">--}}
{{--                    <div style="margin: 0 auto;max-width: 100px">--}}
{{--                        <div class="section-title text-center" style="text-align: center;">--}}
{{--                            <span>DASHBOARD</span>--}}
{{--                            --}}{{--                        <h3 class="title"><span>Get Best</span> Advertiser <span>In Your Side Pocket</span></h3>--}}
{{--                        </div> <!-- SECTION TITLE -->--}}
{{--                    </div>--}}

{{--                </div>--}}
            </div> <!-- row -->
            <div class="row justify-content-center">
{{--                <div class="col-lg-4 col-md-6 col-sm-9">--}}
{{--                    <a href="">--}}
{{--                        <div class="sevices-item" style="height: 300px;padding: 30px">--}}
{{--                                <h4 class="title" style="padding-top: 0px">PAGES</h4>--}}

{{--                             <a href="">--}}
{{--                                <p style="padding-top: 0px;color: blue;text-decoration: underline">MY PROTECTED WORK</p>--}}
{{--                            </a>--}}
{{--                            <a href="">--}}
{{--                                <p style="padding-top: 0px;color: blue;text-decoration: underline">UPLOAD NEW WORK</p>--}}
{{--                            </a>--}}
{{--                            <a href="">--}}
{{--                                <p style="padding-top: 0px;color: blue;text-decoration: underline">ADD MORE TOKENS</p>--}}
{{--                            </a>--}}
{{--                            <a href="">--}}
{{--                                <p style="padding-top: 0px;color: blue;text-decoration: underline">PERSONAL DETAILS</p>--}}
{{--                            </a>--}}

{{--                        </div>--}}
{{--                    </a>--}}

{{--                </div>--}}
                <div class="col-lg-4 col-md-6 col-sm-9">
                        <div class="sevices-item" style="height: 300px;padding: 30px">
                            <h4 class="title" style="padding-top: 0px">Welcome {{$user->first_name . ' ' . $user->last_name ?? 'user'}}</h4>
                            <p>
                                Your subscription expires on {{$user->subscription->subscription_expiry ?? 00}}
                            </p>
                            <p>
                               <a href="#">Cancel Auto Renew</a>
                            </p>
                        </div>

                </div>
                <div class="col-lg-4 col-md-6 col-sm-9">
                        <div class="sevices-item" style="height: 300px;padding: 30px">
                            <h4 class="title" style="padding-top: 0px">TOKENS</h4>
                            <p>
                                YOU HAVE {{$user->tokenDetails->token ?? 0}} CERTIFICATE TOKEN(S) REMAINING
                            </p>
                        </div>
                </div>


            </div>
        </div>
    </section>
@endsection
