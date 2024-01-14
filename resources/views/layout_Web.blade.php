<!DOCTYPE html>
<html lang="en" >
@if (App::getLocale() == 'en')

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
@endif
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
                                    @if (Auth::check())
                                    <li><a href="{{route('logout.user')}}"  >Logout</a></li>
                                    @else
                                        <li><a href="{{route('login')}}"  >{{trans('index.login')}}</a></li>
                                    @endif

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

    @yield('contact')









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


    <!--Google Map APi Key-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD39_Mb1wKUcuRD-0KPmQT6SQHhEMVX1O0"></script>
    <script src="js/map-script.js"></script>
    <!--End Google Map APi-->

</div>


</body>
</html>
