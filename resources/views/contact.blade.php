@extends('layouts.landing-app')
@section('content')


    <section class="faq-area mt-30" style="margin-top: 200px">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center">
                        <span>CONTACT US</span>

                    </div> <!-- SECTION TITLE -->
                </div>
            </div> <!-- row -->
            <p>
                Please see our contact details below. Feel free to email our tech support directly using the form underneath. We aim to respond within 1 working day. If you are missing an email from us, please check your junk mail before contacting us.


            </p>
            <form method="post" action="{{url("/sendmessage")}}">
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
                                    <h6 class="title" style="font-size: 30px!important;">CONTACT <span>US</span>
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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 mt-30">
                            <button type="submit" class="main-btn">
                                SUBMIT
                            </button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </section>



@endsection
