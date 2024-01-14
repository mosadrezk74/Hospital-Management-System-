@extends('layout_Web')
@section('contact')

        <!-- Main Slider -->
        <section class="main-slider">
            <div class="banner-carousel">
                <!-- Swiper -->
                <div class="swiper-wrapper">

                    <div class="swiper-slide slide" style="background-image:url(images/main-slider/1.jpg)">
                        <div class="auto-container">
                            <div class="content clearfix">
                                <div class="title">{{trans('index.welcome')}}</div>
                                <h2>{{trans('index.s2')}}</h2>
                                <div class="text">{{trans('index.s1')}}</div>
                                <div class="btn-box clearfix">
                                    <a href="contact.html" class="theme-btn btn-style-two"><span class="txt">{{trans('index.our')}}</span></a>
                                    <a href="tel:+01554375926" class="theme-btn phone-btn"><span class="icon flaticon-call"></span>+01554375926</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide slide" style="background-image:url(images/main-slider/2.jpg)">
                        <div class="auto-container">
                            <div class="content">
                                <div class="title" style="color: white">{{trans('index.welcome')}}</div>
                                <h2>{{trans('index.s2')}}</h2>
                                <div class="text" style="color: white" > {{trans('index.s1')}}</div>
                                <div class="btn-box">
                                    <a href="{{route('web.contact')}}" class="theme-btn btn-style-two"><span class="txt">{{trans('index.our')}}</span></a>
                                    <a href="tel:+01554375926" class="theme-btn phone-btn"><span class="icon flaticon-call"></span>+01554375926</a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>
        <!-- End Main Slider -->

        <!-- Department Section -->
        <section class="department-section">
            <div class="auto-container">

                <!-- Sec Title -->
                <div class="sec-title centered">
                    <h2>Health Department</h2>
                    <div class="separator"></div>
                </div>

                @if (App::getLocale() == 'en')

                <div class="services-carousel owl-carousel owl-theme">


                    @foreach($sections as $section)

                    <!-- Department Block -->
                    <div class="department-block">
                        <div class="inner-box">
                            <div class="upper-box">
                                <div class="icon flaticon-kidneys"></div>
                                <h3><a href="#">{{$section->name_en}}</a></h3>
                            </div>
                            <div class="text">{{$section->description}}</div>
                            <div class="read-outer">
                                <a href="#" class="read-more">{{trans('index.read')}} <span class="icon fas fa-angle-double-right"></span></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif
                @if (App::getLocale() == 'ar')

                    <div class="services-carousel owl-carousel owl-theme">


                        @foreach($sections as $section)

                            <!-- Department Block -->
                            <div class="department-block">
                                <div class="inner-box">
                                    <div class="upper-box">
                                        <div class="icon flaticon-kidneys"></div>
                                        <h3><a href="#">{{$section->name}}</a></h3>
                                    </div>
                                    <div class="text">{{$section->description}}</div>
                                    <div class="read-outer">
                                        <a href="#" class="read-more">{{trans('index.read')}}<span class="icon fas fa-angle-double-right"></span></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif


            </div>
        </section>
        <!-- End Department Section -->

        <!-- Fluid Section One -->
        <section class="fluid-section-one">
            <div class="outer-section clearfix">

                <!--Image Column-->
                <div class="image-column" style="background-image: url(images/resource/image-1.jpg) ; height:660 ; width: 960">
                    <div class="image">
                        <img src="images/resource/image-1.jpg" alt="">
                    </div>
                </div>
                <!--End Image Column-->

                <!--Content Column-->
                <div class="content-column">
                    <div class="content-box">
                        <div class="sec-title">
                            <h2>{{trans('index.s3')}}</h2>
                            <div class="separator style-two"></div>
                        </div>
                        <div class="text">
                            <p>{{trans('index.s4')}}</p>
                         </div>
                        <div class="row clearfix">
                            <div class="column col-lg-6 col-md-6 col-sm-12">
                                <ul class="list-style-one">
                                    <li><span class="icon flaticon-medical-stethoscope-variant"></span>{{trans('index.M1')}}</li>
                                    <li><span class="icon flaticon-doctor"></span>{{trans('index.M2')}}</li>
                                </ul>
                            </div>
                            <div class="column col-lg-6 col-md-6 col-sm-12">
                                <ul class="list-style-one">
                                    <li><span class="icon flaticon-ambulance-side-view"></span>{{trans('index.M3')}}</li>
                                    <li><span class="icon flaticon-medical-kit"></span>{{trans('index.M4')}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section class="services-section">
            <div class="auto-container">

                <!-- Sec Title -->
                <div class="sec-title centered">
                    <h2>{{trans('index.best')}}</h2>
                    <div class="separator"></div>
                </div>

                <div class="row clearfix">

                    <!-- Left Column -->
                    <div class="left-column pull-left col-lg-4 col-md-12 col-sm-12">
                        <div class="inner-column">

                            <!-- Service Block -->
                            <div class="service-block">
                                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="icon-box">
                                        <span class="icon flaticon-doctor-stethoscope"></span>
                                    </div>
                                    <h3><a href="doctors-detail.html">{{trans('index.outdoor')}}</a></h3>
                                    <div class="text">{{trans('index.SS11')}}<br> {{trans('index.br1')}}</div>
                                </div>
                            </div>

                            <!-- Service Block -->
                            <div class="service-block">
                                <div class="inner-box wow fadeInLeft" data-wow-delay="250ms" data-wow-duration="1500ms">
                                    <div class="icon-box">
                                        <span class="icon flaticon-operating-room"></span>
                                    </div>
                                    <h3><a href="doctors-detail.html">Operation Theater</a></h3>
                                    <div class="text">We provide best service for our cline. Now place take it.</div>
                                </div>
                            </div>

                            <!-- Service Block -->
                            <div class="service-block">
                                <div class="inner-box wow fadeInLeft" data-wow-delay="500ms" data-wow-duration="1500ms">
                                    <div class="icon-box">
                                        <span class="icon flaticon-van"></span>
                                    </div>
                                    <h3><a href="doctors-detail.html">Emergency Care</a></h3>
                                    <div class="text">We provide best service for our cline. <br> Now place take it.</div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Circles Column -->
                    <div class="circles-column col-lg-4 col-md-12 col-sm-12">
                        <div class="inner-column">

                            <div class="circles">
                                <div class="circle-one"></div>
                                <div class="circle-two"></div>
                                <div class="circle-three"></div>
                            </div>

                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="right-column pull-right col-lg-4 col-md-12 col-sm-12">
                        <div class="inner-column">

                            <!-- Service Block -->
                            <div class="service-block-two">
                                <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="icon-box">
                                        <span class="icon flaticon-water"></span>
                                    </div>
                                    <h3><a href="doctors-detail.html">Blood Test</a></h3>
                                    <div class="text">We provide best service for our cline. <br> Now place take it.</div>
                                </div>
                            </div>

                            <!-- Service Block -->
                            <div class="service-block-two">
                                <div class="inner-box wow fadeInRight" data-wow-delay="250ms" data-wow-duration="1500ms">
                                    <div class="icon-box">
                                        <span class="icon flaticon-pharmacy"></span>
                                    </div>
                                    <h3><a href="doctors-detail.html">Pharmacy Support</a></h3>
                                    <div class="text">We provide best service for our cline. Now place take it.</div>
                                </div>
                            </div>

                            <!-- Service Block -->
                            <div class="service-block-two">
                                <div class="inner-box wow fadeInRight" data-wow-delay="500ms" data-wow-duration="1500ms">
                                    <div class="icon-box">
                                        <span class="icon flaticon-nurse"></span>
                                    </div>
                                    <h3><a href="doctors-detail.html">24/7 Service</a></h3>
                                    <div class="text">We provide best service for our cline. <br> Now place take it.</div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </section>

        <!-- Counter Section -->
        <section class="counter-section" style="background-image: url(images/background/pattern-3.png)">
            <div class="auto-container">

                <!-- Fact Counter -->
                <div class="fact-counter">
                    <div class="row clearfix">

                        <!--Column-->
                        <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                            <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="2500" data-stop="2350">0</span>
                                    </div>
                                    <h4 class="counter-title">Satisfied Patients</h4>
                                </div>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                            <div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="count-outer count-box alternate">
                                        +<span class="count-text" data-speed="3000" data-stop="350">0</span>
                                    </div>
                                    <h4 class="counter-title">Doctor’s Team</h4>
                                </div>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                            <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="2150">0</span>
                                    </div>
                                    <h4 class="counter-title">Success Mission</h4>
                                </div>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                            <div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="count-outer count-box">
                                        +<span class="count-text" data-speed="2500" data-stop="225">0</span>
                                    </div>
                                    <h4 class="counter-title">Successfull Surgeries</h4>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>
        <!-- End Counter Section -->

        <!-- Team Section -->
        <section class="team-section">
            <div class="auto-container">

                <!-- Sec Title -->
                <div class="sec-title centered">
                    <h2>The Medical Specialists</h2>
                    <div class="separator"></div>
                </div>

                <div class="row clearfix">

                    <!-- Team Block -->
                    <div class="team-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <img src="images/resource/team-1.jpg" alt="" />
                                <div class="overlay-box">
                                    <ul class="social-icons">
                                        <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                        <li><a href="#"><span class="fab fa-google"></span></a></li>
                                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fab fa-skype"></span></a></li>
                                        <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                    </ul>
                                    <a href="#" class="appointment">Make Appointment</a>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h3><a href="#">Dr. Andria Jonea</a></h3>
                                <div class="designation">Cancer Specialist</div>
                            </div>
                        </div>
                    </div>

                    <!-- Team Block -->
                    <div class="team-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-delay="250ms" data-wow-duration="1500ms">
                            <div class="image">
                                <img src="images/resource/team-2.jpg" alt="" />
                                <div class="overlay-box">
                                    <ul class="social-icons">
                                        <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                        <li><a href="#"><span class="fab fa-google"></span></a></li>
                                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fab fa-skype"></span></a></li>
                                        <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                    </ul>
                                    <a href="#" class="appointment">Make Appointment</a>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h3><a href="#">Dr. Robet Samith</a></h3>
                                <div class="designation">Heart Surgen</div>
                            </div>
                        </div>
                    </div>

                    <!-- Team Block -->
                    <div class="team-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">
                            <div class="image">
                                <img src="images/resource/team-3.jpg" alt="" />
                                <div class="overlay-box">
                                    <ul class="social-icons">
                                        <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                        <li><a href="#"><span class="fab fa-google"></span></a></li>
                                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fab fa-skype"></span></a></li>
                                        <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                    </ul>
                                    <a href="#" class="appointment">Make Appointment</a>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h3><a href="#">Dr. Sharon Laura</a></h3>
                                <div class="designation">Family Physician</div>
                            </div>
                        </div>
                    </div>

                    <!-- Team Block -->
                    <div class="team-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-delay="750ms" data-wow-duration="1500ms">
                            <div class="image">
                                <img src="images/resource/team-4.jpg" alt="" />
                                <div class="overlay-box">
                                    <ul class="social-icons">
                                        <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                        <li><a href="#"><span class="fab fa-google"></span></a></li>
                                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fab fa-skype"></span></a></li>
                                        <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                    </ul>
                                    <a href="#" class="appointment">Make Appointment</a>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h3><a href="#">Dr. Alex Furgosen</a></h3>
                                <div class="designation">Ortho Specialist</div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Team Section -->

        <!-- FullWidth Section -->
        <section class="fullwidth-section">
            <div class="outer-container">
                <div class="clearfix">

                    <!-- Left Column -->
                    <div class="left-column" style="background-image: url(images/background/1.jpg)">
                        <div class="inner-column clearfix">
                            <div class="content">
                                <div class="icon-box">
                                    <span class="icon flaticon-contract-1"></span>
                                </div>
                                <div class="title">Need a Doctor for Check-up?</div>
                                <h2>JUST MAKE AN APPOINTMENT</h2>
                                <a href="contact.html" class="theme-btn btn-style-two"><span class="txt">Get an Appointment</span></a>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="right-column">
                        <div class="inner-column">

                            <!-- Upper Box -->
                            <div class="upper-box">
                                <div class="icon flaticon-alarm-clock"></div>
                                <h3>Opening Hours</h3>
                            </div>
                            <ul class="time-list">
                                <li class="clearfix"><span class="left-span pull-left">Monday - Friday</span><span class="right-span pull-right">08:00am - 10:00pm</span></li>
                                <li class="clearfix"><span class="left-span pull-left">Saturday - Sunday</span><span class="right-span pull-right">09:00am - 06:00pm</span></li>
                                <li class="clearfix"><span class="left-span pull-left">Emergency Services</span><span class="right-span pull-right">24 hours Open</span></li>
                            </ul>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End FullWidth Section -->

        <!-- Testimonial Section -->
        <section class="testimonial-section">
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title centered">
                    <h2>What Patients Saying</h2>
                    <div class="separator"></div>
                </div>
                <div class="testimonial-outer" style="background-image: url(images/background/pattern-4.png)">

                    <!--Client Testimonial Carousel-->
                    <div class="client-testimonial-carousel owl-carousel owl-theme">

                        <!--Testimonial Block -->
                        <div class="testimonial-block">
                            <div class="inner-box">
                                <div class="quote-icon flaticon-quote"></div>
                                <div class="text">Medical Centre is a great place to get all of your medical needs. I came in for a check up and did not wait more than 5 minutes before I was seen. I can only imagine the type of service you get for more serious issues. Thanks!</div>
                            </div>
                        </div>

                        <!--Testimonial Block -->
                        <div class="testimonial-block">
                            <div class="inner-box">
                                <div class="quote-icon flaticon-quote"></div>
                                <div class="text">Medical Centre is a great place to get all of your medical needs. I came in for a check up and did not wait more than 5 minutes before I was seen. I can only imagine the type of service you get for more serious issues. Thanks!</div>
                            </div>
                        </div>

                        <!--Testimonial Block -->
                        <div class="testimonial-block">
                            <div class="inner-box">
                                <div class="quote-icon flaticon-quote"></div>
                                <div class="text">Medical Centre is a great place to get all of your medical needs. I came in for a check up and did not wait more than 5 minutes before I was seen. I can only imagine the type of service you get for more serious issues. Thanks!</div>
                            </div>
                        </div>

                        <!--Testimonial Block -->
                        <div class="testimonial-block">
                            <div class="inner-box">
                                <div class="quote-icon flaticon-quote"></div>
                                <div class="text">Medical Centre is a great place to get all of your medical needs. I came in for a check up and did not wait more than 5 minutes before I was seen. I can only imagine the type of service you get for more serious issues. Thanks!</div>
                            </div>
                        </div>

                        <!--Testimonial Block -->
                        <div class="testimonial-block">
                            <div class="inner-box">
                                <div class="quote-icon flaticon-quote"></div>
                                <div class="text">Medical Centre is a great place to get all of your medical needs. I came in for a check up and did not wait more than 5 minutes before I was seen. I can only imagine the type of service you get for more serious issues. Thanks!</div>
                            </div>
                        </div>

                        <!--Testimonial Block -->
                        <div class="testimonial-block">
                            <div class="inner-box">
                                <div class="quote-icon flaticon-quote"></div>
                                <div class="text">Medical Centre is a great place to get all of your medical needs. I came in for a check up and did not wait more than 5 minutes before I was seen. I can only imagine the type of service you get for more serious issues. Thanks!</div>
                            </div>
                        </div>

                    </div>

                    <!--Product Thumbs Carousel-->
                    <div class="client-thumb-outer">
                        <div class="client-thumbs-carousel owl-carousel owl-theme">
                            <div class="thumb-item">
                                <figure class="thumb-box"><img src="images/resource/author-1.jpg" alt=""></figure>
                                <div class="author-info">
                                    <div class="author-name">Max Winchester</div>
                                    <div class="designation">Kidny Patient</div>
                                </div>
                            </div>
                            <div class="thumb-item">
                                <figure class="thumb-box"><img src="images/resource/author-2.jpg" alt=""></figure>
                                <div class="author-info">
                                    <div class="author-name">Max Winchester</div>
                                    <div class="designation">Kidny Patient</div>
                                </div>
                            </div>
                            <div class="thumb-item">
                                <figure class="thumb-box"><img src="images/resource/author-3.jpg" alt=""></figure>
                                <div class="author-info">
                                    <div class="author-name">Max Winchester</div>
                                    <div class="designation">Kidny Patient</div>
                                </div>
                            </div>
                            <div class="thumb-item">
                                <figure class="thumb-box"><img src="images/resource/author-1.jpg" alt=""></figure>
                                <div class="author-info">
                                    <div class="author-name">Max Winchester</div>
                                    <div class="designation">Kidny Patient</div>
                                </div>
                            </div>
                            <div class="thumb-item">
                                <figure class="thumb-box"><img src="images/resource/author-2.jpg" alt=""></figure>
                                <div class="author-info">
                                    <div class="author-name">Max Winchester</div>
                                    <div class="designation">Kidny Patient</div>
                                </div>
                            </div>
                            <div class="thumb-item">
                                <figure class="thumb-box"><img src="images/resource/author-3.jpg" alt=""></figure>
                                <div class="author-info">
                                    <div class="author-name">Max Winchester</div>
                                    <div class="designation">Kidny Patient</div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!-- End Testimonial Section Two -->

        <!-- News Section -->
        <section class="news-section">
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title centered">
                    <h2>Latest News & Articals</h2>
                    <div class="separator style-three"></div>
                </div>
                <div class="row clearfix">

                    <!-- News Block -->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <div class="category">Artical</div>
                                <a href="blog-detail.html"><img src="images/resource/news-1.jpg" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <ul class="post-meta">
                                    <li><a href="#">03 Comments</a></li>
                                    <li><a href="#">June 21, 2018 at 8:12pm</a></li>
                                    <li><a href="#">12 Liks</a></li>
                                </ul>
                                <h3><a href="blog-detail.html">Diagnostic Services for Efficient Results Picking Right </a></h3>
                                <div class="text">There are a lot of women that are unaware of the numerous risks associated with their health and eventually ignore the ...</div>
                                <a href="blog-detail.html" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- News Block -->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="image">
                                <div class="category">Artical</div>
                                <a href="blog-detail.html"><img src="images/resource/news-2.jpg" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <ul class="post-meta">
                                    <li><a href="#">03 Comments</a></li>
                                    <li><a href="#">June 21, 2018 at 8:12pm</a></li>
                                    <li><a href="#">12 Liks</a></li>
                                </ul>
                                <h3><a href="blog-detail.html">Reasons to Visit for Heart Specialist Us</a></h3>
                                <div class="text">There are a lot of women that are unaware of the numerous risks associated with their health and eventually ignore the ...</div>
                                <a href="blog-detail.html" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- News Block -->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="image">
                                <div class="category">Artical</div>
                                <a href="blog-detail.html"><img src="images/resource/news-3.jpg" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <ul class="post-meta">
                                    <li><a href="#">03 Comments</a></li>
                                    <li><a href="#">June 21, 2018 at 8:12pm</a></li>
                                    <li><a href="#">12 Liks</a></li>
                                </ul>
                                <h3><a href="blog-detail.html">Preparing for an ECG Tips From Our Diagnosticians</a></h3>
                                <div class="text">There are a lot of women that are unaware of the numerous risks associated with their health and eventually ignore the ...</div>
                                <a href="blog-detail.html" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End News Section -->

        <!-- Newsletter Section -->
        <section class="newsletter-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <!-- Title Column -->
                    <div class="title-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <h2>Subscribe Our Newsletter</h2>
                            <div class="text">To receive email releases, simply provide us with your email address below.</div>
                        </div>
                    </div>
                    <!-- Form Column -->
                    <div class="form-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <!-- Subscribe Form -->
                            <div class="subscribe-form">
                                <form method="post" action="contact.html">
                                    <div class="form-group">
                                        <input type="email" name="email" value="" placeholder="Your Email Address" required>
                                        <button type="submit" class="theme-btn btn-style-two"><span class="txt">subscribe</span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Newsletter Section -->

        <!--Main Footer-->
        <footer class="main-footer" style="background-image: url(images/background/2.jpg)">
            <div class="auto-container">
                <!--Widgets Section-->
                <div class="widgets-section">
                    <div class="row clearfix">

                        <!--big column-->
                        <div class="big-column col-lg-6 col-md-12 col-sm-12">
                            <div class="row clearfix">

                                <!--Footer Column-->
                                <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                                    <div class="footer-widget logo-widget">
                                        <div class="logo">
                                            <a href="index.html"><img src="images/footer-logo.png" alt="" /></a>
                                        </div>
                                        <div class="text">Meditech is a library of health and medical templates with predefined web elements which helps you to build your medical templates best site Provide Comprehensive Quality Care About Medical Care Health Suspendisse metus turpis.</div>
                                        <ul class="social-icons">
                                            <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                            <li><a href="#"><span class="fab fa-google"></span></a></li>
                                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fab fa-skype"></span></a></li>
                                            <li><a href="#"><span class="fab fa-linkedin"></span></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <!--Footer Column-->
                                <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                                    <div class="footer-widget links-widget">
                                        <div class="footer-title  clearfix">
                                            <h2>Departments</h2>
                                            <div class="separator"></div>
                                        </div>
                                        <ul class="footer-list">
                                            <li><a href="#">Surgery & Radiology</a></li>
                                            <li><a href="#">Family Medicine</a></li>
                                            <li><a href="#">Women’s Health</a></li>
                                            <li><a href="#">Optician</a></li>
                                            <li><a href="#">Pediatrics</a></li>
                                            <li><a href="#">Dermatology</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!--big column-->
                        <div class="big-column col-lg-6 col-md-12 col-sm-12">
                            <div class="row clearfix">

                                <!--Footer Column-->
                                <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                    <div class="footer-widget news-widget">
                                        <div class="footer-title  clearfix">
                                            <h2>News Update</h2>
                                            <div class="separator"></div>
                                        </div>

                                        <!--News Widget Block-->
                                        <div class="news-widget-block">
                                            <div class="widget-inner">
                                                <div class="image">
                                                    <img src="images/resource/news-image-1.jpg" alt="" />
                                                </div>
                                                <h3><a href="blog-detail.html">Integrative Medicine And Cancer Treatment</a></h3>
                                                <div class="post-date">July 11, 2017</div>
                                            </div>
                                        </div>

                                        <!--News Widget Block-->
                                        <div class="news-widget-block">
                                            <div class="widget-inner">
                                                <div class="image">
                                                    <img src="images/resource/news-image-2.jpg" alt="" />
                                                </div>
                                                <h3><a href="blog-detail.html">Achieving Better Health Care One Patient  Time</a></h3>
                                                <div class="post-date">July 11, 2018</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <!--Footer Column-->
                                <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                    <div class="footer-widget contact-widget">
                                        <div class="footer-title  clearfix">
                                            <h2>Contact Us</h2>
                                            <div class="separator"></div>
                                        </div>

                                        <ul class="contact-list">
                                            <li><span class="icon flaticon-placeholder"></span>2130 Fulton Street San Diego <br> CA 94117-1080 USA</li>
                                            <li><span class="icon flaticon-call"></span>Mon to Fri : 08:30 - 18:00 <br> <a href="tel:+898-68679-575-09">+898 68679 575 09</a></li>
                                            <li><span class="icon flaticon-message"></span>Do you have a Question? <a href="mailto:info@gmail.com">info@gmail.com</a></li>
                                        </ul>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="copyright">MediTech Helth Care &copy; All Rights Reserved By Expertthemes</div>
                </div>
            </div>

        </footer>

    </div>

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<!--Search Popup-->
<div id="search-popup" class="search-popup">
	<div class="close-search theme-btn"><span class="fas fa-window-close"></span></div>
	<div class="popup-inner">
		<div class="overlay-layer"></div>
    	<div class="search-form">
        	<form method="post" action="index.html">
            	<div class="form-group">
                	<fieldset>
                        <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                        <input type="submit" value="Search Now!" class="theme-btn">
                    </fieldset>
                </div>
            </form>

            <br>
            <h3>Recent Search Keywords</h3>
            <ul class="recent-searches">
                <li><a href="#">Business</a></li>
                <li><a href="#">Web Development</a></li>
                <li><a href="#">SEO</a></li>
                <li><a href="#">Logistics</a></li>
                <li><a href="#">Freedom</a></li>
            </ul>

        </div>

    </div>
</div>

<!-- Color Palate / Color Switcher -->
<div class="color-palate">
    <div class="color-trigger">
        <i class="fas fa-cog"></i>
    </div>
    <div class="color-palate-head">
        <h6>Choose Your Color</h6>
    </div>
    <div class="various-color clearfix">
        <div class="colors-list">
            <span class="palate default-color active" data-theme-file="css/color-themes/default-theme.css"></span>
            <span class="palate green-color" data-theme-file="css/color-themes/green-theme.css"></span>
            <span class="palate olive-color" data-theme-file="css/color-themes/olive-theme.css"></span>
            <span class="palate orange-color" data-theme-file="css/color-themes/orange-theme.css"></span>
            <span class="palate purple-color" data-theme-file="css/color-themes/purple-theme.css"></span>
            <span class="palate teal-color" data-theme-file="css/color-themes/teal-theme.css"></span>
            <span class="palate brown-color" data-theme-file="css/color-themes/brown-theme.css"></span>
            <span class="palate redd-color" data-theme-file="css/color-themes/redd-color.css"></span>
        </div>
    </div>

	<ul class="rtl-version option-box"> <li class="rtl">RTL Version</li> <li>LTR Version</li> </ul>

    <a href="#" class="purchase-btn">Purchase now $17</a>

    <div class="palate-foo">
        <span>You will find much more options for colors and styling in admin panel. This color picker is used only for demonstation purposes.</span>
    </div>

</div>
@endsection

