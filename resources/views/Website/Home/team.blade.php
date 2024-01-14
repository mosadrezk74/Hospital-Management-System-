@extends('layout_Web')
@section('contact')


	<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/7.jpg);">
        <div class="auto-container">
            <h1>Team MediTech</h1>
			<div class="text">What We Actually Do?</div>
			<ul class="bread-crumb clearfix">
				<li><a href="index.html"><span class="fas fa-home"></span> Home </a></li>
				<li>Team</li>
			</ul>
        </div>
    </section>
    <!--End Page Title-->

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
				<div class="team-block col-lg-3 col-md-6 col-sm-6 col-xs-12 "  >

                    @foreach($doctors as $doctor)
                        @if(($loop->iteration) <= 4)

					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
                            @if($doctor->image)
                                <img src="{{asset('Dashboard/img/products/'.$doctor->image->filename)}}"
                                     height="150px" width="150px" alt="">

                            @else
                                <img src="{{asset('Dashboard/img/doctor_default.png')}}" height="150px"
                                     width="150px" alt="">
                            @endif
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
							<h3><a href="{{route('team.show' , $doctor->id )}}">{{$doctor->name}}</a></h3>
							<div class="designation">{{$doctor->section->name}}</div>
						</div>
					</div>
                        @endif
                    @endforeach
				</div>
			</div>

		</div>
	</section>
	<!-- End Team Section -->

	<!-- Default Section -->
	<section class="default-section" style="background-image:url(images/background/4.jpg)">
		<div class="auto-container">
			<div class="row clearfix">

				<!-- Skill Column -->
				<div class="skill-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Sec Title -->
						<div class="sec-title">
							<h2>MediTech Medical Skills</h2>
							<div class="separator"></div>
						</div>

						<!--Progress Levels-->
                        <div class="progress-levels">

                            <!--Skill Box-->
							<div class="progress-box wow">
								<div class="inner count-box">
									<div class="bar">
										<div class="bar-innner">
											<div class="bar-fill" data-percent="90">
												<div class="skill-percent">
													<span class="count-text" data-speed="3000" data-stop="95">0</span>
													<span class="percent">%</span>
												</div>
											</div>
										</div>
									</div>
									<div class="text">Patient Care</div>
								</div>
							</div>

							<!--Skill Box-->
							<div class="progress-box wow">
								<div class="inner count-box">
									<div class="bar">
										<div class="bar-innner">
											<div class="bar-fill" data-percent="45">
												<div class="skill-percent">
													<span class="count-text" data-speed="3000" data-stop="45">0</span>
													<span class="percent">%</span>
												</div>
											</div>
										</div>
									</div>
									<div class="text">Medical Assistance</div>
								</div>
							</div>

							<!--Skill Box-->
							<div class="progress-box wow">
								<div class="inner count-box">
									<div class="bar">
										<div class="bar-innner">
											<div class="bar-fill" data-percent="85">
												<div class="skill-percent">
													<span class="count-text" data-speed="3000" data-stop="85">0</span>
													<span class="percent">%</span>
												</div>
											</div>
										</div>
									</div>
									<div class="text">Patient Preparation</div>
								</div>
							</div>

							<!--Skill Box-->
							<div class="progress-box wow">
								<div class="inner count-box">
									<div class="bar">
										<div class="bar-innner">
											<div class="bar-fill" data-percent="70">
												<div class="skill-percent">
													<span class="count-text" data-speed="3000" data-stop="70">0</span>
													<span class="percent">%</span>
												</div>
											</div>
										</div>
									</div>
									<div class="text">Electronic Aspirin</div>
								</div>
							</div>


                        </div>

					</div>
				</div>

				<!-- Timeline Column -->
				<div class="timeline-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Sec Title -->
						<div class="sec-title">
							<h2>Check Weekly Timetable</h2>
							<div class="separator"></div>
						</div>
						<div class="text">Suspendisse potenti. Maecenas dapibus ac tellus sed pulvinar. Vestibulum bib volutpat accumsan non laoreet nulla luctus...</div>
						<ul class="timeline-list">
							<li>Monday - Friday <span>8.00  -  18.00</span></li>
							<li>Saturday <span>9.00  -  16.00</span></li>
							<li>Sunday <span>9.00  -  16.00</span></li>
						</ul>
						<div class="btn-box">
							<a class="theme-btn timeline-btn" href="#"><span class="icon flaticon-doctor"></span> Doctors Time Table</a>
							<a class="theme-btn timeline-btn" href="#"><span class="icon flaticon-doctor"></span> Make Appointment</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Default Section -->

	<!-- Doctors Section -->
    <section class="doctors-section style-two">
        <div class="auto-container">

            <!-- Features Tab -->
            <div class="doctors-tabs tabs-box">

                <ul class="doctors-thumb tab-buttons clearfix">
                    <li data-tab="#doctor-tab-1" class="tab-btn active-btn">
                        <div class="image-box">
                            <figure><img src="images/resource/doctor-thumb-1.jpg" alt=""></figure>
                        </div>
                    </li>
                    <li data-tab="#doctor-tab-2" class="tab-btn ">
                        <div class="image-box">
                            <figure><img src="images/resource/doctor-thumb-2.jpg" alt=""></figure>
                        </div>
                    </li>
                    <li data-tab="#doctor-tab-3" class="tab-btn ">
                        <div class="image-box">
                            <figure><img src="images/resource/doctor-thumb-3.jpg" alt=""></figure>
                        </div>
                    </li>
                </ul>

                <!--Tabs Container-->
                <div class="tabs-content">
                    <!--Tab / Active Tab-->
                    <div class="doctor-info tab active-tab" id="doctor-tab-1">
                        <div class="row clearfix">
                            <!-- Image-column -->
                            <div class="image-column col-lg-5 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <div class="image-box">
                                        <a href="images/resource/doctor-1.jpg" class="lightbox-image" data-fancybox="Gallery"><img src="images/resource/doctor-1.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>

                            <!-- Image-column -->
                            <div class="content-column col-lg-5 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <h3 class="name"><a href="doctors.html">Dr. Johan Doe</a></h3>
                                    <span class="designation">Neurosurgeon</span>
                                    <p>Duis sed odio sit amet nibh vulate cursus sit amet mauris.Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed no mauris vitae erat consequat auctor eu Suspend isse potenti. Maecenas dapibus ac tellus sed pulvinar.  Nam nec tellus a odio tincidunt auctor a ornare odio. </p>
									<p>Nam nec tellus a odio tincidunt auctor a ornare odio. Sed no mauris vitae erat consequat auctor eu Suspend isse potenti. Maecenas dapibus ac tellus sed pulvinar.  </p>
                                    <span class="timing"><i class="flaticon-alarm-clock"></i> Monday - Friday ( 5:00pm - 8pm )</span>
                                    <div class="clearfix">
                                        <div class="social-links">
                                            <h4>Follow Me:</h4>
                                            <ul class="clearfix">
                                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                            </ul>
                                        </div>

                                        <div class="call-btn">
                                            <a href="doctors.html" class="theme-btn btn-style-two"><span class="txt">Book Appointment</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Tab / Active Tab-->
                    <div class="doctor-info tab" id="doctor-tab-2">
                        <div class="row clearfix">
                            <!-- Image-column -->
                            <div class="image-column col-lg-5 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <div class="image-box">
                                        <a href="images/resource/doctor-1.jpg" class="lightbox-image" data-fancybox="Gallery"><img src="images/resource/doctor-1.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>

                            <!-- Image-column -->
                            <div class="content-column col-lg-5 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <h3 class="name"><a href="doctors.html">Dr. Johan Doe</a></h3>
                                    <span class="designation">Neurosurgeon</span>
                                    <p>Duis sed odio sit amet nibh vulate cursus sit amet mauris.Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed no mauris vitae erat consequat auctor eu Suspend isse potenti. Maecenas dapibus ac tellus sed pulvinar.  Nam nec tellus a odio tincidunt auctor a ornare odio. </p>
									<p>Nam nec tellus a odio tincidunt auctor a ornare odio. Sed no mauris vitae erat consequat auctor eu Suspend isse potenti. Maecenas dapibus ac tellus sed pulvinar.  </p>
                                    <span class="timing"><i class="flaticon-alarm-clock"></i> Monday - Friday ( 5:00pm - 8pm )</span>
                                    <div class="clearfix">
                                        <div class="social-links">
                                            <h4>Follow Me:</h4>
                                            <ul class="clearfix">
                                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                            </ul>
                                        </div>

                                        <div class="call-btn">
                                            <a href="doctors.html" class="theme-btn btn-style-two"><span class="txt">Book Appointment</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Tab / Active Tab-->
                    <div class="doctor-info tab" id="doctor-tab-3">
                        <div class="row clearfix">
                            <!-- Image-column -->
                            <div class="image-column col-lg-5 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <div class="image-box">
                                        <a href="images/resource/doctor-1.jpg" class="lightbox-image" data-fancybox="Gallery"><img src="images/resource/doctor-1.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>

                            <!-- Image-column -->
                            <div class="content-column col-lg-5 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <h3 class="name"><a href="doctors.html">Dr. Johan Doe</a></h3>
                                    <span class="designation">Neurosurgeon</span>
                                    <p>Duis sed odio sit amet nibh vulate cursus sit amet mauris.Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed no mauris vitae erat consequat auctor eu Suspend isse potenti. Maecenas dapibus ac tellus sed pulvinar.  Nam nec tellus a odio tincidunt auctor a ornare odio. </p>
									<p>Nam nec tellus a odio tincidunt auctor a ornare odio. Sed no mauris vitae erat consequat auctor eu Suspend isse potenti. Maecenas dapibus ac tellus sed pulvinar.  </p>
                                    <span class="timing"><i class="flaticon-alarm-clock"></i> Monday - Friday ( 5:00pm - 8pm )</span>
                                    <div class="clearfix">
                                        <div class="social-links">
                                            <h4>Follow Me:</h4>
                                            <ul class="clearfix">
                                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                            </ul>
                                        </div>

                                        <div class="call-btn">
                                            <a href="doctors.html" class="theme-btn btn-style-two"><span class="txt">Book Appointment</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>
    <!-- End Doctors Section -->

	<!--Main Footer-->
    <footer class="main-footer style-two">
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
                                    	<a href="index.html"><img src="images/logo-3.png" alt="" /></a>
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
<!--End pagewrapper-->

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
