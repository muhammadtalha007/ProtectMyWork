@extends('layouts.landing-app')
@section('content')
    {{--    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>--}}
    {{--    <div>--}}
    <link href="{{url('')}}/assets/css/certificate.css" rel="stylesheet">
    <div class="container" style="max-width: 900px;margin-top: 200px;margin-bottom: 50px">
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
        <h3 style="letter-spacing: 3px" class="mt-4 mb-3">YOUR CERTIFICATE IS SHOWN BELOW. IF YOU WANT TO DOWNLOAD THE FILE(S) PLEASE CLICK ON THE FILE NAMES AT THE BOTTOM.
        </h3>
        <br>


        <div class="pmw-certificate">
            <div class="pmw-certificate-subcont">
                <div class="cert-logo">
                </div>

                <div class="cert-first-section">
                    <span class="ct-title">Certificate of protected work</span>
                    <span class="ct-subtitle">Ref Number: {{$certificate->id}} </span>
                    <div class="cert-details">
                        <div class="ct-item">
                            <span class="cd-line-title">Registered On</span>
                            <span class="cd-line">{{$certificate->created_at}}</span>
                        </div>

                        <div class="ct-item">
                            <span class="cd-line-title">Registered By</span>
                            <span class="cd-line">{{$certificate->user->first_name}} {{$certificate->user->last_name}}</span>
                        </div>



                        <div class="ct-item">
                            <span class="cd-line-title">Registration type</span>
                            <span class="cd-line"> Uploaded through Website</span>
                        </div>

                        <div class="ct-item">
                            <span class="cd-line-title">I.P Address</span>
                            <span class="cd-line">{{$certificate->ip}}</span>
                        </div>

                        <div class="ct-item">
                            <span class="cd-line-title">Work Title</span>
                            <span class="cd-line">{{$certificate->title}}</span>
                        </div>
                    </div>
                </div>

                <div class="cc-cc">
                    <div class="cert-certified">
                        <div class="cc-one">Registration certificate issued &amp; certified by: </div>
                        <div class="cc-sig" style="font-size: 30px">{{env('APP_NAME')}}</div>
                        <div class="cc-three">{{env('APP_NAME')}} Limited</div>
                        <div class="cc-address">{{env('APP_ADDRESS')}}</div>
                    </div>
                </div>


                <div class="certified-files">
                    <div class="cf-title">Certified files</div>
                    @foreach($certificate->files as $file)
                        <div class="cf-items">
                            <div class="cf-item">
                                <a  href="{{url('download-certificate-file')}}/{{$certificate->id}}/{{$file->id}}" download title="Download" class="press1" style="color:#e6736f">
                                    <span class="dnlwd">[DOWNLOAD]</span>
                                    {{$file->user_given_name}}
                                </a>
                            </div>
                        </div>
                    @endforeach

                </div>

                <div class="copyright-footer">
                    <span style="font-family: 'Lato';">©</span> Copyright 2021 {{$certificate->user->first_name}} {{$certificate->user->last_name}}<br>
                    All Rights Reserved.<br>
                    Protected with <a href="{{url('')}}" target="_blank">{{env('APP_URL')}}</a>,<br>
                    Reference Number: {{$certificate->id}}
                </div>

            </div>
        </div>

        {{--        <p style="font-size: 13px;">Below is a list of all your registered and protected work.</p>--}}
    </div>
@endsection
