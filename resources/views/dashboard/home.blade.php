@extends('layouts.dashboard')

@section('content')
    <section class="sevices-area" style="margin-top: 30px">
        <div class="container">
            <div class="row justify-content-center">

            </div> <!-- row -->
            <div class="row justify-content-center">

                <div class="col-lg-4 col-md-6 col-sm-9">
                        <div class="sevices-item" style="height: 300px;padding: 30px">
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
