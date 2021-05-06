@extends('layouts.dashboard')

@section('content')
    <section class="sevices-area" style="margin-top: 30px">
        <div class="container">
            <div class="row justify-content-center">

            </div> <!-- row -->
            <div class="row justify-content-center" style="margin: 0 auto;max-width: 800px">

                <div class="col-lg-6 col-md-6 col-sm-9">
                        <div class="sevices-item" style="height: 300px;padding: 30px;border: 2px solid #6b9ce8">
                            <h4 class="title" style="padding-top: 0px">Welcome {{$user->first_name . ' ' . $user->last_name ?? 'user'}}</h4>
                            <p>
                                Your subscription expires on {{$user->subscription->subscription_expiry ?? 00}}
                            </p>
                            <p>
                                @if(!\App\CancelAutoRenew::where('user_id',\Illuminate\Support\Facades\Session::get('userId'))->exists())
                               <a href="{{url('cancel-auto-renew')}}" style="color: red">Cancel Auto Renew</a>
                                @else
                               <a href="{{url('turnon-auto-renew')}}" style="color: green">Turn On Auto Renew</a>
                                @endif
                            </p>
                        </div>

                </div>
                <div class="col-lg-6 col-md-6 col-sm-9">
                        <div class="sevices-item" style="height: 300px;padding: 30px;border: 2px solid #6b9ce8">
                            <h4 class="title" style="padding-top: 0px">TOKENS</h4>
                            <p>
                                YOU HAVE {{$user->tokenDetails->token ?? 0}} CERTIFICATE TOKEN(S) REMAINING
                            </p>
                        </div>
                </div>


            </div>
            <h4 style="text-align: center;margin-top: 30px">
                DOWNLOAD OUR COPYRIGHT PROTECTION WARNING LOGO
            </h4>
            <p style="text-align: center">
              <a download href="{{url('download-logo')}}/{{\Illuminate\Support\Facades\Session::get('userId')}}/0">Click here</a> to download Zip file which has all the warning logos in jpg and png formats
            </p>
            <p style="text-align: center">
             You can also click on any of the below logos to download.
            </p>
            <div class="container" style="margin-top: 10px">
                <div class="row">
                    <div class="col-lg-6">
                        <a download href="{{url('download-logo')}}/{{\Illuminate\Support\Facades\Session::get('userId')}}/1">
                            <img src="{{url('download-logo')}}/{{\Illuminate\Support\Facades\Session::get('userId')}}/1">
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a download href="{{url('download-logo')}}/{{\Illuminate\Support\Facades\Session::get('userId')}}/2">
                            <img src="{{url('download-logo')}}/{{\Illuminate\Support\Facades\Session::get('userId')}}/2">
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <a download href="{{url('download-logo')}}/{{\Illuminate\Support\Facades\Session::get('userId')}}/3">
                            <img src="{{url('download-logo')}}/{{\Illuminate\Support\Facades\Session::get('userId')}}/3">
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a download href="{{url('download-logo')}}/{{\Illuminate\Support\Facades\Session::get('userId')}}/4">
                            <img src="{{url('download-logo')}}/{{\Illuminate\Support\Facades\Session::get('userId')}}/4">
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <a download href="{{url('download-logo')}}/{{\Illuminate\Support\Facades\Session::get('userId')}}/5">
                            <img src="{{url('download-logo')}}/{{\Illuminate\Support\Facades\Session::get('userId')}}/5">
                        </a>
                    </div>
                </div>
            </div>
            <p style="text-align: center;margin-top: 10px">
                If you would like to add a link to our site please feel free to copy/paste this html code into your web page
            </p>

            {{--            <br>--}}
            <textarea class="form-control" value="abc" style="height: 100px;padding: 20px"><a href='https://www.copyrightcover.com'><img src='https://www.copyrightcover.com/show-image/5' width="400" height="150" hspace="10" vspace="10" border="0" /></a></textarea>
        </div>
    </section>
@endsection
