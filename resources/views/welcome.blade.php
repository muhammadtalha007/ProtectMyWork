@extends('layouts.landing-app')
<!--====== BANNER PART START ======-->
@section('content')
    <section class="banner-area d-flex align-items-center" style="padding-top: 200px">
        <div class="banner__bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="banner-content">
                        <h1 class="title">COPYRIGHT
                            <span>PROTECTION</span> SERVICE</h1>
                        <p>Save you work such as Books, Training Manuals, Music, Songs, Lyrics And Artwork,Logos, Designs, Graphic Designs</p>
                        <ul>
                            <li><a class="main-btn" href="{{url('register')}}">REGISTER YOUR WORK</a></li>
{{--                            <li><a class="play video-popup" href="https://www.youtube.com/watch?v=_Hp_dI0DzY4">--}}
{{--                                    <div class="play-btn"><img src="{{url('')}}/assets/images/play.svg" alt=""></div>--}}
{{--                                    Watch video--}}
{{--                                </a></li>--}}
                        </ul>
                    </div> <!-- banner content -->
                </div>
            </div> <!-- row -->
        </div>
{{--        <div class="banner-shaps-item">--}}
{{--            <div class="banner-shape">--}}
{{--                <img src="{{url('')}}/assets/images/banner-shape.svg" alt="">--}}
{{--            </div>--}}
{{--            <div class="banner-thumb animated wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="300ms">--}}
{{--                <img src="{{url('')}}/assets/images/banner-thumb-1.png" alt="thumb">--}}
{{--            </div>--}}
{{--            <div class="banner-thumb-2 animated wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="350ms">--}}
{{--                <img src="{{url('')}}/assets/images/banner-thumb-2.png" alt="thumb">--}}
{{--            </div>--}}
{{--        </div>--}}
    </section>

    <!--====== BANNER PART ENDS ======-->

    <!--====== SERVICES PART START ======-->

    <section class="sevices-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="section-title text-center">
                        <span>WHAT CAN BE PROTECTED BY COPYRIGHT?</span>
{{--                        <h3 class="title"><span>Get Best</span> Advertiser <span>In Your Side Pocket</span></h3>--}}
                    </div> <!-- SECTION TITLE -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <div class="sevices-item" style="height: 300px">
                        <h4 class="title" style="padding-top: 0px">LOGOS & MARKETING MATERIAL</h4>
                        <p>Logos, Website Design & Content, Packaging,</p>
                        <div class="services-overlay-1">
                            <img src="{{url('')}}/assets/images/overly-1.svg" alt="">
                        </div>
                        <div class="services-overlay-2">
                            <img src="{{url('')}}/assets/images/overly-2.svg" alt="">
                        </div>
                        <div class="services-overlay-3">
                            <img src="{{url('')}}/assets/images/overly-3.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <div class="sevices-item" style="height: 300px">
                        <h4 class="title" style="padding-top: 0px">MUSIC</h4>
                        <p>Music, Songs, Sounds & Lyrics.</p>
                        <div class="services-overlay-1">
                            <img src="{{url('')}}/assets/images/overly-1.svg" alt="">
                        </div>
                        <div class="services-overlay-2">
                            <img src="{{url('')}}/assets/images/overly-2.svg" alt="">
                        </div>
                        <div class="services-overlay-3">
                            <img src="{{url('')}}/assets/images/overly-3.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <div class="sevices-item" style="height: 300px">
                        <h4 class="title" style="padding-top: 0px">EDUCATION & TRAINING</h4>
                        <p>Course Material, Diagrams, Audio & Video</p>
                        <div class="services-overlay-1">
                            <img src="{{url('')}}/assets/images/overly-1.svg" alt="">
                        </div>
                        <div class="services-overlay-2">
                            <img src="{{url('')}}/assets/images/overly-2.svg" alt="">
                        </div>
                        <div class="services-overlay-3">
                            <img src="{{url('')}}/assets/images/overly-3.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <div class="sevices-item" style="height: 300px">
                        <h4 class="title" style="padding-top: 0px">ART WORK
                        </h4>
                        <p>Designs, Drawings, Illustrations, Photos, Paintings, Sculptures.</p>
                        <div class="services-overlay-1">
                            <img src="{{url('')}}/assets/images/overly-1.svg" alt="">
                        </div>
                        <div class="services-overlay-2">
                            <img src="{{url('')}}/assets/images/overly-2.svg" alt="">
                        </div>
                        <div class="services-overlay-3">
                            <img src="{{url('')}}/assets/images/overly-3.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <div class="sevices-item" style="height: 300px">
                        <h4 class="title" style="padding-top: 0px">DRAMATIC WORKS

                        </h4>
                        <p>Videos, Film, TV, Dramatic Works
                        </p>
                        <div class="services-overlay-1">
                            <img src="{{url('')}}/assets/images/overly-1.svg" alt="">
                        </div>
                        <div class="services-overlay-2">
                            <img src="{{url('')}}/assets/images/overly-2.svg" alt="">
                        </div>
                        <div class="services-overlay-3">
                            <img src="{{url('')}}/assets/images/overly-3.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <div class="sevices-item" style="height: 300px">
                        <h4 class="title" style="padding-top: 0px">LITERATURE

                        </h4>
                        <p>Books, Blogs, Poems, Articles, Plays, Screenplays, Scripts.
                        </p>
                        <div class="services-overlay-1">
                            <img src="{{url('')}}/assets/images/overly-1.svg" alt="">
                        </div>
                        <div class="services-overlay-2">
                            <img src="{{url('')}}/assets/images/overly-2.svg" alt="">
                        </div>
                        <div class="services-overlay-3">
                            <img src="{{url('')}}/assets/images/overly-3.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <div class="sevices-item" style="height: 300px">
                        <h4 class="title" style="padding-top: 0px">SOFTWARE

                        </h4>
                        <p>Apps, Websites, Code , Databases

                        </p>
                        <div class="services-overlay-1">
                            <img src="{{url('')}}/assets/images/overly-1.svg" alt="">
                        </div>
                        <div class="services-overlay-2">
                            <img src="{{url('')}}/assets/images/overly-2.svg" alt="">
                        </div>
                        <div class="services-overlay-3">
                            <img src="{{url('')}}/assets/images/overly-3.svg" alt="">
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section class="advertiser-area">
        <div class="advertiser-bg"></div>
        <div class="container">
            <div class="advertiser-item">
                <div class="row align-items-center">
                    <div class="col-lg-5">
{{--                        <h3 class="title" style="margin-top: 100px"><span>Reviews</span>--}}
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-9">
                                <div class="testimonial-item mt-30">
                                    <img src="{{url('')}}/assets/images/testimonial-1.jpg" alt="">
                                    <h3 class="title">Adam Smith</h3>
                                    <span>Developer</span>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                                    </p>
                                    <div class="icon">
                                        <img src="{{url('')}}/assets/images/shape.svg" alt="">
                                    </div>
                                </div> <!-- testimonial item -->
                            </div>

                        </div>
                        <a href="{{url('reviews')}}" style="text-align: center">View More Reviews..</a>
                    </div>
                    <div class="col-lg-7">
                        <div class="advertiser-content pl-65">
                            <h4 class="title"><span>BENEFITS OF OUR SERVICE</span>
                            </h4>
                            <ul>
                                <li>
                                    <img src="{{url('')}}/assets/images/check.svg" alt="svg">

                                    All work receives a digital certificate with reference number

                                </li>
                                <li><img src="{{url('')}}/assets/images/check.svg" alt="svg">

                                    Independent 3rd Party Copyright Ownership in 177 countries

                                </li>
                                <li><img src="{{url('')}}/assets/images/check.svg" alt="svg">

                                    Quick and Easy: copyright protection in just 5 minutes

                                </li>
                                <li><img src="{{url('')}}/assets/images/check.svg" alt="svg">

                                    Free Telephone support line

                                </li>
                                <li><img src="{{url('')}}/assets/images/check.svg" alt="svg">

                                    £36.99 (ex. VAT) annual membership fee. Upload unlimited work for just £1 (ex. VAT) per upload (first 5 are FREE).

                                </li>
                                <li><img src="{{url('')}}/assets/images/check.svg" alt="svg">

                                    UK Based, Secure, Trusted , Independent and Confidential

                                </li>
                                <li><img src="{{url('')}}/assets/images/check.svg" alt="svg">

                                    Use our copyright warning logos as a theft deterrent

                                </li>
                                <li><img src="{{url('')}}/assets/images/check.svg" alt="svg">

                                    14 Day money back guarantee

                                </li>
                                <li><img src="{{url('')}}/assets/images/check.svg" alt="svg">

                                    Free Affidavit (in event of court action)

                                </li>
                                <li><img src="{{url('')}}/assets/images/check.svg" alt="svg">

                                    HMRC vat registered

                                </li>
                                <li><img src="{{url('')}}/assets/images/check.svg" alt="svg">

                                    Copyright usually lasts for the life of the author + 70 more years

                                </li>
                            </ul>
                        </div> <!-- advertiser content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- advertiser item -->
{{--            <div class="advertiser-item item-2">--}}
{{--                <div class="row align-items-center">--}}
{{--                    <div class="col-lg-7">--}}
{{--                        <div class="advertiser-content pr-65">--}}
{{--                            <h4 class="title"><span>Free Philippine</span> Real Estate--}}
{{--                                <span>Ads Forums And Classifieds</span></h4>--}}
{{--                            <p>The beauty of astronomy is that anybody can do it. From the tiniest baby to the most--}}
{{--                                advanced--}}
{{--                                astrophysicist, there is something for anyone who wants to enjoy astronomy. </p>--}}
{{--                            <ul>--}}
{{--                                <li><img src="{{url('')}}/assets/images/check.svg" alt="svg">Internet Advertising Trends--}}
{{--                                    You Won T Be--}}
{{--                                    Disappointed--}}
{{--                                </li>--}}
{{--                                <li><img src="{{url('')}}/assets/images/check.svg" alt="svg">Get Best Advertiser In Your--}}
{{--                                    Side Pocket--}}
{{--                                </li>--}}
{{--                                <li><img src="{{url('')}}/assets/images/check.svg" alt="svg">What Makes Flyers Unrivaled--}}
{{--                                </li>--}}
{{--                                <li><img src="{{url('')}}/assets/images/check.svg" alt="svg">Illustration In Marketing--}}
{{--                                    Materials--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div> <!-- advertiser content -->--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-5">--}}
{{--                        <div class="advertiser-thumb text-right  animated wow fadeInRight" data-wow-duration="1500ms"--}}
{{--                             data-wow-delay="100ms">--}}
{{--                            <img src="{{url('')}}/assets/images/advertiser-thumb-2.png" alt="">--}}
{{--                            <div class="advertiser-bg-shape">--}}
{{--                                <img src="{{url('')}}/assets/images/advertiser-shape.png" alt="">--}}
{{--                                <div class="round-shape"></div>--}}
{{--                                <div class="advertiser-shape-1">--}}
{{--                                    <img src="{{url('')}}/assets/images/advertiser-shape-1.png" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="advertiser-shape-2">--}}
{{--                                    <img src="{{url('')}}/assets/images/advertiser-shape-2.png" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div> <!-- advertiser thumb -->--}}
{{--                    </div>--}}
{{--                </div> <!-- row -->--}}
{{--            </div> <!-- advertiser item -->--}}
{{--            <div class="advertiser-item item-3">--}}
{{--                <div class="row align-items-center">--}}
{{--                    <div class="col-lg-5">--}}
{{--                        <div class="advertiser-thumb animated wow fadeInLeft" data-wow-duration="1500ms"--}}
{{--                             data-wow-delay="100ms">--}}
{{--                            <img src="{{url('')}}/assets/images/advertiser-thumb-3.png" alt="">--}}
{{--                            <div class="advertiser-bg-shape">--}}
{{--                                <img src="{{url('')}}/assets/images/advertiser-shape.png" alt="">--}}
{{--                                <div class="round-shape"></div>--}}
{{--                                <div class="advertiser-shape-2">--}}
{{--                                    <img src="{{url('')}}/assets/images/advertiser-shape-2.png" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div> <!-- advertiser thumb -->--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-7">--}}
{{--                        <div class="advertiser-content pl-65">--}}
{{--                            <h4 class="title"><span>Breast</span> Augmentation <span>Breast Enlargement Medical</span>--}}
{{--                            </h4>--}}
{{--                            <p>The beauty of astronomy is that anybody can do it. From the tiniest baby to the most--}}
{{--                                advanced--}}
{{--                                astrophysicist, there is something for anyone who wants to enjoy astronomy. </p>--}}
{{--                            <ul>--}}
{{--                                <li><img src="{{url('')}}/assets/images/check.svg" alt="svg">Internet Advertising Trends--}}
{{--                                    You Won T Be--}}
{{--                                    Disappointed--}}
{{--                                </li>--}}
{{--                                <li><img src="{{url('')}}/assets/images/check.svg" alt="svg">Get Best Advertiser In Your--}}
{{--                                    Side Pocket--}}
{{--                                </li>--}}
{{--                                <li><img src="{{url('')}}/assets/images/check.svg" alt="svg">What Makes Flyers Unrivaled--}}
{{--                                </li>--}}
{{--                                <li><img src="{{url('')}}/assets/images/check.svg" alt="svg">Illustration In Marketing--}}
{{--                                    Materials--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div> <!-- advertiser content -->--}}
{{--                    </div>--}}
{{--                </div> <!-- row -->--}}
{{--            </div> <!-- advertiser item -->--}}
        </div>
    </section>

    <!--====== ADVERTISER PART ENDS ======-->

    <!--====== WHAT WE DO PART START ======-->

{{--    <section class="what-we-do-area">--}}
{{--        <div class="container">--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-lg-7">--}}
{{--                    <div class="section-title text-center">--}}
{{--                        <span>What We Do</span>--}}
{{--                        <h3 class="title">Beauty Pageants <span>Should You Let Your Teen Enter Them</span></h3>--}}
{{--                    </div> <!-- SECTION TITLE -->--}}
{{--                </div>--}}
{{--            </div> <!-- row -->--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-lg-4 col-md-6 col-sm-8">--}}
{{--                    <div class="what-we-do-item text-center mt-30">--}}
{{--                        <div class="icon">--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="97" viewBox="0 0 100 97">--}}
{{--                                <g fill="none">--}}
{{--                                    <path fill="#FF4F4F"--}}
{{--                                          d="M64.358 24.262c2.687 0 4.873-2.211 4.873-4.928s-2.186-4.928-4.873-4.928c-2.688 0-4.874 2.21-4.874 4.928 0 1.11.365 2.135.98 2.96l-8.007 11.313c-.478-.158-.987-.245-1.517-.245-1.28 0-2.447.502-3.317 1.322l-5.337-3.062c.07-.335.109-.681.109-1.036 0-2.718-2.186-4.928-4.873-4.928-2.687 0-4.873 2.21-4.873 4.928 0 .355.038.701.109 1.036l-5.337 3.062c-.87-.82-2.037-1.322-3.317-1.322-2.687 0-4.873 2.21-4.873 4.928 0 2.717 2.186 4.928 4.873 4.928 2.687 0 4.873-2.211 4.873-4.928 0-.356-.038-.702-.11-1.036l5.338-3.063c.87.82 2.036 1.323 3.317 1.323 1.28 0 2.446-.503 3.317-1.323l5.337 3.063c-.071.334-.11.68-.11 1.036 0 2.717 2.187 4.928 4.874 4.928s4.873-2.21 4.873-4.928c0-1.11-.365-2.135-.98-2.96l8.007-11.314c.478.158.988.246 1.518.246zm0-6.9c1.074 0 1.949.885 1.949 1.972s-.875 1.97-1.95 1.97c-1.074 0-1.949-.883-1.949-1.97s.875-1.971 1.95-1.971zM24.103 40.262c-1.074 0-1.949-.885-1.949-1.972s.875-1.97 1.95-1.97c1.074 0 1.949.883 1.949 1.97s-.875 1.972-1.95 1.972zm13.418-7.704c-1.074 0-1.949-.885-1.949-1.972 0-1.086.875-1.97 1.95-1.97 1.074 0 1.949.884 1.949 1.97 0 1.087-.875 1.972-1.95 1.972zM50.94 40.26c-1.075 0-1.95-.885-1.95-1.972s.875-1.97 1.95-1.97 1.949.883 1.949 1.97-.875 1.972-1.95 1.972z"/>--}}
{{--                                    <path fill="#000"--}}
{{--                                          d="M82.182 71.81H4.163c-.672 0-1.22-.548-1.22-1.22V9.922c0-.672.548-1.219 1.22-1.219h6.938c.813 0 1.472-.658 1.472-1.47 0-.812-.659-1.47-1.472-1.47H4.163C1.868 5.762 0 7.627 0 9.921V70.59c0 2.294 1.868 4.16 4.163 4.16h10.148v3.237c0 1.843 1.501 3.343 3.346 3.343H32.39L25.455 94.86c-.371.723-.085 1.609.638 1.979.215.11.444.162.67.162.535 0 1.05-.292 1.311-.8l7.623-14.87h16.272L59.59 96.2c.26.508.776.8 1.311.8.226 0 .455-.052.67-.162.723-.37 1.01-1.256.639-1.98L55.276 81.33h14.732c1.845 0 3.346-1.5 3.346-3.343V74.75h8.828c.813 0 1.472-.658 1.472-1.47 0-.813-.66-1.47-1.472-1.47zm-11.771 6.177c0 .221-.18.402-.403.402h-52.35c-.223 0-.404-.18-.404-.402V74.75h53.157v3.237zM16.856 9.426h66.483c.672 0 1.219.541 1.219 1.206v13.843c0 .804.658 1.456 1.47 1.456.813 0 1.472-.652 1.472-1.456V10.632c0-2.27-1.867-4.118-4.161-4.118H51.852V3.652C51.852 1.64 50.197 0 48.162 0h-8.948c-2.035 0-3.69 1.639-3.69 3.652v2.862H16.855c-.813 0-1.471.652-1.471 1.456 0 .804.658 1.456 1.47 1.456zm21.61-5.774c0-.408.335-.74.748-.74h8.948c.412 0 .748.332.748.74v2.862H38.465V3.652z"/>--}}
{{--                                    <path fill="#000"--}}
{{--                                          d="M20.66 50.901c-.79 0-1.43.635-1.43 1.418v12.53c0 .784.64 1.418 1.43 1.418h5.796c.789 0 1.429-.634 1.429-1.418V52.32c0-.783-.64-1.418-1.43-1.418H20.66zm4.367 12.53h-2.939v-9.694h2.94v9.694zM34.121 43.218c-.789 0-1.429.62-1.429 1.385v19.319c0 .765.64 1.385 1.43 1.385h5.795c.79 0 1.43-.62 1.43-1.385V44.603c0-.765-.64-1.385-1.43-1.385h-5.796zm4.368 19.319H35.55V45.988h2.939v16.549zM47.583 50.901c-.79 0-1.43.635-1.43 1.418v12.53c0 .784.64 1.418 1.43 1.418h5.796c.789 0 1.429-.634 1.429-1.418V52.32c0-.783-.64-1.418-1.43-1.418h-5.795zm4.367 12.53h-2.939v-9.694h2.94v9.694zM60.083 59.545c-.79 0-1.43.696-1.43 1.556v4.57c0 .86.64 1.557 1.43 1.557h5.796c.789 0 1.429-.697 1.429-1.557s-.64-1.557-1.43-1.557h-4.367v-3.013c0-.86-.64-1.556-1.428-1.556zM99.252 73.342l-8.41-14.452c2.132-2.253 3.683-5.006 4.512-8.074 1.324-4.904.644-10.027-1.914-14.424-5.282-9.078-17.023-12.198-26.172-6.958-9.149 5.24-12.295 16.89-7.013 25.966 2.56 4.398 6.69 7.543 11.634 8.857 1.65.44 3.325.656 4.99.656 1.454 0 2.9-.166 4.314-.494l8.408 14.452c1.03 1.771 2.907 2.763 4.835 2.763.944 0 1.901-.239 2.777-.74 1.719-.984 2.787-2.82 2.787-4.79 0-.966-.258-1.92-.748-2.762zM72.647 61.448c-4.186-1.113-7.686-3.778-9.853-7.502-4.474-7.688-1.81-17.554 5.94-21.993 2.549-1.46 5.335-2.154 8.086-2.154 5.612 0 11.079 2.888 14.08 8.047 2.168 3.725 2.743 8.063 1.622 12.217-1.122 4.154-3.807 7.626-7.561 9.776-3.754 2.15-8.127 2.721-12.314 1.609zm23.1 16.927c-1.26.722-2.879.292-3.607-.958l-8.089-13.905c.81-.328 1.605-.712 2.376-1.154.772-.442 1.503-.934 2.195-1.467l8.091 13.905c.233.4.355.852.355 1.308 0 .934-.506 1.804-1.32 2.27z"/>--}}
{{--                                    <path fill="#FF4F4F"--}}
{{--                                          d="M90.715 50.087c1.037-3.219.79-6.665-.695-9.704-.345-.707-1.22-1.01-1.953-.677-.734.333-1.048 1.176-.703 1.883 1.172 2.397 1.366 5.117.548 7.658-.823 2.556-2.601 4.7-5.006 6.04-2.545 1.416-5.51 1.792-8.348 1.06-2.839-.734-5.211-2.49-6.68-4.944-3.034-5.066-1.227-11.566 4.027-14.491 3.84-2.139 8.608-1.853 12.145.728.646.471 1.567.349 2.056-.275.49-.623.362-1.511-.285-1.983-4.48-3.269-10.52-3.63-15.385-.922-3.224 1.795-5.53 4.693-6.494 8.16-.963 3.468-.469 7.09 1.393 10.199 1.861 3.109 4.867 5.332 8.463 6.262 1.2.31 2.42.464 3.63.464 2.415 0 4.799-.611 6.946-1.807 3.047-1.696 5.299-4.413 6.341-7.65z"/>--}}
{{--                                </g>--}}
{{--                            </svg>--}}
{{--                        </div>--}}
{{--                        <a href="service.html">Strategy & Research</a>--}}
{{--                    </div> <!-- WHAT WE DO ITEM -->--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6 col-sm-8">--}}
{{--                    <div class="what-we-do-item text-center mt-30">--}}
{{--                        <div class="icon">--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">--}}
{{--                                <g>--}}
{{--                                    <path fill="#000"--}}
{{--                                          d="M13.333 13.333H16.666V16.666H13.333zM20 13.333H23.333V16.666H20zM26.667 13.333H30V16.666H26.667z"/>--}}
{{--                                    <path fill="#000"--}}
{{--                                          d="M93.333 0H60c-3.682 0-6.667 2.985-6.667 6.667h-40c-3.682 0-6.666 2.984-6.666 6.666v73.334c0 3.682 2.984 6.666 6.666 6.666h73.334c3.682 0 6.666-2.984 6.666-6.666V30c3.682 0 6.667-2.985 6.667-6.667V6.667C100 2.985 97.015 0 93.333 0zm-80 10h40v10H10v-6.667C10 11.493 11.492 10 13.333 10zM90 86.667C90 88.507 88.508 90 86.667 90H13.333C11.493 90 10 88.508 10 86.667V23.333h43.333C53.333 27.015 56.318 30 60 30h1.667v5c0 .615.338 1.18.88 1.47.542.29 1.2.258 1.711-.083L73.833 30H90v56.667zm6.667-63.334c0 1.841-1.493 3.334-3.334 3.334h-20c-.329 0-.65.098-.925.28L65 31.887v-3.554c0-.92-.746-1.666-1.667-1.666H60c-1.84 0-3.333-1.493-3.333-3.334V6.667c0-1.841 1.492-3.334 3.333-3.334h33.333c1.841 0 3.334 1.493 3.334 3.334v16.666z"/>--}}
{{--                                    <path fill="#FF4F4F"--}}
{{--                                          d="M63.822 7.155l-3.334 3.333c-.65.651-.65 1.706 0 2.357l3.334 3.333 2.356-2.356-2.155-2.155 2.155-2.155-2.356-2.357zM76.178 16.178l3.334-3.333c.65-.65.65-1.706 0-2.357l-3.334-3.333-2.356 2.357 2.155 2.155-2.155 2.155 2.356 2.356z"/>--}}
{{--                                    <path fill="#FF4F4F" d="M64.729 10L75.271 10 75.271 13.332 64.729 13.332z"--}}
{{--                                          transform="rotate(-71.547 70 11.666)"/>--}}
{{--                                    <path fill="#FF4F4F"--}}
{{--                                          d="M83.333 10H86.666V13.333H83.333zM60 20H63.333V23.333H60zM66.667 20H93.334V23.333H66.667zM90 10H93.333V13.333H90zM18.333 31.667h33.334v-3.334h-35c-.92 0-1.667.747-1.667 1.667v18.333c0 .92.746 1.667 1.667 1.667h66.666c.92 0 1.667-.746 1.667-1.667v-15h-3.333v13.334H18.333v-15zM33.333 55H16.667c-.92 0-1.667.746-1.667 1.667v6.666c0 .92.746 1.667 1.667 1.667h16.666c.92 0 1.667-.746 1.667-1.667v-6.666c0-.92-.746-1.667-1.667-1.667zm-1.666 6.667H18.333v-3.334h13.334v3.334zM15 68.333H35V71.666H15zM15 75H35V78.333H15zM15 81.667H30V85H15zM58.333 55H41.667c-.92 0-1.667.746-1.667 1.667v6.666c0 .92.746 1.667 1.667 1.667h16.666c.92 0 1.667-.746 1.667-1.667v-6.666c0-.92-.746-1.667-1.667-1.667zm-1.666 6.667H43.333v-3.334h13.334v3.334zM40 68.333H60V71.666H40zM40 75H60V78.333H40zM40 81.667H55V85H40zM83.333 55H66.667c-.92 0-1.667.746-1.667 1.667v6.666c0 .92.746 1.667 1.667 1.667h16.666c.92 0 1.667-.746 1.667-1.667v-6.666c0-.92-.746-1.667-1.667-1.667zm-1.666 6.667H68.333v-3.334h13.334v3.334zM65 68.333H85V71.666H65zM65 75H85V78.333H65zM65 81.667H80V85H65zM40 96.667H86.667V100H40zM33.333 96.667H36.666V100H33.333zM0 23.333H3.333V66.666H0z"/>--}}
{{--                                </g>--}}
{{--                            </svg>--}}
{{--                        </div>--}}
{{--                        <a href="service.html">Design & Development</a>--}}
{{--                    </div> <!-- WHAT WE DO ITEM -->--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6 col-sm-8">--}}
{{--                    <div class="what-we-do-item text-center mt-30">--}}
{{--                        <div class="icon">--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg" width="99" height="100" viewBox="0 0 56 56">--}}
{{--                                <g fill="none">--}}
{{--                                    <path fill="#000"--}}
{{--                                          d="M30 40.5C30 34.71 25.29 30 19.5 30S9 34.71 9 40.5 13.71 51 19.5 51 30 46.29 30 40.5zm-18.835 0c0-4.596 3.739-8.335 8.335-8.335 4.596 0 8.335 3.739 8.335 8.335 0 4.596-3.74 8.335-8.335 8.335-4.596 0-8.335-3.74-8.335-8.335z"/>--}}
{{--                                    <path fill="#FF4F4F"--}}
{{--                                          d="M27.15 24.816l2.264 3.868c.282.48.88.683 1.402.471l1.929-.78c.35.235.716.444 1.098.625l.279 2.038c.075.551.551.962 1.115.962h4.526c.563 0 1.04-.41 1.115-.962L41.157 29c.381-.18.748-.39 1.098-.626l1.93.782c.52.21 1.12.009 1.4-.472l2.264-3.868c.282-.48.16-1.093-.286-1.433l-1.65-1.257c.031-.417.031-.835 0-1.252l1.65-1.257c.445-.34.568-.952.286-1.433l-2.263-3.868c-.282-.48-.88-.682-1.402-.471l-1.929.78c-.35-.235-.717-.444-1.098-.625l-.279-2.038c-.075-.551-.552-.962-1.115-.962h-4.526c-.564 0-1.04.41-1.115.962L33.843 14c-.381.181-.748.39-1.098.626l-1.93-.781c-.52-.211-1.12-.01-1.4.471l-2.264 3.868c-.282.48-.16 1.093.286 1.433l1.65 1.257c-.031.417-.031.835 0 1.252l-1.65 1.257c-.445.34-.568.952-.286 1.433zm4.238-2.365c-.1-.63-.1-1.273 0-1.901.064-.4-.099-.803-.423-1.05l-1.374-1.047 1.28-2.186 1.607.65c.38.154.815.091 1.135-.163.502-.401 1.062-.72 1.665-.95.383-.145.655-.485.71-.887l.232-1.697h2.56l.232 1.697c.055.402.327.742.71.887.603.23 1.163.549 1.665.95.32.255.754.317 1.135.163l1.607-.65 1.28 2.187-1.374 1.046c-.325.247-.487.65-.424 1.05.1.629.1 1.272 0 1.9-.063.4.1.803.424 1.05l1.374 1.047-1.28 2.187-1.607-.651c-.38-.154-.815-.091-1.135.164-.502.4-1.062.72-1.665.949-.383.146-.655.486-.71.887l-.232 1.698h-2.56l-.232-1.698c-.055-.401-.327-.741-.71-.887-.603-.229-1.163-.548-1.665-.95-.32-.254-.755-.317-1.135-.163l-1.607.65-1.28-2.186 1.374-1.047c.324-.247.487-.65.423-1.05z"/>--}}
{{--                                    <path fill="#000"--}}
{{--                                          d="M38 26c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4zm0-5.809c.997 0 1.809.812 1.809 1.809 0 .997-.812 1.809-1.809 1.809-.997 0-1.809-.812-1.809-1.809 0-.997.811-1.809 1.809-1.809zM12.044 26.539c-.169.606.166 1.241.748 1.417.574.173 1.192-.182 1.358-.78 1.151-4.144 4.035-7.478 7.766-9.131l-.547 1.297c-.244.578.008 1.253.562 1.508.144.066.294.097.441.097.422 0 .824-.255 1.005-.683l1.532-3.634c.22-.518.03-1.144-.433-1.438l-3.189-2.025c-.517-.329-1.192-.157-1.507.382-.315.54-.15 1.244.367 1.573l1.136.72c-4.44 1.885-7.88 5.805-9.24 10.697zM44.956 35.463c.169-.607-.166-1.242-.748-1.417-.581-.176-1.19.173-1.358.78-1.151 4.143-4.035 7.476-7.766 9.13l.547-1.297c.244-.579-.008-1.254-.562-1.508-.555-.255-1.202.008-1.446.586l-1.532 3.633c-.219.519-.03 1.145.433 1.438l3.19 2.025c.177.113.374.167.568.167.37 0 .731-.195.938-.55.315-.539.15-1.243-.367-1.571l-1.136-.722c4.44-1.883 7.88-5.803 9.24-10.694z"/>--}}
{{--                                    <path fill="#000"--}}
{{--                                          d="M55.995 4.177v-.012C55.876 1.849 53.933 0 51.564 0H4.382C1.995.007-.001 1.993 0 4.391v46.227c.003 2.415 1.998 4.38 4.446 4.38h.023c.604 0 1.093-.49 1.093-1.096 0-.605-.49-1.095-1.093-1.095h-.023c-1.223 0-2.257-1.004-2.258-2.19V9.55h51.624v41.059c.002 1.197-.996 2.198-2.19 2.198-12.62.006-36.585.016-37.491 0h-.102c-.603.027-1.071.539-1.045 1.143.002.043.06 1.04 1.192 1.05l37.446-.002c2.387 0 4.381-1.998 4.378-4.39V4.38c0-.068-.002-.136-.005-.204zm-2.183 3.181H2.188V4.391c0-1.197 1.001-2.2 2.195-2.2h47.173c1.223 0 2.256 1.008 2.256 2.2v2.967z"/>--}}
{{--                                    <path fill="#000"--}}
{{--                                          d="M5.928 3.003c-.418.031-.78.328-.89.732-.25.901.811 1.625 1.56 1.073.364-.27.501-.77.327-1.189-.162-.395-.572-.648-.997-.616zM9.617 3.075c-.504.209-.752.803-.542 1.308.21.504.803.752 1.308.542.507-.21.75-.802.543-1.309-.21-.503-.804-.75-1.309-.541zM13.617 3.075c-.505.21-.751.803-.543 1.308.21.505.805.751 1.31.543.506-.21.75-.804.542-1.31-.21-.503-.804-.75-1.309-.541zM9.556 54.167c-.384-.258-.911-.213-1.247.108-.29.28-.388.719-.242 1.096.321.828 1.52.843 1.859.02.179-.437.025-.964-.37-1.224z"/>--}}
{{--                                    <path fill="#FF4F4F"--}}
{{--                                          d="M20.372 46.204v-.492c1.446-.331 2.373-1.393 2.58-2.44.268-1.365-.6-2.598-2.16-3.069-.138-.042-.279-.085-.42-.13v-2.248c.241.088.38.188.394.198l-.011-.009s.803.478 1.327-.092c.567-.617-.063-1.078-.063-1.078-.31-.244-.89-.545-1.647-.68v-.368c0-.44-.417-.796-.932-.796-.515 0-.933.356-.933.796v.423l-.119.028c-1.054.272-1.841 1.04-2.055 2.004-.195.887.143 1.746.884 2.242.338.226.747.433 1.29.648v3.045c-.35-.052-.633-.166-1.064-.406-.431-.241-1.009-.138-1.29.23-.283.368-.162.86.27 1.101.79.442 1.368.616 2.084.677v.416c0 .44.418.796.933.796.515 0 .932-.356.932-.796zm.74-3.196c-.071.363-.322.745-.74.982v-2.214c.815.335.793.963.74 1.232zm-2.744-3.767c-.188-.126-.267-.399-.202-.695.042-.188.15-.4.341-.56v1.341c-.048-.028-.095-.057-.139-.086z"/>--}}
{{--                                </g>--}}
{{--                            </svg>--}}

{{--                        </div>--}}
{{--                        <a href="service.html">Managment & Marketing</a>--}}
{{--                    </div> <!-- WHAT WE DO ITEM -->--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6 col-sm-8">--}}
{{--                    <div class="what-we-do-item text-center mt-30">--}}
{{--                        <div class="icon">--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">--}}
{{--                                <g fill="none">--}}
{{--                                    <path fill="#000"--}}
{{--                                          d="M9.677 90.323L12.903 90.323 12.903 93.548 9.677 93.548zM16.129 90.323L19.355 90.323 19.355 93.548 16.129 93.548zM22.581 90.323L25.806 90.323 25.806 93.548 22.581 93.548zM77.419 90.323L90.323 90.323 90.323 93.548 77.419 93.548z"/>--}}
{{--                                    <path fill="#000"--}}
{{--                                          d="M96.774 83.871V30.645c0-4.446-3.618-8.064-8.064-8.064H83.87C83.871 10.129 73.742 0 61.291 0 48.837 0 38.71 10.129 38.71 22.58H11.29c-4.446 0-8.064 3.619-8.064 8.065v53.226H0v8.064C0 96.382 3.618 100 8.065 100h83.87c4.447 0 8.065-3.618 8.065-8.065v-8.064h-3.226zM88.71 25.806c2.667 0 4.838 2.172 4.838 4.84V83.87h-3.225V32.258c0-1.779-1.447-3.226-3.226-3.226H82.92c.31-1.045.535-2.124.693-3.226h5.097zm-45.837-9.152l17.119 7.133 5.861 17.582c-1.466.357-2.988.566-4.563.566-10.673 0-19.355-8.681-19.355-19.354 0-2.068.334-4.059.938-5.927zm26.045 23.709l-5.782-17.347 12.919-12.92c2.858 3.373 4.59 7.728 4.59 12.485 0 7.964-4.839 14.816-11.727 17.782zM61.29 3.226c4.757 0 9.111 1.732 12.486 4.589l-12.861 12.86-16.792-6.994C47.35 7.478 53.827 3.226 61.29 3.226zM6.452 30.646c0-2.668 2.17-4.84 4.838-4.84h27.678c.158 1.102.38 2.181.693 3.226H12.903c-1.779 0-3.226 1.447-3.226 3.226v51.613H6.452V30.645zm90.322 61.29c0 2.667-2.171 4.838-4.839 4.838H8.065c-2.668 0-4.84-2.171-4.84-4.839v-4.838h33.23c2.32 2.085 5.287 3.226 8.43 3.226h10.23c3.145 0 6.112-1.14 8.432-3.226H83.87V83.87H62.235l-.472.472c-1.776 1.776-4.136 2.754-6.649 2.754h-10.23c-2.511 0-4.873-.978-6.648-2.754l-.471-.472H12.903V32.258H40.92c3.633 7.616 11.385 12.903 20.37 12.903 8.985 0 16.737-5.287 20.371-12.903h5.436v54.839h9.677v4.838z"/>--}}
{{--                                    <path fill="#FF4F4F"--}}
{{--                                          d="M79.032 67.742c-.99 0-1.911.302-2.679.814l-5.627-4.219c.143-.456.242-.932.242-1.434 0-2.667-2.172-4.838-4.839-4.838-2.667 0-4.839 2.17-4.839 4.838 0 .555.113 1.08.285 1.578l-9.033 7.227c-.74-.461-1.606-.74-2.542-.74-1.085 0-2.078.372-2.886.977l-6.954-4.637c.096-.379.163-.77.163-1.179 0-2.667-2.172-4.839-4.84-4.839-2.667 0-4.838 2.172-4.838 4.839 0 .41.066.8.163 1.179l-6.955 4.637c-.808-.606-1.8-.977-2.885-.977-2.668 0-4.839 2.171-4.839 4.838 0 2.668 2.171 4.84 4.839 4.84 2.667 0 4.838-2.172 4.838-4.84 0-.41-.066-.8-.163-1.179l6.955-4.637c.808.607 1.8.978 2.886.978 1.085 0 2.077-.371 2.885-.978l6.955 4.637c-.097.38-.163.772-.163 1.18 0 2.667 2.172 4.838 4.839 4.838 2.667 0 4.839-2.171 4.839-4.839 0-.555-.113-1.08-.285-1.577l9.033-7.227c.74.461 1.606.74 2.542.74.99 0 1.911-.302 2.68-.814l5.626 4.219c-.143.456-.241.932-.241 1.434 0 2.667 2.17 4.838 4.838 4.838s4.839-2.17 4.839-4.838-2.171-4.84-4.839-4.84zm-58.064 9.677c-.889 0-1.613-.724-1.613-1.613 0-.888.724-1.612 1.613-1.612.888 0 1.613.724 1.613 1.612 0 .889-.725 1.613-1.613 1.613zm14.516-9.677c-.888 0-1.613-.725-1.613-1.613s.725-1.613 1.613-1.613 1.613.725 1.613 1.613-.725 1.613-1.613 1.613zM50 77.419c-.888 0-1.613-.724-1.613-1.613 0-.888.725-1.612 1.613-1.612s1.613.724 1.613 1.612c0 .889-.725 1.613-1.613 1.613zm16.129-12.903c-.888 0-1.613-.724-1.613-1.613 0-.888.725-1.613 1.613-1.613s1.613.725 1.613 1.613c0 .889-.725 1.613-1.613 1.613zm12.903 9.678c-.888 0-1.613-.725-1.613-1.613 0-.889.725-1.613 1.613-1.613.889 0 1.613.724 1.613 1.613 0 .888-.724 1.613-1.613 1.613z"/>--}}
{{--                                    <path fill="#000"--}}
{{--                                          d="M41.935 35.484H16.13v22.58h25.806v-22.58zM38.71 54.839H19.355v-16.13H38.71v16.13z"/>--}}
{{--                                    <path fill="#FF4F4F"--}}
{{--                                          d="M22.581 41.935L35.484 41.935 35.484 45.161 22.581 45.161zM22.581 48.387L35.484 48.387 35.484 51.613 22.581 51.613z"/>--}}
{{--                                    <path fill="#000"--}}
{{--                                          d="M45.161 51.613L48.387 51.613 48.387 54.839 45.161 54.839zM51.613 51.613L83.871 51.613 83.871 54.839 51.613 54.839z"/>--}}
{{--                                </g>--}}
{{--                            </svg>--}}

{{--                        </div>--}}
{{--                        <a href="service.html">SEO & Consultant</a>--}}
{{--                    </div> <!-- WHAT WE DO ITEM -->--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6 col-sm-8">--}}
{{--                    <div class="what-we-do-item text-center mt-30">--}}
{{--                        <div class="icon">--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">--}}
{{--                                <g fill="none">--}}
{{--                                    <path fill="#000"--}}
{{--                                          d="M33.333 0c-13.807 0-25 11.193-25 25v18.333C8.341 49.773 13.56 54.993 20 55h1.667v-3.333H20c-4.6-.006-8.328-3.734-8.333-8.334V25c0-11.966 9.7-21.667 21.666-21.667C45.3 3.333 55 13.033 55 25v18.333c-.005 4.6-3.733 8.328-8.333 8.334H45V55h1.667c6.44-.007 11.659-5.226 11.666-11.667V25c0-13.807-11.193-25-25-25zM13.735 78.548l1.218-1.918-2.815-1.787-1.218 1.92c-3.685 5.807-3.411 13.284.688 18.805V100h3.334v-5c0-.379-.129-.746-.365-1.042-3.544-4.43-3.882-10.62-.842-15.41z"/>--}}
{{--                                    <path fill="#FF4F4F"--}}
{{--                                          d="M91.667 0H70c-4.6.005-8.328 3.733-8.333 8.333V25c.005 4.6 3.733 8.328 8.333 8.333h3.333V40c0 .674.406 1.282 1.029 1.54.202.084.419.127.638.127.442 0 .866-.176 1.178-.489l7.845-7.845h7.644c4.6-.005 8.328-3.733 8.333-8.333V8.333C99.995 3.733 96.267.005 91.667 0zm5 25c0 2.761-2.239 5-5 5h-8.334c-.442 0-.865.176-1.178.488l-5.488 5.489v-4.31c0-.92-.747-1.667-1.667-1.667h-5c-2.761 0-5-2.239-5-5V8.333c0-2.761 2.239-5 5-5h21.667c2.761 0 5 2.239 5 5V25z"/>--}}
{{--                                    <path fill="#000"--}}
{{--                                          d="M70 8.333H81.667V11.666H70zM85 8.333H91.667V11.666H85zM70 15H91.667V18.333H70zM70 21.667H81.667V25H70zM55.747 76.763l-1.219-1.92-2.815 1.787 1.219 1.92c3.04 4.789 2.702 10.98-.842 15.408-.236.296-.365.663-.365 1.042v5h3.333v-4.432c4.1-5.521 4.373-12.998.689-18.805z"/>--}}
{{--                                    <path fill="#000"--}}
{{--                                          d="M98.333 56.667h-15c-6.253.007-11.388 4.943-11.643 11.191l-5.023 9.044V70C66.659 63.56 61.44 58.34 55 58.333h-6.092l-.045-.035-.03.035H45c-1.841 0-3.333-1.492-3.333-3.333v-3.922c5.15-2.973 8.325-8.465 8.333-14.411V23.333c-.002-2.761-.69-5.479-2-7.91-.42-.773-1.369-1.087-2.167-.716L17.623 27.98c-.584.275-.957.863-.956 1.508v7.179c.008 5.946 3.183 11.438 8.333 14.411V55c0 1.841-1.492 3.333-3.333 3.333h-10C5.227 58.341.007 63.56 0 70v30h3.333V70c.006-4.6 3.734-8.328 8.334-8.333h5.303l15.008 20.97c.309.43.804.69 1.334.696h.021c.525 0 1.019-.247 1.334-.666l15.833-21H55c4.6.005 8.328 3.733 8.333 8.333v13.333c.001.92.748 1.666 1.668 1.666.605-.001 1.162-.329 1.456-.857L74.313 70h9.555l-16.25 30h3.792l16.257-30h.666c6.44-.007 11.66-5.226 11.667-11.667 0-.92-.746-1.666-1.667-1.666zM20 36.667v-6.12l25.735-12.11c.616 1.559.932 3.22.932 4.896v13.334C46.667 44.03 40.697 50 33.333 50 25.97 50 20 44.03 20 36.667zm13.368 42.186l-5.143-7.186h10.56l-5.417 7.186zm7.939-10.52H25.833l-4.771-6.666h.605c3.682 0 6.666-2.985 6.666-6.667v-2.435c3.255 1.024 6.746 1.024 10 0V55c0 3.682 2.985 6.667 6.667 6.667h1.333l-5.026 6.666zm47.026-1.666H75.167c.797-3.878 4.208-6.663 8.166-6.667H96.5c-.797 3.878-4.208 6.662-8.167 6.667z"/>--}}
{{--                                </g>--}}
{{--                            </svg>--}}

{{--                        </div>--}}
{{--                        <a href="service.html">Support & Communications</a>--}}
{{--                    </div> <!-- WHAT WE DO ITEM -->--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6 col-sm-8">--}}
{{--                    <div class="what-we-do-item text-center mt-30">--}}
{{--                        <div class="icon">--}}
{{--                            <svg width="100px" height="100px" viewBox="0 0 100 100" version="1.1"--}}
{{--                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">--}}
{{--                                <!-- Generator: Sketch 64 (93537) - https://sketch.com -->--}}
{{--                                <title>contract</title>--}}
{{--                                <desc>Created with Sketch.</desc>--}}
{{--                                <g id="Design" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
{{--                                    <g id="01_Saas-Startup_Home" transform="translate(-1296.000000, -5186.000000)"--}}
{{--                                       fill-rule="nonzero">--}}
{{--                                        <g id="What-we-do" transform="translate(0.000000, 4406.000000)">--}}
{{--                                            <g id="Business-&amp;-Finance"--}}
{{--                                               transform="translate(1211.500000, 720.000000)">--}}
{{--                                                <g id="contract" transform="translate(84.500000, 60.000000)">--}}
{{--                                                    <path--}}
{{--                                                        d="M97.4201172,31.4701172 C93.9933594,28.0431641 88.4173828,28.0433594 84.9894531,31.4708984 C83.9351562,32.5261719 77.2037109,39.2630859 76.1753906,40.2923828 L76.1753906,17.0753906 C76.1753906,14.7277344 75.2611328,12.5207031 73.6009766,10.8607422 L65.3148437,2.57421875 C63.6548828,0.9140625 61.4476563,0 59.1,0 L8.79257812,0 C3.94628906,0 0.003515625,3.94277344 0.003515625,8.7890625 L0.003515625,91.2109375 C0.003515625,96.0572266 3.94628906,100 8.79257812,100 L67.3863281,100 C72.2326172,100 76.1753906,96.0572266 76.1753906,91.2109375 L76.1753906,65.1623047 L97.4199219,43.8998047 C100.854883,40.4650391 100.855664,34.9052734 97.4201172,31.4701172 Z M57.4574709,2.72107475 C58.2131223,2.72107475 59.6692312,2.59017144 60.9717567,3.89227282 L72.2841309,15.2035454 C73.5533267,16.4728543 73.4557372,18.8637354 73.4557372,19.7174062 L57.4574709,19.7174062 L57.4574709,2.72107475 Z M72.0894531,92.9800885 C72.0894531,94.6452677 70.7030774,96 68.998544,96 L7.18036222,96 C5.47603494,96 4.08945313,94.6452677 4.08945313,92.9800885 L4.08945313,8.0199115 C4.08945313,6.3547323 5.47603494,4 7.18036222,4 L53.5439986,4 L53.5439986,20.0995575 C53.5439986,21.767354 54.9279016,23.119469 56.6349077,23.119469 L72.0894531,23.119469 L72.0894531,46.5384801 C72.0894531,46.5384801 62.9704471,55.4556748 62.9700349,55.4558761 L58.6009319,59.724823 C58.2617562,60.056208 58.0058289,60.4604735 57.8541683,60.9052058 L53.4827986,73.7176836 C53.1125077,74.8028385 53.4016107,75.9993274 54.2295622,76.8080597 C55.058544,77.618 56.2835743,77.8990531 57.3925925,77.5376704 L70.5062895,73.2669115 C70.9614774,73.1187345 71.3752471,72.8688872 71.7144228,72.5373009 L72.0894531,72.170885 L72.0894531,92.9800885 Z M64.5609438,59 L72,66.4390562 L69.1584089,69.2806473 L58,73 L61.7193527,61.8412404 L64.5609438,59 Z M72.4206956,62.0820932 L67.1887364,57.8066336 C69.721431,55.2492625 80.9698704,43.8905457 83.3554763,41.4815787 L88.5874355,45.7570383 L72.4206956,62.0820932 Z M94.0525833,40.0010738 L90.2882932,43.7683228 L85.1242314,38.6045432 L88.8897388,34.8360771 C90.3143411,33.4122829 92.6304154,33.4125263 94.054044,34.8360771 C95.4774291,36.2601148 95.4849757,38.5685163 94.0525833,40.0010738 Z"--}}
{{--                                                        id="Shape" fill="#000000"></path>--}}
{{--                                                    <path--}}
{{--                                                        d="M55.6675781,29.296875 L14.6519531,29.296875 C13.0339844,29.296875 11.7222656,30.6085938 11.7222656,32.2265625 C11.7222656,33.8445312 13.0339844,35.15625 14.6519531,35.15625 L55.6675781,35.15625 C57.2855469,35.15625 58.5972656,33.8445312 58.5972656,32.2265625 C58.5972656,30.6085938 57.2855469,29.296875 55.6675781,29.296875 Z"--}}
{{--                                                        id="Path" fill="#FF4F4F"></path>--}}
{{--                                                    <path--}}
{{--                                                        d="M43.9488281,41.015625 L14.6519531,41.015625 C13.0339844,41.015625 11.7222656,42.3273438 11.7222656,43.9453125 C11.7222656,45.5632812 13.0339844,46.875 14.6519531,46.875 L43.9488281,46.875 C45.5667969,46.875 46.8785156,45.5632812 46.8785156,43.9453125 C46.8785156,42.3273438 45.5667969,41.015625 43.9488281,41.015625 Z"--}}
{{--                                                        id="Path" fill="#FF4F4F"></path>--}}
{{--                                                    <path--}}
{{--                                                        d="M43.9488281,52.734375 L14.6519531,52.734375 C13.0339844,52.734375 11.7222656,54.0460938 11.7222656,55.6640625 C11.7222656,57.2820312 13.0339844,58.59375 14.6519531,58.59375 L43.9488281,58.59375 C45.5667969,58.59375 46.8785156,57.2820312 46.8785156,55.6640625 C46.8785156,54.0460938 45.5667969,52.734375 43.9488281,52.734375 Z"--}}
{{--                                                        id="Path" fill="#FF4F4F"></path>--}}
{{--                                                    <path--}}
{{--                                                        d="M43.9488281,64.453125 L14.6519531,64.453125 C13.0339844,64.453125 11.7222656,65.7648437 11.7222656,67.3828125 C11.7222656,69.0007813 13.0339844,70.3125 14.6519531,70.3125 L43.9488281,70.3125 C45.5667969,70.3125 46.8785156,69.0007813 46.8785156,67.3828125 C46.8785156,65.7648437 45.5667969,64.453125 43.9488281,64.453125 Z"--}}
{{--                                                        id="Path" fill="#FF4F4F"></path>--}}
{{--                                                    <path--}}
{{--                                                        d="M55.6675781,82.421875 L38.0894531,82.421875 C36.4714844,82.421875 35.1597656,83.7335937 35.1597656,85.3515625 C35.1597656,86.9695313 36.4714844,88.28125 38.0894531,88.28125 L55.6675781,88.28125 C57.2855469,88.28125 58.5972656,86.9695313 58.5972656,85.3515625 C58.5972656,83.7335937 57.2855469,82.421875 55.6675781,82.421875 Z"--}}
{{--                                                        id="Path" fill="#000000"></path>--}}
{{--                                                </g>--}}
{{--                                            </g>--}}
{{--                                        </g>--}}
{{--                                    </g>--}}
{{--                                </g>--}}
{{--                            </svg>--}}

{{--                        </div>--}}
{{--                        <a href="service.html">Business & Finance</a>--}}
{{--                    </div> <!-- WHAT WE DO ITEM -->--}}
{{--                </div>--}}
{{--            </div> <!-- row -->--}}
{{--        </div>--}}
{{--        <div class="what-we-do-bg">--}}
{{--            <div class="what-we-do-overlay-1">--}}
{{--                <img src="{{url('')}}/assets/images/what-we-do-overlay-1.svg" alt="">--}}
{{--            </div>--}}
{{--            <div class="what-we-do-overlay-2">--}}
{{--                <img src="{{url('')}}/assets/images/what-we-do-overlay-2.svg" alt="">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

    <!--====== WHAT WE DO PART ENDS ======-->

    <!--====== TESTIMONIAL PART START ======-->

{{--    <section class="testimonial-area">--}}
{{--        <div class="container">--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-lg-6 col-md-8">--}}
{{--                    <div class="section-title text-center">--}}
{{--                        <span>Testimonial</span>--}}
{{--                        <h3 class="title"><span>Check What’s Our</span> Client Say <span>About Us!</span></h3>--}}
{{--                    </div> <!-- SECTION TITLE -->--}}
{{--                </div>--}}
{{--            </div> <!-- row -->--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-lg-4 col-md-6 col-sm-9">--}}
{{--                    <div class="testimonial-item mt-30">--}}
{{--                        <img src="{{url('')}}/assets/images/testimonial-1.jpg" alt="">--}}
{{--                        <h3 class="title">Adam Smith</h3>--}}
{{--                        <span>Wp Developer</span>--}}
{{--                        <p>The beauty of astronomy is that anybody can do it. tiniest baby to the most advanced there is--}}
{{--                            some for anyone who to the most at in same things of joy wants to enjoy astronomy. </p>--}}
{{--                        <div class="icon">--}}
{{--                            <img src="{{url('')}}/assets/images/shape.svg" alt="">--}}
{{--                        </div>--}}
{{--                    </div> <!-- testimonial item -->--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6 col-sm-9">--}}
{{--                    <div class="testimonial-item item-2 mt-30">--}}
{{--                        <img src="{{url('')}}/assets/images/testimonial-2.jpg" alt="">--}}
{{--                        <h3 class="title">Jonathan Ven</h3>--}}
{{--                        <span>Ui/Ux Designer</span>--}}
{{--                        <p>The beauty of astronomy is that anybody can do it. tiniest baby to the most advanced there is--}}
{{--                            some for anyone who to the most at in same things of joy wants to enjoy astronomy. </p>--}}
{{--                        <div class="icon">--}}
{{--                            <img src="{{url('')}}/assets/images/shape.svg" alt="">--}}
{{--                        </div>--}}
{{--                    </div> <!-- testimonial item -->--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6 col-sm-9">--}}
{{--                    <div class="testimonial-item item-3 mt-30">--}}
{{--                        <img src="{{url('')}}/assets/images/testimonial-3.jpg" alt="">--}}
{{--                        <h3 class="title">Desel Mulate</h3>--}}
{{--                        <span>Digital Marketer</span>--}}
{{--                        <p>The beauty of astronomy is that anybody can do it. tiniest baby to the most advanced there is--}}
{{--                            some for anyone who to the most at in same things of joy wants to enjoy astronomy. </p>--}}
{{--                        <div class="icon">--}}
{{--                            <img src="{{url('')}}/assets/images/shape.svg" alt="">--}}
{{--                        </div>--}}
{{--                    </div> <!-- testimonial item -->--}}
{{--                </div>--}}
{{--            </div> <!-- row -->--}}
{{--        </div>--}}
{{--    </section>--}}

    <!--====== TESTIMONIAL PART ENDS ======-->

    <!--====== FUN FACTS PART START ======-->

    <section class="fun-facts-area">
        <div class="container">
            <div class="fun-facts-line">
                <img src="{{url('')}}/assets/images/fun-facts-line.png" alt="">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="fun-facts-item text-center mt-50 animated wow fadeInUp" data-wow-duration="1500ms"
                             data-wow-delay="0ms">
                            <div class="icon">
                                <img src="{{url('')}}/assets/images/fun-facts-1.svg" alt="">
                            </div>
                            <h4 class="title"><span class="counter">75</span>K</h4>
                            <span>Overall Copy Rights</span>
                        </div> <!-- fun facts item -->
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="fun-facts-item text-center mt-50 animated wow fadeInUp" data-wow-duration="1500ms"
                             data-wow-delay="100ms">
                            <div class="icon">
                                <img src="assets/images/fun-facts-2.svg" alt="">
                            </div>
                            <h4 class="title"><span class="counter">62</span>K</h4>
                            <span>Happy Customer</span>
                        </div> <!-- fun facts item -->
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="fun-facts-item text-center mt-50 animated wow fadeInUp" data-wow-duration="1500ms"
                             data-wow-delay="200ms">
                            <div class="icon">
                                <img src="{{url('')}}/assets/images/fun-facts-3.svg" alt="">
                            </div>
                            <h4 class="title"><span class="counter">10</span>K</h4>
                            <span>Support Our team</span>
                        </div> <!-- fun facts item -->
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="fun-facts-item text-center mt-50 animated wow fadeInUp" data-wow-duration="1500ms"
                             data-wow-delay="300ms">
                            <div class="icon">
                                <img src="{{url('')}}/assets/images/fun-facts-4.svg" alt="">
                            </div>
                            <h4 class="title"><span class="counter">238</span></h4>
                            <span>Repert Customer</span>
                        </div> <!-- fun facts item -->
                    </div>
                </div> <!-- row -->
            </div>
        </div>
        <div class="fun-facts-shaps">
            <div class="fun-facts-shape-1">
                <img src="{{url('')}}/assets/images/what-we-do-overlay-2.svg" alt="">
            </div>
            <div class="fun-facts-shape-2">
                <img src="{{url('')}}/assets/images/what-we-do-overlay-3.svg" alt="">
            </div>
        </div>
    </section>

    <!--====== FUN FACTS PART ENDS ======-->

    <!--====== PRICING PART START ======-->

    <section class="pricing-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-9">
                    <div class="section-title text-center">
                        <span>Pricing</span>
                        <h3 class="title"><span>Check What’s Our</span> Pricing <span>We Offer!</span></h3>
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
                        <div class="col-lg-4 col-md-6 col-sm-9 order-1 order-lg-1">
{{--                            <div class="pricing-item text-center mt-80">--}}
{{--                                <h3 class="title">Basic Plan</h3>--}}
{{--                                <h1>$10.0</h1>--}}
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
                        <div class="col-lg-4 col-md-6 col-sm-9 order-3 order-lg-2">
                            <div class="pricing-item text-center mt-30 center">
                                <b>Recommended</b>
                                <h3 class="title">Gold Plan</h3>
                                <h1>£36.99 (ex. VAT)</h1>
                                <span>Billed Yearly</span>
                                <ul>
                                    <li>A £1 (ex. VAT) certificate token is required for each piece of work you register with us.</li>
                                    <li>Max 5 files per certificate.</li>
                                    <li>Register today and receive 5 free certificate tokens</li>
                                    <li>14 day money back guarantee</li>
                                    <li>Support 24/7</li>
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

    <!--====== PRICING PART ENDS ======-->

    <!--====== BRAND PART START ======-->

    <!--====== BRAND PART ENDS ======-->

    <!--====== FAQ PART START ======-->


@endsection
<!--====== FAQ PART ENDS ======-->
