<!DOCTYPE html>
<html lang="en" >

@if (App::getLocale() == 'en')

    <head>
        <meta charset="utf-8">
        <title>Medical Website</title>
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

@if (App::getLocale() == 'ar')
    <head>
        <meta charset="utf-8">
        <title>الموقع الطبي</title>
        <!-- Stylesheets -->
        <link href="css-rtl/bootstrap.css" rel="stylesheet">
        <link href="css-rtl/style.css" rel="stylesheet">
        <link href="css-rtl/responsive.css" rel="stylesheet">

        <!--Color Switcher Mockup-->
        <link href="css-rtl/color-switcher-design.css" rel="stylesheet">
        <!--Color Themes-->
        <link id="theme-color-file" href="css-rtl/color-themes/default-theme.css" rel="stylesheet">

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

                                    <li class="dropdown"><a href="{{ route('Shops.index') }}">{{trans('index.shop')}}</a>
                                        <ul>
                                            <li><a href="{{ route('Shops.index') }}">{{trans('index.shop')}}</a></li>
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
		<!--Sticky Header-->
        <div class="sticky-header">
        	<div class="auto-container clearfix">
            	<!--Logo-->
            	<div class="logo pull-left">
                	<a href="index.html" class="img-responsive"><img src="images/logo-small.png" alt="" title=""></a>
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

	<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/7.jpg);">
        <div class="auto-container">
            <h1>منتجات صيدلية المستشفي </h1>
			<div class="text">كل حاجة و اي حاجة انت  محتاجها </div>
			<ul class="bread-crumb clearfix">
				<li><a href="{{ route('index')  }}"><span class="fas fa-home"></span> Home </a></li>
				<li>Shop</li>
			</ul>
        </div>
    </section>
    <!--End Page Title-->

	<!--Sidebar Page Container-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side-->
                <div class="content-side col-lg-9 col-md-12 col-sm-12">
                    <div class="row clearfix">
                        <!--Content Side-->
                        <div class="content-side col-lg-9 col-md-12 col-sm-12">
                            <div class="row clearfix">


                                @foreach($products as  $product)


                                <!--Shop Item-->
                                <div class="product-block col-lg-4 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <div class="image">
                                            @if($product->image)
                                                <img src="{{asset('Dashboard/img/products/'.$product->image->filename)}}"
                                                     height="150px" width="150px" alt="">

                                            @else
                                                <img src="{{asset('Dashboard/img/doctor_default.png')}}" height="150px"
                                                     width="150px" alt="">
                                            @endif
                                            <ul class="options clearfix">
                                                <li><a href="{{ route('Shops.index')  }}">Quick View</a></li>
                                                <li><a href="shop-single.html"><span class="icon flaticon-shopping-cart"></span></a></li>
                                            </ul>
                                        </div>
                                        <div class="lower-box">
                                            <div class="content">
                                                <h3><a href="shop-single.html">{{$product->name}}</a></h3>
                                                <div class="price">{{$product->price}}<br>  جنية مصري </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach


                            </div>

                            <!-- Styled Pagination -->
                            <div class="styled-pagination text-center">
                                <ul class="inner-container clearfix">
                                    <li class="prev"><a href="#" class="active"><i class="flaticon-left-arrow"></i> Prev</a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li class="active"><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li class="next"><a href="#" class="active">Next <i class="flaticon-right-arrow-1"></i></a></li>
                                </ul>
                            </div>

                        </div>

                        <!--Sidebar Side-->
                        <div class="sidebar-side col-lg-3 col-md-12 col-sm-12">
                            <aside class="sidebar default-sidebar">

                                <!-- Search -->
                                <div class="sidebar-widget search-box">
                                    <div class="sidebar-title">
                                        <h3>Product Search</h3>
                                    </div>
                                    <form method="post" action="contact.html">
                                        <div class="form-group">
                                            <input type="search" name="search-field" value="" placeholder="Search ..." required>
                                            <button type="submit"><span class="icon fa fa-search"></span></button>
                                        </div>
                                    </form>
                                </div>

                                <!--Blog Category Widget-->
                                <div class="sidebar-widget sidebar-blog-category">
                                    <div class="sidebar-title">
                                        <h3>Categories</h3>
                                    </div>
                                    <ul class="archive-list">
                                        <li>
                                            <a href="#" class="clearfix">
                                                <span class="pull-left">Woman Shoes</span>
                                                <span class="pull-right">(8)</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="clearfix">
                                                <span class="pull-left">Men Shirts</span>
                                                <span class="pull-right">(3)</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="clearfix">
                                                <span class="pull-left">Accesories</span>
                                                <span class="pull-right">(5)</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="clearfix">
                                                <span class="pull-left">Designer Polos</span>
                                                <span class="pull-right">(2)</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="clearfix">
                                                <span class="pull-left">Modern Jeans</span>
                                                <span class="pull-right">(1)</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Price Filters -->
                                <div class="sidebar-widget price-filters rangeslider-widget">
                                    <div class="sidebar-title">
                                        <h3>Price Filter</h3>
                                    </div>
                                    <div class="range-slider-one clearfix">
                                        <div class="price-range-slider"></div>
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <a href="#" class="theme-btn btn-style-two btn-rounded"><span class="txt">Filter</span></a>
                                            </div>
                                            <div class="pull-right range">
                                                <div class="title">Price:</div>
                                                <div class="input"><input type="text" class="property-amount" name="field-name" readonly></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Top Related Posts -->
                                <div class="sidebar-widget related-posts">
                                    <div class="sidebar-title">
                                        <h3>Featured product</h3>
                                    </div>
                                    <!-- Post Thumb  -->
                                    <div class="post">
                                        <figure class="post-thumb">
                                            <a href="shop-single.html">
                                                <img src="images/resource/products/prod-thumb-1.jpg" alt="">
                                            </a>
                                        </figure>
                                        <h4><a href="shop-single.html">Flying Ninja</a></h4>
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star-half-o light"></span>
                                        </div>
                                        <div class="price"><span class="discount">$35.00</span>$9.00</div>
                                    </div>

                                    <!-- Post Thumb  -->
                                    <div class="post">
                                        <figure class="post-thumb">
                                            <a href="shop-single.html">
                                                <img src="images/resource/products/prod-thumb-2.jpg" alt="">
                                            </a>
                                        </figure>
                                        <h4><a href="shop-single.html">Woo Logo</a></h4>
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star-half-o light"></span>
                                        </div>
                                        <div class="price"><span class="discount">$35.00</span>$30.00</div>
                                    </div>

                                    <!-- Post Thumb  -->
                                    <div class="post">
                                        <figure class="post-thumb">
                                            <a href="shop-single.html">
                                                <img src="images/resource/products/prod-thumb-3.jpg" alt="">
                                            </a>
                                        </figure>
                                        <h4><a href="shop-single.html">Patient Ninja</a></h4>
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star-half-o light"></span>
                                        </div>
                                        <div class="price"><span class="discount">$35.00</span>$30.00</div>
                                    </div>

                                    <!-- Post Thumb  -->
                                    <div class="post">
                                        <figure class="post-thumb">
                                            <a href="shop-single.html">
                                                <img src="images/resource/products/prod-thumb-1.jpg" alt="">
                                            </a>
                                        </figure>
                                        <h4><a href="shop-single.html">Happy Ninja</a></h4>
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star-half-o light"></span>
                                        </div>
                                        <div class="price"><span class="discount">$35.00</span>$30.00</div>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Sierbar Container -->


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

    </div>
</div>
</body>
</html>
