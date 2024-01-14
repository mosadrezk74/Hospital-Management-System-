@extends('layout_Web')
@section('contact')


	<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/7.jpg);">
        <div class="auto-container">
            <h1>Pricetable For MediTech</h1>
			<div class="text">What We Actually Do?</div>
			<ul class="bread-crumb clearfix">
				<li><a href="index.html"><span class="fas fa-home"></span> Home </a></li>
				<li>Pricetable</li>
			</ul>
        </div>
    </section>
    <!--End Page Title-->

	<!-- Price Section -->
	<section class="price-section">
		<div class="auto-container">
			<div class="sec-title centered">
				<h2>MediTech Health Plan</h2>
				<div class="separator"></div>
			</div>

			<div class="row clearfix">

				<!-- Price Block -->
				<div class="price-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box clearfix wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="upper-box">
							<div class="icon flaticon-doctor-stethoscope"></div>
							<div class="title">Daily Check Up</div>
							<div class="price"><sub>$</sub>35.00</div>
						</div>
						<div class="plan-outer clearfix">
							<div class="plan">Basic Plan</div>
						</div>
						<div class="middle-content">
							<ul>
								<li>Review of Safety Program</li>
								<li>Annual Sexual Harassment Training</li>
								<li>Monthly Newsletter</li>
								<li>Safety Training Topics</li>
								<li>Monthly health check-ups</li>
								<li>Early illness diagnoses</li>
							</li>
						</div>
						<a href="#" class="appointment">get appointment</a>
					</div>
				</div>

				<!-- Price Block -->
				<div class="price-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="upper-box">
							<div class="icon flaticon-pharmacy"></div>
							<div class="title">Monthly Check Up</div>
							<div class="price"><sub>$</sub>150.00</div>
						</div>
						<div class="plan-outer clearfix">
							<div class="plan">Advance Plan</div>
						</div>
						<div class="middle-content">
							<ul>
								<li>Review of Safety Program</li>
								<li>Annual Sexual Harassment Training</li>
								<li>Monthly Newsletter</li>
								<li>Safety Training Topics</li>
								<li>Monthly health check-ups</li>
								<li>Early illness diagnoses</li>
							</li>
						</div>
						<a href="#" class="appointment">get appointment</a>
					</div>
				</div>

				<!-- Price Block -->
				<div class="price-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="upper-box">
							<div class="icon flaticon-operating-room"></div>
							<div class="title">Yearly Check Up</div>
							<div class="price"><sub>$</sub>305.00</div>
						</div>
						<div class="plan-outer clearfix">
							<div class="plan">Team Plan</div>
						</div>
						<div class="middle-content">
							<ul>
								<li>Review of Safety Program</li>
								<li>Annual Sexual Harassment Training</li>
								<li>Monthly Newsletter</li>
								<li>Safety Training Topics</li>
								<li>Monthly health check-ups</li>
								<li>Early illness diagnoses</li>
							</li>
						</div>
						<a href="#" class="appointment">get appointment</a>

					</div>
				</div>

			</div>

		</div>
	</section>

	<!-- Appointment Section -->
	<section class="appointment-section" style="background-image:url(images/background/pattern-5.png)">
		<div class="auto-container">

			<div class="row clearfix">

				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="images/resource/doctor-2.png" alt="" />
						</div>
					</div>
				</div>

				<!-- Form Column -->
				<div class="form-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Sec Title -->
						<div class="sec-title">
							<h2>Appointment Form</h2>
							<div class="separator"></div>
						</div>

						<!-- Appointment Form -->
						<div class="appointment-form">
							<form method="post" action="appointment.html">
								<div class="row clearfix">
									<div class="col-lg-6 col-md-6 col-sm-12 form-group">
										<input type="text" name="username" placeholder="Name" required="">
										<span class="icon fa fa-user"></span>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12 form-group">
										<input type="email" name="email" placeholder="Email" required="">
										<span class="icon fa fa-envelope"></span>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12 form-group">
										<input type="tel" name="phone" placeholder="Phone No" required="">
										<span class="icon fas fa-phone"></span>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12 form-group">
										<input type="text" name="department" placeholder="Department" required="">
										<span class="icon fas fa-home"></span>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12 form-group">
										<input type="text" name="day" placeholder="Day">
										<span class="icon fa fa-calendar"></span>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12 form-group">
										<input type="text" name="time" placeholder="Time" class="">
										<span class="icon far fa-clock"></span>
									</div>

									<div class="col-lg-12 col-md-12 col-sm-12 form-group">
										<textarea name="message" placeholder="Message"></textarea>
									</div>

									<div class="col-lg-12 col-md-12 col-sm-12 form-group">
										<button class="theme-btn btn-style-two" type="submit" name="submit-form"><span class="txt">Book Appointment</span></button>
									</div>
								</div>
							</form>
						</div>

					</div>
				</div>

			</div>

		</div>
	</section>

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
