<!DOCTYPE html>
<html lang="en" >
            <head>
                <meta charset="utf-8">
                <title>Medical Website</title>
                <!-- Stylesheets -->
                <link href="css/bootstrap.css" rel="stylesheet">
                <link href="css/style.css" rel="stylesheet">
                <link href="css/responsive.css" rel="stylesheet">

                <!--Color Switcher Mockup-->
                <link href="css/color-switcher-design.css" rel="stylesheet">
                <!--Color Themes-->
                <link id="theme-color-file" href="css/color-themes/default-theme.css" rel="stylesheet">

                <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
                <link rel="icon" href="images/favicon.png" type="image/x-icon">

                <!-- Responsive -->
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
                <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
                <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
            </head>

<body>
<div class="page-wrapper rtl">
    <!-- Preloader -->
    <div class="preloader "></div>

    <header class="main-header">
        <!--Header Top-->
        <div class="header-top">
            <div class="auto-container clearfix">
                <div class="top-left clearfix">
                    <ul class="list">
                        <li><span class="icon fas fa-envelope"></span> {{trans('index.loc')}}</li>
                        <li><span class="icon fas fa-phone"></span> <a href="tel:+0201554375926"> +0201554375926</a></li>
                    </ul>
                </div>
                <div class="top-right clearfix">
                    <ul class="social-icons">
                        <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                        <li><a href="#"><span class="fab fa-google"></span></a></li>
                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fab fa-skype"></span></a></li>
                        <li><a href="#"><span class="fab fa-linkedin"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Header Top -->

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="inner-container">
                <div class="auto-container clearfix">
                    <!--Info-->
                    <div class="logo-outer">
                        <div class="logo"  ><a href="{{ route('index')  }}"><img src="images/logo.png" alt="" title=""></a></div>
                    </div>

                    <!--Nav Box-->
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler For Mobile--><div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="navbar-header">
                                <!-- Togg le Button -->
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon flaticon-menu"></span>
                                </button>
                            </div>

                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="current dropdown"><a href="{{ route('index')  }}">{{trans('index.home')}}</a>


                                    </li>
                                    <li class="dropdown"><a href="#">{{trans('index.about')}}</a>
                                        <ul>
                                            <li><a href="{{ route('web.about')  }}">{{trans('index.about')}}</a></li>
                                            <li><a href="{{ route('web.team')  }}">{{trans('index.team')}}</a></li>
                                            <li><a href="{{ route('web.services') }}">{{trans('index.service')}}</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="contact.html">{{trans('index.contact')}}</a></li>

                                    <li class="dropdown"><a href="{{ route('web.department') }}">{{trans('index.depart')}}</a>
                                        <ul>
                                            <li><a href="{{ route('web.department') }}">{{trans('index.depart')}}</a></li>
                                            <li><a href="{{ route('web.departmentDet') }}">{{trans('index.departdd')}}</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="{{ route('web.departmentDet') }}">{{trans('index.doc')}}</a>
                                        <ul>
                                            <li><a href="{{ route('web.doctors') }}">{{trans('index.doc')}}</a></li>
                                            <li><a href="{{ route('web.Dedoctors') }}">{{trans('index.docdd')}}</a></li>
                                        </ul>
                                    </li>

                                    <li class="dropdown"><a href="{{ route('web.shop') }}">{{trans('index.shop')}}</a>
                                        <ul>
                                            <li><a href="{{ route('web.shop') }}">{{trans('index.shop')}}</a></li>
                                            <li><a href="{{ route('web.faq') }}">{{trans('index.shopdd')}}</a></li>
                                            <li><a href="{{ route('web.shopingsingle') }}">{{trans('index.Page')}}</a></li>
                                            <li><a href="{{ route('web.shopingcart') }}">{{trans('index.Pagecc')}}</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="{{route('login')}}"  >{{trans('index.login')}}</a></li>
                                </ul>

                                <ul>
                                    <li class="">
                                        <div class="dropdown  nav-itemd-none d-md-flex">
                                            <a href="#" class="d-flex  nav-item nav-link pl-0 country-flag1" data-toggle="dropdown"
                                               aria-expanded="false">
                                                @if (App::getLocale() == 'ar')
                                                    <span class="avatar country-Flag mr-0 align-self-center bg-transparent"><img
                                                            src="{{URL::asset('Dashboard/img/flags/egypt_flag.jpg')}}" style="width: 80px; height: 30px; padding-left: 40px" alt="img"></span>
                                                    <strong
                                                        class="mr-2 ml-2 my-auto">{{ LaravelLocalization::getCurrentLocaleName() }}</strong>
                                                @else
                                                    <span class="avatar country-Flag mr-0 align-self-center bg-transparent"><img
                                                            src="{{URL::asset('Dashboard/img/flags/us_flag.jpg')}}" style="width: 80px; height: 30px; padding-left: 40px" alt="img"></span>
                                                    <strong
                                                        class="mr-2 ml-2 my-auto">{{ LaravelLocalization::getCurrentLocaleName() }}</strong>
                                                @endif
                                                <div class="my-auto">
                                                </div>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow" x-placement="bottom-end">
                                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                    <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}"
                                                       href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                        @if($properties['native'] == "English")
                                                            <i class="flag-icon flag-icon-us"></i>
                                                        @elseif($properties['native'] == "العربية")
                                                            <i class="flag-icon flag-icon-eg"></i>
                                                        @endif
                                                        {{ $properties['native'] }}
                                                    </a>
                                                @endforeach
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                        </nav>
                        <!-- Main Menu End-->

                        <!-- Main Menu End-->
                        <div class="outer-box clearfix">
                            <!-- Search Btn -->
                            <div class="search-box-btn"><span class="icon flaticon-search"></span></div>
                            <!-- Button Box -->
                            <div class="btn-box">
                                <a href="{{ route('web.contact') }}" class="theme-btn btn-style-one"><span class="txt">{{trans('index.Appointment')}}</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="{{route('index')}}" class="img-responsive"><img src="images/logo-small.png" alt="" title=""></a>
                </div>

                <!--Right Col-->
                <div class="right-col pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                            <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>

            </div>
        </div>
        <!--End Sticky Header-->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon far fa-window-close"></span></div>

            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="images/nav-logo.png" alt="" title=""></a></div>

                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
            </nav>
        </div><!-- End Mobile Menu -->

    </header>
    <!-- End Main Header -->
<body>
@yield('main')

</body>



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

        <!--Scroll to top-->
        <script src="js/jquery.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.fancybox.js"></script>
        <script src="js/parallax.min.js"></script>
        <script src="js/jquery.paroller.min.js"></script>
        <script src="js/owl.js"></script>
        <script src="js/wow.js"></script>
        <script src="js/swiper.min.js"></script>
        <script src="js/appear.js"></script>
        <script src="js/script.js"></script>
        <script src="js/color-settings.js"></script>
</body>
</html>
