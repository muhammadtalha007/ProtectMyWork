@extends('layouts.landing-app')
@section('content')

    <section class="testimonial-area" style="margin-top: 100px">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="section-title text-center">
                        <span>Testimonial / Reviews</span>
                        <h3 class="title"><span>Check What’s Our</span> Client Say <span>About Us!</span></h3>
                    </div> <!-- SECTION TITLE -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <div class="testimonial-item mt-30">
                        <img src="{{url('')}}/assets/images/testimonial-1.jpg" alt="">
                        <h3 class="title">Adam Smith</h3>
                        <span>Wp Developer</span>
                        <p>The beauty of astronomy is that anybody can do it. tiniest baby to the most advanced there is
                            some for anyone who to the most at in same things of joy wants to enjoy astronomy. </p>
                        <div class="icon">
                            <img src="{{url('')}}/assets/images/shape.svg" alt="">
                        </div>
                    </div> <!-- testimonial item -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <div class="testimonial-item item-2 mt-30">
                        <img src="{{url('')}}/assets/images/testimonial-2.jpg" alt="">
                        <h3 class="title">Jonathan Ven</h3>
                        <span>Ui/Ux Designer</span>
                        <p>The beauty of astronomy is that anybody can do it. tiniest baby to the most advanced there is
                            some for anyone who to the most at in same things of joy wants to enjoy astronomy. </p>
                        <div class="icon">
                            <img src="{{url('')}}/assets/images/shape.svg" alt="">
                        </div>
                    </div> <!-- testimonial item -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <div class="testimonial-item item-3 mt-30">
                        <img src="{{url('')}}/assets/images/testimonial-3.jpg" alt="">
                        <h3 class="title">Desel Mulate</h3>
                        <span>Digital Marketer</span>
                        <p>The beauty of astronomy is that anybody can do it. tiniest baby to the most advanced there is
                            some for anyone who to the most at in same things of joy wants to enjoy astronomy. </p>
                        <div class="icon">
                            <img src="{{url('')}}/assets/images/shape.svg" alt="">
                        </div>
                    </div> <!-- testimonial item -->
                </div>
            </div> <!-- row -->
        </div>
    </section>



@endsection
