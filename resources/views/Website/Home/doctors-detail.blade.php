
<style>
    /* Medi-tech Medical - HTML Template  */

    /************ TABLE OF CONTENTS ***************
1. Fonts
2. Reset
3. Global
4. Main Header / Style Two / Style Three
5. Main Slider
6. Services Section
7. About Section
8. Counter Section
9. Project Section
10. Team Section
11. Testimonial Section
12. News Section
13. Clients Section / Style Two
14. Main Footer / Style Two / Style Three
15. Call To Action Section
16. Video Section
17. Reasons Section
18. Fullwidth Section
19. Pricing Section
20. Offers Section
21. Faq Section
22. Comming Soon Section
23. Subscribe Section
24. Products Section
25. Factory Section
26. Construction Section
27. Page Title
28. Service Single Section
29. Blog Widgets
30. Map Section
31. Contact Form

**********************************************/

    /***

====================================================================
	Fonts
====================================================================

***/

    @import url('https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900|Lora:400,400i,700,700i');

    /* font-family: 'Lora', serif;
font-family: 'Lato', sans-serif; */

    @import url('pe-icon-7-stroke.css');
    @import url('simple-line-icons.css');
    @import url('fontawesome-all.css');
    @import url('animate.css');
    @import url('flaticon.css');
    @import url('owl.css');
    @import url('swiper.min.css');
    @import url('jquery-ui.css');
    @import url('custom-animate.css');
    @import url('magnific-popup.css');
    @import url('jquery.fancybox.min.css');
    @import url('jquery.timepicker.min.css');

    /***

====================================================================
	Reset
====================================================================

 ***/

    *{
        margin:0px;
        padding:0px;
        border:none;
        outline:none;
        font-size: 100%;
    }

    /***

====================================================================
	Global Settings
====================================================================

 ***/

    body{
        font-size:14px;
        color:#787878;
        line-height:1.6em;
        font-weight:400;
        background:#ffffff;
        -webkit-font-smoothing: antialiased;
        -moz-font-smoothing: antialiased;
        font-family: 'Lato', sans-serif;
    }

    a{
        text-decoration:none;
        cursor:pointer;
        color:#004cda;
    }

    a:hover,
    a:focus,
    a:visited{
        text-decoration:none;
        outline:none;
    }

    h1,h2,h3,h4,h5,h6 {
        position:relative;
        font-weight:normal;
        margin:0px;
        background:none;
        line-height:1.2em;
        letter-spacing: -0.02em;
        font-family: 'Lora', serif;
    }

    textarea{
        overflow:hidden;
    }

    button{
        outline: none !important;
        cursor: pointer;
    }

    p{
        font-size: 16px;
        line-height: 1.6em;
        font-weight: 400;
        color: #555555;
    }

    .text{
        font-size: 16px;
        line-height: 1.6em;
        font-weight: 400;
        color: #555555;
        margin: 0;
    }

    ::-webkit-input-placeholder{color: inherit;}
    ::-moz-input-placeholder{color: inherit;}
    ::-ms-input-placeholder{color: inherit;}

    .auto-container{
        position:static;
        max-width:1210px;
        padding:0px 20px;
        margin:0 auto;
    }

    .large-container{
        position:static;
        max-width:1600px;
        padding:0px 15px;
        margin:0 auto;
    }

    .page-wrapper{
        position:relative;
        margin:0 auto;
        width:100%;
        min-width:300px;
        overflow: hidden;
        z-index: 9;
    }

    ul,li{
        list-style:none;
        padding:0px;
        margin:0px;
    }

    .theme-btn{
        display:inline-block;
        -webkit-transition:all 0.3s ease;
        -moz-transition:all 0.3s ease;
        -ms-transition:all 0.3s ease;
        -o-transition:all 0.3s ease;
        transition:all 0.3s ease;
    }

    .theme-btn i{
        position: relative;
        display: inline-block;
        font-size: 14px;
        margin-left: 3px;
    }

    .centered{
        text-align:center !important;
    }

    /*Btn Style One*/

    .btn-style-one{
        position: relative;
        display: inline-block;
        font-size: 14px;
        line-height: 30px;
        color: #222222;
        padding: 9px 32px;
        font-weight: 700;
        overflow: hidden;
        border-radius: 50px;
        overflow:hidden;
        background: none;
        border:1px solid #aaaaaa;
        text-transform: capitalize;
        font-family: 'Lato', sans-serif;
    }

    .btn-style-one .txt{
        position:relative;
        z-index:1;
    }

    .btn-style-one:before{
        position: absolute;
        content: '';
        top: 0px;
        bottom: 0px;
        left: 0px;
        right: -50px;
        border-bottom: 50px solid #004cda;
        border-right: 30px solid transparent;
        -webkit-transition:all 600ms ease;
        -moz-transition:all 600ms ease;
        -ms-transition:all 600ms ease;
        -o-transition:all 600ms ease;
        transition:all 600ms ease;
        -webkit-transform: translateX(-100%);
        transform: translateX(-100%);
    }

    .btn-style-one:after{
        position: absolute;
        content: '';
        top: 0px;
        right: 0px;
        bottom: 0px;
        left: -50px;
        border-left: 30px solid transparent;
        border-bottom: 50px solid #004cda;
        -webkit-transition:all 600ms ease;
        -moz-transition:all 600ms ease;
        -ms-transition:all 600ms ease;
        -o-transition:all 600ms ease;
        transition:all 600ms ease;
        -webkit-transform: translateX(100%);
        transform: translateX(100%);
    }

    .btn-style-one:hover::before{
        -webkit-transform: translateX(-40%);
        transform: translateX(-40%);
    }

    .btn-style-one:hover::after{
        -webkit-transform: translateX(40%);
        transform: translateX(40%);
    }

    .btn-style-one:hover{
        color: #ffffff;
        border-color:#004cda;
    }

    /* Btn Style Two */

    .btn-style-two{
        position: relative;
        display: inline-block;
        font-size: 16px;
        line-height: 30px;
        color: #ffffff;
        padding: 15px 40px 15px;
        font-weight: 700;
        overflow: hidden;
        border-radius:50px;
        background-color: #004cda;
        text-transform: capitalize;
        font-family: 'Lato', sans-serif;
    }

    .btn-style-two .txt{
        position:relative;
        z-index:1;
        transition: all 600ms ease;
        -moz-transition: all 600ms ease;
        -webkit-transition: all 600ms ease;
        -ms-transition: all 600ms ease;
        -o-transition: all 600ms ease;
    }

    .btn-style-two:before{
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
        opacity: 0;
        background-color: #222222;
        -webkit-transition: all 0.4s;
        -moz-transition: all 0.4s;
        -o-transition: all 0.4s;
        transition: all 0.4s;
        -webkit-transform: scale(1, 0.5);
        transform: scale(1, 0.5);
    }

    .btn-style-two:hover::before{
        opacity: 1;
        transform: scale(1, 1);
        -webkit-transform: scale(1, 1);
    }

    .btn-style-two:hover{
        color: #ffffff;
    }

    /* Phone Btn */

    .phone-btn{
        position:relative;
        border-radius:50px;
        color:#222222;
        font-size:20px;
        font-weight:700;
        display:inline-block;
        padding:18px 30px 18px 90px;
        border:1px solid #222222;
    }

    .phone-btn .icon{
        position:absolute;
        left:-1px;
        top:-1px;
        width:60px;
        height:60px;
        color:#ffffff;
        font-size:22px;
        text-align:center;
        line-height:60px;
        border-radius:50%;
        display:inline-block;
        background-color:#222222;
        -webkit-transition:all 300ms ease;
        -moz-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        -o-transition:all 300ms ease;
        transition:all 300ms ease;
    }

    .phone-btn:hover .icon{
        background-color:#004cda;
    }

    .phone-btn:hover{
        color:#ffffff;
        background-color:#222222;
    }

    /* Btn Style Three */

    .btn-style-three{
        position: relative;
        display: inline-block;
        font-size: 17px;
        line-height: 30px;
        color: #ffffff;
        padding: 16px 54px 14px;
        font-weight: 700;
        overflow: hidden;
        border-radius:50px;
        background-color: #004cda;
        text-transform: capitalize;
        font-family: 'Quicksand', sans-serif;
    }

    .btn-style-three .txt{
        position:relative;
        z-index:1;
        transition: all 600ms ease;
        -moz-transition: all 600ms ease;
        -webkit-transition: all 600ms ease;
        -ms-transition: all 600ms ease;
        -o-transition: all 600ms ease;
    }

    .btn-style-three:before{
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
        opacity: 0;
        background-color: #1fb795;
        -webkit-transition: all 0.4s;
        -moz-transition: all 0.4s;
        -o-transition: all 0.4s;
        transition: all 0.4s;
        -webkit-transform: scale(1, 0.5);
        transform: scale(1, 0.5);
    }

    .btn-style-three:hover::before{
        opacity: 1;
        -webkit-transform: scale(1, 1);
        transform: scale(1, 1);
    }

    .btn-style-three:hover{
        color: #ffffff;
    }

    /* Btn Style Four */

    .btn-style-four{
        position: relative;
        display: inline-block;
        font-size: 14px;
        line-height: 30px;
        color: #fb5380;
        padding: 7px 36px 6px;
        font-weight: 700;
        overflow: hidden;
        border-radius:50px;
        border:2px solid #ffffff;
        background-color: #ffffff;
        text-transform: capitalize;
        font-family: 'Quicksand', sans-serif;
    }

    .btn-style-four:hover{
        color: #ffffff;
        background:none;
    }

    /* Btn Style Five */

    .btn-style-five{
        position: relative;
        display: inline-block;
        font-size: 16px;
        line-height: 30px;
        color: #ffffff;
        padding: 11px 40px 11px;
        font-weight: 700;
        overflow: hidden;
        border-radius:50px;
        background-color: #004cda;
        text-transform: capitalize;
        font-family: 'Lato', sans-serif;
    }

    .btn-style-five .txt{
        position:relative;
        z-index:1;
        transition: all 300ms ease;
        -moz-transition: all 300ms ease;
        -webkit-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
    }

    .btn-style-five:before{
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
        opacity: 0;
        background-color: #ffffff;
        -webkit-transition: all 0.4s;
        -moz-transition: all 0.4s;
        -o-transition: all 0.4s;
        transition: all 0.4s;
        -webkit-transform: scale(1, 0.5);
        transform: scale(1, 0.5);
    }

    .btn-style-five:hover::before{
        opacity: 1;
        transform: scale(1, 1);
        -webkit-transform: scale(1, 1);
    }

    .btn-style-five:hover{
        color: #004cda;
    }

    /*=== List Style One ===*/

    .list-style-one{
        position:relative;
    }

    .list-style-one li{
        position:relative;
        font-size:18px;
        line-height:24px;
        color: #777777;
        font-weight:700;
        padding-left:32px;
        margin-bottom: 20px;
        font-family: 'Lora', serif;
    }

    .list-style-one li .icon{
        position: absolute;
        left: 0px;
        top: 0px;
        font-size: 20px;
        line-height: 24px;
        color: #004cda;
        font-weight:400;
    }

    /*=== List Style Two ===*/

    .list-style-two{
        position:relative;
    }

    .list-style-two li{
        position:relative;
        font-size:14px;
        line-height:24px;
        color: #ffffff;
        font-weight:400;
        padding-left:32px;
        margin-bottom: 20px;
        font-family: 'Lora', serif;
    }

    .list-style-two li:last-child{
        margin-bottom:0px;
    }

    .list-style-two li .icon{
        position: absolute;
        left: 0px;
        top: 0px;
        font-size: 20px;
        line-height: 24px;
        color: #ffffff;
        font-weight:400;
    }

    .theme_color{
        color:#004cda;
    }

    .pull-right{
        float: right;
    }

    .pull-left{
        float: left;
    }

    .preloader{
        position:fixed;
        left:0px;
        top:0px;
        width:100%;
        height:100%;
        z-index:999999;
        background-color:#ffffff;
        background-position:center center;
        background-repeat:no-repeat;
        background-size:80px;
        background-image:url(../images/icons/preloader.svg);
    }

    img{
        display:inline-block;
        max-width:100%;
        height:auto;
    }

    .dropdown-toggle::after{
        display: none;
    }

    .fa{
        line-height: inherit;
    }

    .play-now .ripple,
    .play-now .ripple:before,
    .play-now .ripple:after {
        position: absolute;
        top: 50%;
        left: 30px;
        height: 60px;
        width: 60px;
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        -ms-border-radius: 50%;
        -o-border-radius: 50%;
        border-radius: 50%;
        -webkit-box-shadow: 0 0 0 0 rgba(255, 255, 255, .6);
        -moz-box-shadow: 0 0 0 0 rgba(255, 255, 255, .6);
        -ms-box-shadow: 0 0 0 0 rgba(255, 255, 255, .6);
        -o-box-shadow: 0 0 0 0 rgba(255, 255, 255, .6);
        box-shadow: 0 0 0 0 rgba(255, 255, 255, .6);
        -webkit-animation: ripple 3s infinite;
        -moz-animation: ripple 3s infinite;
        -ms-animation: ripple 3s infinite;
        -o-animation: ripple 3s infinite;
        animation: ripple 3s infinite;
    }

    .play-now .ripple:before {
        -webkit-animation-delay: .9s;
        -moz-animation-delay: .9s;
        -ms-animation-delay: .9s;
        -o-animation-delay: .9s;
        animation-delay: .9s;
        content: "";
        position: absolute;
    }

    .play-now .ripple:after {
        -webkit-animation-delay: .6s;
        -moz-animation-delay: .6s;
        -ms-animation-delay: .6s;
        -o-animation-delay: .6s;
        animation-delay: .6s;
        content: "";
        position: absolute;
    }

    @-webkit-keyframes ripple {
        70% {box-shadow: 0 0 0 20px rgba(255, 255, 255, 0);}
        100% {box-shadow: 0 0 0 0 rgba(255, 255, 255, 0);}
    }

    @keyframes ripple {
        70% {box-shadow: 0 0 0 20px rgba(255, 255, 255, 0);}
        100% {box-shadow: 0 0 0 0 rgba(255, 255, 255, 0);}
    }


    /***

====================================================================
	Scroll To Top style
====================================================================

***/

    .scroll-to-top{
        position:fixed;
        bottom:20px;
        right:20px;
        width:60px;
        height:60px;
        color:#ffffff;
        font-size:24px;
        line-height:60px;
        text-align:center;
        z-index:100;
        cursor:pointer;
        background:#1b1a1c;
        display:none;
        border-radius: 0;
        -webkit-transition:all 300ms ease;
        -moz-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        -o-transition:all 300ms ease;
        transition:all 300ms ease;
    }

    .scroll-to-top:hover{
        background:#004cda;
    }

    /***

====================================================================
	Main Header style
====================================================================

***/

    .main-header{
        position: relative;
        display: block;
        z-index: 99999;
    }

    .main-header .header-top{
        position: relative;
        background-color:#004cda;
    }

    .main-header .header-top.style-two{
        background-color:#3a3d72;
    }

    /* Top Right*/

    .main-header .header-top .top-left{
        position: relative;
        float: left;
        padding:14px 0px;
    }

    .main-header .header-top .top-left .list{
        position:relative;
    }

    .main-header .header-top .top-left .list li{
        position:relative;
        margin-right:25px;
        color:#ffffff;
        font-size:14px;
        font-weight:400;
        padding-left:25px;
        display:inline-block;
    }

    .main-header .header-top .top-left .list li a{
        position:relative;
        color:#ffffff;
        font-size:14px;
        font-weight:600;
    }

    .main-header .header-top .top-left .list li .icon{
        position:absolute;
        left:0px;
        top:4px;
    }

    .main-header .header-top .top-right{
        position: relative;
        float: right;
        padding:14px 0px;
    }

    .main-header .header-top .top-right .social-icons{
        position:relative;
    }

    .main-header .header-top .top-right .social-icons li{
        position:relative;
        margin-left:18px;
        display:inline-block;
    }

    .main-header .header-top .top-right .social-icons li.share{
        color:#ffffff;
        font-weight:600;
    }

    .main-header .header-top .top-right .social-icons li a{
        position:relative;
        color:#ffffff;
        -webkit-transition:all 300ms ease;
        -moz-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        -o-transition:all 300ms ease;
        transition:all 300ms ease;
    }

    .main-header .header-top .top-right .social-icons li a:hover{
        color:#000000;
    }

    /*=== Header Upper ===*/

    .main-header .header-upper{
        position:relative;
        z-index:5;
        -webkit-transition:all 600ms ease;
        -moz-transition:all 600ms ease;
        -ms-transition:all 600ms ease;
        -o-transition:all 600ms ease;
        transition:all 600ms ease;
    }

    .main-header .header-upper .logo-outer{
        position:relative;
        float: left;
        z-index:25;
        padding: 36px 0px;
        -webkit-transition:all 600ms ease;
        -moz-transition:all 600ms ease;
        -ms-transition:all 600ms ease;
        -o-transition:all 600ms ease;
        transition:all 600ms ease;
    }

    .main-header .logo-outer .logo img{
        position:relative;
        display:inline-block;
        max-width:100%;
    }

    .main-header .header-upper .nav-outer{
        float: right;
        position:static;
    }

    /*=== Header Lower ===*/

    .main-header .header-lower{
        position: relative;
        -webkit-transition:all 600ms ease;
        -moz-transition:all 600ms ease;
        -ms-transition:all 600ms ease;
        -o-transition:all 600ms ease;
        transition:all 600ms ease;
    }

    .main-menu{
        position:static;
        float:left;
    }

    .main-menu .navbar-collapse{
        padding:0px;
    }

    .main-menu .navigation{
        position:static;
        margin:0px;
    }

    .main-menu .navigation > li{
        position:relative;
        float:left;
        padding:53px 0px;
        margin-right: 30px;
        -webkit-transition:all 600ms ease;
        -moz-transition:all 600ms ease;
        -ms-transition:all 600ms ease;
        -o-transition:all 600ms ease;
        transition:all 600ms ease;
    }

    .main-menu .navigation > li:last-child{
        margin-right:0px;
    }

    .main-menu .navigation > li > a{
        position:relative;
        display:block;
        text-align:center;
        font-size:15px;
        line-height:35px;
        font-weight:700;
        opacity:1;
        color:#222222;
        padding: 0px;
        text-transform:none;
        -webkit-transition:all 300ms ease;
        -moz-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        -o-transition:all 300ms ease;
        transition:all 300ms ease;
        font-family: 'Lora', serif;
    }

    .main-menu .navigation > li > a:before{
        position:absolute;
        content:'';
        left:0px;
        bottom:0px;
        height:2px;
        width:0px;
        background-color:#222222;
        -webkit-transition:all 300ms ease;
        -moz-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        -o-transition:all 300ms ease;
        transition:all 300ms ease;
    }

    .main-menu .navigation > li.current > a:before,
    .main-menu .navigation > li:hover > a:before{
        width:100%;
    }

    .main-menu .navigation > li:hover > a,
    .main-menu .navigation > li.current > a{
        color: #004cda;
    }

    .main-menu .navigation > li > ul{
        position:absolute;
        left:0px;
        top:100%;
        width:225px;
        z-index:100;
        opacity: 1;
        padding: 10px 0px 20px;
        background:#ffffff;
        -webkit-transform: translateY(30px);
        -ms-transform: translateY(30px);
        transform: translateY(30px);
        -webkit-transition:all 200ms linear;
        -moz-transition:all 200ms linear;
        -ms-transition:all 200ms linear;
        -o-transition:all 200ms linear;
        transition:all 200ms linear;
        box-shadow:0px 0px 15px rgba(0,0,0,0.05);
    }

    .main-menu .navigation > li > ul > li{
        position:relative;
        width:100%;
        padding:0 25px;
    }

    .main-menu .navigation > li > ul > li:last-child a::after{
        display:none;
    }

    .main-menu .navigation > li > ul > li > a{
        position:relative;
        display:block;
        padding:12px 0px;
        line-height:19px;
        font-weight:600;
        font-size:15px;
        text-align:left;
        color:#222222;
        border-bottom: 1px solid #d8d8d8;
        text-transform:capitalize;
        -webkit-transition:all 300ms ease;
        -moz-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        transition:all 300ms ease;
        font-family: 'Lora', serif;
    }

    .main-menu .navigation > li > ul > li > a:after{
        content:'';
        position:absolute;
        right:0;
        bottom:-1px;
        width:0px;
        border-bottom:1px solid #004cda;
        transition:all 500ms ease;
        -moz-transition:all 500ms ease;
        -webkit-transition:all 500ms ease;
        -ms-transition:all 500ms ease;
        -o-transition:all 500ms ease;
    }

    .main-menu .navigation > li > ul > li:hover > a:after{
        width:100%;
    }

    .main-menu .navigation > li > ul > li:last-child > a{
        border-bottom:none;
        padding-bottom:0px;
    }

    .main-menu .navigation > li > ul > li:hover > a{
        color: #004cda;
    }

    .main-menu .navigation > li > ul > li.dropdown > a:after{
        font-family: 'Font Awesome 5 Free';
        content: "\f105";
        position:absolute;
        right:0px;
        top:12px;
        width:10px;
        display:block;
        line-height:19px;
        font-size:16px;
        font-weight:800;
        text-align:center;
        z-index:5;
    }

    .main-menu .navigation > li > ul > li > ul{
        position:absolute;
        left:100%;
        top: 0px;
        width:240px;
        z-index:100;
        opacity: 1;
        padding: 10px 0px 20px;
        background:#ffffff;
        -webkit-transform: translateY(30px);
        -ms-transform: translateY(30px);
        transform: translateY(30px);
        -webkit-transition:all 200ms linear;
        -moz-transition:all 200ms linear;
        -ms-transition:all 200ms linear;
        -o-transition:all 200ms linear;
        transition:all 200ms linear;
        box-shadow:0px 0px 15px rgba(0,0,0,0.05);
    }

    .main-menu .navigation > li > ul > li > ul > li{
        position:relative;
        width:100%;
        padding:0 25px;
    }

    .main-menu .navigation > li > ul > li  > ul > li > a{
        position:relative;
        display:block;
        padding:12px 0px;
        line-height:19px;
        font-weight:600;
        font-size:15px;
        text-align:left;
        color:#222222;
        border-bottom: 1px solid #d8d8d8;
        text-transform:capitalize;
        -webkit-transition:all 300ms ease;
        -moz-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        transition:all 300ms ease;
        font-family: 'Lora', serif;
    }

    .main-menu .navigation > li > ul > li  > ul > li > a:after{
        content:'';
        position:absolute;
        right:0;
        bottom:-1px;
        width:0px;
        border-bottom:1px solid #004cda;
        transition:all 500ms ease;
        -moz-transition:all 500ms ease;
        -webkit-transition:all 500ms ease;
        -ms-transition:all 500ms ease;
        -o-transition:all 500ms ease;
    }

    .main-menu .navigation > li > ul > li > ul > li:last-child > a:after{

    }

    .main-menu .navigation > li > ul > li > ul > li:hover > a:after{
        width:100%;
    }

    .main-menu .navigation > li > ul > li > ul > li:last-child > a{
        border-bottom:none;
        padding-bottom:0px;
    }

    .main-menu .navigation > li > ul > li > ul > li:hover > a{
        color: #004cda;
    }

    .main-menu .navigation > li.dropdown:hover > ul{
        visibility:visible;
        opacity:1;
        top: 100%;
        -webkit-transform: translateY(0px);
        -ms-transform: translateY(0px);
        transform: translateY(0px);
    }

    .main-menu .navigation > li > ul > li.dropdown:hover > ul{
        visibility:visible;
        opacity:1;
        top: 0px;
        -webkit-transform: translateY(0px);
        -ms-transform: translateY(0px);
        transform: translateY(0px);
    }

    .main-menu .navigation > li > ul > li.dropdown:hover > ul{
        visibility:visible;
        opacity:1;
        top:0px;
    }

    .main-menu .navbar-collapse > ul li.dropdown .dropdown-btn{
        position:absolute;
        right:10px;
        top:8px;
        width:34px;
        height:30px;
        border:1px solid #ffffff;
        text-align:center;
        font-size:18px;
        font-weight:700;
        line-height:28px;
        background:#ffffff;
        color:#004cda;
        cursor:pointer;
        z-index:5;
        display:none;
    }

    .main-header .outer-box{
        position: relative;
        float: right;
        padding: 46px 0px;
        margin-left:30px;
    }

    .fixed-header .outer-box{
        padding:0px;
    }

    .main-header .outer-box .search-box-btn{
        position:relative;
        float:left;
        cursor:pointer;
        margin:13px 0px;
    }

    .main-header .outer-box .search-box-btn .icon{
        position:relative;
        font-size:24px;
        color:#004cda;
    }

    .main-header .outer-box .btn-box{
        position: relative;
        float: right;
        margin-left: 30px;
        -webkit-transition:all 600ms ease;
        -moz-transition:all 600ms ease;
        -ms-transition:all 600ms ease;
        -o-transition:all 600ms ease;
        transition:all 600ms ease;
    }

    .main-header .outer-box .btn-box .theme-btn{
        position: relative;
        float: right;
    }

    .header-style-two{
        position: relative;
    }

    .main-header .header-upper .upper-right .info-outer{
        position:relative;
        padding-bottom:30px;
    }

    .main-header .info-box{
        position:relative;
        float:left;
        margin-right:60px;
        font-size:14px;
        color:#98b2c4;
        text-align:left;
        text-transform:uppercase;
        padding:0px 0px 0px 50px;
    }

    .main-header .info-box:last-child{
        margin:0px;
        padding:0px;
        float:right;
    }

    .main-header .info-box .icon-box{
        position:absolute;
        left:0px;
        top:8px;
        color:#004cda;
        font-size:34px;
        line-height:1em;
        -moz-transition:all 300ms ease;
        -webkit-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        -o-transition:all 300ms ease;
        transition:all 300ms ease;
    }

    .main-header .info-box li{
        position:relative;
        color:#777777;
        font-size:15px;
        font-weight:400;
        line-height:1.9em;
        text-transform:capitalize;
    }

    .main-header .info-box li span{
        font-weight:700;
        font-size:18px;
    }

    .main-header .info-box li a{
        color:#222222;
        font-size:20px;
        font-weight:700;
        font-family: 'Lora', serif;
    }


    .main-header.header-style-two .header-lower{
        background-color:#004cda;
    }

    .main-header.header-style-two .nav-outer{
        width:100%;
    }

    .main-header.header-style-two .header-upper .logo-box{
        padding:30px 0px;
        margin:0px;
    }

    .main-header.header-style-two .outer-box{
        padding:0px;
    }

    .main-header.header-style-two .header-lower .search-box-outer{
        margin-top:23px;
        margin-right:20px;
    }

    .main-header.header-style-two .header-upper .upper-right{
        padding-left:0px;
        padding-top:38px;
    }

    .option-box{
        position: relative;
        float: left;
        margin-top: 0px;
        margin-left: 25px;
    }

    .main-header .outer-box .option-box > li{
        position: relative;
        margin-left: 20px;
        display: inline-block;
    }

    .main-header .outer-box .option-box .cart-box{
        position:relative;
        float:left;
        color:#ffffff;
        font-size:16px;
        background:none;
        margin-top:18px;
        display:inline-block;
        margin-right: 25px;
    }

    .main-header .outer-box .option-box .cart-box .cart-box-btn{
        background:none;
        color:#ffffff;
        cursor: pointer;
        font-size: 20px;
        transition: all 300ms ease;
        -webkit-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
    }

    .main-header .outer-box .option-box .cart-box .cart-box-btn:after{
        display:none;
    }

    .main-header .outer-box .option-box .cart-box .cart-box-btn .total-cart{
        position:absolute;
        right: -8px;
        top: -8px;
        width:18px;
        height:18px;
        color:#ffffff;
        font-weight:700;
        font-size:12px;
        border-radius:50%;
        text-align:center;
        line-height:18px;
        background-color:#222222;
    }

    .main-header .outer-box .option-box .cart-box .cart-box-btn:hover{
        color:#222222;
    }

    .main-header .outer-box .option-box .cart-product{
        position:relative;
        margin-bottom:18px;
        min-height:90px;
        border-bottom:1px solid #e4e4e4;
    }

    .main-header .outer-box .option-box .cart-product .inner{
        position:relative;
        padding-left:90px;
        min-height:70px;
    }

    .main-header .outer-box .option-box .cart-product .inner .cross-icon{
        position:absolute;
        right:0px;
        top:-2px;
        z-index:1;
        color:#263120;
        font-size:16px;
        cursor:pointer;
        transition:all 500ms ease;
        -moz-transition:all 500ms ease;
        -webkit-transition:all 500ms ease;
        -ms-transition:all 500ms ease;
        -o-transition:all 500ms ease;
    }

    .main-header .outer-box .option-box .cart-product .inner .cross-icon:hover{
        color:#0056b3;
    }

    .main-header .outer-box .option-box .cart-product .inner .image{
        position:absolute;
        width:70px;
        height:70px;
        left:0px;
        top:0px;
    }

    .main-header .outer-box .option-box .cart-product .inner h3{
        position:relative;
        font-weight:600;
        font-size:15px;
        margin:0px;
        letter-spacing: 1px;
        text-transform:capitalize;
    }

    .main-header .outer-box .option-box .cart-product .inner h3 a{
        color:#222222;
        transition: all 300ms ease;
        -webkit-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
    }

    .main-header .outer-box .option-box .cart-product .inner h3 a:hover{
        color:#004cda;
    }

    .main-header .outer-box .option-box .cart-product .inner .quantity-text{
        position:relative;
        font-weight:300;
        color:#666666;
        font-size: 13px;
        margin-bottom: 0px;
    }

    .main-header .outer-box .option-box .cart-product .inner .price{
        position:relative;
        font-weight:700;
        font-size:16px;
        margin:0px;
        color:#222222;
    }

    .main-header .outer-box .option-box .cart-box .cart-panel{
        left: auto !important;
        right: 0px !important;
        border-radius:0px;
        padding:20px 20px;
        min-width:300px;
        margin-top:34px;
        z-index: -1;
        box-shadow: 0px 0px 25px rgba(0,0,0,0.15);
        border:3px solid #004cda;
        -webkit-transform: translate3d(0px, 0px, 0px) !important;
        transform: translate3d(0px, 0px, 0px) !important;
    }

    .main-header .outer-box .option-box .cart-box .cart-panel .cart-total{
        color:#000000;
        font-size:15px;
        font-weight:400;
        text-align:center;
        text-transform:capitalize;
    }

    .main-header .outer-box .option-box .cart-box .cart-panel .cart-total span{
        font-weight:800;
        font-size:18px;
    }

    .main-header .outer-box .option-box .cart-box .cart-panel .btns-boxed{
        position:relative;
        text-align:center;
        margin-top:20px;
    }

    .main-header .outer-box .option-box .cart-box .cart-panel .btns-boxed li{
        position:relative;
        margin:0px 5px;
        display:inline-block;
    }

    .main-header .outer-box .option-box .cart-box .cart-panel .btns-boxed li a{
        position:relative;
        color:#ffffff;
        font-weight:500;
        font-size:12px;
        padding:10px 20px 8px;
        border-radius: 2px;
        display:inline-block;
        background-color:#004cda;
        border:1px solid #004cda;
        text-transform:uppercase;
        transition: all 300ms ease;
        -webkit-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
    }

    .main-header .outer-box .option-box .cart-box .cart-panel .btns-boxed li a:hover{
        color:#004cda;
        background:none;
    }

    .main-header .outer-box .option-box .cart-box .icon a{
        color:#999999;
    }

    .header-style-two .outer-box .search-box-btn{
        position:relative;
        margin:0px;
        padding:13px 15px;
        background-color:#ffffff;
    }

    .header-style-two .outer-box .search-box-btn .icon{
        position:relative;
        color:#000000;
        font-size:20px;
    }

    .header-style-two .outer-box .nav-box{
        position:relative;
        float:left;
        color:#ffffff;
        font-size:28px;
        cursor:pointer;
        margin:14px 0px 14px 20px;
    }

    .header-style-two .main-menu .navigation > li{
        padding:8px 20px;
        margin-right:1px;
    }

    .header-style-two .main-menu .navigation > li > a{
        font-size:16px;
        color:#ffffff;
    }

    .header-style-two .main-menu .navigation > li > a:before{
        display:none;
    }

    .header-style-two .main-menu .navigation > li.current,
    .header-style-two .main-menu .navigation > li:hover{
        background-color:#000000;
    }

    .header-style-two.fixed-header .main-menu .navigation > li.current,
    .header-style-two.fixed-header .main-menu .navigation > li:hover{
        background:none;
    }

    .header-style-three.fixed-header .main-menu .navigation > li.current a,
    .header-style-three.fixed-header .main-menu .navigation > li:hover a{
        background:none;
    }

    .header-style-two.fixed-header .main-menu .navigation > li.current a,
    .header-style-two.fixed-header .main-menu .navigation > li:hover a,
    .header-style-three.fixed-header .main-menu .navigation > li.current a,
    .header-style-three.fixed-header .main-menu .navigation > li:hover a{
        color:#222222 !important;
    }

    .header-style-two .main-menu .navigation > li:hover > a,
    .header-style-two .main-menu .navigation > li.current > a{
        color:#ffffff !important;
    }

    .header-style-two .header-lower .outer-box .social-box{
        position:relative;
        float:left;
        margin-top:16px;
        margin-right:15px;
    }

    .header-style-two .header-lower .outer-box .social-box li{
        position:relative;
        margin:0px 7px;
        display:inline-block;
    }

    .header-style-two .header-lower .outer-box .social-box li a{
        position:relative;
        color:#ffffff;
        font-size:14px;
    }

    .header-style-three{
        position:absolute;
        left:0px;
        width:100%;
    }

    .header-style-three .inner-container{
        padding:0px 70px;
    }

    .header-style-three .header-upper .nav-outer{
        padding-left:60px;
    }

    .header-style-three .main-menu .navigation > li > a:before{
        display:none;
    }

    .header-style-three .main-menu .navigation > li{
        margin-right:2px;
    }

    .header-style-three .main-menu .navigation > li > a{
        color:#ffffff;
        padding:0px 10px;
        border-radius:4px;
    }

    .header-style-three .main-menu .navigation > li.current > a,
    .header-style-three .main-menu .navigation > li:hover > a{
        background-color:#222222;
    }

    .header-style-three .main-menu .navigation > li:hover > a,
    .header-style-three .main-menu .navigation > li.current > a{
        color:#ffffff !important;
    }

    .header-style-three .outer-box .nav-box{
        position:relative;
        float:left;
        color:#ffffff;
        font-size:26px;
        margin:10px 0px;
        cursor:pointer;
    }

    .header-style-three .social-box{
        position:relative;
        float:left;
        margin-left:15px;
        margin-right:10px;
    }

    .header-style-three .social-box li{
        position:relative;
        float:left;
        margin:0px 4px;
    }

    .header-style-three .social-box li a{
        position:relative;
        width:40px;
        height:40px;
        color:#004cd9;
        font-size:14px;
        line-height:40px;
        text-align:center;
        border-radius:50px;
        display:inline-block;
        background-color:#ebebeb;
        -webkit-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        transition: all 300ms ease;
    }

    .header-style-three .social-box li a:hover{
        background-color:#ffffff;
    }

    .header-style-three .outer-box .search-box-btn{
        margin:0px;
        width:40px;
        height:40px;
        cursor:pointer;
        line-height:38px;
        text-align:center;
        border-radius:50%;
        background-color:#ffffff;
    }

    .header-style-three .outer-box .search-box-btn .icon{
        color:#004cd9;
        font-size:18px;
    }

    .close-side-widget{
        color:#ffffff;
    }

    /***

====================================================================
				Sticky Header
====================================================================

***/

    .sticky-header{
        position: fixed;
        visibility: hidden;
        opacity: 0;
        left: 0px;
        top: 0px;
        width: 100%;
        padding: 0px 0px;
        z-index: -1;
        background: #ffffff;
        -webkit-box-shadow: 0 0 15px rgba(0,0,0,0.10);
        -moz-box-shadow: 0 0 15px rgba(0,0,0,0.10);
        -ms-box-shadow: 0 0 15px rgba(0,0,0,0.10);
        -o-box-shadow: 0 0 15px rgba(0,0,0,0.10);
        box-shadow: 0 0 15px rgba(0,0,0,0.10);
        -webkit-transition: top 300ms ease;
        -moz-transition: top 300ms ease;
        -ms-transition: top 300ms ease;
        -o-transition: top 300ms ease;
        transition: top 300ms ease;
    }

    .fixed-header .sticky-header{
        opacity:1;
        z-index: 99999;
        visibility:visible;
    }

    .fixed-header .sticky-header .logo{
        padding: 13px 0px;
    }

    .sticky-header .main-menu .navigation > li{
        margin-left: 32px;
        padding: 0px;
        margin-right: 0px;
        background-color: transparent;
    }

    .sticky-header .main-menu .navigation > li > a:before,
    .sticky-header .main-menu .navigation > li:after{
        display: none !important;
    }

    .sticky-header .main-menu .navigation > li > a{
        padding:23px 0px !important;
        line-height:30px;
        font-size:16px;
        font-weight:600;
        color:#222222;
        text-transform:capitalize;
        -webkit-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        transition: all 300ms ease;
    }

    .sticky-header .main-menu .navigation > li:hover > a,
    .sticky-header .main-menu .navigation > li.current > a,
    .sticky-header .main-menu .navigation > li.current-menu-item > a{
        opacity:1;
        color: #004cda;
    }

    /***

====================================================================
		Mobile Menu Style
====================================================================

***/

    .nav-outer .mobile-nav-toggler{
        position: relative;
        display: none;
    }

    .nav-outer .mobile-nav-toggler .icon{
        display: block;
        font-size: 30px;
        line-height: 40px;
        cursor: pointer;
        padding:14px 0px;
        color:#004cda;
    }

    .mobile-menu{
        position: fixed;
        right: 0;
        top: 0;
        width: 300px;
        padding-right:30px;
        max-width:100%;
        height: 100%;
        opacity: 0;
        visibility: hidden;
        z-index: 999999;
    }

    .mobile-menu .nav-logo{
        position:relative;
        padding:20px 20px;
        text-align:left;
    }

    .mobile-menu-visible{
        overflow: hidden;
    }

    .mobile-menu-visible .mobile-menu{
        opacity: 1;
        visibility: visible;
    }

    .mobile-menu .menu-backdrop{
        position: fixed;
        right: 0;
        top: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
        background: rgba(0,0,0,0.90);
        -webkit-transform: translateX(101%);
        -ms-transform: translateX(101%);
        transform: translateX(101%);
        transition: all 900ms ease;
        -moz-transition: all 900ms ease;
        -webkit-transition: all 900ms ease;
        -ms-transition: all 900ms ease;
        -o-transition: all 900ms ease;
    }

    .mobile-menu-visible .mobile-menu .menu-backdrop{
        opacity: 1;
        visibility: visible;
        -webkit-transition:all 0.7s ease;
        -moz-transition:all 0.7s ease;
        -ms-transition:all 0.7s ease;
        -o-transition:all 0.7s ease;
        transition:all 0.7s ease;
        -webkit-transform: translateX(0%);
        -ms-transform: translateX(0%);
        transform: translateX(0%);
    }

    .mobile-menu .menu-box{
        position: absolute;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        max-height: 100%;
        overflow-y: auto;
        background: #ffffff;
        padding: 0px 0px;
        z-index: 5;
        opacity: 0;
        visibility: hidden;
        border-radius: 0px;
        -webkit-transform: translateX(101%);
        -ms-transform: translateX(101%);
        transform: translateX(101%);
    }

    .mobile-menu-visible .mobile-menu .menu-box{
        opacity: 1;
        visibility: visible;
        -webkit-transition:all 0.7s ease;
        -moz-transition:all 0.7s ease;
        -ms-transition:all 0.7s ease;
        -o-transition:all 0.7s ease;
        transition:all 0.7s ease;
        -webkit-transform: translateX(0%);
        -ms-transform: translateX(0%);
        transform: translateX(0%);
    }

    .mobile-menu .close-btn{
        position: absolute;
        right: 8px;
        top: 3px;
        line-height: 30px;
        width: 30px;
        text-align: center;
        font-size: 32px;
        color: #202020;
        cursor: pointer;
        z-index: 10;
        -webkit-transition:all 0.5s ease;
        -moz-transition:all 0.5s ease;
        -ms-transition:all 0.5s ease;
        -o-transition:all 0.5s ease;
        transition:all 0.5s ease;
        -webkit-transform: translateY(-50px);
        -ms-transform: translateY(-50px);
        transform: translateY(-50px);
    }

    .mobile-menu-visible .mobile-menu .close-btn{
        -webkit-transform: translateY(0px);
        -ms-transform: translateY(0px);
        transform: translateY(0px);
    }

    .mobile-menu .close-btn:hover{
        opacity: 0.50;
    }

    .mobile-menu .navigation{
        position: relative;
        display: block;
        border-top: 1px solid rgba(0,0,0,0.10);
    }

    .mobile-menu .navigation li{
        position: relative;
        display: block;
        border-bottom: 1px solid rgba(0,0,0,0.10);
    }

    .mobile-menu .navigation li > ul > li:last-child{
        border-bottom: none;
    }

    .mobile-menu .navigation li > ul > li:first-child{
        border-top: 1px solid rgba(0,0,0,0.10);
    }

    .mobile-menu .navigation li > a{
        position: relative;
        display: block;
        line-height: 24px;
        padding: 10px 20px;
        font-size: 15px;
        color: #404040;
        text-transform: capitalize;
    }

    .mobile-menu .navigation li.current > a,
    .mobile-menu .navigation li > a:hover{
        color:#004cda;
    }

    .mobile-menu .navigation li.dropdown .dropdown-btn{
        position:absolute;
        right:0px;
        top:0px;
        width:44px;
        height:44px;
        text-align:center;
        font-size:16px;
        line-height:44px;
        color:#404040;
        cursor:pointer;
        z-index:5;
    }

    .mobile-menu .navigation li.dropdown .dropdown-btn:after{
        content:'';
        position:absolute;
        left:0px;
        top:10px;
        width:1px;
        height:24px;
        border-left:1px solid rgba(0,0,0,0.10);
    }

    .mobile-menu .navigation li > ul,
    .mobile-menu .navigation li > ul > li > ul{
        display: none;
    }

    /***

====================================================================
	Search Popup
====================================================================

***/

    .search-popup{
        position:fixed;
        left:0px;
        top:-100%;
        width:100%;
        height:100%;
        z-index:9999;
        visibility:hidden;
        opacity:0;
        overflow:auto;
        background:rgba(0,0,0,0.80);
        transition:all 700ms ease;
        -moz-transition:all 700ms ease;
        -webkit-transition:all 700ms ease;
        -ms-transition:all 700ms ease;
        -o-transition:all 700ms ease;
    }

    .search-popup .overlay-layer{
        position:absolute;
        left:0px;
        top:0px;
        right:0px;
        bottom:0px;
        display:block;
    }

    .search-popup.popup-visible{
        top:0;
        visibility:visible;
        opacity:1;
    }

    .search-popup .close-search{
        position:absolute;
        right:25px;
        top:25px;
        font-size:22px;
        color:#ffffff;
        cursor:pointer;
        z-index:5;
    }

    .search-popup .close-search:hover{
        opacity:0.70;
    }

    .search-popup .search-form{
        position:relative;
        padding:0px 15px 0px;
        max-width:1024px;
        margin:0 auto;
        margin-top:200px;
    }

    .search-popup .search-form fieldset{
        position:relative;
        border:7px solid rgba(255,255,255,0.50);
        border-radius:12px;
        -webkit-border-radius:12px;
        -ms-border-radius:12px;
        -o-border-radius:12px;
        -moz-border-radius:12px;
    }

    .search-popup .search-form fieldset input[type="search"]{
        position:relative;
        height:70px;
        padding:20px 220px 20px 30px;
        background:#ffffff;
        line-height:30px;
        font-size:24px;
        color:#233145;
        border-radius:7px;
        -webkit-border-radius:7px;
        -ms-border-radius:7px;
        -o-border-radius:7px;
        -moz-border-radius:7px;
    }

    .search-popup .search-form fieldset input[type="submit"]{
        position:absolute;
        display:block;
        right:0px;
        top:0px;
        text-align:center;
        width:220px;
        height:70px;
        padding:20px 10px 20px 10px;
        color:#ffffff !important;
        background-color:#004cda;
        line-height:30px;
        font-size:20px;
        color:#233145;
        cursor:pointer;
        text-transform:uppercase;
        border-radius:0px 7px 7px 0px;
        -moz-border-radius:0px 7px 7px 0px;
        -ms-border-radius:0px 7px 7px 0px;
        -o-border-radius:0px 7px 7px 0px;
        -webkit-border-radius:0px 7px 7px 0px;
    }

    .search-popup .search-form fieldset input[type="submit"]:hover{
        background:#004cda;
    }

    .search-popup h3{
        font-size:24px;
        color:#ffffff;
        margin-bottom:20px;
        text-align:center;
    }

    .search-popup .recent-searches{
        font-size:16px;
        color:#ffffff;
        text-align:center;
    }

    .search-popup .recent-searches li{
        display:inline-block;
        margin:0px 10px 10px 0px;
    }

    .search-popup .recent-searches li a{
        display:block;
        line-height:24px;
        border:1px solid #ffffff;
        padding:7px 15px;
        color:#ffffff;
        border-radius:3px;
    }

    .search-popup .recent-searches li a:hover{
        color:#004cda;
        border-color:#004cda;
    }

    /***

====================================================================
		Section Title
====================================================================

***/

    .sec-title{
        position:relative;
        z-index: 1;
        margin-bottom:55px;
    }

    .sec-title h2{
        position: relative;
        display: block;
        font-size:36px;
        line-height: 1.2em;
        color: #222222;
        font-weight: 700;
        padding-bottom:25px;
        text-transform:capitalize;
    }

    .sec-title .separator{
        position:relative;
        width:100px;
    }

    .sec-title .separator:before{
        position:absolute;
        content:'';
        left:0px;
        top:0px;
        width:100%;
        height:1px;
        background-color:#cccccc;
    }

    .sec-title .separator:after{
        position:absolute;
        content:'';
        left:50%;
        top:-15px;
        width:30px;
        height:30px;
        margin-left:-15px;
        border:10px solid #ffffff;
        background-color:#004cda;
    }

    .sec-title.light .separator:after{
        background-color:#222222;
    }

    .sec-title .separator.style-two::after{
        border-color:#f5f5f5;
    }

    .sec-title .separator.style-three::after{
        border-color:#fafafa;
    }

    .sec-title.centered .separator{
        margin:0 auto;
    }

    .sec-title.light h2,
    .sec-title.light .title{
        color: #ffffff;
    }

    .sec-title.centered{
        text-align:center;
    }

    .sec-title.style-two .title{
        text-transform:capitalize;
        color:#004cda;
        font-size:20px;
    }

    /***

====================================================================
	Main Slider
====================================================================

***/

    .main-slider{
        position: relative;
    }

    .main-slider:before{
        position: absolute;
        content:'';
        left:0px;
        bottom:0px;
        width:100%;
        height:90px;
        z-index:10;
        background:url(../images/background/pattern-1.png) repeat-x;
    }

    .main-slider:after{
        position: absolute;
        content:'';
        left:0px;
        bottom:0px;
        width:100%;
        height:93px;
        z-index:10;
        background:url(../images/background/dotted-line.png) repeat-x;
    }

    .main-slider .slide{
        position:relative;
        padding:225px 0px 225px;
        background-size:cover;
        background-repeat:no-repeat;
        background-position:center center;
    }

    .main-slider .content{
        position:relative;
        z-index:10;
    }

    .main-slider .content .title{
        position:relative;
        font-size:18px;
        color:#222222;
        font-weight:700;
        line-height:1em;
        opacity: 0;
        -webkit-transition: all 1000ms ease;
        -moz-transition: all 100ms ease;
        -ms-transition: all 1000ms ease;
        -o-transition: all 1000ms ease;
        transition: all 1000ms ease;
        -webkit-transform: translateX(80px);
        -moz-transform: translateX(80px);
        -ms-transform: translateX(80px);
        -o-transform: translateX(80px);
        transform: translateX(80px);
    }

    .main-slider .swiper-slide-active .content .title{
        opacity: 1;
        -webkit-transform: translateY(0);
        -moz-transform: translateY(0);
        -ms-transform: translateY(0);
        -o-transform: translateY(0);
        transform: translateY(0);
        transition-delay: 600ms;
    }

    .main-slider .content h2{
        position:relative;
        font-size:48px;
        color:#004cda;
        font-weight:700;
        line-height:1em;
        opacity: 0;
        margin-top:25px;
        -webkit-transition: all 1000ms ease;
        -moz-transition: all 100ms ease;
        -ms-transition: all 1000ms ease;
        -o-transition: all 1000ms ease;
        transition: all 1000ms ease;
        -webkit-transform: translateX(80px);
        -moz-transform: translateX(80px);
        -ms-transform: translateX(80px);
        -o-transform: translateX(80px);
        transform: translateX(80px);
    }

    .main-slider .swiper-slide-active .content h2{
        opacity: 1;
        -webkit-transform: translateY(0);
        -moz-transform: translateY(0);
        -ms-transform: translateY(0);
        -o-transform: translateY(0);
        transform: translateY(0);
        transition-delay: 1200ms;
    }

    .main-slider .content .text{
        position:relative;
        font-size:16px;
        color:#777777;
        font-weight:400;
        line-height:1.8em;
        max-width:600px;
        margin-top:25px;
        margin-bottom:30px;
        opacity: 0;
        -webkit-transition: all 1000ms ease;
        -moz-transition: all 100ms ease;
        -ms-transition: all 1000ms ease;
        -o-transition: all 1000ms ease;
        transition: all 1000ms ease;
        -webkit-transform: translateX(-80px);
        -moz-transform: translateX(-80px);
        -ms-transform: translateX(-80px);
        -o-transform: translateX(-80px);
        transform: translateX(-80px);
    }

    .main-slider .swiper-slide-active .content .text{
        opacity: 1;
        -webkit-transform: translateX(0);
        -moz-transform: translateX(0);
        -ms-transform: translateX(0);
        -o-transform: translateX(0);
        transform: translateX(0);
        transition-delay: 1000ms;
    }

    .main-slider .btn-box{
        position:relative;
        opacity: 0;
        -webkit-transition: all 1000ms ease;
        -moz-transition: all 100ms ease;
        -ms-transition: all 1000ms ease;
        -o-transition: all 1000ms ease;
        transition: all 1000ms ease;
        -webkit-transform: translateY(-80px);
        -moz-transform: translateY(80px);
        -ms-transform: translateY(80px);
        -o-transform: translateY(80px);
        transform: translateY(80px);
    }

    .main-slider .btn-box .theme-btn{
        float:left;
        margin:0px 30px 15px 0px;
    }

    .main-slider .swiper-slide-active .btn-box{
        opacity: 1;
        -webkit-transform: translateY(0);
        -moz-transform: translateY(0);
        -ms-transform: translateY(0);
        -o-transform: translateY(0);
        transform: translateY(0);
        transition-delay: 1500ms;
    }

    .main-slider .swiper-button-next{
        right:40px;
        width:50px;
        height:50px;
        font-size:16px;
        line-height:49px;
        border-radius:50%;
        text-align:center;
        background-image:none;
        -webkit-transition:all 0.5s ease;
        -moz-transition:all 0.5s ease;
        -ms-transition:all 0.5s ease;
        -o-transition:all 0.5s ease;
        transition:all 0.5s ease;
        border:1px solid #004cda;
    }

    .main-slider .swiper-button-next:before{
        position:absolute;
        content: "\f14e";
        left:0px;
        top:0px;
        width:50px;
        color:#004cda;
        font-size:16px;
        font-weight:700;
        -webkit-transition:all 0.5s ease;
        -moz-transition:all 0.5s ease;
        -ms-transition:all 0.5s ease;
        -o-transition:all 0.5s ease;
        transition:all 0.5s ease;
        font-family: "Flaticon";
    }

    .main-slider .swiper-button-prev{
        left:40px;
        width:50px;
        height:50px;
        font-size:16px;
        border-radius:50%;
        text-align:center;
        line-height:49px;
        -webkit-transition:all 0.5s ease;
        -moz-transition:all 0.5s ease;
        -ms-transition:all 0.5s ease;
        -o-transition:all 0.5s ease;
        transition:all 0.5s ease;
        background-image:none;
        border:1px solid #004cda;
    }

    .main-slider .swiper-button-prev:before{
        position:absolute;
        content: "\f14f";
        left:0px;
        top:0px;
        width:50px;
        height:50px;
        color:#004cda;
        font-size:16px;
        font-weight:700;
        -webkit-transition:all 0.5s ease;
        -moz-transition:all 0.5s ease;
        -ms-transition:all 0.5s ease;
        -o-transition:all 0.5s ease;
        transition:all 0.5s ease;
        font-family: "Flaticon";
    }

    .main-slider .swiper-button-next:hover,
    .main-slider .swiper-button-prev:hover{
        background-color:#004cda;
    }

    .main-slider .swiper-button-next:hover::before,
    .main-slider .swiper-button-prev:hover::before{
        color:#ffffff;
    }

    .main-slider .swiper-pagination-progressbar .swiper-pagination-progressbar-fill{
        background:#004cda;
    }

    /***

====================================================================
	Department Section
====================================================================

***/

    .department-section{
        position:relative;
        padding:100px 0px 100px;
    }

    .department-section .owl-nav{
        display:none;
    }

    .department-section .owl-dots{
        position:relative;
        margin-top:70px;
        text-align:center;
    }

    .department-section .owl-dots .owl-dot{
        position:relative;
        width:10px;
        height:10px;
        margin:0px 5px;
        border-radius:50px;
        display:inline-block;
        background-color:#cccccc;
        transition:all 300ms ease;
        -moz-transition:all 300ms ease;
        -webkit-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        -o-transition:all 300ms ease;
    }

    .department-section .owl-dots .owl-dot.active,
    .department-section .owl-dots .owl-dot:hover{
        background-color:#004cda;
    }

    .department-block{
        position:relative;
    }

    .department-block .inner-box{
        position:relative;
        overflow:hidden;
        border-radius:10px;
        padding:45px 45px 40px;
        border:1px solid #dddddd;
    }

    .department-block .inner-box:before{
        position:absolute;
        content:'';
        left:0px;
        top:0px;
        width:0px;
        height:100%;
        background-color:#004cda;
        transition:all 900ms ease;
        -moz-transition:all 900ms ease;
        -webkit-transition:all 900ms ease;
        -ms-transition:all 900ms ease;
        -o-transition:all 900ms ease;
    }

    .department-block .inner-box:hover::before{
        width:100%;
    }

    .department-block .inner-box .upper-box{
        position:relative;
        padding-top:20px;
        padding-left:95px;
    }

    .department-block .inner-box .upper-box .icon{
        position:absolute;
        left:0px;
        top:0px;
        color:#b0b0b0;
        font-size:66px;
        line-height:1em;
        transition:all 300ms ease;
        -moz-transition:all 300ms ease;
        -webkit-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        -o-transition:all 300ms ease;
    }

    .department-block .inner-box .upper-box h3{
        position:relative;
        font-size:24px;
        color:#222222;
        font-weight:700;
        line-height:1.3em;
    }

    .department-block .inner-box .upper-box h3 a{
        position:relative;
        color:#222222;
        transition:all 300ms ease;
        -moz-transition:all 300ms ease;
        -webkit-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        -o-transition:all 300ms ease;
    }

    .department-block .inner-box .text{
        position:relative;
        color:#777777;
        font-size:16px;
        line-height:1.8em;
        margin-top:35px;
        margin-bottom:40px;
        transition:all 300ms ease;
        -moz-transition:all 300ms ease;
        -webkit-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        -o-transition:all 300ms ease;
    }

    .department-block .inner-box .read-outer{
        position:relative;
    }

    .department-block .inner-box .read-outer:before{
        position:absolute;
        content:'';
        left:0px;
        top:11px;
        width:100%;
        height:1px;
        background-color:#dddddd;
    }

    .department-block .inner-box .read-outer .read-more{
        position:relative;
        color:#004cda;
        font-size:16px;
        font-weight:700;
        padding-right:30px;
        display:inline-block;
        background-color:#ffffff;
        font-family: 'Lora', serif;
        transition:all 900ms ease;
        -moz-transition:all 900ms ease;
        -webkit-transition:all 900ms ease;
        -ms-transition:all 900ms ease;
        -o-transition:all 900ms ease;
    }

    .department-block .inner-box:hover{
        border-color:#004cda;
    }

    .department-block .inner-box:hover .text,
    .department-block .inner-box:hover .upper-box h3 a,
    .department-block .inner-box:hover .upper-box .icon,
    .department-block .inner-box:hover .read-outer .read-more{
        color:#ffffff;
    }

    .department-block .inner-box:hover .read-outer:before{
        background-color:#ffffff;
    }

    .department-block .inner-box:hover .read-outer .read-more{
        background-color:#004cda;
    }

    /***

====================================================================
	Fluid Section One
====================================================================

***/

    .fluid-section-one{
        position:relative;
    }

    .fluid-section-one .outer-section{
        position:relative;
        background-color:#f5f5f5;
    }

    .fluid-section-one .image-column{
        position: absolute;
        left: 0px;
        top:0px;
        width: 50%;
        bottom:50px;
        float:right;
        height:100%;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: right center;
    }

    .fluid-section-one .image-column .image{
        width: 100%;
        display: none;
    }

    .fluid-section-one .image-column .image img{
        display: block;
        width: 100%;
    }

    /*Content Column*/

    .fluid-section-one .content-column{
        position: relative;
        width: 50%;
        float:right;
    }

    .fluid-section-one .content-column .content-box{
        position:relative;
        max-width:720px;
        width:100%;
        float:left;
        z-index:2;
        margin:0 auto;
        padding:95px 15px 80px 110px;
    }

    .fluid-section-one .content-column .sec-title{
        margin-bottom:40px;
    }

    .fluid-section-one .content-column .text{
        position:relative;
        margin-bottom:45px;
    }

    .fluid-section-one .content-column .text p{
        position:relative;
        color:#777777;
        font-size:16px;
        line-height:1.7em;
        margin-bottom:20px;
    }

    .fluid-section-one .content-column .text p:last-child{
        margin-bottom:0px;
    }

    /* Services Section */

    .services-section{
        position:relative;
        padding:105px 0px 25px;
    }

    .services-section .left-column{
        position:relative;
    }

    .services-section .left-column .inner-column{
        position:relative;
    }

    .services-section .left-column .inner-column .service-block:nth-child(1),
    .services-section .left-column .inner-column .service-block:nth-child(3){
        margin-right:-80px;
    }

    .services-section .left-column .inner-column .service-block:nth-child(2){
        margin-right:22px;
    }

    .service-block{
        position:relative;
        margin-bottom:90px;
    }

    .service-block .inner-box{
        position:relative;
        text-align:right;
        padding-right:80px;
    }

    .service-block .inner-box .icon-box{
        position:absolute;
        right:0px;
        top:5px;
        color:#7d7d7d;
        font-size:56px;
        line-height:1em;
    }

    .service-block .inner-box h3{
        position:relative;
        color:#222222;
        font-size:20px;
        font-weight:700;
        line-height:1.3em;
    }

    .service-block .inner-box h3 a{
        position:relative;
        color:#222222;
        -webkit-transition:all 300ms ease;
        -moz-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        transition:all 300ms ease;
    }

    .service-block .inner-box h3 a:hover{
        color:#0e56dc;
    }

    .service-block .inner-box .text{
        position:relative;
        color:#777777;
        font-size:16px;
        line-height:1.7em;
        margin-top:12px;
    }

    /* Right Column */

    .services-section .right-column{
        position:relative;
    }

    .services-section .right-column .inner-column{
        position:relative;
    }

    .services-section .right-column .inner-column .service-block-two:nth-child(1),
    .services-section .right-column .inner-column .service-block-two:nth-child(3){
        margin-left:-80px;
    }

    .services-section .right-column .inner-column .service-block-two:nth-child(2){
        margin-left:22px;
    }

    .service-block-two{
        position:relative;
        margin-bottom:90px;
    }

    .service-block-two .inner-box{
        position:relative;
        padding-left:80px;
    }

    .service-block-two .inner-box .icon-box{
        position:absolute;
        left:0px;
        top:5px;
        color:#7d7d7d;
        font-size:56px;
        line-height:1em;
    }

    .service-block-two .inner-box h3{
        position:relative;
        color:#222222;
        font-size:20px;
        font-weight:700;
        line-height:1.3em;
    }

    .service-block-two .inner-box h3 a{
        position:relative;
        color:#222222;
        -webkit-transition:all 300ms ease;
        -moz-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        transition:all 300ms ease;
    }

    .service-block-two .inner-box h3 a:hover{
        color:#0e56dc;
    }

    .service-block-two .inner-box .text{
        position:relative;
        color:#777777;
        font-size:16px;
        line-height:1.7em;
        margin-top:12px;
    }

    .services-section .circles-column{
        position:relative;
    }

    .services-section .circles-column .inner-column{
        position:relative;
        text-align:center;
        padding-top:105px;
    }

    .services-section .circles-column .circles{
        position:relative;
    }

    .services-section .circles-column .circles .circle-one{
        position:relative;
        width:280px;
        height:280px;
        border-radius:50%;
        margin:0 auto;
        border:2px solid #ececec;
    }

    .services-section .circles-column .circles .circle-one:before{
        position:absolute;
        content:'';
        left:32px;
        top:32px;
        width:14px;
        height:14px;
        border-radius:50%;
        border:1px solid #004cda;
        background-color:#ffffff;
    }

    .services-section .circles-column .circles .circle-one:after{
        position:absolute;
        content:'';
        right:32px;
        bottom:32px;
        width:14px;
        height:14px;
        border-radius:50%;
        border:2px solid #e1e1e1;
        background-color:#ffffff;
    }

    .services-section .circles-column .circles .circle-two{
        position:absolute;
        left:50%;
        top:40px;
        width:200px;
        height:200px;
        border-radius:50%;
        margin:0 auto;
        margin-left:-100px;
        border:2px solid #ececec;
    }

    .services-section .circles-column .circles .circle-two:before{
        position:absolute;
        content:'';
        right:22px;
        top:22px;
        width:14px;
        height:14px;
        border-radius:50%;
        background-color:#0e56dc;
    }

    .services-section .circles-column .circles .circle-two:after{
        position:absolute;
        content:'';
        left:22px;
        bottom:22px;
        width:14px;
        height:14px;
        border-radius:50%;
        background-color:#e1e1e1;
    }

    .services-section .circles-column .circles .circle-three{
        position:absolute;
        left:50%;
        top:90px;
        width:100px;
        height:100px;
        border-radius:50%;
        margin:0 auto;
        margin-left:-50px;
        border:2px solid #ececec;
    }

    .services-section .circles-column .circles .circle-three:before{
        position:absolute;
        content:'';
        left:-7px;
        top:32px;
        width:14px;
        height:14px;
        border-radius:50%;
        background-color:#000222;
    }

    /***

====================================================================
	Counter Section
====================================================================

***/

    .counter-section{
        position:relative;
        padding:90px 0px 60px;
        background-color:#004cda;
        background-repeat:no-repeat;
        background-size:cover;
    }

    .counter-section.style-two{
        padding-bottom:270px;
    }

    /*fact counter*/

    .fact-counter{
        position:relative;
    }

    .fact-counter .column{
        position:relative;
        margin-bottom:30px;
    }

    .fact-counter .column .inner{
        position:relative;
    }

    .fact-counter .column .inner .content{
        position:relative;
        text-align:center;
    }

    .fact-counter .column .inner .icon{
        position:absolute;
        left:0px;
        top:10px;
        color:#ffffff;
        font-size:60px;
        text-align:center;
        line-height:1em;
        font-weight: 400;
        margin-bottom:0px;
        transition:all 0.3s ease;
        -moz-transition:all 0.3s ease;
        -webkit-transition:all 0.3s ease;
        -ms-transition:all 0.3s ease;
        -o-transition:all 0.3s ease;
    }

    .fact-counter .count-outer .percentage{
        display:inline-block;
        font-weight:600;
        color:#020e28;
        font-size:48px;
        line-height:1em;
    }

    .fact-counter .column .inner .count-outer{
        position:relative;
        font-weight:700;
        color:#ffffff;
        font-size:48px;
        line-height:1em;
        display:inline-block;
        font-family: 'Lora', serif;
    }

    .fact-counter .column .inner .counter-title{
        position:relative;
        font-size:20px;
        font-weight:400;
        margin-top:14px;
        color:rgba(255,255,255,0.90);
        font-family: 'Lato', sans-serif;
    }

    .fact-counter.style-two .column .inner .content{
        padding-left:75px;
        text-align:left;
    }

    /***

====================================================================
	Team Section
====================================================================

***/

    .team-section{
        position:relative;
        padding:110px 0px 80px;
    }

    .team-block{
        position:relative;
        margin-bottom:30px;
    }

    .team-block .inner-box{
        position:relative;
        overflow:hidden;
    }

    .team-block .inner-box .image{
        position:relative;
        overflow:hidden;
        background-color:#004cda;
    }

    .team-block .inner-box .image img{
        position:relative;
        width:100%;
        display:block;
        -webkit-transition:all 300ms ease;
        -moz-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        -o-transition:all 300ms ease;
        transition:all 300ms ease;
    }

    .team-block .inner-box:hover .image img{
        opacity:0.8;
        transform:scale(1.05,1.05);
    }

    .team-block .inner-box .image .overlay-box{
        position:absolute;
        content:'';
        left:0px;
        bottom:-140px;
        z-index:1;
        padding:15px 15px 15px;
        display:inline-block;
        -webkit-transition:all 900ms ease;
        -moz-transition:all 900ms ease;
        -ms-transition:all 900ms ease;
        -o-transition:all 900ms ease;
        transition:all 900ms ease;
    }

    .team-block .inner-box:hover .image .overlay-box{
        bottom:40px;
    }

    .team-block .inner-box .image .overlay-box:before{
        position:absolute;
        content:'';
        left:-50px;
        top:0px;
        right:-20px;
        bottom:0px;
        z-index:1;
        background-color:#004cda;
        -ms-transform: skewX(-25deg);
        -webkit-transform: skewX(-25deg);
        transform: skewX(-25deg);
    }

    .team-block .inner-box .image .overlay-box:after{
        position:absolute;
        content:'';
        left:-50px;
        top:0px;
        right:-25px;
        bottom:0px;
        z-index:-1;
        opacity:0;
        -webkit-transition:all 300ms ease;
        -moz-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        -o-transition:all 300ms ease;
        transition:all 300ms ease;
        background-color:#ffffff;
        -ms-transform: skewX(-25deg);
        -webkit-transform: skewX(-25deg);
        transform: skewX(-25deg);
    }

    .team-block .inner-box:hover .image .overlay-box:after{
        -ms-transform: skewX(-30deg);
        -webkit-transform: skewX(-30deg);
        transform: skewX(-30deg);
        transition-delay: 800ms;
        opacity:1;
    }

    .team-block .inner-box .image .overlay-box .social-icons{
        position:relative;
        z-index:1;
    }

    .team-block .inner-box .image .overlay-box .social-icons li{
        position:relative;
        margin-left:15px;
        display:inline-block;
    }

    .team-block .inner-box .image .overlay-box .social-icons li a{
        position:relative;
        color:#ffffff;
        font-size:14px;
        -webkit-transition:all 300ms ease;
        -moz-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        -o-transition:all 300ms ease;
        transition:all 300ms ease;
    }

    .team-block .inner-box .image .overlay-box .social-icons li a:hover{
        color:#000000;
    }

    .team-block .inner-box .image .overlay-box .appointment{
        position:relative;
        z-index:1;
        color:#ffffff;
        margin-top:6px;
        margin-left:12px;
        display:inline-block;
    }

    .main-header .header-top .top-right .social-icons li a:hover{
        color:#000000;
    }

    .team-block .inner-box .lower-content{
        position:relative;
        padding-top:25px;
        text-align:center;
    }

    .team-block .inner-box .lower-content h3{
        position:relative;
        color:#222222;
        font-size:20px;
        font-weight:700;
        line-height:1.3em;
    }

    .team-block .inner-box .lower-content h3 a{
        position:relative;
        color:#222222;
        -webkit-transition:all 300ms ease;
        -moz-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        -o-transition:all 300ms ease;
        transition:all 300ms ease;
    }

    .team-block .inner-box:hover .lower-content h3 a{
        color:#004cda;
    }

    .team-block .inner-box .lower-content .designation{
        position:relative;
        color:#777777;
        font-size:16px;
        margin-top:6px;
    }

    /***

====================================================================
	FullWidth Section
====================================================================

***/

    .fullwidth-section{
        position:relative;
    }

    .fullwidth-section .left-column{
        position:relative;
        width:50%;
        float:left;
        background-size:cover;
    }

    .fullwidth-section .left-column .inner-column{
        position:relative;
        padding:90px 60px 90px 15px;
    }

    .fullwidth-section .left-column .inner-column:before{
        position:absolute;
        content:'';
        left:0px;
        top:0px;
        right:0px;
        bottom:0px;
        background-color:rgba(255,255,255,0.90);
    }

    .fullwidth-section .left-column .inner-column .content{
        position:relative;
        max-width:750px;
        width:100%;
        float:right;
        padding-left:100px;
    }

    .fullwidth-section .left-column .inner-column .icon-box{
        position:absolute;
        left:0px;
        top:0px;
        color:#222222;
        font-size:56px;
        line-height:1em;
    }

    .fullwidth-section .left-column .inner-column .content .title{
        position:relative;
        color:#777777;
        font-size:20px;
        font-weight:400;
        font-family: 'Lora', serif;
    }

    .fullwidth-section .left-column .inner-column .content h2{
        position:relative;
        color:#222222;
        font-size:36px;
        font-weight:700;
        margin-top:25px;
        margin-bottom:30px;
        text-transform:uppercase;
    }

    .fullwidth-section .right-column{
        position:relative;
        width:50%;
        float:left;
        background-color:#222222;
    }

    .fullwidth-section .right-column .inner-column{
        position:relative;
        padding:90px 60px 90px 110px;
    }

    .fullwidth-section .right-column .upper-box{
        position:relative;
        padding-left:80px;
        padding-top:5px;
    }

    .fullwidth-section .right-column .upper-box .icon{
        position:absolute;
        left:0px;
        top:0px;
        font-size:48px;
        color:#ffffff;
        line-height:1em;
    }

    .fullwidth-section .right-column .upper-box h3{
        position:relative;
        font-size:30px;
        font-weight:700;
        color:#ffffff;
        line-height:1.3em;
        text-transform:uppercase;
    }

    .fullwidth-section .right-column .time-list{
        position:relative;
        margin-top:35px;
    }

    .fullwidth-section .right-column .time-list li{
        position:relative;
        margin-bottom:14px;
    }

    .fullwidth-section .right-column .time-list li:before{
        position:absolute;
        content:'';
        left:0px;
        top:12px;
        width:100%;
        height:1px;
        border-bottom:1px dashed #ffffff;
    }

    .fullwidth-section .right-column .time-list li span{
        position:relative;
        color:#ffffff;
        font-size:16px;
        background-color:#222222;
    }

    .fullwidth-section .right-column .time-list li span.left-span{
        padding-right:30px;
    }

    .fullwidth-section .right-column .time-list li span.right-span{
        padding-left:30px;
    }

    /***

====================================================================
	Testimonial Section
====================================================================

***/

    .testimonial-section{
        position:relative;
        padding:100px 0px 100px;
    }

    .testimonial-section .testimonial-outer{
        position:relative;
        padding-top:50px;
        background-position:center center;
        background-repeat:no-repeat;
    }

    .testimonial-section.style-two{
        padding-bottom:200px;
    }

    /* Testimonial Block */

    .testimonial-block{
        position:relative;
    }

    .testimonial-block .inner-box{
        position:relative;
        text-align:center;
    }

    .testimonial-block .inner-box .quote-icon{
        position:relative;
        font-size:18px;
        line-height:1em;
        color:#777777;
    }

    .testimonial-block .inner-box .text{
        position:relative;
        color:#777777;
        font-size:18px;
        line-height:1.9em;
        max-width:800px;
        margin:0 auto;
        margin-top:35px;
    }

    .testimonial-block .inner-box .author-name{
        position:relative;
        color:#222222;
        font-size:16px;
        margin-top:40px;
        letter-spacing:1px;
        text-transform:uppercase;
        font-family: 'Gotham-Bold';
    }

    .testimonial-block .inner-box .designation{
        position:relative;
        color:#666666;
        font-size:14px;
        margin-top:0px;
        font-family: 'Gotham-Book';
    }

    .testimonial-section .client-thumb-outer{
        position:relative;
        max-width:300px;
        margin:0 auto;
        overflow:hidden;
        padding-top:45px;
    }

    .testimonial-section .client-thumb-outer .owl-item.active  .author-info{
        opacity:1;
        visibility:visible;
    }

    .testimonial-section .client-thumb-outer .author-info{
        position:relative;
        opacity:0;
        visibility:hidden;
        margin-left:-40px;
        margin-right:-40px;
        margin-top:40px;
    }

    .testimonial-section .client-thumb-outer .author-info .author-name{
        position:relative;
        font-weight:700;
        color:#004cda;
        font-size:18px;
        line-height:1.3em;
        font-family: 'Lora', serif;
    }

    .testimonial-section .client-thumb-outer .designation{
        position:relative;
        color:#777777;
        font-size:14px;
        margin-top:4px;
    }

    .testimonial-section .client-thumb-outer .owl-item.active .thumb-item .thumb-box{
        z-index:999;
        -o-transform: scale(1.3,1.3);
        -ms-transform: scale(1.3,1.3);
        -webkit-transform: scale(1.3,1.3);
        transform: scale(1.3,1.3);
    }

    .testimonial-section .client-thumb-outer .client-thumbs-carousel{
        position: relative;
        max-width: 80px;
        margin: 0 auto;
        text-align:center;
    }

    .testimonial-section .client-thumb-outer .client-thumbs-carousel .owl-stage-outer{
        overflow:visible;
    }

    .testimonial-section .client-thumb-outer .thumb-item .thumb-box{
        width:80px;
        height:80px;
        cursor:pointer;
        border-radius:50%;
        margin: 0 auto;
        overflow:hidden;
        -o-transform: scale(0.9, 0.9);
        -ms-transform: scale(0.9, 0.9);
        -webkit-transform: scale(0.9, 0.9);
        transform: scale(0.9, 0.9);
        -webkit-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        -o-transition:all 300ms ease;
        -moz-transition:all 300ms ease;
        transition:all 300ms ease;
    }

    .testimonial-section .client-thumb-outer .owl-item{
        z-index:0;
    }

    .testimonial-section .client-thumb-outer .owl-item.active{
        z-index:10;
    }

    .testimonial-section .client-thumb-outer .thumb-item .thumb-box:before{
        position:absolute;
        content:'';
        left:0px;
        top:0px;
        width:100%;
        height:100%;
        display:block;
        z-index:1;
        background-color:rgba(255,255,255,0.50);
    }

    .testimonial-section .client-thumb-outer .owl-item.active .thumb-box:before{
        opacity:0;
    }

    .testimonial-section .client-thumb-outer .client-thumbs-carousel .thumb-item img{
        overflow:hidden;
        width:100%;
        height:100%;
        display:block;
        border-radius:50%;
    }

    .testimonial-section .owl-item.active .thumb-content{
        opacity:1;
    }

    .testimonial-section .owl-nav{
        position: absolute;
        left: 0%;
        top: 50%;
        width: 100%;
        margin-top:-10px;
    }

    .testimonial-section .owl-nav .owl-prev{
        position:absolute;
        display:inline-block;
        color:#000000;
        font-size:20px;
        line-height:48px;
        width:50px;
        height:50px;
        text-align:center;
        background:none;
        border-radius:0px 50px 50px 0px;
        border:1px solid #000000;
        -webkit-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        -o-transition:all 300ms ease;
        -moz-transition:all 300ms ease;
        transition:all 300ms ease;
    }

    .testimonial-section .owl-nav .owl-next{
        position:absolute;
        display:inline-block;
        color:#000000;
        font-size:20px;
        line-height:48px;
        width:50px;
        height:50px;
        text-align:center;
        background:none;
        border:1px solid #000000;
        border-radius:50px 0px 0px 50px;
        -webkit-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        -o-transition:all 300ms ease;
        -moz-transition:all 300ms ease;
        transition:all 300ms ease;
    }

    .testimonial-section .owl-nav .owl-prev{
        left:0px;
        right:auto;
    }

    .testimonial-section .owl-nav .owl-next{
        right:0px;
        left:auto;
    }

    .testimonial-section .owl-nav .owl-prev:hover,
    .testimonial-section .owl-nav .owl-next:hover{
        color:#004cda;
        border-color:#004cda;
    }

    .testimonial-section .owl-dots{
        display:none;
    }

    /***

====================================================================
	News Section
====================================================================

***/

    .news-section{
        position:relative;
        padding:110px 0px 90px;
        background-color:#fafafa;
    }

    .news-block{
        position:relative;
        margin-bottom:30px;
    }

    .news-block .inner-box{
        position:relative;
    }

    .news-block .inner-box .image{
        position:relative;
    }

    .news-block .inner-box .image a{
        position:relative;
        display:block;
    }

    .news-block .inner-box .image a:before{
        position:absolute;
        content:'';
        left:0px;
        bottom:0px;
        width:100%;
        height:0px;
        display:block;
        z-index:1;
        opacity:0.5;
        background-color:#004cda;
        -webkit-transition:all 600ms ease;
        -ms-transition:all 600ms ease;
        -o-transition:all 600ms ease;
        -moz-transition:all 600ms ease;
        transition:all 600ms ease;
    }

    .news-block .inner-box:hover .image a:before{
        height:100%;
    }

    .news-block .inner-box .image img{
        position:relative;
        width:100%;
        display:block;
    }

    .news-block .inner-box .image .category{
        position:absolute;
        right:0px;
        top:18px;
        color:#ffffff;
        font-size:14px;
        z-index:10;
        display:inline-block;
        background-color:#004cda;
        padding:4px 8px 4px 12px;
        border-radius:50px 0px 0px 50px;
    }

    .news-block .inner-box .lower-content{
        position:relative;
        padding-top:35px;
        text-align:center;
    }

    .news-block .inner-box .lower-content .post-meta{
        position:relative;
    }

    .news-block .inner-box .lower-content .post-meta li{
        position:relative;
        padding-right:10px;
        margin-right:10px;
        line-height:1em;
        display:inline-block;
        border-right:1px solid #777777;
    }

    .news-block .inner-box .lower-content .post-meta li a{
        position:relative;
        color:#777777;
        font-size:14px;
    }

    .news-block .inner-box .lower-content .post-meta li:last-child{
        margin-right:0px;
        padding-right:0px;
        border-right:0px;
    }

    .news-block .inner-box .lower-content h3{
        position:relative;
        font-size:22px;
        color:#222222;
        font-weight:700;
        line-height:1.5em;
        margin-top:15px;
    }

    .news-block .inner-box .lower-content h3 a{
        position:relative;
        color:#222222;
        -webkit-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        -o-transition:all 300ms ease;
        -moz-transition:all 300ms ease;
        transition:all 300ms ease;
    }

    .news-block .inner-box .lower-content h3 a:hover{
        color:#004cda;
    }

    .news-block .inner-box .lower-content .text{
        position:relative;
        font-size:16px;
        color:#777777;
        font-weight:400;
        line-height:1.8em;
        margin-top:15px;
        margin-bottom:25px;
    }

    .news-block .inner-box .lower-content .read-more{
        position:relative;
        color:#004cda;
        font-size:14px;
        padding:11px 30px;
        font-weight:500;
        display:inline-block;
        border-radius:50px;
        border:2px solid #004cda;
        background-color:#ffffff;
        -webkit-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        -o-transition:all 300ms ease;
        -moz-transition:all 300ms ease;
        transition:all 300ms ease;
    }

    .news-block .inner-box .lower-content .read-more:hover{
        color:#222222;
        border-color:#222222;
    }

    /***

====================================================================
	Newsletter Section
====================================================================

***/

    .newsletter-section{
        position:relative;
        padding:75px 0px;
    }

    .newsletter-section .title-column{
        position:relative;
    }

    .newsletter-section .title-column .inner-column{
        position:relative;
    }

    .newsletter-section .title-column .inner-column h2{
        position:relative;
        color:#222222;
        font-size:24px;
        line-height:1.3em;
        font-weight:700;
    }

    .newsletter-section .title-column .inner-column .text{
        position:relative;
        color:#777777;
        font-size:16px;
        line-height:1.7em;
        margin-top:10px;
    }

    .newsletter-section .form-column{
        position:relative;
    }

    .newsletter-section .form-column .inner-column{
        position:relative;
    }

    /*Subscribe Form*/

    .subscribe-form{
        position:relative;
    }

    .subscribe-form .form-group{
        position:relative;
        display:block;
        margin:0px;
        width:100%;
    }

    .subscribe-form .form-group input[type="text"],
    .subscribe-form .form-group input[type="tel"],
    .subscribe-form .form-group input[type="email"],
    .subscribe-form .form-group textarea{
        position:relative;
        display:block;
        width:100%;
        line-height:28px;
        height:60px;
        font-size:14px;
        color:#222222;
        border-radius:50px;
        padding-right:170px;
        background:#ffffff;
        border:1px solid #cccccc;
        padding:10px 15px 10px 30px;
        -webkit-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        -o-transition:all 300ms ease;
        -moz-transition:all 300ms ease;
        transition:all 300ms ease;
    }

    .subscribe-form .form-group input[type="submit"],
    .subscribe-form button{
        position:absolute;
        right:0px;
        top:0px;
        cursor:pointer;
        font-weight:700;
        font-size:18px;
        font-family: 'Lora', serif;
    }

    .subscribe-form .form-group input[type="submit"]:hover,
    .subscribe-form button:hover{

    }

    .newsletter-section.style-two{
        padding-bottom:200px;
    }

    /***

====================================================================
	Main Footer
====================================================================

***/

    .main-footer{
        position:relative;
        background-color:#f6fbfd;
        background-size:cover;
    }

    .main-footer .widgets-section{
        position:relative;
        padding:90px 0px 60px;
    }

    .main-footer .footer-widget{
        position:relative;
        margin-bottom:30px;
    }

    .main-footer .footer-widget .footer-title{
        position:relative;
        margin-bottom:30px;
    }

    .main-footer .footer-widget .footer-title h2{
        position:relative;
        font-size:20px;
        font-weight:700;
        color:#222222;
        margin-bottom:20px;
        text-transform:capitalize;
    }

    .main-footer .footer-widget .footer-title .separator{
        position:relative;
        width:40px;
        height:5px;
    }

    .main-footer .footer-widget .footer-title .separator:before{
        position:absolute;
        content:'';
        left:0px;
        top:0px;
        width:100%;
        height:1px;
        background-color:#cccccc;
    }

    .main-footer .footer-widget .footer-title .separator:after{
        position:absolute;
        top:-2px;
        content:'';
        right:-15px;
        width:5px;
        height:5px;
        background-color:#004cda;
    }

    .main-footer .logo-widget .logo{
        position:relative;
        margin-bottom:25px;
    }

    .main-footer .logo-widget .text{
        position:relative;
        color:#777777;
        font-size:15px;
        line-height:2em;
        margin-top:20px;
        margin-bottom:30px;
    }

    .main-footer .logo-widget .social-icons{
        position:relative;
    }

    .main-footer .logo-widget .social-icons li{
        position:relative;
        margin-right:18px;
        display:inline-block;
    }

    .main-footer .logo-widget .social-icons li.share{
        color:#ffffff;
        font-weight:600;
    }

    .main-footer .logo-widget .social-icons li a{
        position:relative;
        width:37px;
        height:37px;
        color:#bbbbbb;
        line-height:35px;
        text-align:center;
        border-radius:50px;
        display:inline-block;
        border:1px solid #bbbbbb;
        -webkit-transition:all 300ms ease;
        -moz-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        -o-transition:all 300ms ease;
        transition:all 300ms ease;
    }

    .main-footer .logo-widget .social-icons li a:hover{
        color:#ffffff;
        border-color:#004cda;
        background-color:#004cda;
    }

    /* Footer List */

    .main-footer .footer-list{
        position:relative;
    }

    .main-footer .footer-list li{
        position:relative;
        margin-bottom:15px;
    }

    .main-footer .footer-list li a{
        position:relative;
        color:#777777;
        font-size:15px;
        line-height:1.3em;
        padding-left:30px;
        -webkit-transition:all 300ms ease;
        -moz-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        -o-transition:all 300ms ease;
        transition:all 300ms ease;
    }

    .main-footer .footer-list li a:before{
        position:absolute;
        content:'\f22b';
        left:0px;
        top:0px;
        font-size:14px;
        font-weight:800;
        font-family: "Font Awesome 5 Free";
    }

    .main-footer .footer-list li a:hover{
        color:#004cda;
    }



    /*News Widget Block*/

    .news-widget-block{
        position:relative;
        margin-bottom:30px;
    }

    .news-widget-block:last-child{
        margin-bottom:0px;
    }

    .news-widget-block:last-child{
        margin-bottom:0px;
    }

    .news-widget-block .widget-inner{
        position:relative;
        padding-left:110px;
        min-height:90px;
        padding-top:8px;
    }

    .news-widget-block .widget-inner .image{
        position:absolute;
        left:0px;
        top:0px;
        width:90px;
        height:90px;
    }

    .news-widget-block .widget-inner h3{
        position:relative;
        color:#222222;
        font-size:14px;
        line-height:1.8em;
        margin-bottom:5px;
        font-weight:700;
    }

    .news-widget-block .widget-inner h3 a{
        position:relative;
        color:#222222;
        transition:all 500ms ease;
        -moz-transition:all 500ms ease;
        -webkit-transition:all 500ms ease;
        -ms-transition:all 500ms ease;
        -o-transition:all 500ms ease;
    }

    .news-widget-block .widget-inner h3 a:hover{
        color:#004cda;
    }

    .news-widget-block .widget-inner .post-date{
        position:relative;
        color:#777777;
        font-size:12px;
    }

    .main-footer .contact-list{
        position:relative;
    }

    .main-footer .contact-list li{
        position:relative;
        color:#777777;
        font-size:15px;
        line-height:1.8em;
        padding-left:70px;
        margin-bottom:20px;
    }

    .main-footer .contact-list li .icon{
        position:absolute;
        left:0px;
        top:5px;
        color:#004cda;
        font-size:40px;
        line-height:1em;
    }

    .main-footer .contact-list li a{
        position:relative;
        color:#222222;
        font-size:20px;
        font-weight:700;
        font-family: 'Lora', serif;
    }

    .main-footer .footer-bottom{
        position:relative;
        padding:15px 0px;
        text-align:center;
        background-color:#004cda;
    }

    .main-footer .footer-bottom .copyright{
        position:relative;
        font-size:14px;
        color:#ffffff;
    }

    .main-footer.style-two:after{
        position:absolute;
        content:'';
        left:0px;
        top:-120px;
        width:100%;
        height:120px;
        background:url(../images/background/pattern-8.png) no-repeat;
        background-size:100% 100%;
    }

    .main-footer.style-two{
        background-color:#004cda;
    }

    .main-footer.style-two .contact-list li a,
    .main-footer.style-two .contact-list li .icon,
    .main-footer.style-two .contact-list li,
    .main-footer.style-two .news-widget-block .widget-inner h3 a,
    .main-footer.style-two .news-widget-block .widget-inner .post-date,
    .main-footer.style-two .footer-list li a,
    .main-footer.style-two .logo-widget .text,
    .main-footer.style-two .footer-widget .footer-title h2{
        color:#ffffff;
    }

    .main-footer.style-two .footer-widget .footer-title .separator:after{
        background-color:#ffffff;
    }

    .main-footer.style-two .logo-widget .social-icons li a{
        color:#ffffff;
        border-color:rgba(255,255,255,0.80);
    }

    .main-footer.style-two .footer-bottom{
        background-color:#222222;
    }

    /***

====================================================================
	Hidden Sidebar style
====================================================================

***/

    .hidden-bar{
        position: fixed;
        top: 0px;
        right: 0px;
        width: 305px;
        height: 100%;
        background: #272727;
        z-index: 9999;
        transition: all 700ms ease;
        -webkit-transition: all 700ms ease;
        -ms-transition: all 700ms ease;
        -o-transition: all 700ms ease;
        -moz-transition: all 700ms ease;
    }

    .hidden-bar-wrapper {
        height: 100%;
    }

    .hidden-bar .mCSB_inside > .mCSB_container{
        margin-right:0px;
    }

    .hidden-bar.right-align {
        right: -400px;
    }

    .hidden-bar.right-align.visible-sidebar{
        right:0px;
    }

    .hidden-bar .hidden-bar-closer {
        position: absolute;
        top: 10px;
        right:15px;
        background: none;
        color: #ffffff;
        transition: all 300ms ease;
        -webkit-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
        z-index: 999999;
    }

    .hidden-bar .hidden-bar-closer button {
        background: none;
        display:block;
        font-size: 16px;
        color:#ffffff;
        width:40px;
        height:40px;
        cursor: pointer;
        line-height:40px;
    }

    .hidden-bar .hidden-bar-closer:hover button {
        color: #ffffff;
    }

    .hidden-bar .hidden-bar-closer:hover {
        color: #414857;
    }

    .hidden-bar .hidden-bar-closer:hover .btn {
        color: #ffffff;
    }

    .hidden-bar .hidden-bar-closer .btn {
        background-color: transparent;
        border: none;
        outline: none;
        font-size: 14px;
    }

    .sidebar-info-contents{
        position:relative;
    }

    .sidebar-info-contents .content-inner{
        position:relative;
    }

    .sidebar-info-contents .content-inner .logo {
        padding:0px 0px 40px;
    }

    .sidebar-info-contents .content-inner .logo img{
        display:inline-block;
        max-width:100%;
    }

    .sidebar-info-contents .content-inner .content-box{
        position:relative;
    }

    .sidebar-info-contents .content-inner .content-box h2{
        position:relative;
        font-size:20px;
        color:#ffffff;
        font-weight:500;
        margin-bottom:20px;
    }

    .sidebar-info-contents .content-inner .content-box .text{
        position:relative;
        font-size:14px;
        color:rgba(255,255,255,0.90);
        margin-bottom:25px;
    }

    .sidebar-info-contents .content-inner .contact-info{
        position:relative;
        margin-top:60px;
    }

    .sidebar-info-contents .content-inner .contact-info h2{
        position:relative;
        font-size:20px;
        color:#ffffff;
        font-weight:500;
        margin-bottom:20px;
    }

    .sidebar-info-contents .content-inner .social-box{
        position:relative;
        margin-top:20px;
        margin-bottom:30px;
    }

    .sidebar-info-contents .content-inner .social-box li{
        position:relative;
        display:inline-block;
        margin-right:6px;
        transition: all 900ms ease;
        -moz-transition: all 900ms ease;
        -webkit-transition: all 900ms ease;
        -ms-transition: all 900ms ease;
        -o-transition: all 900ms ease;
    }

    .sidebar-info-contents .content-inner .social-box li a{
        position:relative;
        width:36px;
        height:36px;
        color:#222222;
        z-index:1;
        font-size:13px;
        line-height:36px;
        text-align:center;
        border-radius:50%;
        display:inline-block;
        background-color:#ffffff;
    }

    /***

====================================================================
	Main Slider Two
====================================================================

***/

    .main-slider-two{
        position:relative;
        padding:65px 0px 60px;
    }

    .main-slider-two .slider-icons{
        position:absolute;
        left:0px;
        top:0px;
        right:0px;
        bottom:0px;
    }

    .main-slider-two .slider-icons .icon-one{
        position:absolute;
        left:8%;
        top:7%;
    }

    .main-slider-two .slider-icons .icon-two{
        position:absolute;
        left:8%;
        top:40%;
    }

    .main-slider-two .slider-icons .icon-three{
        position:absolute;
        left:2%;
        top:64%;
    }

    .main-slider-two .slider-icons .icon-four{
        position:absolute;
        left:12%;
        top:80%;
    }

    .main-slider-two .slider-icons .icon-five{
        position:absolute;
        left:24%;
        top:7%;
    }

    .main-slider-two .slider-icons .icon-six{
        position:absolute;
        left:54%;
        top:7%;
    }

    .main-slider-two .slider-icons .icon-seven{
        position:absolute;
        right:2%;
        top:7%;
    }

    .main-slider-two .slider-icons .icon-eight{
        position:absolute;
        left:54%;
        top:70%;
    }

    .main-slider-two .slider-icons .icon-nine{
        position:absolute;
        left:84%;
        top:70%;
    }

    .main-slider-two .image-column{
        position:relative;
    }

    .main-slider-two .image-column .inner-column{
        position:relative;
        padding-right:50px;
    }

    .main-slider-two .image-column .inner-column .image{
        position:relative;
        opacity: 0;
        -webkit-transition: all 1000ms ease;
        -moz-transition: all 100ms ease;
        -ms-transition: all 1000ms ease;
        -o-transition: all 1000ms ease;
        transition: all 1000ms ease;
        -webkit-transform: translateY(-80px);
        -moz-transform: translateY(-80px);
        -ms-transform: translateY(-80px);
        -o-transform: translateY(-80px);
        transform: translateY(-80px);
    }

    .main-slider-two .swiper-slide-active .image-column .inner-column .image{
        opacity: 1;
        -webkit-transform: translateX(0);
        -moz-transform: translateX(0);
        -ms-transform: translateX(0);
        -o-transform: translateX(0);
        transform: translateX(0);
        transition-delay: 0ms;
    }

    .main-slider-two .content-column{
        position:relative;
    }

    .main-slider-two .content-column .inner-column{
        position:relative;
        padding-top:150px;
    }

    .main-slider-two .content-column .inner-column .title{
        position:relative;
        font-size:18px;
        color:#222222;
        font-weight:700;
        line-height:1em;
        opacity: 0;
        -webkit-transition: all 1000ms ease;
        -moz-transition: all 100ms ease;
        -ms-transition: all 1000ms ease;
        -o-transition: all 1000ms ease;
        transition: all 1000ms ease;
        -webkit-transform: translateY(80px);
        -moz-transform: translateY(80px);
        -ms-transform: translateY(80px);
        -o-transform: translateY(80px);
        transform: translateY(80px);
    }

    .main-slider-two .swiper-slide-active .content-column .inner-column .title{
        opacity: 1;
        -webkit-transform: translateX(0);
        -moz-transform: translateX(0);
        -ms-transform: translateX(0);
        -o-transform: translateX(0);
        transform: translateX(0);
        transition-delay: 0ms;
    }

    .main-slider-two .content-column .inner-column h2{
        position:relative;
        font-size:48px;
        color:#004cda;
        font-weight:700;
        line-height:1em;
        margin-top:25px;
        opacity: 0;
        -webkit-transition: all 1000ms ease;
        -moz-transition: all 100ms ease;
        -ms-transition: all 1000ms ease;
        -o-transition: all 1000ms ease;
        transition: all 1000ms ease;
        -webkit-transform: translateY(80px);
        -moz-transform: translateY(80px);
        -ms-transform: translateY(80px);
        -o-transform: translateY(80px);
        transform: translateY(80px);
    }

    .main-slider-two .swiper-slide-active .content-column .inner-column h2{
        opacity: 1;
        -webkit-transform: translateX(0);
        -moz-transform: translateX(0);
        -ms-transform: translateX(0);
        -o-transform: translateX(0);
        transform: translateX(0);
        transition-delay: 600ms;
    }

    .main-slider-two .content-column .inner-column .text{
        position:relative;
        font-size:16px;
        color:#777777;
        font-weight:400;
        line-height:1.8em;
        max-width:600px;
        margin-top:25px;
        margin-bottom:30px;
        opacity: 0;
        -webkit-transition: all 1000ms ease;
        -moz-transition: all 100ms ease;
        -ms-transition: all 1000ms ease;
        -o-transition: all 1000ms ease;
        transition: all 1000ms ease;
        -webkit-transform: translateY(80px);
        -moz-transform: translateY(80px);
        -ms-transform: translateY(80px);
        -o-transform: translateY(80px);
        transform: translateY(80px);
    }

    .main-slider-two .swiper-slide-active .content-column .inner-column .text{
        opacity: 1;
        -webkit-transform: translateX(0);
        -moz-transform: translateX(0);
        -ms-transform: translateX(0);
        -o-transform: translateX(0);
        transform: translateX(0);
        transition-delay: 1000ms;
    }

    .main-slider-two .content-column .inner-column .theme-btn{
        opacity: 0;
        -webkit-transition: all 1000ms ease;
        -moz-transition: all 100ms ease;
        -ms-transition: all 1000ms ease;
        -o-transition: all 1000ms ease;
        transition: all 1000ms ease;
        -webkit-transform: translateY(80px);
        -moz-transform: translateY(80px);
        -ms-transform: translateY(80px);
        -o-transform: translateY(80px);
        transform: translateY(80px);
    }

    .main-slider-two .swiper-slide-active .content-column .inner-column .theme-btn{
        opacity: 1;
        -webkit-transform: translateX(0);
        -moz-transform: translateX(0);
        -ms-transform: translateX(0);
        -o-transform: translateX(0);
        transform: translateX(0);
        transition-delay: 1400ms;
    }

    .main-slider-two .swiper-button-next{
        right:40px;
        width:50px;
        height:50px;
        font-size:16px;
        line-height:50px;
        border-radius:50%;
        text-align:center;
        background-image:none;
        -webkit-transition:all 0.5s ease;
        -moz-transition:all 0.5s ease;
        -ms-transition:all 0.5s ease;
        -o-transition:all 0.5s ease;
        transition:all 0.5s ease;
        background-color:#004cda;
    }

    .main-slider-two .swiper-button-next:before{
        position:absolute;
        content: "\f14e";
        left:0px;
        top:0px;
        width:50px;
        color:#ffffff;
        font-size:16px;
        -webkit-transition:all 0.5s ease;
        -moz-transition:all 0.5s ease;
        -ms-transition:all 0.5s ease;
        -o-transition:all 0.5s ease;
        transition:all 0.5s ease;
        font-family: "Flaticon";
    }

    .main-slider-two .swiper-button-prev{
        left:40px;
        width:50px;
        height:50px;
        font-size:16px;
        border-radius:50%;
        text-align:center;
        line-height:50px;
        -webkit-transition:all 0.5s ease;
        -moz-transition:all 0.5s ease;
        -ms-transition:all 0.5s ease;
        -o-transition:all 0.5s ease;
        transition:all 0.5s ease;
        background-image:none;
        background-color:#004cda;
    }

    .main-slider-two .swiper-button-prev:before{
        position:absolute;
        content: "\f14f";
        left:0px;
        top:0px;
        width:50px;
        height:50px;
        color:#ffffff;
        font-size:16px;
        -webkit-transition:all 0.5s ease;
        -moz-transition:all 0.5s ease;
        -ms-transition:all 0.5s ease;
        -o-transition:all 0.5s ease;
        transition:all 0.5s ease;
        font-family: "Flaticon";
    }

    .main-slider-two .swiper-button-next:hover,
    .main-slider-two .swiper-button-prev:hover{
        background-color:#222222;
    }

    .main-slider-two .swiper-button-next:hover::before,
    .main-slider-two .swiper-button-prev:hover::before{
        color:#ffffff;
    }

    /***

====================================================================
	Welcome Section
====================================================================

***/

    .welcome-section{
        position:relative;
        padding:100px 0px 100px;
    }

    .welcome-section .image-layer{
        position:absolute;
        left:-100px;
        top:-20px;
        width:1159px;
        height:1072px;
    }

    .welcome-section .content-column{
        position:relative;
        margin-bottom:40px;
    }

    .welcome-section .content-column .inner-column{
        position:relative;
    }

    .welcome-section .content-column .sec-title{
        position:relative;
        margin-bottom:40px;
    }

    .welcome-section .content-column .inner-column .text{
        position:relative;
        margin-bottom:50px;
    }

    .welcome-section .content-column .inner-column .text p{
        position:relative;
        color:#777777;
        font-size:16px;
        line-height:1.9em;
        margin-bottom:20px;
    }

    .welcome-section .content-column .inner-column .text p:last-child{
        margin-bottom:0px;
    }

    .welcome-section .content-column .inner-column .play-btn{
        position:relative;
        padding:18px 30px 18px 75px;
        border:1px solid #bbbbbb;
        border-radius:50px;
        font-size:16px;
        color:#222222;
        display:inline-block;
        transition: all 300ms ease;
        -webkit-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
    }

    .welcome-section .content-column .inner-column .play-btn .icon{
        position:absolute;
        left:-1px;
        top:-1px;
        width:60px;
        height:60px;
        color:#ffffff;
        font-size:20px;
        line-height:60px;
        text-align:center;
        border-radius:50px;
        display:inline-block;
        background-color:#004cda;
        transition: all 300ms ease;
        -webkit-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
    }

    .welcome-section .content-column .inner-column .play-btn:hover{
        background-color:#004cda;
        border-color:#004cda;
        color:#ffffff;
    }

    .welcome-section .content-column .inner-column .play-btn:hover .icon{
        background-color:#ffffff;
        color:#004cda;
    }

    .welcome-section .image-column{
        position:relative;
        margin-bottom:40px;
    }

    .welcome-section .image-column .inner-column{
        position:relative;
    }

    .welcome-section .image-column .inner-column .image{
        position:relative;
        text-align:center;
    }

    .welcome-section .image-column .inner-column .image img{
        position:relative;
    }

    .welcome-section .image-column .inner-column .icon-outer{
        position:absolute;
        right:0px;
        bottom:0px;
    }

    .welcome-section .image-column .inner-column .icon-outer .icon-inner{
        position:relative;
        width:110px;
        height:110px;
        color:#004cda;
        font-size:48px;
        border-radius:50%;
        line-height:110px;
        display:inline-block;
        background-color:#ffffff;
        box-shadow:0px 0px 10px rgba(0,0,0,0.12);
    }

    .welcome-section .image-column .inner-column .icon-outer .icon-inner:before{
        position:absolute;
        content:'';
        left:-20px;
        right:-20px;
        top:-20px;
        bottom:-20px;
        border-radius:50%;
        border:2px dashed #d2d2d2;
    }

    .welcome-section .image-column .inner-column .icon-outer .icon-inner:after{
        position:absolute;
        content:'';
        left:-40px;
        right:-40px;
        top:-40px;
        bottom:-40px;
        border-radius:50%;
        border:2px dashed #d2d2d2;
    }

    /***

====================================================================
	Department Section Two
====================================================================

***/

    .department-section-two{
        position:relative;
        padding:90px 0px 90px;
    }

    .department-section-two.style-two{
        background-color:#ffffff;
        padding-bottom:200px;
    }

    .department-section-two.style-two:before{
        display:none;
    }

    .department-section-two.style-two .sec-title .separator:after{
        border-color:#ffffff;
    }

    .department-section-two .owl-nav{
        display:none;
    }

    .department-section-two .owl-dots{
        position:relative;
        margin-top:50px;
        text-align:center;
    }

    .department-section-two .owl-dots .owl-dot{
        position:relative;
        width:10px;
        height:10px;
        margin:0px 5px;
        border-radius:50px;
        display:inline-block;
        background-color:#cccccc;
        transition:all 300ms ease;
        -moz-transition:all 300ms ease;
        -webkit-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        -o-transition:all 300ms ease;
    }

    .department-section-two .owl-dots .owl-dot.active,
    .department-section-two .owl-dots .owl-dot:hover{
        background-color:#222222;
    }

    .department-section-two:before{
        position:absolute;
        content:'';
        left:0px;
        top:0px;
        right:0px;
        bottom:0px;
        background-image: -ms-linear-gradient(left, #004DDA 0%, #009dcd 100%);
        background-image: -moz-linear-gradient(left, #004DDA 0%, #009dcd 100%);
        background-image: -o-linear-gradient(left, #004DDA 0%, #009dcd 100%);
        background-image: -webkit-gradient(linear, left top, right top, color-stop(0, #004DDA), color-stop(100, #009dcd));
        background-image: -webkit-linear-gradient(left, #004DDA 0%, #009dcd 100%);
        background-image: linear-gradient(to right, #004DDA 0%, #009dcd 100%);
    }

    .department-section-two .sec-title .separator:after{
        border-color:#1262f5;
    }

    .department-block-two{
        position:relative;
    }

    .department-block-two .inner-box{
        position:relative;
    }

    .department-block-two .inner-box .image{
        position:relative;
        overflow:hidden;
        border-radius:10px;
    }

    .department-block-two .inner-box .image img{
        position:relative;
        width:100%;
        display:block;
    }

    .department-block-two .inner-box .lower-content{
        position:relative;
        margin-left:24px;
        margin-right:24px;
        margin-top:-62px;
        border-radius:10px;
        padding-top:30px;
        text-align:center;
        overflow:hidden;
        background-color:#ffffff;
    }

    .department-block-two .inner-box .lower-content h3{
        position:relative;
        font-size:20px;
        font-weight:700;
        color:#222222;
        line-height:1.3em;
        padding-left:15px;
        padding-right:15px;
    }

    .department-block-two .inner-box .lower-content h3 a{
        position:relative;
        color:#222222;
    }

    .department-block-two .inner-box .lower-content .text{
        position:relative;
        color:#777777;
        font-size:16px;
        line-height:1.8em;
        margin-top:22px;
        margin-bottom:22px;
        padding-left:20px;
        padding-right:20px;
    }

    .department-block-two .inner-box .lower-content .read-more{
        position:relative;
        display:block;
        padding:15px 15px;
        text-align:center;
        color:#004cda;
        font-size:16px;
        font-weight:700;
        background-color:#dddddd;
        font-family: 'Lora', serif;
        transition: all 300ms ease;
        -webkit-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
    }

    .department-block-two .inner-box:hover .lower-content .read-more{
        background-color:#222222;
        color:#ffffff;
    }

    /***

====================================================================
	Pricing Section Two
====================================================================

***/

    .price-section{
        position:relative;
        padding:100px 0px 80px;
    }

    .price-block{
        position:relative;
        margin-bottom:30px;
    }

    .price-block .inner-box{
        position:relative;
        padding-top:45px;
        border-radius:10px;
        overflow:hidden;
        border:1px solid #d7d7d7;
    }

    .price-block .inner-box .upper-box{
        position:relative;
        padding-left:50px;
        padding-right:15px;
    }

    .price-block .inner-box .upper-box .icon{
        position:absolute;
        right:20px;
        top:0px;
        color:#e5e5e5;
        font-size:90px;
        line-height:1em;
    }

    .price-block .inner-box .upper-box .title{
        position:relative;
        color:#777777;
        font-size:16px;
        line-height:1.3em;
    }

    .price-block .inner-box .upper-box .price{
        position:relative;
        color:#004cda;
        font-size:60px;
        font-weight:700;
        line-height:1em;
        margin-top:20px;
        font-family: 'Lora', serif;
    }

    .price-block .inner-box .upper-box .price sub{
        position:relative;
        font-size:30px;
        bottom:5px;
    }

    .price-block .inner-box .plan-outer{
        position:relative;
        display:block;
    }

    .price-block .inner-box .plan-outer .plan{
        position:relative;
        text-align:right;
        color:#222222;
        float:right;
        font-size:24px;
        font-weight:700;
        margin-top:50px;
        padding:15px 40px;
        display:inline-block;
        background-color:#f5f5f5;
        border-radius:50px 0px 0px 50px;
        transition: all 300ms ease;
        -webkit-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
        font-family: 'Lora', serif;
    }

    .price-block .inner-box:hover .plan-outer .plan{
        background-color:#222222;
        color:#ffffff;
    }

    .price-block .inner-box .middle-content{
        position:relative;
        display:block;
        text-align:center;
        padding:0px 40px;
        margin-top:40px;
        margin-bottom:35px;
    }

    .price-block .inner-box .middle-content ul{
        position:relative;
    }

    .price-block .inner-box .middle-content ul li{
        position:relative;
        color:#777777;
        font-size:15px;
        margin-bottom:22px;
        padding-left:30px;
        text-align:left;
    }

    .price-block .inner-box .middle-content ul li:before{
        position: absolute;
        left: 0;
        top: 0;
        font-size: 14px;
        line-height: 24px;
        color: #777777;
        content: "\f176";
        font-weight:700;
        font-family: "Flaticon";
    }

    .price-block .inner-box .appointment{
        position:relative;
        display:block;
        color:#ffffff;
        font-size:16px;
        text-align:center;
        padding:18px 15px;
        background-color:#222222;
        text-transform:capitalize;
        transition: all 300ms ease;
        -webkit-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
    }

    .price-block .inner-box:hover .appointment{
        background-color:#004cda;
    }

    /***

====================================================================
	Services Section Two
====================================================================

***/

    .services-section-two{
        position:relative;
        padding:80px 0px 50px;
        background-attachment:fixed;
        background-repeat:no-repeat;
        background-size:cover;
    }

    .services-section-two.style-two{
        padding-bottom:180px;
    }

    .services-section-two:before{
        position:absolute;
        content:'';
        left:0px;
        top:0px;
        right:0px;
        bottom:0px;
        background-color:rgba(255,255,255,0.90);
    }

    .service-block-three{
        position:relative;
        margin-bottom:50px;
    }

    .service-block-three .inner-box{
        position:relative;
        text-align:center;
        padding:45px 30px 45px;
    }

    .service-block-three .inner-box:before{
        position:absolute;
        content:'';
        left:0px;
        bottom:0px;
        width:100%;
        height:0px;
        transition: all 600ms ease;
        -webkit-transition: all 600ms ease;
        -ms-transition: all 600ms ease;
        -o-transition: all 600ms ease;
        -moz-transition: all 600ms ease;
        background-color:#004cda;
    }

    .service-block-three .inner-box:hover::before{
        height:100%;
        transition-delay: 600ms;
    }

    .service-block-three .inner-box .border-one{
        position:absolute;
        left:0px;
        top:0px;
        width:40px;
        height:40px;
        transition: all 600ms ease;
        -webkit-transition: all 600ms ease;
        -ms-transition: all 600ms ease;
        -o-transition: all 600ms ease;
        -moz-transition: all 600ms ease;
    }

    .service-block-three .inner-box .border-one:before{
        position:absolute;
        content:'';
        left:0px;
        top:0px;
        width:100%;
        height:1px;
        background-color:#acacac;
    }

    .service-block-three .inner-box .border-one:after{
        position:absolute;
        content:'';
        left:0px;
        top:0px;
        width:1px;
        height:100%;
        background-color:#acacac;
    }

    .service-block-three .inner-box:hover .border-one:before,
    .service-block-three .inner-box:hover .border-one:after{
        background-color:#004cda;
    }

    .service-block-three .inner-box:hover .border-one{
        width:100%;
        height:100%;
        display:block;
    }

    .service-block-three .inner-box .border-two{
        position:absolute;
        right:0px;
        bottom:0px;
        width:40px;
        height:40px;
        transition: all 600ms ease;
        -webkit-transition: all 600ms ease;
        -ms-transition: all 600ms ease;
        -o-transition: all 600ms ease;
        -moz-transition: all 600ms ease;
    }

    .service-block-three .inner-box .border-two:before{
        position:absolute;
        content:'';
        right:0px;
        bottom:0px;
        width:100%;
        height:1px;
        background-color:#acacac;
    }

    .service-block-three .inner-box .border-two:after{
        position:absolute;
        content:'';
        right:0px;
        top:0px;
        width:1px;
        height:100%;
        background-color:#acacac;
    }

    .service-block-three .inner-box:hover .border-two{
        width:100%;
        height:100%;
        display:block;
    }

    .service-block-three .inner-box:hover .border-two:before,
    .service-block-three .inner-box:hover .border-two:after{
        background-color:#004cda;
    }

    .service-block-three .inner-box .icon-box{
        position:relative;
        color:#9c9c9c;
        font-size:60px;
        line-height:1em;
        transition: all 300ms ease;
        -webkit-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
    }

    .service-block-three .inner-box h3{
        position:relative;
        color:#222222;
        font-size:20px;
        font-weight:700;
        line-height:1.3em;
        margin-top:25px;
    }

    .service-block-three .inner-box h3 a{
        position:relative;
        color:#222222;
        transition: all 300ms ease;
        -webkit-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
    }

    .service-block-three .inner-box .text{
        position:relative;
        color:#777777;
        font-size:16px;
        line-height:1.7em;
        margin-top:15px;
        transition: all 300ms ease;
        -webkit-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
    }

    .service-block-three .inner-box:hover h3 a,
    .service-block-three .inner-box:hover .text,
    .service-block-three .inner-box:hover .icon-box{
        color:#ffffff;
        transition-delay: 600ms;
    }

    /***

====================================================================
				Doctors Section
====================================================================

***/

    .doctors-section{
        position: relative;
        padding: 115px 0 120px;
    }

    .doctors-section.style-two{
        padding-bottom:240px;
    }

    .doctors-section.style-three{
        padding-top:0px;
        padding-bottom:240px;
    }

    .doctors-tabs{
        position: relative;
    }

    .doctors-tabs .doctor-info{
        position: relative;
    }

    .doctor-info .image-column .inner-column{

    }

    .doctor-info .image-column img{
        display: block;
        width: 100%;
    }

    .doctor-info .content-column .inner-column{
        position: relative;
    }

    .doctors-tabs .tabs-content .tab{
        display: none;
    }

    .doctors-tabs .tabs-content .tab.active-tab{
        display: block;
    }

    .doctor-info .name{
        position: relative;
        display: block;
        font-size: 30px;
        line-height: 1.2em;
        color: #004cda;
        font-weight: 700;
        margin-bottom: 7px;
    }

    .doctor-info .name a{
        color: #004cda;
        -webkit-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        transition: all 300ms ease;
    }

    .doctor-info .name a:hover{
        color: #222222;
    }

    .doctor-info .designation{
        position: relative;
        display: block;
        font-size: 16px;
        line-height: 28px;
        color: #222222;
        font-weight: 400;
        margin-bottom: 25px;
    }

    .doctor-info p{
        position: relative;
        display: block;
        font-size: 16px;
        line-height: 30px;
        color: #777777;
        font-weight: 400;
        margin-bottom: 30px;
    }

    .doctor-info .timing{
        position: relative;
        display: block;
        font-size: 16px;
        line-height: 30px;
        color: #777777;
        margin-bottom: 20px;
    }

    .doctor-info .timing i{
        color: #004cda;
        margin-right: 10px;
    }

    .doctor-info .social-links{
        position: relative;
        padding-top: 15px;
    }

    .doctor-info .social-links h4,
    .doctor-info .social-links li{
        position: relative;
        display: inline-block;
        font-size: 16px;
        line-height: 20px;
        color: #222222;
        margin-right: 15px;
    }

    .doctor-info .social-links h4{
        font-weight: 700;
        margin-left: 0;
        margin-bottom:15px;
    }

    .doctor-info .social-links li{
        float: left;
    }

    .doctor-info .social-links li a{
        display: block;
        color: #222222;
        -webkit-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        transition: all 300ms ease;
    }

    .doctor-info .social-links li a:hover{
        color: #004cda;
    }

    .doctor-info .call-btn{
        position: relative;
        margin-top:35px;
    }

    .doctor-info .call-btn a{
        padding: 14px 25px;
    }

    .doctors-tabs .doctors-thumb{
        position: absolute;
        right: 0;
        top: 0px;
        margin: 0px 0px 30px;
        z-index: 9;
    }

    .doctors-tabs .doctors-thumb .tab-btn{
        position: relative;
        cursor: pointer;
        margin-bottom:30px;
    }

    .doctors-tabs .doctors-thumb .image-box{
        position: relative;
        max-width: 170px;
        border: 1px solid #dddddd;
        text-align: center;
    }

    .doctors-tabs .doctors-thumb .image-box figure{
        margin-bottom:0px;
    }

    .doctors-tabs .doctors-thumb .image-box:before{
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        background: #004cda padding-box content-box;
        opacity: .70;
        padding: 10px;
        content: "";
        -webkit-transform: scale(0);
        -moz-transform: scale(0);
        -ms-transform: scale(0);
        -o-transform: scale(0);
        transform: scale(0);
        -webkit-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        transition: all 300ms ease;
    }

    .doctors-tabs .doctors-thumb .image-box:hover:before,
    .doctors-tabs .doctors-thumb .active-btn .image-box:before{
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        -o-transform: scale(1);
        transform: scale(1);
    }

    .doctors-tabs .doctors-thumb .image-box:after{
        position: absolute;
        left: 50%;
        top: 50%;
        height: 40px;
        width: 40px;
        margin: -20px 0 0 -20px;
        font-size: 26px;
        line-height: 40px;
        color: #ffffff;
        content: "\f115";
        font-family: "flaticon";
        -webkit-transform: scale(0);
        -moz-transform: scale(0);
        -ms-transform: scale(0);
        -o-transform: scale(0);
        transform: scale(0);
    }

    .doctors-tabs .doctors-thumb .image-box:hover:after,
    .doctors-tabs .doctors-thumb .active-btn .image-box:after{
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        -o-transform: scale(1);
        transform: scale(1);
        -webkit-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        transition: all 300ms ease;
        -webkit-transition-delay: 200ms;
        -moz-transition-delay: 200ms;
        -ms-transition-delay: 200ms;
        -o-transition-delay: 200ms;
        transition-delay: 200ms;
    }

    .doctors-tabs .doctors-thumb .image-box img{
        width: 100%;
        height: auto;
    }

    /***

====================================================================
	Default Section
====================================================================

***/

    .default-section{
        position:relative;
        padding:100px 0px 70px;
        background-size:cover;
    }

    .default-section:before{
        position:absolute;
        content:'';
        left:0px;
        top:0px;
        right:0px;
        bottom:0px;
        background-color:rgba(255,255,255,0.90);
    }

    .default-section .sec-title .separator:after{
        top:-6px;
        border:none;
        width:12px;
        height:12px;
        margin-left:-6px;
    }

    /*Progress Level*/

    .progress-levels{
        position:relative;
        margin-bottom:30px;
    }

    .progress-levels .progress-box{
        position:relative;
        overflow:hidden;
        margin-bottom:40px;
        width:100%;
        border-radius:50px;
    }

    .progress-levels .progress-box .inner{
        position:relative;
        text-align:center;
        padding-left:170px;
    }

    .progress-levels .progress-box .inner .count-text{
        position:relative;
        font-size:14px;
        font-weight:600;
        color:#222222;
        display:inline-block;
        margin-bottom:10px;
        font-family: 'Poppins', sans-serif;
    }

    .progress-levels .progress-box .inner .percent{
        position:relative;
        font-size:14px;
        font-weight:600;
        color:#222222;
        display:inline-block;
        margin-bottom:10px;
        font-family: 'Poppins', sans-serif;
    }

    .progress-levels .progress-box .bar{
        position:relative;
    }

    .progress-levels .progress-box .bar .bar-innner{
        position:relative;
        width:100%;
        height:50px;
        background-color:#ffffff;
    }

    .progress-levels .progress-box .bar .bar-innner .skill-percent{
        right: -40px;
        position: absolute;
        text-align: center;
        top: 13px;
    }

    .progress-levels .progress-box .bar .bar-fill{
        position:absolute;
        left:0%;
        top:0px;
        width:0%;
        height:50px;
        background-size:cover;
        background:url(../images/resource/graph-layer.jpg) repeat;
        background-position:center center;
        -moz-transition:all 2000ms ease 300ms;
        -webkit-transition:all 2000ms ease 300ms;
        -ms-transition:all 2000ms ease 300ms;
        -o-transition:all 2000ms ease 300ms;
        transition:all 2000ms ease 300ms;
    }

    .progress-levels .progress-box .inner .text{
        position: absolute;
        left:0px;
        top:0px;
        height:50px;
        color: #ffffff;
        font-size: 16px;
        font-weight: 700;
        min-width:170px;
        text-align:center;
        line-height: 1.3em;
        padding:14px 0px;
        background-color:#222222;
        text-transform: capitalize;
    }

    .default-section .timeline-column{
        position:relative;
    }

    .default-section .timeline-column .inner-column{
        position:relative;
    }

    .default-section .timeline-column .inner-column .text{
        position:relative;
        color:#777777;
        font-size:16px;
        line-height:1.7em;
    }

    .default-section .timeline-column .timeline-list{
        position:relative;
        margin-top:40px;
        max-width:350px;
    }

    .default-section .timeline-column .timeline-list li{
        position:relative;
        color:#777777;
        font-size:16px;
        margin-bottom:20px;
    }

    .default-section .timeline-column .timeline-list li:before{
        position:absolute;
        content:'--';
        left:50%;
        color:#777777;
        margin-left:-2px;
    }

    .default-section .timeline-column .timeline-list li span{
        position:absolute;
        right:0px;
        color:#004cda;
    }

    .default-section .timeline-column .btn-box{
        position:relative;
        margin-top:50px;
    }

    .default-section .timeline-column .btn-box .timeline-btn{
        position:relative;
        color:#ffffff;
        font-size:14px;
        padding:18px 40px;
        border-radius:50px;
        margin-right:15px;
        margin-bottom:8px;
        background-color:#004cda;
    }

    .default-section .timeline-column .btn-box .timeline-btn .icon{
        position:relative;
        margin-right:8px;
    }

    .default-section .timeline-column .btn-box .timeline-btn:hover{
        background-color:#222222;
    }

    /***

====================================================================
	Appointment Section
====================================================================

***/

    .appointment-section{
        position:relative;
        padding-top:125px;
        background-position:left top;
        background-repeat:no-repeat;
    }

    .appointment-section .image-column{
        position:relative;
    }

    .appointment-section .image-column .inner-column{
        position:relative;
        text-align:center;
    }

    .appointment-section .image-column .inner-column .image{
        position:relative;
    }

    .appointment-section .form-column{
        position:relative;
    }

    .appointment-section .form-column .inner-column{
        position:relative;
        margin-bottom:45px;
    }

    /* Appointment Form */

    .appointment-form{
        position: relative;
        z-index:1;
    }

    .appointment-form .form-group{
        position:relative;
        margin-bottom:20px;
    }

    .ui-selectmenu-button.ui-button,
    .appointment-form .form-group input[type="text"],
    .appointment-form .form-group input[type="email"],
    .appointment-form .form-group input[type="tel"],
    .appointment-form .form-group input[type="url"],
    .appointment-form .form-group textarea,
    .appointment-form .form-group select{
        position: relative;
        display: block;
        width: 100%;
        font-size: 14px;
        line-height: 20px;
        color: #888888;
        font-weight: 400;
        padding: 14px 20px;
        border-radius:5px;
        z-index:1;
        border: 1px solid #cccccc;
        background-color: #ffffff;
        -webkit-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
        transition: all 300ms ease;
    }

    .appointment-form .form-group input:focus,
    .appointment-form .form-group select:focus,
    .appointment-form .form-group textarea:focus{
        border-color:#004cda;
    }

    .appointment-form .form-group textarea{
        height: 150px;
        resize: none;
        border-radius:10px;
    }

    .appointment-form .form-group input[type="submit"],
    .appointment-form button{
        margin-top:15px;
    }

    .appointment-form .form-group input[type="submit"]:hover,
    .appointment-form button:hover{
        opacity: .95;
    }

    .appointment-form .form-group .icon{
        position: absolute;
        right: 10px;
        top: 0;
        height: 50px;
        width: 50px;
        z-index:1;
        line-height: 50px;
        text-align: center;
        font-size: 14px;
        color: #888888;
    }

    .appointment-section-two .form-column{
        position:relative;
    }

    .appointment-section-two .form-column .inner-column{
        position:relative;
        padding-right:45px;
        padding-top:90px;
    }

    /***

====================================================================
	Appointment Section Two
====================================================================

***/

    .appointment-section-two{
        position:relative;
        margin-top:-230px;
    }

    .appointment-section-two .inner-container{
        position:relative;
        z-index:1;
        background-color:#ffffff;
        box-shadow:0px 0px 15px rgba(0,0,0,0.15);
    }

    .appointment-section-two .image-column{
        position:relative;
    }

    .appointment-section-two .image-column .inner-column{
        position:relative;
        text-align:center;
        padding-left:60px;
    }

    .appointment-section-two .image-column .inner-column .image{
        position:relative;
        margin-top:-140px;
    }

    .appointment-section-two .image-column .inner-column .image img{
        width:100%;
        display:block;
    }

    /***

====================================================================
	Doctor Gallery Section
====================================================================

***/

    .doctor-gallery-section{
        position:relative;
    }

    .doctor-gallery-section .outer-container{
        position:relative;
    }

    .doctor-gallery-section .owl-dots,
    .doctor-gallery-section .owl-nav{
        display:none;
    }

    /*Gallery Item*/

    .gallery-block{
        position:relative;
    }

    .gallery-block .inner-box{
        position:relative;
        width:100%;
        overflow:hidden;
    }

    .gallery-block .image-box{
        position:relative;
        display:block;
        margin:0px;
    }

    .gallery-block .image-box img{
        position:relative;
        display:block;
        width:100%;
    }

    .gallery-block .overlay-box{
        position:absolute;
        left:0px;
        top:0px;
        width:100%;
        height:100%;
        opacity:0;
        color:#ffffff;
        text-align:center;
        -webkit-transition:all 700ms ease;
        -ms-transition:all 700ms ease;
        -o-transition:all 700ms ease;
        transition:all 700ms ease;
        -webkit-transform:translateY(-100%);
        -ms-transform:translateY(-100%);
        -o-transform:translateY(-100%);
        -moz-transform:translateY(-100%);
        transform:translateY(-100%);
        background-color:rgba(0,76,218,0.80);
    }

    .gallery-block .inner-box:hover .overlay-box{
        opacity:1;
        -webkit-transform:translateY(0%);
        -ms-transform:translateY(0%);
        -o-transform:translateY(0%);
        -moz-transform:translateY(0%);
        transform:translateY(0%);
    }

    .gallery-block .overlay-inner{
        position:absolute;
        left:0px;
        top:0px;
        width:100%;
        height:100%;
        display:table;
        vertical-align:middle;
        padding:10px 0px;
    }

    .gallery-block .overlay-inner .content{
        position:relative;
        display:table-cell;
        vertical-align:middle;
        opacity:0;
        transform:translateY(50px);
    }

    .gallery-block .inner-box:hover .overlay-inner .content{
        transform:translateY(0);
        opacity:1;
        transition:all 500ms ease 500ms;
        -webkit-transition:all 500ms ease 500ms;
        -ms-transition:all 500ms ease 500ms;
        -o-transition:all 500ms ease 500ms;
    }

    .gallery-block .overlay-inner .link{
        position:relative;
        transition:all 500ms ease;
        -webkit-transition:all 500ms ease;
        -ms-transition:all 500ms ease;
        -o-transition:all 500ms ease;
    }

    .gallery-block .overlay-inner .link img{
        width:auto;
        display:inline-block;
    }

    .gallery-block .overlay-inner .link .icon{
        position:relative;
    }

    /***

====================================================================
	Health Section
====================================================================

***/

    .health-section{
        position:relative;
        padding-top:100px;
    }

    .health-section .inner-container{
        position:relative;
    }

    .health-section .content-column{
        position:relative;
    }

    .health-section .content-column .inner-column{
        position:relative;
        padding:50px 50px;
    }

    .health-section .content-column .border-line{
        position:absolute;
        left:0px;
        top:0px;
        right:0px;
        bottom:0px;
        border-left:10px solid #004cd9;
        border-bottom:10px solid #004cd9;
    }

    .health-section .content-column .text{
        position:relative;
        color:#777777;
        font-size:16px;
        line-height:1.8em;
        max-width:490px;
        margin-bottom:40px;
    }

    .health-section .content-column .border-line:before{
        position:absolute;
        content:'';
        left:0px;
        top:0px;
        width:400px;
        height:10px;
        background-color:#004cd9;
    }

    .health-section .content-column .border-line:after{
        position:absolute;
        content:'';
        right:0px;
        bottom:0px;
        width:10px;
        height:70px;
        background-color:#004cd9;
    }

    .health-section .image-column{
        position:relative;
    }

    .health-section .image-column .inner-column{
        position:relative;
    }

    .health-section .image-column .inner-column:before{
        position:absolute;
        content:'';
        right:0px;
        bottom:-50px;
        width:379px;
        height:423px;
        background:url(../images/background/pattern-6.jpg) no-repeat;
    }

    .health-section .image-column .inner-column .image{
        position:relative;
        margin-left:-80px;
    }

    .health-section .image-column .inner-column .image img{
        position:relative;
        width:100%;
        display:block;
    }

    /***

====================================================================
	Featured Section
====================================================================

***/

    .featured-section{
        position:relative;
        padding:80px 0px 60px;
    }

    .feature-block{
        position:relative;
        margin-bottom:30px;
    }

    .feature-block .inner-box{
        position:relative;
    }

    .feature-block .inner-box .upper-box{
        position:relative;
        padding-left:50px;
    }

    .feature-block .inner-box .upper-box .icon{
        position:absolute;
        left:0px;
        top:0px;
        color:#004cda;
        line-height:1em;
        font-size:30px;
    }

    .feature-block .inner-box .upper-box h3{
        position:relative;
        font-weight:700;
        font-size:20px;
        color:#222222;
        line-height:1.3em;
    }

    .feature-block .inner-box .upper-box h3 a{
        position:relative;
        color:#222222;
        -webkit-transition:all 0.3s ease;
        -moz-transition:all 0.3s ease;
        -ms-transition:all 0.3s ease;
        -o-transition:all 0.3s ease;
        transition:all 0.3s ease;
    }

    .feature-block .inner-box .text{
        position:relative;
        color:#777777;
        font-size:16px;
        line-height:1.7em;
        margin-top:20px;
    }

    .feature-block .inner-box .upper-box h3 a:hover{
        color:#004cda;
    }

    /***

====================================================================
	Main Slider Three
====================================================================

***/

    .main-slider-three{
        position:relative;
        padding-top:230px;
        background-color:#004cd9;
    }

    .main-slider-three:before{
        position:absolute;
        content:'';
        left:0px;
        bottom:-2px;
        width:100%;
        height:254px;
        background:url(../images/main-slider/pattern-1.png);
        background-repeat:repeat-x;
    }

    .main-slider-three:after{
        position:absolute;
        content:'';
        right:0px;
        bottom:-2px;
        width:706px;
        height:405px;
        z-index:-1;
        background:url(../images/main-slider/curve.png);
        background-repeat:no-repeat;
    }

    .main-slider-three .content-column{
        position:relative;
    }

    .main-slider-three .content-column .inner-column{
        position:relative;
    }

    .main-slider-three .content-column h2{
        position:relative;
        color:#ffffff;
        font-size:60px;
        font-weight:700;
        line-height:1.1em;
        opacity: 0;
        -webkit-transition: all 1000ms ease;
        -moz-transition: all 100ms ease;
        -ms-transition: all 1000ms ease;
        -o-transition: all 1000ms ease;
        transition: all 1000ms ease;
        -webkit-transform: translateX(80px);
        -moz-transform: translateX(80px);
        -ms-transform: translateX(80px);
        -o-transform: translateX(80px);
        transform: translateX(80px);
    }

    .main-slider-three .swiper-slide-active .content-column h2{
        opacity: 1;
        -webkit-transform: translateY(0);
        -moz-transform: translateY(0);
        -ms-transform: translateY(0);
        -o-transform: translateY(0);
        transform: translateY(0);
        transition-delay: 0ms;
    }

    .main-slider-three .content-column .text{
        position:relative;
        color:#ffffff;
        font-size:18px;
        font-weight:700;
        line-height:1.8em;
        margin-top:30px;
        font-family: 'Lato', sans-serif;
        opacity: 0;
        -webkit-transition: all 1000ms ease;
        -moz-transition: all 100ms ease;
        -ms-transition: all 1000ms ease;
        -o-transition: all 1000ms ease;
        transition: all 1000ms ease;
        -webkit-transform: translateX(-80px);
        -moz-transform: translateX(-80px);
        -ms-transform: translateX(-80px);
        -o-transform: translateX(-80px);
        transform: translateX(-80px);
    }

    .main-slider-three .swiper-slide-active .content-column .text{
        opacity: 1;
        -webkit-transform: translateX(0);
        -moz-transform: translateX(0);
        -ms-transform: translateX(0);
        -o-transform: translateX(0);
        transform: translateX(0);
        transition-delay: 600ms;
    }

    .main-slider-three .content-column .btn-box{
        position:relative;
        margin-top:40px;
        opacity: 0;
        -webkit-transition: all 1000ms ease;
        -moz-transition: all 100ms ease;
        -ms-transition: all 1000ms ease;
        -o-transition: all 1000ms ease;
        transition: all 1000ms ease;
        -webkit-transform: translateY(-80px);
        -moz-transform: translateY(80px);
        -ms-transform: translateY(80px);
        -o-transform: translateY(80px);
        transform: translateY(80px);
    }

    .main-slider-three .swiper-slide-active .content-column .btn-box{
        opacity: 1;
        -webkit-transform: translateY(0);
        -moz-transform: translateY(0);
        -ms-transform: translateY(0);
        -o-transform: translateY(0);
        transform: translateY(0);
        transition-delay: 1200ms;
    }

    .main-slider-three .content-column .btn-box .theme-btn{
        margin-right:20px;
    }

    .main-slider-three .content-column .btn-box .appointment-btn{
        position: relative;
        display: inline-block;
        font-size: 16px;
        line-height: 30px;
        color: #004cd9;
        padding: 7px 37px 9px;
        font-weight: 400;
        overflow: hidden;
        border-radius: 50px;
        overflow:hidden;
        background: #ffffff;
        border:2px solid #ffffff;
        text-transform: capitalize;
        font-family: 'Lato', sans-serif;
    }

    .main-slider-three .content-column .btn-box .appointment-btn:hover{
        background:none;
        color:#ffffff;
    }

    .main-slider-three .content-column .btn-box .services-btn{
        position: relative;
        display: inline-block;
        font-size: 16px;
        line-height: 30px;
        color: #ffffff;
        padding: 7px 37px 9px;
        font-weight: 400;
        overflow: hidden;
        border-radius: 50px;
        overflow:hidden;
        background: none;
        border:2px solid #ffffff;
        text-transform: capitalize;
        font-family: 'Lato', sans-serif;
    }

    .main-slider-three .content-column .btn-box .services-btn:hover{
        background:#ffffff;
        color:#004cd9;
    }

    .main-slider-three .image-column{
        position:relative;
    }

    .main-slider-three .image-column .inner-column{
        position:relative;
        text-align:center;
    }

    .main-slider-three .image-column .image{
        position:relative;
        opacity: 0;
        -webkit-transition: all 1000ms ease;
        -moz-transition: all 100ms ease;
        -ms-transition: all 1000ms ease;
        -o-transition: all 1000ms ease;
        transition: all 1000ms ease;
        -webkit-transform: translateY(-80px);
        -moz-transform: translateY(-80px);
        -ms-transform: translateY(-80px);
        -o-transform: translateY(-80px);
        transform: translateY(-80px);
    }

    .main-slider-three .swiper-slide-active .image-column .image{
        opacity: 1;
        -webkit-transform: translateX(0);
        -moz-transform: translateX(0);
        -ms-transform: translateX(0);
        -o-transform: translateX(0);
        transform: translateX(0);
        transition-delay: 0ms;
    }

    .main-slider-three .image-column .image img{
        position:relative;
        border-radius:50%;
        overflow:hidden;
    }

    .main-slider-three .image-column .image:before{
        position:absolute;
        content:'';
        left:-25px;
        top:20px;
        right:20px;
        bottom:-10px;
        border-radius:50%;
        background-color:#004cd9;
        box-shadow:0px 0px 15px rgba(0,0,0,0.30);
    }

    /***

====================================================================
	Video Section
====================================================================

***/

    .video-section{
        position:relative;
        padding:160px 0px 460px;
        background-attachment:fixed;
        background-size:cover;
    }

    .video-section:before{
        position:absolute;
        content:'';
        left:0px;
        top:0px;
        right:0px;
        bottom:0px;
        opacity:0.7;
        background-color:#0939d6;
    }

    .video-section .content{
        position:relative;
        text-align:center;
    }

    .video-section .content .play-box{
        position:relative;
        text-align:center;
        overflow:hidden;
        line-height: 70px;
        box-shadow:inset 0 0 45px rgba(0,0,0,0.40);
        transition:all 0.3s ease;
        -moz-transition:all 0.3s ease;
        -webkit-transition:all 0.3s ease;
        -ms-transition:all 0.3s ease;
        -o-transition:all 0.3s ease;
    }

    .video-section .content .play-box span{
        position: relative;
        width:70px;
        height: 70px;
        z-index:99;
        color: #222222;
        font-weight:400;
        font-size:20px;
        text-align: center;
        border-radius:50%;
        padding-left:4px;
        display: inline-block;
        transition: all 900ms ease;
        -moz-transition: all 900ms ease;
        -webkit-transition: all 900ms ease;
        -ms-transition: all 900ms ease;
        -o-transition: all 900ms ease;
        background-color:#ffffff;
    }

    .video-section .content .play-box .ripple,
    .video-section .content .play-box .ripple:before,
    .video-section .content .play-box .ripple:after {
        position: absolute;
        top: 50%;
        left: 50%;
        width:70px;
        height: 70px;
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        -ms-border-radius: 50%;
        -o-border-radius: 50%;
        border-radius: 50%;
        -webkit-box-shadow: 0 0 0 0 rgba(255, 255, 255, .6);
        -moz-box-shadow: 0 0 0 0 rgba(255, 255, 255, .6);
        -ms-box-shadow: 0 0 0 0 rgba(255, 255, 255, .6);
        -o-box-shadow: 0 0 0 0 rgba(255, 255, 255, .6);
        box-shadow: 0 0 0 0 rgba(255, 255, 255, .6);
        -webkit-animation: ripple 3s infinite;
        -moz-animation: ripple 3s infinite;
        -ms-animation: ripple 3s infinite;
        -o-animation: ripple 3s infinite;
        animation: ripple 3s infinite;
    }

    .video-section .content .play-box .ripple:before {
        -webkit-animation-delay: .9s;
        -moz-animation-delay: .9s;
        -ms-animation-delay: .9s;
        -o-animation-delay: .9s;
        animation-delay: .9s;
        content: "";
        position: absolute;
    }

    .video-section .content .play-box .ripple:after {
        -webkit-animation-delay: .6s;
        -moz-animation-delay: .6s;
        -ms-animation-delay: .6s;
        -o-animation-delay: .6s;
        animation-delay: .6s;
        content: "";
        position: absolute;
    }

    @-webkit-keyframes ripple {
        70% {box-shadow: 0 0 0 70px rgba(255, 255, 255, 0);}
        100% {box-shadow: 0 0 0 0 rgba(255, 255, 255, 0);}
    }

    @keyframes ripple {
        70% {box-shadow: 0 0 0 70px rgba(255, 255, 255, 0);}
        100% {box-shadow: 0 0 0 0 rgba(255, 255, 255, 0);}
    }

    .video-section .content .text{
        position:relative;
        color:#ffffff;
        letter-spacing:2px;
        font-size:20px;
        letter-spacing:1px;
        margin-top:40px;
        text-transform:uppercase;
        font-family: 'Lora', serif;
    }

    .video-section .content h2{
        position:relative;
        color:#ffffff;
        letter-spacing:1px;
        font-size:60px;
        letter-spacing:1px;
        margin-top:10px;
        font-weight:700;
        font-family: 'Lora', serif;
    }

    /***

====================================================================
	Testimonial Section Two
====================================================================

***/

    .testimonial-section-two{
        position:relative;
        padding-top:100px;
        padding-bottom:100px;
    }

    .testimonial-section-two .sponsors-carousel{
        margin:0px -15px;
        width:auto;
    }

    .testimonial-section-two .owl-theme .testimonial-block-two{
        margin:0px 15px;
    }

    .testimonial-section-two .owl-carousel .owl-stage-outer{
        padding:60px 0px 15px;
    }

    .testimonial-block-two{
        position:relative;
    }

    .testimonial-block-two .inner-box{
        position:relative;
        padding-left:30px;
        padding-right:30px;
        border-radius:5px;
        background-color:#ffffff;
        box-shadow:0px 0px 15px rgba(0,0,0,0.20);
    }

    .testimonial-block-two .inner-box .image{
        position:relative;
        width:122px;
        height:122px;
        overflow:hidden;
        border-radius:50%;
        margin-top:-60px;
        margin-bottom:30px;
        display:inline-block;
    }

    .testimonial-block-two .inner-box .text{
        position:relative;
        color:#777777;
        font-size:16px;
        line-height:1.7em;
        margin-bottom:30px;
    }

    .testimonial-block-two .inner-box .lower-box{
        position:relative;
        padding-left:30px;
        padding-right:30px;
    }

    .testimonial-block-two .inner-box .lower-box .quote-icon{
        position:relative;
        color:#ffffff;
        font-size:18px;
        margin-top:10px;
        padding:20px 16px;
        border-radius:50px 50px 0px 0px;
        background-color:#004cda;
    }

    .testimonial-block-two .inner-box .lower-box .author-info{
        position:relative;
    }

    .testimonial-block-two .inner-box .lower-box .author-info h3{
        position:relative;
        color:#222222;
        font-size:18px;
        line-height:1.3em;
        font-weight:700;
    }

    .testimonial-block-two .inner-box .lower-box .author-info .author{
        position:relative;
        color:#777777;
        font-size:14px;
        line-height:1.3em;
        margin-top:4px;
        margin-bottom:25px;
    }

    .testimonial-section-two .owl-nav{
        position: absolute;
        left: 0%;
        top: 50%;
        width: 100%;
        margin-top:-10px;
    }

    .testimonial-section-two .owl-nav .owl-prev{
        position:absolute;
        display:inline-block;
        color:#000000;
        font-size:20px;
        line-height:48px;
        width:50px;
        height:50px;
        text-align:center;
        background:none;
        border-radius:0px 50px 50px 0px;
        border:1px solid #000000;
        -webkit-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        -o-transition:all 300ms ease;
        -moz-transition:all 300ms ease;
        transition:all 300ms ease;
    }

    .testimonial-section-two .owl-nav .owl-next{
        position:absolute;
        display:inline-block;
        color:#000000;
        font-size:20px;
        line-height:48px;
        width:50px;
        height:50px;
        text-align:center;
        background:none;
        border:1px solid #000000;
        border-radius:50px 0px 0px 50px;
        -webkit-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        -o-transition:all 300ms ease;
        -moz-transition:all 300ms ease;
        transition:all 300ms ease;
    }

    .testimonial-section-two .owl-nav .owl-prev{
        left:-60px;
        right:auto;
    }

    .testimonial-section-two .owl-nav .owl-next{
        right:-60px;
        left:auto;
    }

    .testimonial-section-two .owl-nav .owl-prev:hover,
    .testimonial-section-two .owl-nav .owl-next:hover{
        color:#004cda;
        border-color:#004cda;
    }

    .testimonial-section-two .owl-dots{
        display:none;
    }

    /***

====================================================================
	Doctor Info Section
====================================================================

***/

    .doctor-info-section{
        position:relative;
        margin-top:-210px;
        z-index:1;
    }

    .doctor-block{
        position:relative;
        margin-bottom:30px;
    }

    .doctor-block .inner-box{
        position:relative;
        padding:45px 40px;
        background-color:#222222;
        -webkit-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        -o-transition:all 300ms ease;
        -moz-transition:all 300ms ease;
        transition:all 300ms ease;
    }

    .doctor-block .inner-box:hover{
        background-color:#0072ff;
    }

    .doctor-block .inner-box h3{
        position:relative;
        font-size:24px;
        font-weight:700;
        color:#ffffff;
        line-height:1.3em;
        padding-bottom:8px;
        display:inline-block;
        margin-bottom:22px;
    }

    .doctor-block .inner-box h3:before{
        position:absolute;
        content:'';
        left:0px;
        bottom:0px;
        height:1px;
        width:100%;
        background-color:rgba(255,255,255,0.20);
    }

    .doctor-block .inner-box .doctor-time-list{
        position:relative;
        margin-bottom:50px;
    }

    .doctor-block .inner-box .doctor-time-list li{
        position:relative;
        font-size:16px;
        color:#ffffff;
        margin-bottom:12px;
    }

    .doctor-block .inner-box .doctor-time-list li span{
        text-align:right;
        position:absolute;
        right:0px;
    }

    .doctor-block .inner-box .doctor-time-list li:last-child{
        margin-bottom:0px;
    }

    .doctor-block .inner-box h4{
        position:relative;
        color:#ffffff;
        font-size:20px;
        font-weight:700;
        line-height:1.3em;
        padding-bottom:6px;
        display:inline-block;
        margin-bottom:18px;
    }

    .doctor-block .inner-box h4:before{
        position:absolute;
        content:'';
        left:0px;
        bottom:0px;
        height:1px;
        width:100%;
        background-color:rgba(255,255,255,0.20);
    }

    .doctor-block .inner-box .phone{
        position:relative;
        font-size:20px;
        font-weight:700;
        color:#ffffff;
    }

    .doctor-block .inner-box .phone strong{
        font-family: 'Lora', serif;
    }

    .doctor-block .inner-box .text{
        position:relative;
        color:#ffffff;
        font-size:16px;
        line-height:1.8em;
        margin-bottom:21px;
        font-family: 'Lora', serif;
    }

    .doctor-block .inner-box .detail{
        position:relative;
        color:#ffffff;
        font-size:18px;
        font-weight:700;
        text-decoration:underline;
        font-family: 'Lora', serif;
    }

    /***

====================================================================
	News Section Two
====================================================================

***/

    .news-section-two{
        position:relative;
        padding-top:80px;
    }

    .news-block-two{
        position:relative;
        margin-bottom:30px;
    }

    .news-block-two .inner-box{
        position:relative;
        padding-top:50px;
        padding-right:50px;
        padding-bottom:50px;
    }

    .news-block-two .inner-box:before{
        position:absolute;
        content:'';
        left:80px;
        top:0px;
        right:0px;
        bottom:0px;
        background-color:#222222;
        -webkit-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        -o-transition:all 300ms ease;
        -moz-transition:all 300ms ease;
        transition:all 300ms ease;
    }

    .news-block-two .inner-box:hover::before{
        background-color:#004cda;
    }

    .news-block-two .inner-box .image{
        position:relative;
    }

    .news-block-two .inner-box .image img{
        position:relative;
        width:100%;
        display:block;
    }

    .news-block-two .inner-box .lower-content{
        position:relative;
        padding-top:40px;
    }

    .news-block-two .inner-box .lower-content .content{
        position:relative;
        padding-left:150px;
    }

    .news-block-two .inner-box .lower-content .post-info{
        position:absolute;
        left:20px;
        top:0px;
    }

    .news-block-two .inner-box .lower-content .post-info li{
        position:relative;
        color:#222222;
        font-size:16px;
        display:block;
        text-align:center;
        margin-bottom:15px;
    }

    .news-block-two .inner-box .lower-content .post-info li span{
        position:relative;
        color:#004cda;
        display:block;
        font-size:22px;
        margin-bottom:8px;
    }

    .news-block-two .inner-box .lower-content .post-meta{
        position:relative;
    }

    .news-block-two .inner-box .lower-content .post-meta li{
        position:relative;
        display:block;
        color:#ffffff;
        font-size:14px;
        line-height:1.3em;
        padding-right:15px;
        margin-right:15px;
        margin-bottom:5px;
        display:inline-block;
        border-right:1px solid #ffffff;
    }

    .news-block-two .inner-box .lower-content .post-meta li:last-child{
        margin-right:0px;
        padding-right:0px;
        border-right:0px;
    }

    .news-block-two .inner-box .lower-content h3{
        position:relative;
        font-size:20px;
        color:#ffffff;
        line-height:1.7em;
        font-weight:700;
        margin-top:15px;
    }

    .news-block-two.style-two .inner-box .lower-content h3{
        font-size:30px;
        line-height:1.5em;
    }

    .news-block-two .inner-box .lower-content h3 a{
        position:relative;
        color:#ffffff;
    }

    .news-block-two .inner-box .lower-content .text{
        position:relative;
        color:#ffffff;
        font-size:16px;
        line-height:1.7em;
        margin-top:20px;
        margin-bottom:25px;
    }

    .news-block-two .inner-box:hover .lower-content .theme-btn{
        background-color:#ffffff;
        color:#004cda;
    }

    /***

====================================================================
	Clients Section
====================================================================

***/

    .clients-section{
        position:relative;
        padding:70px 0px 190px;
    }

    .clients-section .outer-container{
        position:relative;
        padding:0px 60px;
    }

    .clients-section .sponsors-outer .owl-dots,
    .clients-section .sponsors-outer .owl-nav{
        position:relative;
        display:none;
    }

    .clients-section .sponsors-outer .image-box{
        position:relative;
        text-align:center;
        margin:0px;
    }

    .clients-section .sponsors-outer .image-box img{
        max-width:100%;
        width:auto;
        opacity:0.5;
        display:inline-block;
        -webkit-filter: grayscale(100%);
        filter: grayscale(100%);
        -webkit-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        -o-transition:all 300ms ease;
        -moz-transition:all 300ms ease;
        transition:all 300ms ease;

    }

    .clients-section .sponsors-outer .image-box img:hover{
        opacity:1;
        cursor: col-resize;
        -webkit-filter: grayscale(0%);
        filter: grayscale(0%);
    }

    /***

====================================================================
	Department Section Three
====================================================================

***/

    .department-section-three{
        position:relative;
        padding:100px 0px 100px;
    }

    .department-section-three .sec-title .separator:after{
        border-color:rgba(0,76,218,0.90);
        background-color:#ffffff;
    }

    .department-section-three .image-layer{
        position:absolute;
        left:0px;
        top:0px;
        width:40%;
        height:100%;
        background-size:cover;
    }

    .department-section-three .image-layer:before{
        position:absolute;
        content:'';
        left:0px;
        top:0px;
        right:0px;
        bottom:0px;
        background-color:rgba(0,76,218,0.80);
    }

    .department-section-three:before{
        position:absolute;
        content:'';
        left:40%;
        top:0px;
        right:0px;
        bottom:0px;
        background-image: -ms-linear-gradient(left, #EAEAEA 0%, #ffffff 100%);
        background-image: -moz-linear-gradient(left, #EAEAEA 0%, #ffffff 100%);
        background-image: -o-linear-gradient(left, #EAEAEA 0%, #ffffff 100%);
        background-image: -webkit-gradient(linear, left top, right top, color-stop(0, #EAEAEA), color-stop(100, #ffffff));
        background-image: -webkit-linear-gradient(left, #EAEAEA 0%, #ffffff 100%);
        background-image: linear-gradient(to right, #EAEAEA 0%, #ffffff 100%);
    }

    .department-section-three .department-tabs{
        position:relative;
    }

    .department-section-three .department-tabs .tab-btns{
        position:relative;
        margin-bottom:40px;
    }

    .department-section-three .department-tabs .tab-btns .tab-btn{
        position:relative;
        display:block;
        font-size:18px;
        color:#222222;
        font-weight:700;
        cursor:pointer;
        z-index:1;
        line-height:1.6em;
        margin-bottom:10px;
        padding:20px 20px 20px 30px;
        transition:all 500ms ease;
        text-transform:capitalize;
        background-color:#ffffff;
        border-radius:0px 50px 50px 50px;
        font-family: 'Lora', serif;
    }

    .department-section-three .department-tabs .tab-btns .tab-btn:before{
        position:absolute;
        content:'';
        left:0px;
        top:0px;
        bottom:0px;
        width:0px;
        z-index:-1;
        border-radius:0px 50px 50px 50px;
        background-color:#222222;
        -webkit-transition:all 600ms ease;
        -moz-transition:all 600ms ease;
        -ms-transition:all 600ms ease;
        -o-transition:all 600ms ease;
        transition:all 600ms ease;
    }

    .department-section-three .department-tabs .tab-btns .tab-btn.active-btn::before,
    .department-section-three .department-tabs .tab-btns .tab-btn:hover::before{
        width:100%;
    }

    .department-section-three .department-tabs .tab-btns .tab-btn:hover,
    .department-section-three .department-tabs .tab-btns .tab-btn.active-btn{
        color:#ffffff;
    }

    .department-section-three .department-tabs .tabs-content{
        position:relative;
        padding-left:120px;
    }

    .department-section-three .department-tabs .tabs-content .tab{
        position:relative;
        display:none;
    }

    .department-section-three .department-tabs .tabs-content .tab.active-tab{
        display:block;
    }

    .department-section-three .department-tabs .tabs-content h2{
        position:relative;
        color:#222222;
        font-size:30px;
        font-weight:700;
        line-height:1.3em;
        margin-bottom:12px;
    }

    .department-section-three .department-tabs .tabs-content .title{
        position:relative;
        color:#777777;
        font-size:16px;
        font-weight:700;
        line-height:1.3em;
        margin-bottom:18px;
        font-family: 'Lora', serif;
    }

    .department-section-three .department-tabs .tabs-content .text{
        position:relative;
        margin-bottom:30px;
    }

    .department-section-three .department-tabs .tabs-content .text p{
        position:relative;
        color:#777777;
        font-size:16px;
        line-height:1.8em;
        margin-bottom:20px;
    }

    .department-section-three .department-tabs .tabs-content .text p:last-child{
        margin-bottom:0px;
    }

    .department-section-three .department-tabs .tabs-content .two-column{
        margin-bottom:30px;
    }

    .department-section-three .department-tabs .tabs-content .column{
        position:relative;
    }

    .department-section-three .department-tabs .tabs-content h3{
        position:relative;
        color:#004cda;
        font-size:20px;
        font-weight:700;
        line-height:1.3em;
        margin-bottom:12px;
    }

    .department-section-three .department-tabs .tabs-content .column-text{
        position:relative;
        color:#777777;
        font-size:16px;
        line-height:1.8em;
        margin-bottom:20px;
    }



    /***

====================================================================
					Page Title
====================================================================

***/

    .page-title{
        position:relative;
        padding:160px 0px 0px;
        background-position:center center;
        background-repeat:no-repeat;
        background-size: cover;
        overflow: hidden;
    }

    .page-title .auto-container{
        position:relative;
        padding-bottom:150px;
    }

    .page-title:before{
        position:absolute;
        content:'';
        left:0px;
        top:0px;
        right:0px;
        bottom:0px;
        opacity:0.80;
        background-image: -ms-linear-gradient(left, #004DDA 0%, #009dcd 100%);
        background-image: -moz-linear-gradient(left, #004DDA 0%, #009dcd 100%);
        background-image: -o-linear-gradient(left, #004DDA 0%, #009dcd 100%);
        background-image: -webkit-gradient(linear, left top, right top, color-stop(0, #004DDA), color-stop(100, #009dcd));
        background-image: -webkit-linear-gradient(left, #004DDA 0%, #009dcd 100%);
        background-image: linear-gradient(to right, #004DDA 0%, #009dcd 100%);
    }

    .page-title h1{
        position:relative;
        font-size:48px;
        color:#ffffff;
        line-height: 1.3em;
        font-weight: 700;
        margin-bottom: 10px;
        text-transform: capitalize;
    }

    .page-title .text{
        position:relative;
        color:#ffffff;
        font-size:18px;
        font-family: 'Lora', serif;
    }

    .page-title .bread-crumb{
        position:absolute;
        right:0px;
        bottom:10px;
    }

    .page-title:after{
        position:absolute;
        right:0px;
        bottom:0px;
        content:'';
        height:50px;
        width:50%;
        background-image: -ms-linear-gradient(left, rgba(255,255,255,0) 0%, #000000 100%);
        background-image: -moz-linear-gradient(left, rgba(255,255,255,0) 0%, #000000 100%);
        background-image: -o-linear-gradient(left, rgba(255,255,255,0) 0%, #000000 100%);
        background-image: -webkit-gradient(linear, left top, right top, color-stop(0, rgba(255,255,255,0)), color-stop(100, #000000));
        background-image: -webkit-linear-gradient(left, rgba(255,255,255,0) 0%, #000000 100%);
        background-image: linear-gradient(to right, rgba(255,255,255,0) 0%, #000000 100%);
    }

    .page-title .bread-crumb li{
        position: relative;
        font-size: 16px;
        line-height: 30px;
        color: #ffffff;
        font-weight: 500;
        margin-left:20px;
        padding-left:20px;
        cursor: default;
        z-index:2;
        text-transform: capitalize;
        display: inline-block;
    }

    .page-title .bread-crumb li .fas{
        margin-right:6px;
    }

    .page-title .bread-crumb li a{
        color:#ffffff;
        font-size: 16px;
        line-height: 30px;
        display: inline-block;
        font-family: 'Lora', serif;
        -webkit-transition:all 300ms ease;
        -moz-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        -o-transition:all 300ms ease;
        transition:all 300ms ease;
    }

    .page-title .bread-crumb li a:hover{

    }

    .page-title .bread-crumb li:after{
        position:absolute;
        content:'\f30b';
        right:-28px;
        font-weight: 800;
        top:0px;
        color:#ffffff;
        font-family: 'Font Awesome 5 Free';
    }

    .page-title .bread-crumb li:last-child::after{
        display:none;
    }

    .page-title .bread-crumb li:first-child{
        padding-right:0px;
        margin-right:0px;
    }

    /***

====================================================================
	Portfolio Page Section
====================================================================

***/

    .portfolio-page-section{
        position:relative;
        padding:100px 0px 200px;
    }

    .portfolio-page-section .filters{
        position:relative;
        margin-bottom:60px;
    }

    .portfolio-page-section .filters .filter-tabs{
        position:relative;
    }

    .portfolio-page-section .filters li{
        position: relative;
        display: inline-block;
        color: #777777;
        cursor: pointer;
        font-size: 16px;
        font-weight: 700;
        line-height:1.3em;
        margin-bottom:8px;
        padding:0px 24px 0px;
        display:inline-block;
        text-transform:capitalize;
        transition: all 300ms ease;
        -webkit-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        border-right:1px solid #222222;
    }

    .portfolio-page-section .filters li:last-child{
        border-right:0px;
    }

    .portfolio-page-section .filters .filter.active,
    .portfolio-page-section .filters .filter:hover{
        color:#004cda;
    }

    .gallery-item.mix{
        display:none;
    }

    /*Gallery Item*/

    .gallery-item{
        position:relative;
        margin-bottom:30px;
    }

    .gallery-item .inner-box{
        position:relative;
        width:100%;
        overflow:hidden;
    }

    .gallery-item .image-box{
        position:relative;
        display:block;
        margin:0px;
    }

    .gallery-item .image-box img{
        position:relative;
        display:block;
        width:100%;
    }

    .gallery-item .overlay-box{
        position:absolute;
        left:0px;
        top:0px;
        width:100%;
        height:100%;
        opacity:0;
        color:#ffffff;
        text-align:center;
        -webkit-transition:all 700ms ease;
        -ms-transition:all 700ms ease;
        -o-transition:all 700ms ease;
        transition:all 700ms ease;
        -webkit-transform:translateY(-100%);
        -ms-transform:translateY(-100%);
        -o-transform:translateY(-100%);
        -moz-transform:translateY(-100%);
        transform:translateY(-100%);
        background-color:rgba(0,76,218,0.80);
    }

    .gallery-item .inner-box:hover .overlay-box{
        opacity:1;
        -webkit-transform:translateY(0%);
        -ms-transform:translateY(0%);
        -o-transform:translateY(0%);
        -moz-transform:translateY(0%);
        transform:translateY(0%);
    }

    .gallery-item .overlay-inner{
        position:absolute;
        left:0px;
        top:0px;
        width:100%;
        height:100%;
        display:table;
        vertical-align:middle;
        padding:10px 0px;
    }

    .gallery-item .overlay-inner .content{
        position:relative;
        display:table-cell;
        vertical-align:middle;
        opacity:0;
        transform:translateY(50px);
    }

    .gallery-item .inner-box:hover .overlay-inner .content{
        transform:translateY(0);
        opacity:1;
        transition:all 500ms ease 500ms;
        -webkit-transition:all 500ms ease 500ms;
        -ms-transition:all 500ms ease 500ms;
        -o-transition:all 500ms ease 500ms;
    }

    .gallery-item .overlay-inner .link{
        position:relative;
        font-size:18px;
        color:#ffffff;
        width:46px;
        height:46px;
        line-height:44px;
        border-radius:50%;
        margin:0px 5px;
        font-weight:400;
        display:inline-block;
        border:1px solid #ffffff;
        transition:all 500ms ease;
        -webkit-transition:all 500ms ease;
        -ms-transition:all 500ms ease;
        -o-transition:all 500ms ease;
    }

    .gallery-item .overlay-inner .link .icon{
        position:relative;
    }

    .gallery-item .overlay-inner .link:hover{
        color:#004cda;
        background-color:rgba(255,255,255,1);
    }

    /***

====================================================================
	Blog Page Section
====================================================================

***/

    .blog-page-section{
        position:relative;
        padding:100px 0px 220px;
    }

    .blog-page-section .styled-pagination{
        margin-top:40px;
    }

    .news-classic .styled-pagination{
        margin-top:80px;
    }

    /***

====================================================================
			Styled Pagination
====================================================================

***/

    .styled-pagination{
        position:relative;
    }

    .styled-pagination .inner-container{
        position:relative;
        padding:12px 15px;
        border:1px solid #ebebeb;
        background-image: -ms-radial-gradient(center, ellipse farthest-corner, #F5F5F5 0%, #ffffff 100%);
        background-image: -moz-radial-gradient(center, ellipse farthest-corner, #F5F5F5 0%, #ffffff 100%);
        background-image: -o-radial-gradient(center, ellipse farthest-corner, #F5F5F5 0%, #ffffff 100%);
        background-image: -webkit-gradient(radial, center center, 0, center center, 286, color-stop(0, #F5F5F5), color-stop(100, #ffffff));
        background-image: -webkit-radial-gradient(center, ellipse farthest-corner, #F5F5F5 0%, #ffffff 100%);
        background-image: radial-gradient(ellipse farthest-corner at center, #F5F5F5 0%, #ffffff 100%);
    }

    .styled-pagination ul{
        position:relative;
        display:inline-block;
    }

    .styled-pagination li{
        position:relative;
        display: inline-block;
        margin: 0 7px;
    }

    .styled-pagination li a{
        position:relative;
        display:inline-block;
        height:30px;
        width: 30px;
        text-align: center;
        line-height:30px;
        font-weight:700;
        font-size:16px;
        background:none;
        color:#222222;
        border-radius:50px;
        -webkit-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        -o-transition:all 300ms ease;
        -moz-transition:all 300ms ease;
        transition:all 300ms ease;
        font-family: 'Lora', serif;
    }

    .styled-pagination li a i{
        position:relative;
        top:1px;
    }

    .styled-pagination li.prev a,
    .styled-pagination li.next a{
        width:auto;
        height:auto;
        color:#222222;
        background:none;
    }

    .styled-pagination li.prev a:hover,
    .styled-pagination li.next a:hover{
        background:none !important;
        color:#004cda;
    }

    .styled-pagination li.next a:hover,
    .styled-pagination li.prev a:hover,
    .styled-pagination li a:hover,
    .styled-pagination li.active a{
        background:#004cda;
    }

    /***

====================================================================
	Sidebar Page Container
====================================================================

***/

    .sidebar-page-container{
        position:relative;
        padding:120px 0px 180px;
    }

    .sidebar-page-container .content-side,
    .sidebar-page-container .sidebar-side{
        margin-bottom:30px;
    }

    .sidebar-page-container.style-two{
        padding-bottom:80px;
    }

    /*Search Box Widget*/

    .sidebar .search-box .form-group{
        position:relative;
        margin:0px;
    }

    .sidebar .search-box .form-group input[type="text"],
    .sidebar .search-box .form-group input[type="search"]{
        position:relative;
        line-height:30px;
        padding:10px 50px 10px 30px;
        border:1px solid #004cda;
        background:#ffffff;
        display:block;
        font-size:16px;
        width:100%;
        height:60px;
        color:#222222;
        border-radius:50px;
        transition:all 500ms ease;
        -moz-transition:all 500ms ease;
        -webkit-transition:all 500ms ease;
        -ms-transition:all 500ms ease;
        -o-transition:all 500ms ease;
    }

    .sidebar .search-box .form-group button{
        position:absolute;
        right:0px;
        top:0px;
        height:60px;
        width:60px;
        display:block;
        font-size:16px;
        color:#ffffff;
        font-weight:300;
        line-height:52px;
        background-color:#004cda;
        cursor:pointer;
        border-radius:0px 50px 50px 0px;
    }

    .sidebar .search-box .form-group input::-webkit-input-placeholder{
        color:#333333;
    }

    /***

====================================================================
	Sidebar Widget
====================================================================

***/

    .sidebar-widget{
        position: relative;
        margin-bottom: 50px;
    }

    .sidebar-widget:last-child{
        margin-bottom:0px;
    }

    .sidebar-title{
        position:relative;
        margin-bottom:40px;
    }

    .sidebar-title h2{
        position:relative;
        color:#222222;
        font-size:24px;
        font-weight:700;
        padding-bottom:25px;
        text-transform:capitalize;
    }

    .sidebar-title .separator{
        position:relative;
        width:60px;
    }

    .sidebar-title .separator:before{
        position:absolute;
        content:'';
        left:0px;
        top:0px;
        width:100%;
        height:1px;
        background-color:#004cda;
    }

    .sidebar-title .separator:after{
        position:absolute;
        content:'';
        right:0%;
        top:-10px;
        width:20px;
        height:20px;
        border:6px solid #ffffff;
        background-color:#222222;
    }

    /* Category Blog */

    .categories-blog ul{
        position:relative;
    }

    .categories-blog ul li{
        position:relative;
        transition:all 0.3s ease;
        -moz-transition:all 0.3s ease;
        -webkit-transition:all 0.3s ease;
        -ms-transition:all 0.3s ease;
        -o-transition:all 0.3s ease;
    }

    .categories-blog ul li:first-child a{
        padding-top:0px;
    }

    .categories-blog ul li a{
        position:relative;
        font-size:16px;
        font-weight:400;
        color:#888888;
        display:block;
        padding:13px 15px;
        transition:all 0.3s ease;
        -moz-transition:all 0.3s ease;
        -webkit-transition:all 0.3s ease;
        -ms-transition:all 0.3s ease;
        -o-transition:all 0.3s ease;
        border-bottom:1px solid #ebebeb;
    }

    .categories-blog ul li span{
        position:absolute;
        right:0px;
    }

    .categories-blog ul li:last-child a{
        border-bottom:none;
        border-bottom:0px;
    }

    .categories-blog ul li.active a,
    .categories-blog ul li a:hover{
        color:#004cda;
    }

    /*=== Popular Post ===*/

    .popular-posts .post{
        position: relative;
        padding-left: 105px;
        min-height: 80px;
        margin-bottom: 40px;
    }

    .popular-posts .post-thumb{
        position: absolute;
        left: 0;
        top: 0;
        height: 85px;
        width: 85px;
        margin-bottom: 20px;
    }

    .popular-posts .post-thumb img{
        position: relative;
        display: block;
        width: 100%;
    }

    .popular-posts .post h3{
        position: relative;
        font-size: 18px;
        line-height: 28px;
        color: #222222;
        font-weight: 700;
    }

    .popular-posts .post h3 a{
        color: #222222;
        -webkit-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        transition: all 300ms ease;
    }

    .popular-posts .post:hover h3 a{
        color: #004cda;
    }

    .popular-posts .post .date{
        position: relative;
        display: block;
        font-size: 14px;
        line-height: 28px;
        color: #777777;
        font-weight: 400;
    }

    .gallery-widget .gallery-outer{
        position:relative;
        margin: 0px -5px 0px;
    }

    .gallery-widget .gallery-outer .image{
        position:relative;
        float:left;
        width: 33.333333333%;
        padding-right: 5px;
        padding-left: 5px;
        margin-bottom: 10px;
        overflow: hidden;
    }

    .gallery-widget .gallery-outer .image img{
        display:block;
        width:100%;
    }

    /*=== Tags ===*/

    .tag-list{
        position: relative;
        display: block;
    }

    .tag-list li{
        position: relative;
        float: left;
        margin-bottom: 10px;
        margin-right: 10px;
    }

    .tag-list li a{
        position: relative;
        display: block;
        font-size: 14px;
        line-height: 20px;
        color: #888888;
        font-weight: 400;
        padding: 9px 30px;
        border-radius:50px;
        border:1px solid #dddddd;
        -webkit-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        transition: all 300ms ease;
    }

    .tag-list li a:hover{
        background-color: #2154cf;
        border-color: #2154cf;
        color: #ffffff;
    }

    /* News Detail */

    .news-detail{
        position:relative;
        margin-bottom:30px;
    }

    .news-detail .inner-box{
        position:relative;
        padding-top:50px;
        padding-right:50px;
        padding-bottom:50px;
    }

    .news-detail .inner-box:before{
        position:absolute;
        content:'';
        left:80px;
        top:0px;
        right:0px;
        bottom:0px;
        background-color:#004cda;
        -webkit-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        -o-transition:all 300ms ease;
        -moz-transition:all 300ms ease;
        transition:all 300ms ease;
    }

    .news-detail .inner-box .image{
        position:relative;
    }

    .news-detail .inner-box .image img{
        position:relative;
        width:100%;
        display:block;
    }

    .news-detail .inner-box .lower-content{
        position:relative;
        padding-top:40px;
    }

    .news-detail .inner-box .lower-content .content{
        position:relative;
        padding-left:150px;
    }

    .news-detail .inner-box .lower-content .post-info{
        position:absolute;
        left:20px;
        top:0px;
    }

    .news-detail .inner-box .lower-content .post-info li{
        position:relative;
        color:#222222;
        font-size:16px;
        display:block;
        text-align:center;
        margin-bottom:15px;
    }

    .news-detail .inner-box .lower-content .post-info li span{
        position:relative;
        color:#004cda;
        display:block;
        font-size:22px;
        margin-bottom:8px;
    }

    .news-detail .inner-box .lower-content .post-meta{
        position:relative;
    }

    .news-detail .inner-box .lower-content .post-meta li{
        position:relative;
        display:block;
        color:#ffffff;
        font-size:14px;
        line-height:1.3em;
        padding-right:15px;
        margin-right:15px;
        margin-bottom:5px;
        display:inline-block;
        border-right:1px solid #ffffff;
    }

    .news-detail .inner-box .lower-content .post-meta li:last-child{
        margin-right:0px;
        padding-right:0px;
        border-right:0px;
    }

    .news-detail .inner-box .lower-content h3{
        position:relative;
        font-size:30px;
        color:#ffffff;
        line-height:1.6em;
        font-weight:700;
        margin-top:15px;
    }

    .news-detail .inner-box .lower-content .text{
        position:relative;
    }

    .news-detail .inner-box .lower-content .text p{
        position:relative;
        color:#ffffff;
        font-size:16px;
        line-height:1.7em;
        margin-top:20px;
        margin-bottom:25px;
    }

    .news-detail .inner-box .lower-content .text blockquote{
        position:relative;
        text-align:center;
        margin-bottom:40px;
    }

    .news-detail .inner-box .lower-content .text blockquote .blockquote-text{
        position:relative;
        color:#ffffff;
        font-weight:700;
        font-size:20px;
        line-height:1.7em;
        font-style:italic;
        font-family: 'Lora', serif;
    }

    .news-detail .inner-box .lower-content .text blockquote .quote-box{
        position:relative;
        width:140px;
        margin:0 auto;
        margin-top:35px;
    }

    .news-detail .inner-box .lower-content .text blockquote .quote-box:before{
        position:absolute;
        content:'';
        left:0px;
        top:15px;
        width:100%;
        height:1px;
        background-color:#ffffff;
    }

    .news-detail .inner-box .lower-content .text blockquote .quote-box .icon{
        position:relative;
        color:#004cda;
        width:30px;
        height:30px;
        text-align:center;
        line-height:30px;
        border-radius:50px;
        background-color:#ffffff;
        display:inline-block;
    }

    /*post share options*/

    .news-detail .post-share-options{
        position:relative;
        padding:25px 0px;
        padding-left:80px;
        border-bottom:1px solid #b7b7b7;
    }

    .news-detail .post-share-options p{
        position:relative;
        color:#222222;
        font-size:16px;
        line-height: 25px;
        font-weight:700;
        margin:0;
        display: inline-block;
        font-family: 'Lora', serif;
    }

    .news-detail .post-share-options .tags{
        position: relative;
        display: inline-block;
    }

    .news-detail .post-share-options .tags li{
        position: relative;
        display: inline-block;
    }

    .news-detail .post-share-options .tags a{
        position:relative;
        color:#777777;
        font-size:16px;
        font-weight:400;
        line-height: 25px;
        -webkit-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        transition: all 300ms ease;
    }

    .news-detail .post-share-options .tags a:hover{
        color: #004cda;
    }

    .news-detail .post-share-options .social-icon{
        position: relative;
        display: inline-block;
    }

    .news-detail .post-share-options .social-icon li{
        position: relative;
        display: inline-block;
        margin-left: 15px;
    }

    .news-detail .post-share-options .social-icon li a{
        display: inline-block;
        font-size: 16px;
        line-height: 25px;
        color: #888888;
        -webkit-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        transition: all 300ms ease;
    }

    .news-detail .post-share-options .social-icon li a:hover{
        color: #004cda;
    }

    .new-posts{
        position:relative;
        margin-top:50px;
    }

    .new-posts .grid-icon{
        position:absolute;
        left:50%;
        top:15px;
        color:#004cda;
        font-size:40px;
        line-height:1em;
    }

    .new-posts a{
        position:relative;
        color:#222222;
        font-size:18px;
        font-weight:700;
        display:block;
        line-height:1.7em;
        font-family: 'Lora', serif;
        -webkit-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        transition: all 300ms ease;
    }

    .new-posts a span{
        display:block;
        font-size:24px;
    }

    .new-posts a.next-post{
        text-align:right;
    }

    .new-posts a:hover{
        color:#004cda;
    }

    /* Doctor Testimonial Boxed */

    .doctor-testimonial-boxed{
        position:relative;
        margin-top:70px;
    }

    .doctor-testimonial-boxed .inner-boxed{
        position:relative;
        padding:0px 40px 45px;
    }

    .doctor-testimonial-boxed .inner-boxed:before{
        position:absolute;
        content:'';
        left:0px;
        top:70px;
        right:0px;
        bottom:0px;
        box-shadow:0px 0px 15px rgba(0,0,0,0.15);
    }

    .doctor-testimonial-boxed .inner-boxed .owl-dots,
    .doctor-testimonial-boxed .inner-boxed .owl-nav{
        display:none;
    }

    .doctor-testimonial-boxed .inner-boxed .owl-carousel .owl-stage-outer{
        padding-top:70px;
    }

    .doctor-block-two{
        position:relative;
    }

    .doctor-block-two .inner-block{
        position:relative;
        text-align:center;
    }

    .doctor-block-two .inner-block .image{
        position:relative;
        width:140px;
        height:140px;
        margin:0 auto;
        margin-top:-70px;
        display:inline-block;
    }

    .doctor-block-two .inner-block h3{
        position:relative;
        font-size:24px;
        font-weight:700;
        color:#222222;
        margin-top:35px;
    }

    .doctor-block-two .inner-block .social-icon{
        position: relative;
        margin-top:20px;
        margin-bottom:20px;
        display: inline-block;
    }

    .doctor-block-two .inner-block .social-icon li{
        position: relative;
        display: inline-block;
        margin-left: 15px;
    }

    .doctor-block-two .inner-block .social-icon li a{
        display: inline-block;
        font-size: 16px;
        line-height: 25px;
        color: #888888;
        -webkit-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        transition: all 300ms ease;
    }

    .doctor-block-two .inner-block .social-icon li a:hover{
        color: #004cda;
    }

    .doctor-block-two .inner-block .text{
        position:relative;
        color:#222222;
        font-size:15px;
        line-height:1.8em;
        margin-bottom:20px;
    }

    .doctor-block-two .inner-block .quote-icon{
        position:relative;
        color:#004cda;
        font-size:20px;
    }

    /*Comment Area*/

    .sidebar-page-container .comments-area{
        position:relative;
        margin-top:60px;
    }

    .sidebar-page-container .group-title{
        position:relative;
        margin-bottom:50px;
    }

    .sidebar-page-container .group-title h2{
        position:relative;
        font-size:30px;
        color:#222222;
        font-weight:700;
    }

    .sidebar-page-container .comments-area .comment-box{
        position:relative;
        padding:35px 35px 35px;
        margin-bottom:40px;
        -webkit-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        -o-transition:all 300ms ease;
        -moz-transition:all 300ms ease;
        transition:all 300ms ease;
        background-color:#f7f7f7;
    }

    .sidebar-page-container .comments-area .comment-box.reply-comment{
        margin-left:100px;
    }

    .sidebar-page-container .comments-area .comment-box:last-child{
        margin-bottom:0px;
    }

    .sidebar-page-container .comments-area .comment-box:hover{
        border-color:#aa1f43;
    }

    .sidebar-page-container .comments-area .comment{
        position:relative;
        font-size:14px;
        padding:0px 0px 0px 140px;
    }

    .sidebar-page-container .comments-area .comment .comment-inner{
        position:relative;
    }

    .sidebar-page-container .comments-area .comment .comment-reply{
        position:relative;
        color:#222222;
        font-size:14px;
        font-weight:700;
        display:inline-block;
        margin-top:20px;
        text-transform: capitalize;
        -webkit-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        -o-transition:all 300ms ease;
        -moz-transition:all 300ms ease;
        transition:all 300ms ease;
    }

    .sidebar-page-container .comments-area .comment .comment-reply .fas{
        margin-right:4px;
    }

    .sidebar-page-container .comments-area .comment-box .author-thumb{
        position:absolute;
        left:0px;
        top:0px;
        width:100px;
        overflow:hidden;
        margin-bottom:20px;
    }

    .sidebar-page-container .comments-area .comment-box .author-thumb img{
        width:130px;
        display:block;
    }

    .sidebar-page-container .comments-area .comment-info{
        color:#3e5773;
        line-height:24px;
        font-size:13px;
    }

    .sidebar-page-container .comments-area .comment-box strong{
        font-size:18px;
        font-weight:700;
        color:#004cda;
        line-height:18px;
        display:inline-block;
        text-transform:capitalize;
    }

    .sidebar-page-container .comments-area .comment-box .text{
        color:#888888;
        font-size:15px;
        margin-top:10px;
        margin-bottom:0px;
        line-height: 1.8em;
    }

    .sidebar-page-container .comments-area .comment-info .comment-time{
        position:relative;
        font-size:12px;
        color:#888888;
        margin-left:20px;
        text-transform:capitalize;
        display:inline-block;
    }

    /***

====================================================================
	Comment Form
====================================================================

 ***/

    .comment-form{
        position:relative;
        margin-top:60px;
    }

    .comment-form .group-title{
        margin-bottom:25px;
    }

    .comment-form .form-group{
        position:relative;
        margin-bottom:20px;
    }

    .comment-form .form-group input[type="text"],
    .comment-form .form-group input[type="password"],
    .comment-form .form-group input[type="tel"],
    .comment-form .form-group input[type="email"],
    .comment-form .form-group select{
        position:relative;
        display:block;
        width:100%;
        line-height:28px;
        padding:10px 25px;
        height:60px;
        font-size:14px;
        border-radius:3px;
        border:2px solid #dddddd;
        -webkit-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        -o-transition:all 300ms ease;
        -moz-transition:all 300ms ease;
        transition:all 300ms ease;
    }

    .comment-form .form-group input[type="text"]:focus,
    .comment-form .form-group input[type="password"]:focus,
    .comment-form .form-group input[type="tel"]:focus,
    .comment-form .form-group input[type="email"]:focus,
    .comment-form .form-group select:focus,
    .comment-form .form-group textarea:focus{
        border-color:#004cda;
    }

    .comment-form .form-group textarea{
        position:relative;
        display:block;
        width:100%;
        line-height:24px;
        padding:15px 25px;
        color:#222222;
        height:190px;
        font-size:14px;
        resize:none;
        border-radius:3px;
        border:2px solid #dddddd;
        -webkit-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        -o-transition:all 300ms ease;
        -moz-transition:all 300ms ease;
        transition:all 300ms ease;
    }

    .comment-form .comment-btn{
        margin-top:4px;
        color:#ffffff;
        font-size:16px;
        font-weight:600;
        padding:15px 40px;
        border-radius:50px;
        display:inline-block;
        background-color:#3d3e3e;
    }

    /***

====================================================================
	Faq Page Section
====================================================================

 ***/

    .faq-page-section{
        position:relative;
        padding:100px 0px 120px;
    }

    .faq-page-section .faq-tabs{
        position:relative;
    }

    .faq-page-section .faq-tabs .tab-btns{
        position:relative;
        z-index:1;
        text-align:center;
        margin-bottom:50px;
    }

    .faq-page-section .faq-tabs .tab-btns .tab-btn{
        position:relative;
        display:block;
        font-size:24px;
        color:#222222;
        font-weight:700;
        line-height:24px;
        cursor:pointer;
        padding:0px 20px;
        display:inline-block;
        text-transform:capitalize;
        transition:all 500ms ease;
        font-family: 'Lora', serif;
        border-right:1px solid #222222;
    }

    .faq-page-section .faq-tabs .tab-btns .tab-btn:last-child{
        border-right:none;
    }

    .faq-page-section .faq-tabs .tab-btns .tab-btn:hover,
    .faq-page-section .faq-tabs .tab-btns .tab-btn.active-btn{
        color:#004cda;
    }

    .faq-page-section .faq-tabs .tabs-content{
        position:relative;
    }

    .faq-page-section .faq-tabs .tabs-content .tab{
        position:relative;
        display:none;
        border-top:0px;
    }

    .faq-page-section .faq-tabs .tabs-content .tab.active-tab{
        display:block;
    }



    /***

====================================================================
	Accordion Style
====================================================================

***/

    .accordion-box{
        position:relative;
    }

    .accordion-box .block{
        position: relative;
        margin-bottom:20px;
    }

    .accordion-box .block .acc-btn{
        position:relative;
        font-size:18px;
        cursor:pointer;
        line-height:30px;
        color:#222222;
        font-weight:700;
        padding:10px 45px 10px 30px;
        transition:all 500ms ease;
        -ms-transition:all 500ms ease;
        -o-transition:all 500ms ease;
        -moz-transition:all 500ms ease;
        -webkit-transition:all 500ms ease;
        border:1px solid #cccccc;
        font-family: 'Lora', serif;
    }

    .accordion-box .block .acc-btn.active{

    }

    .accordion-box .block .icon-outer{
        position:absolute;
        right:15px;
        top:15px;
        font-size:18px;
        color: #242424;
        transition:all 500ms ease;
        -moz-transition:all 500ms ease;
        -webkit-transition:all 500ms ease;
        -ms-transition:all 500ms ease;
        -o-transition:all 500ms ease;
    }

    .accordion-box .block .icon-outer .icon{
        position: absolute;
        right:0px;
        width: 28px;
        height: 28px;
        font-size: 16px;
        font-weight: 300;
        text-align: center;
    }

    .accordion-box .block .icon-outer .icon-plus{
        opacity:1;
    }

    .accordion-box .block .icon-outer .icon-minus{
        opacity:0;
        font-weight:800;
    }

    .accordion-box .block .acc-btn.active .icon-outer .icon-minus{
        opacity:1;
        background:none;
    }

    .accordion-box .block .acc-btn.active .icon-outer .icon-plus{
        opacity:0;
    }

    .accordion-box .block .acc-content{
        position:relative;
        display:none;
    }

    .accordion-box .block .acc-content .content-text{
        padding-bottom:6px;
    }

    .accordion-box .block .acc-content.current{
        display:block;
    }

    .accordion-box .block .content{
        position:relative;
        font-size:14px;
        padding:20px 20px 10px 20px;
    }

    .accordion-box .block .content .text{
        margin-bottom:0px;
        line-height:1.8em;
        font-size:16px;
        color:#777777;
    }

    .accordion-box .block .content p:last-child{
        margin-bottom:0px;
    }

    /***

====================================================================
	Faq Form Section
====================================================================

 ***/

    .faq-form-section{
        position:relative;
        padding:100px 0px 100px;
        background-color:#f5f5f5;
    }

    .faq-form-section .sec-title .separator:after{
        border-color:#f5f5f5;
    }

    .faq-form{
        position:relative;
        max-width:970px;
        margin:0 auto;
    }

    .faq-form .row{
        margin:0px -8px;
    }

    .faq-form .row .column{
        padding:0px 8px;
    }

    .faq-form .form-group{
        position:relative;
        margin-bottom:20px;
    }

    .faq-form .form-group input[type="text"],
    .faq-form .form-group input[type="tel"],
    .faq-form .form-group input[type="email"],
    .faq-form .form-group select{
        position:relative;
        display:block;
        width:100%;
        line-height:28px;
        padding:10px 20px;
        color:#222222;
        height:54px;
        font-size:15px;
        background:#ffffff;
        border:1px solid #e1e1e1;
        -webkit-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        -o-transition:all 300ms ease;
        -moz-transition:all 300ms ease;
        transition:all 300ms ease;
    }

    .faq-form .form-group input[type="text"]:focus,
    .faq-form .form-group input[type="tel"]:focus,
    .faq-form .form-group input[type="email"]:focus,
    .faq-form .form-group textarea:focus{

    }

    .faq-form .form-group textarea{
        position:relative;
        display:block;
        width:100%;
        line-height:22px;
        padding:15px 20px;
        color:#222222;
        height:120px;
        background:#ffffff;
        resize:none;
        font-size:15px;
        border:1px solid #e1e1e1;
        -webkit-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        -o-transition:all 300ms ease;
        -moz-transition:all 300ms ease;
        transition:all 300ms ease;
    }

    .faq-form .form-group .btn-detail{
        position:relative;
        text-align:center;
        margin-left:30px;
        color:#ffffff;
        font-weight:600;
        display:inline-block;
    }

    .faq-form button{
        margin-top:15px;
        padding:11px 42px;
        font-family: 'Lora', serif;
    }


    /***

====================================================================
				Doctor Detail Section
====================================================================

***/

    .doctor-detail{
        position: relative;
        padding: 120px 0px 200px;
    }

    .doctor-detail .upper-box{
        position: relative;
        margin-bottom: 65px;
    }

    .doctor-detail .upper-box .image-box{
        position: relative;
    }

    .doctor-detail .upper-box .image-box img{
        display: block;
        width: 100%;
    }

    .doctor-detail .upper-box .image-box a{
        display: block;
    }

    .doctor-detail .detail-column .inner-box{
        position: relative;
        padding-left: 30px;
        padding-right: 100px;
    }

    .doctor-detail .detail-column .info-header{
        position: relative;
        margin-bottom: 50px;
    }

    .doctor-detail .info-header p{
        position: relative;
        display: block;
        font-size: 14px;
        line-height: 28px;
        color: #888888;
        margin-bottom: 10px;
    }

    .doctor-detail .info-header h3{
        position: relative;
        font-size: 30px;
        line-height: 1.2em;
        color: #222222;
        font-weight: 700;
    }

    .doctor-detail .info-header .designation{
        position: relative;
        display: block;
        font-size: 16px;
        line-height: 28px;
        color: #004cda;
        font-weight: 400;
        margin-top:8px;
    }

    .doctor-detail .detail-column .info-list{
        position: relative;
    }

    .doctor-detail .detail-column .info-list li{
        position: relative;
        display: block;
    }

    .doctor-detail .detail-column .info-list li strong{
        position: absolute;
        font-size: 18px;
        line-height: 28px;
        color: #222222;
        font-weight: 700;
        display: block;
        font-family: 'Lora', serif;
    }

    .doctor-detail .detail-column .info-list li p{
        position: relative;
        font-size: 15px;
        line-height:28px;
        color: #888888;
        display: block;
        padding-left: 180px;
    }

    .doctor-detail .lower-content .inner-box{
        position: relative;
    }

    .doctor-detail .lower-content .contact-list{
        position: relative;
        display: block;
        margin-bottom: 40px;
    }

    .doctor-detail .lower-content .contact-list li{
        position: relative;
        font-size: 15px;
        line-height: 25px;
        color: #222222;
        margin-bottom: 15px;
        font-weight:700;
    }

    .doctor-detail .lower-content .contact-list li span{
        position: relative;
        display: inline-block;
        min-width: 175px;
    }

    .doctor-detail .lower-content .contact-list li span.btn-txt{
        min-width:auto;
    }

    .doctor-detail .lower-content .contact-list .theme-btn{
        padding: 10px 25px;
        font-weight: 400;
        text-transform: capitalize;
    }

    .doctor-detail .lower-content .contact-list li .time{
        margin-top:12px;
    }

    .doctor-detail .lower-content .social-icon-one{
        margin-bottom: 95px;
    }

    .doctor-detail .lower-content .appointment-form{
        float: none;
        left: 0;
        max-width: 100%;
        width: 100%;
        padding-bottom: 0px;
    }

    .doctor-detail .lower-content .appointment-form textarea{
        margin-top: 10px;
    }

    .doctor-detail .lower-content .appointment-form button {
        margin-top: 20px;
    }




    .timetable-column .timetable{
        position: relative;
        border: 5px solid #eeeeee;
        padding:65px 60px 70px;
    }

    .timetable-column .timetable:before{
        position: absolute;
        height: 100%;
        width: 240px;
        right: -5px;
        bottom: 65px;
        background-color: #ffffff;
        content: "";
    }

    .timetable h4{
        position: relative;
        display: block;
        font-size: 24px;
        line-height: 28px;
        color: #222222;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .timetable h3{
        font-size: 30px;
        line-height: 1.2em;
        color: #222222;
        font-weight: 800;
        margin-bottom: 25px;
    }

    .timetable h3 small{
        position: relative;
        display: block;
        font-size: 24px;
        color: #222222;
        line-height: 1.8em;
        font-weight: 700;
    }

    .timetable p{
        position: relative;
        display: block;
        font-size: 14px;
        line-height: 30px;
        color: #888888;
        font-weight: 400;
        margin-bottom: 32px;
    }

    .timetable ul{
        position: relative;
        margin-bottom: 50px;
    }

    .timetable ul li{
        position: relative;
        display: block;
        font-size: 16px;
        line-height: 22px;
        color: #888888;
        font-weight: 400;
        margin-bottom: 20px;
    }

    .timetable ul li:before{
        position: absolute;
        left: 50%;
        line-height: 22px;
        top: 0;
        width: 30px;
        margin-left: -15px;
        content: "--";
        font-size: 16px;
        color: #888888;
        font-weight: 500;
        text-align: center;
    }

    .timetable ul li span{
        float: right;
        font-weight: 500;
        color: #004cda;
    }

    .timetable .doctor-btn{
        padding: 18px 40px;
        border-radius:50px;
        color:#ffffff;
        display:inline-block;
        background-color:#222222;
    }

    .timetable .doctor-btn .fa{
        margin-right:8px;
    }

    .social-icon-one{
        position: relative;
        display: block;
    }

    .social-icon-one li{
        position: relative;
        display: inline-block;
        margin-right: 13px;
    }

    .social-icon-one li a{
        display: inline-block;
        font-size: 16px;
        line-height: 38px;
        height: 40px;
        width: 40px;
        text-align: center;
        color: #888888;
        font-weight: 400;
        border-radius:50px;
        border:1px solid #c0c0c0;
        -webkit-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        transition: all 300ms ease;
    }

    .social-icon-one li a:hover{
        color: #ffffff;
        background-color: #222222;
        border-color: #222222;
    }





    /*Blog Category*/

    .blog-cat{
        position:relative;
    }

    .blog-cat li{
        position:relative;
        margin-bottom:3px;
        transition:all 500ms ease;
        -moz-transition:all 500ms ease;
        -webkit-transition:all 500ms ease;
        -ms-transition:all 500ms ease;
        -o-transition:all 500ms ease;
    }

    .blog-cat li a:before{
        position:absolute;
        content:'';
        left:0px;
        top:0px;
        width:0px;
        height:100%;
        z-index:-1;
        border-radius:0px 50px 50px 0px;
        background-color:#004cda;
        transition:all 500ms ease;
        -moz-transition:all 500ms ease;
        -webkit-transition:all 500ms ease;
        -ms-transition:all 500ms ease;
        -o-transition:all 500ms ease;
    }

    .blog-cat li:hover a::before,
    .blog-cat li.active a::before{
        width:100%;
    }

    .blog-cat li a{
        position:relative;
        color:#222222;
        font-size:18px;
        font-weight:700;
        display:block;
        z-index:1;
        border-radius:0px 50px 50px 0px;
        background-color:#ebebeb;
        padding:20px 15px 16px 38px;
        transition:all 500ms ease;
        -moz-transition:all 500ms ease;
        -webkit-transition:all 500ms ease;
        -ms-transition:all 500ms ease;
        -o-transition:all 500ms ease;
        font-family: 'Lora', serif;
    }

    .blog-cat li a:after{
        position:absolute;
        content:'\f105';
        right:22px;
        top:18px;
        color:#000048;
        font-size:18px;
        font-weight:800;
        font-family: 'Font Awesome 5 Free';
    }

    .blog-cat li:hover a:after,
    .blog-cat li.active a:after{
        color:#ffffff;
    }

    .blog-cat li.active a,
    .blog-cat li a:hover{
        color:#ffffff;
    }

    /*===  Need help ===*/

    .need-help{
        position: relative;
    }

    .need-help h3{
        position: relative;
        font-weight:700;
        color:#004cda;
        font-size:24px;
    }

    .need-help p{
        position: relative;
        font-size: 16px;
        line-height: 30px;
        color: #666666;
        margin-top:15px;
        margin-bottom: 25px;
    }

    .need-help ul li{
        display: block;
        font-size: 16px;
        line-height: 36px;
        color: #666666;
        font-weight: 400;
    }

    .need-help ul li i{
        margin-right: 35px;
        color: #004cda;
    }

    .need-help ul li a{
        color: #666666;
        -webkit-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        transition: all 300ms ease;
    }

    .need-help ul li a:hover{
        color: #004cda;
    }

    /* Broucher Widget */

    .brochure-widget .widget-content{
        position:relative;
    }

    .brochure-widget .brouchers{
        position:relative;
    }

    .brochure-widget .brouchers li{
        position:relative;
        border-bottom:1px solid #dddddd;
    }

    .brochure-widget .brouchers li a{
        position:relative;
        color:#222222;
        font-size:16px;
        font-weight:600;
        padding:13px 8px;
        padding-left:45px;
        display:block;
        transition:all 500ms ease;
        -moz-transition:all 500ms ease;
        -webkit-transition:all 500ms ease;
        -ms-transition:all 500ms ease;
        -o-transition:all 500ms ease;
        font-family: 'Lora', serif;
    }

    .brochure-widget .brouchers li a:hover{
        color:#004cda;
    }

    .brochure-widget .brouchers li a .icon{
        position:absolute;
        content:'';
        left:12px;
        top:15px;
        font-size:16px;
        line-height:1em;
        color:#777777;
        font-weight:500;
    }


    .department-detail{
        position: relative;
    }

    .department-detail .lower-content{
        position: relative;
        padding-top: 20px;
    }

    .department-detail h2{
        position: relative;
        font-size: 30px;
        line-height: 1.3em;
        color: #222222;
        font-weight: 700;
        margin-bottom: 15px;
    }

    .department-detail h5{
        position: relative;
        font-size: 16px;
        line-height: 28px;
        color: #004cda;
        font-weight: 500;
        margin-bottom: 30px;
    }

    .department-detail p{
        position: relative;
        font-size: 16px;
        line-height: 30px;
        color: #888888;
        font-weight: 400;
        margin-bottom: 15px;
    }

    .department-detail .two-column{
        position: relative;
    }

    .department-detail .two-column .info-column{
        position: relative;
    }

    .department-detail .image-column .image{
        position: relative;
    }

    .department-detail .image-column .image img{
        display: block;
        width: 100%;
    }

    /***

====================================================================
			Price Features
====================================================================

***/

    .price-features{
        position: relative;
        padding: 70px 0 0;
    }

    .price-features .row{
        margin: 0 -50px;
    }

    .price-feature{
        position: relative;
        display: block;
        margin-bottom:40px;
    }

    .price-feature h3{
        position: relative;
        display: block;
        font-size: 24px;
        line-height: 1.2em;
        color: #004cda;
        font-weight: 700;
        margin-bottom: 20px;
    }

    .price-feature ul li{
        position: relative;
        display: block;
        margin-bottom: 15px;
    }

    .price-feature ul li:last-child{
        margin-bottom: 0;
    }

    .price-feature ul li:before{
        position: absolute;
        left: 0;
        top: 0;
        height:27px;
        width: 100%;
        background-repeat: repeat-x;
        background-position: center;
        content: "";
        background-image: url(../images/icons/dots.png);
    }

    .price-feature .text,
    .price-feature .price{
        position: relative;
        display: inline-block;
        font-size: 16px;
        line-height: 22px;
        color: #888888;
        font-weight: 400;
        background-color: #ffffff;
        padding-right: 5px;
        font-family: 'Lora', serif;
    }

    .price-feature .price{
        float: right;
        padding-right: 0px;
        padding-left: 5px;
    }

    /***

====================================================================
	Contact Page Section
====================================================================

***/

    .contact-page-section{
        position:relative;
        padding:110px 0px 80px;
    }

    .contact-form{
        position:relative;
        max-width:970px;
        margin:0 auto;
    }

    .contact-form .row{
        margin:0px -8px;
    }

    .contact-form .row .column{
        padding:0px 8px;
    }

    .contact-form .form-group{
        position:relative;
        margin-bottom:20px;
    }

    .contact-form .form-group input[type="text"],
    .contact-form .form-group input[type="tel"],
    .contact-form .form-group input[type="email"],
    .contact-form .form-group select{
        position:relative;
        display:block;
        width:100%;
        line-height:28px;
        padding:10px 20px;
        color:#222222;
        height:54px;
        font-size:15px;
        background:#ffffff;
        border:1px solid #e1e1e1;
        -webkit-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        -o-transition:all 300ms ease;
        -moz-transition:all 300ms ease;
        transition:all 300ms ease;
    }

    .contact-form .form-group input[type="text"]:focus,
    .contact-form .form-group input[type="tel"]:focus,
    .contact-form .form-group input[type="email"]:focus,
    .contact-form .form-group textarea:focus{

    }

    .contact-form .form-group textarea{
        position:relative;
        display:block;
        width:100%;
        line-height:22px;
        padding:15px 20px;
        color:#222222;
        height:120px;
        background:#ffffff;
        resize:none;
        font-size:15px;
        border:1px solid #e1e1e1;
        -webkit-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        -o-transition:all 300ms ease;
        -moz-transition:all 300ms ease;
        transition:all 300ms ease;
    }

    .contact-form .form-group .btn-detail{
        position:relative;
        text-align:center;
        margin-left:30px;
        color:#ffffff;
        font-weight:600;
        display:inline-block;
    }

    .contact-form button{
        margin-top:15px;
        padding:11px 42px;
        font-family: 'Lora', serif;
    }

    .contact-form input.error,
    .contact-form select.error,
    .contact-form textarea.error{
        border-color:#ff0000 !important;
    }

    .contact-form label.error{
        display:block;
        line-height:24px;
        padding:5px 0px 0px;
        margin:0px;
        text-transform:uppercase;
        font-size:12px;
        color:#ff0000;
        font-weight:500;
    }

    /***

==================================================================
		Contact Map Section
==================================================================

***/

    /*Comming Soon*/

    .comming-soon{
        position:fixed;
        width:100%;
        height:100%;
        display:block;
        overflow-y:auto;
        background-size:cover;
    }

    .comming-soon:before{
        position:fixed;
        content:'';
        left:0px;
        top:0px;
        width:100%;
        height:100%;
        display:block;
        background-color:rgba(0,0,0,0.70);
    }

    .comming-soon .content{
        position: absolute;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        display: table;
        text-align:center;
        vertical-align: middle;
    }

    .comming-soon .content .content-inner{
        position: relative;
        padding: 50px 15px;
        display: table-cell;
        vertical-align: middle;
    }

    .comming-soon .content .content-inner h2{
        position:relative;
        color:#ffffff;
        font-size:90px;
        font-weight:300;
        line-height:1.2em;
        margin-bottom:80px;
    }

    .comming-soon .content .content-inner .text{
        position:relative;
        color:#ffffff;
        font-size:20px;
        font-weight:300;
        line-height:1.6em;
        margin-top:28px;
        margin-bottom:60px;
        letter-spacing:1px;
    }

    .comming-soon .emailed-form .form-group{
        position:relative;
        display:block;
        max-width:650px;
        margin:0 auto;
        width:100%;
        margin-bottom:20px;
    }

    .comming-soon .emailed-form .form-group input[type="text"],
    .comming-soon .emailed-form .form-group input[type="tel"],
    .comming-soon .emailed-form .form-group input[type="email"],
    .comming-soon .emailed-form .form-group textarea{
        position:relative;
        display:block;
        width:100%;
        line-height:20px;
        height:60px;
        font-size:14px;
        color:#797979;
        overflow:hidden;
        padding:10px 50px 10px 30px;
        background:#ffffff;
        -webkit-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        -o-transition:all 300ms ease;
        -moz-transition:all 300ms ease;
        transition:all 300ms ease;
    }

    .comming-soon .emailed-form .form-group input[type="submit"],
    .comming-soon .emailed-form button{
        position:absolute;
        right:5px;
        top:5px;
        width:160px;
        height:50px;
        line-height:40px;
        color:#ffffff;
        font-size:14px;
        font-weight:600;
        text-align:center;
        background-color:#004cda;
        letter-spacing:1px;
        text-transform:capitalize;
    }



    /***

====================================================================
	Countdown style
====================================================================

***/

    .time-counter{
        position:relative;
    }

    .time-counter .time-countdown{
        position:relative;
    }

    .time-counter .time-countdown .counter-column{
        position:relative;
        margin-left:20px;
        width:170px;
        height:170px;
        text-align:center;
        display:inline-block;
        padding:30px 0px 10px;
        border:5px solid #ffffff;
        color:#ffffff;
        font-size:18px;
        line-height:30px;
        text-transform:uppercase;
        font-weight:300;
        border-radius:50%;
        margin:0 auto;
        margin:0px 55px 40px;
    }

    .time-counter .time-countdown .counter-column .count{
        position:relative;
        display:block;
        font-size:60px;
        line-height:40px;
        padding:10px 10px;
        color:#004cda;
        letter-spacing:1px;
        font-weight:700;
    }

    .contact-map-section{
        position:relative;
    }

    .contact-map-section .auto-container{
        position:relative;
    }

    .contact-map-section .outer-container{
        position:relative;
    }

    .contact-map-section .outer-container .map-content{
        position:relative;
        right:0px;
        top:0px;
        z-index:20;
        width:100%;
        float:right;
        max-width:470px;
        padding:60px 35px 70px;
        background-color:#ffffff;
        box-shadow:0px 0px 15px rgba(0,0,0,0.10);
    }

    .contact-map-section .map-content .title{
        position:relative;
        color:#363636;
        font-size:20px;
        font-weight:700;
    }

    .contact-map-section .map-content h2{
        position:relative;
        color:#363636;
        font-size:36px;
        font-weight:700;
        margin-top:6px;
        margin-bottom:50px;
    }

    .contact-map-section .map-content .info-list{
        position:relative;
    }

    .contact-map-section .map-content .info-list li{
        position:relative;
        margin-bottom:22px;
        color:#666666;
        font-size:18px;
        padding-left:25px;
    }

    .contact-map-section .map-content .info-list li .icon{
        position:absolute;
        left:0px;
        top:5px;
        font-size:16px;
        color:#1e69b8;
    }

    .contact-map-section .map-content .social-icons{
        position:relative;
        margin-top:40px;
    }

    .contact-map-section .map-content .social-icons li{
        position:relative;
        margin-right:18px;
        display:inline-block;
    }

    .contact-map-section .map-content .social-icons li a{
        position:relative;
        color:#333333;
        font-size:16px;
    }

    .contact-map-section .map-canvas{
        position: absolute !important;
        left: 0px;
        top: 0px;
        right:0px;
        bottom:0px;
    }

    .map-data{
        text-align:center;
        color:#0e2a4e;
        font-size:14px;
        font-weight:400;
        line-height:1.8em;
    }

    .map-data h6{
        font-size:16px;
        font-weight:700;
        text-align:center;
        margin-bottom:5px;
        color:#121212;
    }




    /***

====================================================================
		Products Section
====================================================================

***/

    .products-section{
        position: relative;
        padding: 100px 0px 100px;
    }

    .products-section .sec-title{
        margin-bottom: 0;
    }

    .products-section .title-column{
        position: relative;
        margin-bottom: 40px;
    }

    .products-section .title-column .inner-column{
        position: relative;
        padding-top: 55px;
    }

    .products-section .title-column h4{
        position: relative;
        display: block;
        font-size: 18px;
        line-height: 30px;
        color: #222222;
        font-weight: 600;
        margin-bottom: 26px;
    }

    .products-section .title-column .text{
        position: relative;
        display: block;
        font-size: 14px;
        line-height: 30px;
        color: #777777;
        font-weight: 400;
        margin-bottom: 30px;
    }

    .products-section .title-column .btn-box a{
        padding: 15px 38px;
        line-height: 20px;
    }

    .products-section .products-column{
        padding: 0;
    }

    .products-carousel{
        position: relative;
    }

    .products-carousel .product-block{
        padding: 15px;
        padding-top: 65px;
        transition: all 400ms ease;
    }

    .products-carousel .center .product-block{
        padding-top: 15px;
    }

    .products-carousel .center .product-block .inner-box{
        -webkit-box-shadow: 0 0 15px rgba(0,0,0,0.05);
        -moz-box-shadow: 0 0 15px rgba(0,0,0,0.05);
        -ms-box-shadow: 0 0 15px rgba(0,0,0,0.05);
        -o-box-shadow: 0 0 15px rgba(0,0,0,0.05);
        box-shadow: 0 0 15px rgba(0,0,0,0.05);
    }

    .product-block{
        position:relative;
        margin-bottom:40px;
    }

    .product-block .inner-box{
        position:relative;
        border:1px solid #f2f2f2;
        transition:all 500ms ease;
        -webkit-transition:all 500ms ease;
        -ms-transition:all 500ms ease;
        -o-transition:all 500ms ease;
    }

    .product-block .inner-box:hover{
        box-shadow:0px 0px 40px rgba(243,243,243,1);
    }

    .product-block .inner-box .image{
        position:relative;
        overflow:hidden;
        text-align:center;
        padding:25px 20px 0px;
    }

    .product-block .inner-box .image .options{
        position:absolute;
        left:30px;
        right:30px;
        bottom:-60px;
        transition:all 500ms ease;
        -webkit-transition:all 500ms ease;
        -ms-transition:all 500ms ease;
        -o-transition:all 500ms ease;
    }

    .product-block .inner-box:hover .image .options{
        bottom:0px;
    }

    .product-block .inner-box .image .options li{
        position:relative;
        width:50%;
        float:left;
    }

    .product-block .inner-box .image .options li a{
        position:relative;
        padding:15px 5px;
        text-align:center;
        display:block;
        color:#ffffff;
        font-size:12px;
        font-weight:700;
        min-height:50px;
        background-color:#191b1d;
        font-family: 'Montserrat', sans-serif;
    }

    .product-block .inner-box .image .options li:last-child a{
        background-color:#004cda;
        font-weight:400;
        font-size:20px;
    }

    .product-block .inner-box .lower-box{
        position:relative;
        padding:25px 30px 15px;
    }

    .product-block .inner-box .lower-box .content{
        position:relative;
        padding-top:25px;
        text-align:center;
        padding-bottom:10px;
        border-top:1px solid #f2f2f2;
    }

    .product-block .inner-box .lower-box .content h3{
        position:relative;
        color:#222222;
        font-size:18px;
        font-weight:700;
        margin-bottom:3px;
    }

    .product-block .inner-box .lower-box .content h3 a{
        position:relative;
        color:#222222;
        transition:all 500ms ease;
        -webkit-transition:all 500ms ease;
        -ms-transition:all 500ms ease;
        -o-transition:all 500ms ease;
    }

    .product-block .inner-box .lower-box .content h3 a:hover{
        color:#004cda;
    }

    .product-block .inner-box .lower-box .content .price{
        position:relative;
        color:#004cda;
        font-size:16px;
        margin-top:10px;
    }

    .products-carousel .owl-nav{
        position: absolute;
        left: -32%;
        bottom: 15px;
    }

    .products-carousel .owl-next,
    .products-carousel .owl-prev{
        position: relative;
        display: inline-block;
        padding-left: 25px;
        font-size: 14px;
        color: #bbbbbb;
        font-weight: 400;
        text-transform: uppercase;
        line-height: 30px;
        padding-top: 6px;
        background-color: #ffffff;
        z-index: 9;
        -webkit-transition: all 200ms ease;
        -moz-transition: all 200ms ease;
        -ms-transition: all 200ms ease;
        -o-transition: all 200ms ease;
        transition: all 200ms ease;
    }

    .products-carousel .owl-next:hover,
    .products-carousel .owl-prev:hover{
        color: #0056b3;
    }

    .products-carousel .owl-next:before,
    .products-carousel .owl-prev:before{
        position: absolute;
        left: 0;
        top: 0;
        height: 40px;
        width: 60px;
        border: 2px solid #bbbbbb;
        border-right: 0;
        content: "";
        z-index: -1;
        -webkit-transition: all 200ms ease;
        -moz-transition: all 200ms ease;
        -ms-transition: all 200ms ease;
        -o-transition: all 200ms ease;
        transition: all 200ms ease;
    }

    .products-carousel .owl-next:hover:before,
    .products-carousel .owl-prev:hover:before{
        border-color: #222222;
    }

    .products-carousel .owl-next:before{
        left: auto;
        right: -25px;
        border: 2px solid #bbbbbb;
        border-left: 0;
    }

    .products-carousel .owl-next span{
        margin-left: 5px;
    }

    .products-carousel .owl-prev span{
        margin-right: 5px;
    }


    .sidebar-widget .sidebar-title h3{
        position:relative;
        font-size:24px;
        line-height: 28px;
        font-weight:700;
        color:#222222;
    }


    .sidebar .archive-list{
        position:relative;
    }

    .sidebar .archive-list li{
        position:relative;
        line-height:24px;
        border-bottom:1px solid #f0f0f0;
    }
    .sidebar .archive-list li:last-child{
        border-bottom:none;
    }
    .sidebar .archive-list li a{
        position:relative;
        display:block;
        color:#777777;
        font-size: 16px;
        font-weight:400;
        line-height:24px;
        padding:10px 0px;
        transition:all 300ms ease;
        -webkit-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        -o-transition:all 300ms ease;
        -moz-transition:all 300ms ease;
    }
    .sidebar .archive-list li a .pull-right{
        color:#004cda;
    }
    .sidebar .archive-list li a:hover{

    }


    /*=================================================================
					Sidebar Range slider
==================================================================*/
    .range-slider-one{
        position:relative;
        min-height:48px;
        padding-top: 10px;
        overflow: hidden;
        margin-top:-20px;
    }
    .range-slider-one .title{
        position:relative;
        float:left;
        color:#222222;
        font-size:16px;
        font-weight:400;
        margin-top:8px;
    }
    .range-slider-one .title:before{
        position:absolute;
        content:'$';
        right:-14px;
        top:0px;
        color:#222222;
        font-size:16px;
        font-weight:300;
    }
    .range-slider-one .input{
        float:right;
        left: 8px;
        max-width:75px;
        padding-left:8px;
        margin-top:8px;
        position: relative;
    }
    .range-slider-one .input input{
        background:none;
        color:#222222;
        font-size:16px;
        font-weight:400;
        width:auto;
        text-align:left;
    }
    .range-slider-one .theme-btn{
        text-transform: capitalize !important;
    }
    .range-slider-one .range{
        border: 1px solid;
        padding: 1px 20px 5px;
        border-radius: 50px;
    }
    .range-slider-one .ui-widget.ui-widget-content{
        height:3px;
        border:none;
        margin-bottom:35px;
        background:#e5e5e5;
    }
    .range-slider-one .ui-slider .ui-slider-range{
        top:0px;
        height:3px;
        background:#222222;
    }
    .range-slider-one .ui-state-default,
    .range-slider-one .ui-widget-content .ui-state-default{
        top:-3px;
        width:10px;
        height:10px;
        background:#004cda;
        cursor:pointer;
        border-color:#222222;
    }
    .range-slider-one .theme-btn{
        padding:8px 24px;
        border-radius:0px;
        font-size:18px;
        font-weight:700;
        text-transform:uppercase;
    }


    /*=================================================================
					Sidebar Realated Posts
==================================================================*/
    .sidebar .related-posts .post{
        position:relative;
        padding:0px 0px;
        padding-left:118px;
        min-height:95px;
        margin-bottom:20px;
    }
    .sidebar .related-posts .post:last-child{
        margin-bottom:0px;
        border:0px;
        min-height:inherit;
    }
    .sidebar .related-posts .post .post-thumb{
        position:absolute;
        left:0px;
        top:0px;
        width:100px;
    }
    .sidebar .related-posts .post .post-thumb img{
        display:block;
        width:100%;
    }
    .sidebar .related-posts .post h4{
        top: 2px;
        font-size: 18px;
        line-height: 24px;
        font-weight: 700;
        color: #222222;
        text-transform: capitalize;
        margin-bottom: 8px;
    }

    .sidebar .related-posts .post h4 a{
        color:#222222;
        transition:all 300ms ease;
        -webkit-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        -o-transition:all 300ms ease;
        -moz-transition:all 300ms ease;
    }
    .sidebar .related-posts .post a,
    .sidebar .related-posts .post a:hover{
        color:#004cda;
    }
    .sidebar .related-posts .post .price{
        font-size:15px;
        letter-spacing:1px;
        color:#222222;
    }
    .sidebar .related-posts .post .price .discount{
        position: relative;
        margin-right: 5px;
        text-decoration: line-through;
        color: #777777;
    }
    .sidebar .related-posts .post .rating{
        margin-bottom:5px;
        line-height:1em;
    }
    .sidebar .related-posts .post .rating .fa{
        position:relative;
        display:inline-block;
        font-size:16px;
        line-height:26px;
        color:#004cda;
    }

    /*=================================================================
				Product Details
==================================================================*/
    .product-details .basic-details{
        position:relative;
        margin-bottom:20px;
    }
    .product-details .image-column,
    .product-details .info-column{
        margin-bottom:40px;
    }
    .product-details .image-column .image-box img{
        position:relative;
        display:block;
        width:100%;
        background-color:#f7f7f7;
    }
    .product-details .basic-details .details-header{
        position:relative;
        margin-bottom:16px;
    }
    .product-details .basic-details .details-header h4{
        font-size:24px;
        font-weight:700;
        margin:5px 0px 20px;
        line-height:1.4em;
        color:#222222;
    }
    .product-details .basic-details .details-header h4 a{
        color:#222222;
    }
    .product-details .basic-details .details-header .rating{
        font-size:18px;
        color:#0056b3;
        margin-bottom:15px;
        display:inline-block;
    }
    .product-details .basic-details .details-header .reviews{
        position:relative;
        display:inline-block;
        color:#777777;
        font-weight:700;
        margin-left:15px;
    }
    .product-details .basic-details .details-header .rating .fa{
        display:inline-block;
    }
    .product-details .basic-details .details-header .rating .txt{
        font-size:14px;
        padding-left:10px;
        color:#777777;
    }
    .product-details .basic-details .details-header .item-price{
        font-size:16px;
        line-height: 24px;
        color:#0056b3;
        font-weight: 700;
        margin-bottom: 20px;
    }
    .product-details .basic-details .details-header .item-price .discount{
        position:relative;
        color:#777777;
        margin-left:8px;
        text-decoration:line-through;
    }
    .product-details .basic-details .prod-info{
        margin-bottom:15px;
        line-height:1.6em;
        font-size:13px;
    }
    .product-details .basic-details .prod-info strong{
        font-weight:700;
        color:#111111;
    }
    .product-details .basic-details .text{
        margin-bottom:25px;
        color:#777777;
        font-size:16px;
        font-weight:400;
        line-height:1.8em;
    }
    .item-quantity{
        position: relative;
        float: left;
        width: 85px;
        height: 52px;
        line-height: 52px;
        margin-right: 20px;
        padding-left: 10px;
        border-radius: 50px;
        border: 1px solid #dddddd;
    }
    .item-quantity .quantity-spinner{
        font-size: 20px;
        line-height: 28px;
        color: #222222;
        border: none;
        height: 40px;
        padding: 0;
        background: none;
        padding-left: 10px;
    }
    .item-quantity .quantity-spinner:focus{
        border: none;
        box-shadow: none;
        outline: none;
    }
    .item-quantity .bootstrap-touchspin-down,
    .item-quantity .bootstrap-touchspin-up{
        position: absolute;
        top: 0;
        right: 0;
        padding: 0;
        background: #dddddd;
        height: 50%;
        width: 50%;
        padding-top: 5px;
        border-radius: 0;
        font-size: 10px;
        border:none;
        z-index: 99;
    }
    .item-quantity .bootstrap-touchspin-down{
        bottom: 0;
        top: auto;
        padding-top: 0;
        padding-bottom: 5px;
        border-bottom-right-radius: 25px;
    }
    .item-quantity .bootstrap-touchspin-up{
        border-top-right-radius: 25px;
    }
    .item-quantity.style-two{
        padding: 0 0 0 10px !important;
        height: 41px;
        border: 1px solid #111111;
        float: none;
        margin: 0 auto;
    }
    .item-quantity.style-two .quantity-spinner{
        border: none !important;
        height: 40px !important;
        padding: 0 !important;
        background: none !important;
        padding-left: 10px !important;
    }
    .item-quantity .bootstrap-touchspin-down:active,
    .item-quantity .bootstrap-touchspin-up:active,
    .item-quantity .bootstrap-touchspin-down,
    .item-quantity .bootstrap-touchspin-up{
        background-color: #111111;
        color: #ffffff;
    }
    .other-options .add-to-cart{
        padding-left: 50px;
        padding-right: 50px;
        float: left;
        margin-right: 15px;
    }
    .other-options .cart-option a{
        position: relative;
        float: left;
        height: 40px;
        width: 40px;
        margin-right: 18px;
        line-height: 40px;
        text-align: center;
        background: #dddddd;
        color: #222222;
        border-radius: 50%;
        -webkit-transition:all 300ms ease;
        -moz-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        -o-transition:all 300ms ease;
        transition: all 300ms ease;
    }
    .other-options .cart-option a:last-child{
        margin-right: 0;
    }
    .other-options .cart-option a:hover{
        color: #fff;
        background-color: #0056b3;
    }
    /*====================================================================
					Product Tabs Style
====================================================================*/
    .shop-single .product-details .prod-tabs{
        position:relative;
        padding-bottom:60px;
        margin-bottom:80px;
        border-bottom:1px solid #cccccc;
    }
    .shop-single .product-details .prod-tabs .tab-btns{
        position:relative;
        z-index:1;
        margin-bottom:50px;
    }
    .shop-single .product-details .prod-tabs .tab-btns .tab-btn{
        position:relative;
        top:1px;
        display:block;
        float:left;
        margin-right:10px;
        font-size:16px;
        background:#222222;
        color:#ffffff;
        text-transform:uppercase;
        font-weight:700;
        line-height:24px;
        cursor:pointer;
        border-radius: 50px;
        padding:13px 43px 13px;
        -webkit-transition:all 300ms ease;
        -moz-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        -o-transition:all 300ms ease;
        transition:all 500ms ease;
    }
    .shop-single .product-details .prod-tabs .tab-btns .tab-btn:hover,
    .shop-single .product-details .prod-tabs .tab-btns .tab-btn.active-btn{
        color:#ffffff;
        background-color:#0056b3;
    }
    .shop-single .product-details .prod-tabs .tabs-content{
        position:relative;
    }
    .shop-single .product-details .prod-tabs .tabs-content .tab{
        position:relative;
        display:none;
        border-top:0px;
    }
    .shop-single .product-details .prod-tabs .tabs-content .tab.active-tab{
        display:block;
    }
    .shop-single .product-details .prod-tabs .tabs-content .tab .content{
        position:relative;
    }
    .shop-single .product-details .prod-tabs .tabs-content .tab .content p{
        position:relative;
        font-size:16px;
        line-height:1.7em;
        margin-bottom:25px;
        color:#797979;
    }
    .shop-single .product-details .prod-tabs .tabs-content .tab .content p:last-child{
        margin-bottom:0px;
    }
    .prod-tabs .tabs-content .tab .title{
        position:relative;
        color:#000000;
        font-size:24px;
        font-weight:700;
        margin-bottom:35px;
    }
    /*====================================================================
					Shop Comment Form
====================================================================*/
    .shop-comment-form{
        position:relative;
        margin-top:50px;
    }
    .shop-comment-form h2{
        position:relative;
        color:#222222;
        font-size:24px;
        font-weight:700;
        margin-bottom:10px;
    }
    .shop-comment-form .mail-text{
        position:relative;
        color:#777777;
        font-size:16px;
        margin-bottom:15px;
    }
    .shop-comment-form .group-title{
        margin-bottom:20px;
    }
    .shop-comment-form .rating-box{
        position:relative;
        margin-bottom:20px;
    }
    .shop-comment-form .rating-box .text{
        position:relative;
        font-size:16px;
        color:#333333;
        margin-bottom:15px;
    }
    .shop-comment-form .rating-box .rating{
        position:relative;
        display:inline-block;
    }
    .shop-comment-form .rating-box .rating .fa{
        position:relative;
        display:inline-block;
    }
    .shop-comment-form .rating-box .rating a{
        position:relative;
        color:#333333;
        font-size:14px;
        display:inline-block;
    }
    .shop-comment-form .rating-box .rating a:hover{
        color:#0056b3;
    }
    .shop-comment-form .form-group{
        position:relative;
        margin-bottom:20px;
    }
    .shop-comment-form .form-group label{
        position:relative;
        color:#333333;
        font-size:16px;
        font-weight:400;
        width:100%;
    }
    .shop-comment-form .form-group:last-child{
        margin-bottom:0px;
    }
    .shop-comment-form .form-group input[type="text"],
    .shop-comment-form .form-group input[type="password"],
    .shop-comment-form .form-group input[type="tel"],
    .shop-comment-form .form-group input[type="email"],
    .shop-comment-form .form-group select{
        position:relative;
        display:block;
        width:100%;
        line-height:28px;
        padding:10px 15px;
        border:1px solid #dddddd;
        height:50px;
        color:#848484;
        font-weight:300;
        background:#ffffff;
        border-radius: 50px;
        -webkit-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        -o-transition:all 300ms ease;
        -moz-transition:all 300ms ease;
        transition:all 300ms ease;
    }
    .shop-comment-form .form-group input[type="text"]:focus,
    .shop-comment-form .form-group input[type="password"]:focus,
    .shop-comment-form .form-group input[type="tel"]:focus,
    .shop-comment-form .form-group input[type="email"]:focus,
    .shop-comment-form .form-group select:focus,
    .shop-comment-form .form-group textarea:focus{
        border-color:#0056b3;
    }
    .shop-comment-form .form-group textarea{
        position:relative;
        display:block;
        width:100%;
        line-height:26px;
        padding:10px 15px;
        color:#848484;
        border:1px solid #dddddd;
        height:120px;
        font-weight:300;
        background:#ffffff;
        resize:none;
        border-radius: 20px;
        -webkit-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        -o-transition:all 300ms ease;
        -moz-transition:all 300ms ease;
        transition:all 300ms ease;
    }
    .shop-comment-form button{
        position:relative;
        font-weight:700;
        font-size:16px;
        padding:7px 28px;
        border-radius: 50px;
        text-transform:uppercase;
    }
    .shop-comment-form input:focus,
    .shop-comment-form select:focus,
    .shop-comment-form textarea:focus{
        border-color:#0056b3;
    }

    /*==================================================================
					CheckOut Sectioon
===================================================================*/

    .checkout-page{
        position:relative;
        padding:100px 0px 100px;
    }

    .checkout-page .default-links{
        position:relative;
        margin-bottom:0px;
    }

    .checkout-page .default-links li{
        line-height:24px;
        padding:14px 30px 18px;
        background:#222222;
        color:#ffffff;
        font-size:16px;
    }

    .checkout-page .default-links li .fa{
        position:relative;
        top:2px;
        margin-right:20px;
        font-size:24px;
        color:#ffffff;
    }

    .checkout-page .default-links li a{
        color:#ffffff;
    }

    .checkout-form{
        position:relative;
    }

    .checkout-form .checkout-title{
        position:relative;
    }

    .checkout-form .checkout-title h2{
        position:relative;
        color:#222222;
        font-size:30px;
        margin-bottom:15px;
        font-weight: 700;
    }

    .checkout-form .form-group{
        position:relative;
        margin-bottom:10px;
    }

    .checkout-form .form-group .field-label{
        display: block;
        line-height: 24px;
        margin-bottom: 6px;
        text-transform: capitalize;
        color: #222222;
        font-size: 15px;
        font-weight: 400;
    }

    .checkout-form .form-group .field-label sup{
        top:-1px;
        font-size:16px;
    }

    .checkout-form .form-group .text{
        position:relative;
        color:#777777;
        font-size:15px;
        margin-bottom:5px;
    }

    .checkout-form input[type="text"],
    .checkout-form input[type="email"],
    .checkout-form input[type="password"],
    .checkout-form input[type="tel"],
    .checkout-form input[type="number"],
    .checkout-form input[type="url"],
    .checkout-form select,
    .checkout-form textarea{
        position:relative;
        display:block;
        width:100%;
        background:#ffffff;
        line-height:22px;
        padding:12px 20px;
        height:50px;
        margin-bottom:10px;
        border:1px solid #e0e0e0;
        color: #777777;
        -webkit-border-radius: 50px;
        -moz-border-radius: 50px;
        -ms-border-radius: 50px;
        -o-border-radius: 50px;
        border-radius: 50px;
        transition:all 300ms ease;
        -webkit-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        -o-transition:all 300ms ease;
        -moz-transition:all 300ms ease;
    }

    .checkout-form select{
        cursor:pointer;
        -webkit-appearance:none;
        -ms-appearance:none;
        -o-appearance:none;
        -moz-appearance:none;
        background:#ffffff url(../images/icons/icon-select.png) right center no-repeat;
    }

    .checkout-form textarea{
        resize:none;
    }

    .checkout-form input:focus,
    .checkout-form select:focus,
    .checkout-form textarea:focus{
        border-color:#0056b3;
    }

    .checkout-page .check-box{
        line-height:24px;
        font-size:14px;
        font-weight:normal;
        padding-top:5px;
    }

    .checkout-page .check-box label{
        position:relative;
        top:-1px;
        font-weight:normal;
        padding:0px;
        font-size:16px;
        cursor:pointer;
        color:#333333;
    }
    .checkout-page .check-box input{
        margin-top: 0;
    }
    .checkout-page  .psw{
        color: #777777;
    }
    .checkout-page .lower-content{
        margin-top:30px;
    }

    .checkout-page .lower-content .order-column{
        margin-bottom:40px;
    }

    .checkout-page .lower-content .column h2{
        position:relative;
        color:#222222;
        font-size:24px;
        margin-bottom:30px;
        padding-bottom:12px;
    }

    .checkout-page .lower-content .column h2:after{
        position:absolute;
        content:'';
        left:0px;
        bottom:0px;
        width:40px;
        height:2px;
        background-color:#fa9928;
    }

    /*Coupon Box*/

    .coupon-box{
        position:relative;
        padding:25px 25px;
        margin-bottom:25px;
        background-color:#f5f5f5;
    }

    .coupon-form{
        position:relative;
    }

    .coupon-form .form-group{
        position:relative;
        margin-bottom:0px;
    }

    .coupon-form .form-group input[type="text"]{
        position:relative;
        display:block;
        width:100%;
        line-height:28px;
        padding:10px 20px;
        height:44px;
        font-size:14px;
        -webkit-border-radius: 50px;
        -moz-border-radius: 50px;
        -ms-border-radius: 50px;
        -o-border-radius: 50px;
        border-radius: 50px;
        border:1px solid #e0e0e0;
        -webkit-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        -o-transition:all 300ms ease;
        -moz-transition:all 300ms ease;
        transition:all 300ms ease;
    }

    .coupon-form .form-group input[type="text"]:focus{
        border-color:#0056b3;
    }

    .coupon-form button{
        margin-top:0px;
        font-size:16px;
        font-weight:700;
        padding:8px 26px;
        -webkit-border-radius: 50px;
        -moz-border-radius: 50px;
        -ms-border-radius: 50px;
        -o-border-radius: 50px;
        border-radius: 50px;
    }

    .order-box{
        position:relative;
        margin-top:15px;
    }

    .order-box h2{
        position:relative;
        color:#333333;
        font-size:28px;
        font-weight:700;
        margin-bottom:20px;
    }

    .order-box .title-box{
        position:relative;
        padding:13px 30px;
        background-color:#333333;
    }

    .order-box .title-box .col{
        position:relative;
        width:50%;
        float:left;
        color:#ffffff;
        font-size:16px;
    }

    .order-box ul{
        position:relative;
    }

    .order-box ul li{
        position:relative;
        padding:25px 30px;
        border-bottom:1px solid #e0e0e0;
    }

    .order-box ul li strong{
        color:#333333;
        font-weight:400;
        font-size:16px;
    }

    .order-box ul li span{
        width:50%;
        float:right;
        color:#0056b3;
        font-size:16px;
        font-weight:700;
    }

    .order-box ul li span.free{
        color:#777777;
        font-size:16px;
    }

    .order-box ul li:last-child{
        border-bottom:none;
    }

    .payment-box{
        position:relative;
        margin-top:20px;
        background-color:#f5f5f5;
    }

    .payment-box .upper-box{
        position:relative;
        padding:15px 35px;
        border-bottom:1px solid #b7b7b7;
    }


    .payment-options{
        position:relative;
        margin-top:20px;
        margin-bottom:20px;
    }

    .payment-box .payment-options li{
        position:relative;
        margin-bottom:15px;
    }

    .payment-box .payment-options li .radio-option{
        position:relative;
    }

    .payment-box .payment-options li .radio-option label{
        position:relative;
        display:block;
        padding-left:30px;
        font-weight:700 !important;
        text-transform:capitalize;
        letter-spacing:1px;
        color:#333333;
        cursor:pointer;
        font-size:18px;
    }

    .payment-box .payment-options li .radio-option label strong{
    }

    .payment-box .payment-options li .radio-option input[type="radio"]{
        position:absolute;
        left:0px;
        top:3px;
    }

    .payment-box .payment-options li .radio-option label .small-text{
        position:relative;
        display:none;
        letter-spacing:0px;
        text-transform:none;
        font-weight:normal;
        font-size:14px;
        color:#fff;
        line-height:1.8em;
        padding:15px 20px;
        margin-top:20px;
        background-color:#0056b3;
    }

    .payment-box .payment-options li .radio-option input:checked + label .small-text{
        display:block;
    }

    .payment-box .payment-options li .radio-option label .small-text:before{
        position:absolute;
        content:'';
        left:30px;
        top:-11px;
        border-left: 15px solid transparent;
        border-right: 15px solid transparent;
        border-bottom: 15px solid #0056b3;
    }

    .payment-box .payment-options li .radio-option label img{
        position:relative;
        display:block;
        max-width:100%;
        padding-left:30px;
        margin-top:20px;
    }

    .payment-box .payment-options li .radio-option .what-paypall{
        position:relative;
        display:block;
        color:#777777;
        font-size:16px;
        font-weight:700;
        margin-left:120px;
        margin-top:10px;
    }

    .payment-box .lower-box{
        position:relative;
        padding:15px 15px;
    }

    .payment-box .lower-box .btn-style-one{
        font-size: 18px;
        font-weight: 700;
        -webkit-border-radius: 50px;
        -moz-border-radius: 50px;
        -ms-border-radius: 50px;
        -o-border-radius: 50px;
        border-radius: 50px;
        padding: 8px 19px;
        text-transform: capitalize;
    }


    .checkout-form .ui-selectmenu-button.ui-button{
        position: relative;
        width: 100%;
        background: none;
        border: 1px solid #e0e0e0;
        color: #777777;
        height: 50px;
        line-height: 50px;
        padding: 0 20px;
        border-radius: 50px;
    }

    .checkout-form .ui-selectmenu-button.ui-button:before{
        position: absolute;
        right: 15px;
        top: 0;
        height: 50px;
        line-height: 50px;
        width: 30px;
        font-size: 12px;
        text-align: center;
        color: #bbbbbb;
        content:"\f078";
        font-family: "FontAwesome";
    }

    .checkout-form .ui-button .ui-icon{
        display:none;
    }

    /*===============================================================
				Cart Section style
================================================================*/

    .cart-section{
        position:relative;
        padding:100px 0px 200px;
    }

    .cart-outer{
        position:relative;
    }

    .checkout-page .cart-outer{
        margin-bottom:40px;
    }

    .cart-outer .table-outer{
        position:relative;
        width:100%;
        overflow-x:	auto;
    }
    .cart-outer .cart-table{
        width:100%;
        min-width:900px;
    }
    .cart-table .cart-header{
        position:relative;
        width:100%;
        text-transform:uppercase;
        font-size:13px;
        background:#222222;
        color:#ffffff;
        border:1px solid #ebebeb;
    }
    .cart-table thead tr th{
        line-height:24px;
        padding:13px 25px;
        font-weight: 400;
        font-size:16px;
        letter-spacing:1px;
        text-align:center;
        text-transform:uppercase;
        border-right:1px solid #cccccc;
    }
    .cart-table thead tr th .fa{
        font-size:18px;
    }
    .cart-table tbody tr td{
        line-height:24px;
        padding:25px 25px 35px;
    }
    .cart-table tbody tr .prod-column .column-box{
        position:relative;
    }
    .cart-table tbody tr .prod-column .column-box .prod-thumb{
        position:relative;
        width:180px;
        margin: 0 auto;
    }
    .cart-table tbody tr .prod-column .column-box .prod-thumb img{
        display:block;
        max-width:100%;
    }
    .cart-table tbody tr .prod-column .column-box h4{
        font-size:14px;
        color:#222222;
        font-weight:400;
        line-height:90px;
    }
    .cart-table tbody tr .prod-column .author{
        font-size:13px;
        color:#222222;
        margin-bottom:0px;
    }
    .cart-table tbody tr .sub-total{
        font-weight:400;
        color:#222222;
        font-size:17px;
    }
    .cart-table tbody tr .sub-total.price{
    }
    .cart-table tbody tr .remove-btn{
        position:relative;
        font-size:14px;
        color:#222222;
        line-height:30px;
        font-weight:500;
        -webkit-transition:all 500ms ease;
        -ms-transition:all 500ms ease;
        -o-transition:all 500ms ease;
        -moz-transition:all 500ms ease;
        transition:all 500ms ease;
    }
    .cart-table tbody tr .remove-btn .fa{
        position:relative;
        font-size:18px;
        line-height:30px;
    }
    .cart-table tbody tr .remove-btn:hover{
        color:#0056b3;
    }
    .cart-table tbody tr{
        border-bottom:1px solid #cccccc;
    }
    .cart-table tbody tr td{
        vertical-align:middle;
        color:#222222;
        font-size:17px;
        text-align:center;
        border-left:1px solid #cccccc;
    }
    .cart-table tbody tr td.total{
        font-size:18px;
        color:#222222;
    }
    .cart-table tbody tr td:last-child{
        border-right:1px solid #ebebeb;
        text-align:center;
    }
    .cart-table tbody tr td .prod-title{
        position:relative;
        font-size:16px;
        color:#222222;
        font-weight:400;
    }
    .cart-table tbody tr td .quantity-spinner{
        padding:5px 0px 5px 20px;
        line-height:24px;
        height:34px;
        display:block;
        width:100%;
        position:relative;
    }
    .cart-table tbody .available-info{
        position:relative;
        padding-left:50px;
    }
    .cart-table tbody .available-info .icon{
        position:absolute;
        left:0px;
        top:5px;
        width:40px;
        height:40px;
        line-height:40px;
        text-align:center;
        font-size:18px;
        color:#ffffff;
        background:#223555;
        border-radius:50%;
    }
    .cart-section .cart-options{
        position:relative;
        padding:20px 0px 10px;
        margin-bottom:30px;
        border-top:0px;
    }
    .cart-section .apply-coupon{
        position:relative;
    }
    .cart-section .cart-options .cart-btn{
        padding:10px 39px 10px;
        line-height: 24px;
        font-size:14px;
        color:#ffffff;
        font-weight:700;
        border-radius:50px;
        text-transform:uppercase;
        border-color: #0056b3;
        background-color:#0056b3;
        -webkit-transition:all 300ms ease;
        -moz-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        -o-transition:all 300ms ease;
        transition: all 300ms ease;
    }
    .cart-section .cart-options .cart-btn:hover{
        background: #222222;
        border-color: #222222;
    }
    .cart-section .apply-coupon .form-group{
        position:relative;
        float:left;
        margin-right:30px;
    }
    .cart-section .apply-coupon .form-group input[type="text"]{
        display:block;
        line-height:15px;
        padding:8px 20px;
        border:1px solid #cccccc;
        width:225px;
        height:44px;
        background:#ffffff;
        border-radius: 50px;
    }
    .cart-section .coupon-btn{
        padding:10px 39px 10px;
        line-height: 24px;
        font-size:14px;
        color:#ffffff;
        font-weight:700;
        text-transform:uppercase;
        background-color:#0056b3;
        border-radius: 50px;
        -webkit-transition:all 300ms ease;
        -moz-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        -o-transition:all 300ms ease;
        transition: all 300ms ease;
    }
    .cart-section .coupon-btn:hover{
        background: #222222;
    }
    .cart-section .cart-options .btn-style-one{
        top:-7px;
        padding-left:32px;
        padding-right:32px;
    }
    .cart-section .totals-table{
        position:relative;
        margin-bottom:20px;
        border:1px solid #cccccc;
    }
    .cart-section .totals-table li{
        line-height:24px;
        padding:14px 30px;
        border-bottom:1px solid #cccccc;
    }
    .cart-section .totals-table li:first-child{
        background: #222222;
        margin-left:-1px;
    }
    .cart-section .totals-table li:first-child h3{
        color: #fff;
    }
    .cart-section .totals-table li h3{
        position:relative;
        font-weight:400;
        color:#222222;
        font-size:18px;
    }
    .cart-section .totals-table li:last-child{
        border-bottom:none;
        padding:50px 30px;
    }
    .cart-section .totals-table .col{
        position:relative;
        display:block;
        float:left;
        line-height:24px;
        width:50%;
        color:#222222;
        font-size:16px;
        font-weight:400;
        text-transform:capitalize;
    }
    .cart-section .totals-table li .col:last-child{
        text-align:right;
    }
    .cart-section .totals-table .total .price{
        color:#0056b3;
        font-weight:400;
    }
    .cart-section .totals-table .proceed-btn{
        padding: 13px 34px 13px;
        line-height: 24px;
        font-size: 14px;
        color: #fff;
        font-weight: 700;
        text-transform: uppercase;
        border-radius: 50px;
        background-color: #0056b3;
        border: none;
        -webkit-transition:all 300ms ease;
        -moz-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        -o-transition:all 300ms ease;
        transition: all 300ms ease;
    }
    .cart-section .totals-table .proceed-btn:hover{
        background-color: #222222;
    }
    .shipping-block{
        position:relative;
        margin-bottom:40px;
    }
    .shipping-block .inner-box{
        position:relative;
        display:block;
        padding:16px 20px 6px;
        border:1px solid #cccccc;
    }
    .shipping-block .inner-box h3{
        position:relative;
        color:#222222;
        font-size:15px;
        font-weight:700;
        margin-bottom:10px;
        text-transform:capitalize;
    }
    .shipping-block .inner-box h4{
        position:relative;
        color:#0056b3;
        font-size:14px;
        margin-bottom:15px;
        text-transform:capitalize;
    }
    .shipping-form{
        position:relative;
    }
    .shipping-form .form-group{
        position:relative;
        margin-bottom:15px;
    }
    .shipping-form .form-group input[type="text"],
    .shipping-form .form-group input[type="password"],
    .shipping-form .form-group input[type="tel"],
    .shipping-form .form-group input[type="email"],
    .shipping-form .form-group select{
        position:relative;
        display:block;
        width:100%;
        line-height:18px;
        padding:10px 20px;
        height:40px;
        font-size:14px;
        border:1px solid #cccccc;
        border-radius: 50px;
        -webkit-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        -o-transition:all 300ms ease;
        -moz-transition:all 300ms ease;
        transition:all 300ms ease;
    }

    .shipping-form .form-group select{
        cursor:pointer;
        -webkit-appearance:none;
        -moz-appearance:none;
        -ms-appearance:none;
        background:url(../images/icons/icon-select.png)	right center no-repeat;
    }

    .shipping-form .form-group input[type="text"]:focus,
    .shipping-form .form-group input[type="password"]:focus,
    .shipping-form .form-group input[type="tel"]:focus,
    .shipping-form .form-group input[type="email"]:focus,
    .shipping-form .form-group select:focus,
    .shipping-form .form-group textarea:focus{
        border-color:#0056b3;
    }
    .shipping-form button{
        margin-top:0px;
        font-size:14px;
        padding:6px 26px;
        border-radius: 50px;
        text-transform:capitalize;
    }

    .login-section.style-two{
        padding:0px;
        margin-bottom:30px;
    }
    .login-form{
        position:relative;
    }
    .login-form .form-group{
        position:relative;
        margin-bottom:12px;
    }
    .login-form .form-group.check-box{
        padding-top:7px;
    }
    .login-form .form-group:nth-child(2){
        margin-bottom:30px;
    }
    .login-section.style-two .login-form .form-group:nth-child(2){
        margin-bottom:15px;
    }
    .login-form .form-group label{
        position:relative;
        color:#222222;
        font-weight:400;
        font-size:16px;
        cursor:pointer;
        margin-bottom: 10px;
    }
    .login-form .form-group.no-margin{
        margin-bottom:0px;
    }
    .login-form .form-group input[type="text"],
    .login-form .form-group input[type="password"],
    .login-form .form-group input[type="tel"],
    .login-form .form-group input[type="email"]{
        position:relative;
        display:block;
        width:100%;
        line-height:28px;
        padding:10px 20px;
        height:50px;
        font-size:14px;
        border-radius: 50px;
        border:1px solid #cccccc;
        -webkit-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        -o-transition:all 300ms ease;
        -moz-transition:all 300ms ease;
        transition:all 300ms ease;
    }
    .login-form .form-group input[type="text"]:focus,
    .login-form .form-group input[type="password"]:focus,
    .login-form .form-group input[type="tel"]:focus,
    .login-form .form-group input[type="email"]:focus,
    .login-form .form-group select:focus,
    .login-form .form-group textarea:focus{
        border-color:#004cda;
    }
    .login-form button{
        margin-top:0px;
        font-size:16px;
        font-weight:700;
        line-height:24px;
        padding:10px 35px;
        border-radius: 24px;
        text-transform:capitalize;
    }
    .login-form .psw{
        position:relative;
        color:#333333;
        font-size:16px;
    }
    .login-form .psw:hover{
        text-decoration:underline;
    }
    .login-form .check-box input{
        display: block;
        margin-bottom: 7px;
    }
    .login-form .check-box label{
        margin-left: -8px;
        min-width: 110px;
    }

    .login-section .inner-container{
        position:relative;
        padding:25px 28px 15px;
        background-color:#fbfafa;
    }

    .color-palate .rtl-version.option-box{
        margin-left:0px;
        float:none;
    }

    .color-palate .rtl-version.option-box > li{
        position: relative;
        color:#ffffff;
        width: 40%;
        margin:0px 3px;
        cursor: pointer;
        margin-bottom: 9px;
        padding:6px 12px;
        display: inline-block;
        background-color: #004cda;
        text-transform:capitalize;
    }

    .color-trigger .fas{
        -webkit-animation: rotation 2s infinite linear;
    }

    @-webkit-keyframes rotation {
        from {
            -webkit-transform: rotate(0deg);
        }
        to {
            -webkit-transform: rotate(359deg);
        }
    }

    /* RTL Version */

    .rtl .main-header .header-top .top-left .list li{
        padding-left:0px;
        padding-right:25px;
        text-align:right;
    }

    .rtl .main-header .header-top .top-left .list li .icon{
        right:0px;
        left:auto;
    }

    .rtl .main-menu,
    .rtl .tag-list li,
    .rtl .sidebar-title .separator,
    .rtl .sec-title .separator,
    .rtl .main-header .header-upper .logo-outer,
    .rtl .main-header .header-top .top-left,
    .rtl .fixed-header .sticky-header .logo,
    .rtl .news-detail .post-share-options .pull-left,
    .rtl .cart-section .totals-table .col,
    .rtl .main-header.header-style-two .header-upper .logo-box,
    .rtl .shop-single .product-details .prod-tabs .tab-btns .tab-btn{
        float:right;
    }

    .rtl .price-feature .price,
    .rtl .timetable ul li span,
    .rtl .fixed-header .sticky-header .right-col,
    .rtl .main-header .outer-box,
    .rtl .news-detail .post-share-options .pull-right,
    .rtl .main-header.header-style-two .header-upper .upper-right,
    .rtl .main-header .header-upper .nav-outer,
    .rtl .main-header .header-top .top-right{
        float:left;
    }

    .rtl .main-header .header-top .top-right .social-icons li{
        margin-left:0px;
        margin-right:18px;
    }

    .rtl .main-header .header-top .top-left .list li{
        margin-right:0px;
        margin-left:25px;
    }

    .rtl .main-header .outer-box{
        margin-left:0px;
        margin-right:30px;
    }

    .rtl .sec-title,
    .rtl .news-block .inner-box .image .category,
    .rtl .newsletter-section .title-column .inner-column,
    .rtl .fluid-section-one .content-column .content-box,
    .rtl .department-block .inner-box .text,
    .rtl .main-slider .content{
        text-align:right;
    }

    .rtl .main-slider .content .text{
        max-width:none;
        text-align:right;
    }

    .rtl .main-slider .btn-box .theme-btn{
        float:right;
        margin-right:0px;
        margin-left:30px;
    }

    .rtl .sticky-header .main-menu .navigation > li{
        margin-left:0px;
        margin-right:30px;
    }

    .rtl .department-block .inner-box .upper-box{
        padding-left:0px;
        padding-right:95px;
        text-align:right;
    }

    .rtl .list-style-one li .icon,
    .rtl .main-footer .contact-list li .icon,
    .rtl .main-header .info-box .icon-box,
    .rtl .main-footer .footer-list li a:before,
    .rtl .fullwidth-section .right-column .upper-box .icon,
    .rtl .fullwidth-section .left-column .inner-column .icon-box,
    .rtl .department-block .inner-box .upper-box .icon{
        right:0px;
        left:auto;
    }

    .rtl .department-block .inner-box .read-outer .read-more{
        float:right;
        padding-left:30px;
        padding-right:0px;
    }

    .rtl .department-block .inner-box .read-outer .read-more .icon{
        display:none;
    }

    .rtl .sec-title.centered .separator{
        float:none;
    }

    .rtl .list-style-one li{
        padding-left:0px;
        padding-right:32px;
        text-align:right;
    }

    .rtl .team-block .inner-box .image .overlay-box{
        right:0px;
        left:auto;
        text-align:right;
    }

    .rtl .team-block .inner-box .image .overlay-box:before{
        left:-10px;
    }

    .rtl .team-block .inner-box .image .overlay-box:after{
        left: -15px;
        right:-50px;
    }

    .rtl .fullwidth-section .left-column .inner-column .content{
        padding-left:0px;
        padding-right:100px;
        text-align:right;
    }

    .rtl .fullwidth-section .right-column .upper-box{
        padding-left:0px;
        padding-right:80px;
        text-align:right;
    }

    .rtl .fullwidth-section .right-column .time-list li span.left-span{
        float:right;
        padding-left:30px;
        padding-right:0px;
    }

    .rtl .fullwidth-section .right-column .time-list li span.right-span{
        float:left;
        padding-left:0px;
        padding-right:30px;
    }

    .rtl .subscribe-form .form-group input[type="submit"],
    .rtl .subscribe-form button{
        left:0px;
        right:auto;
    }

    .rtl .subscribe-form .form-group input[type="text"],
    .rtl .subscribe-form .form-group input[type="tel"],
    .rtl .subscribe-form .form-group input[type="email"],
    .rtl .subscribe-form .form-group textarea{
        padding-left:170px;
        text-align:right;
        padding-right:30px;
    }

    .rtl .new-posts a,
    .rtl .blog-cat li a,
    .rtl .doctor-info .content-column .inner-column,
    .rtl .main-footer .footer-list li,
    .rtl .main-footer .footer-list,
    .rtl .price-block .inner-box .upper-box,
    .rtl .news-detail .inner-box .lower-content .content,
    .rtl .default-section .timeline-column .inner-column,
    .rtl .price-block .inner-box .plan-outer .plan,
    .rtl .main-slider-two .content-column .inner-column,
    .rtl .welcome-section .content-column .inner-column,
    .rtl .main-footer .footer-widget .footer-title,
    .rtl .main-footer .logo-widget{
        text-align:right;
    }

    .rtl .main-footer .footer-widget .footer-title .separator{
        float:right;
        margin-right:15px;
    }

    .rtl .main-footer .footer-list li a{
        padding-left:0px;
        padding-right:25px;
        text-align:right;
    }

    .rtl .news-widget-block .widget-inner{
        padding-left:0px;
        text-align:right;
        padding-right:110px;
    }

    .rtl .price-block .inner-box .middle-content ul li:before,
    .rtl .news-widget-block .widget-inner .image{
        right:0px;
        left:auto;
    }

    .rtl .main-footer .contact-list li{
        padding-left:0px;
        padding-right:70px;
        text-align:right;
    }

    .rtl .header-style-two .option-box{
        margin-left:0px;
        margin-right:25px;
    }

    .rtl .main-header .outer-box .option-box .cart-box .cart-panel{
        left:0px !important;
    }

    .rtl .main-header .info-box{
        padding-left:0px;
        padding-right:50px;
        text-align:right;
    }

    .rtl .price-block .inner-box .middle-content ul li{
        padding-left:0px;
        padding-right:30px;
        text-align:right;
    }

    .rtl .price-block .inner-box .upper-box .icon{
        left:20px;
        right:auto;
    }

    .rtl .doctor-info .social-links li{
        float:none;
        display:inline-block;
    }

    .rtl .doctor-info .timing i{
        float:right;
        margin-right:0px;
        margin-left:15px;
    }

    .rtl .default-section .timeline-column .timeline-list{
        max-width:100%;
    }

    .rtl .default-section .timeline-column .timeline-list li span{
        left:0px;
        right:auto;
    }

    .rtl .progress-levels .progress-box .inner{
        padding-left:0px;
        padding-right:170px;
    }

    .rtl .feature-block .inner-box .upper-box .icon,
    .rtl .progress-levels .progress-box .inner .text{
        right:0px;
        left:auto;
    }

    .rtl .progress-levels .progress-box .bar .bar-fill{
        right:0%;
        left:auto;
    }

    .rtl .progress-levels .progress-box .bar .bar-innner .skill-percent{
        left:-33px;
        right:auto;
    }

    .rtl .sidebar-title,
    .rtl .need-help,
    .rtl .page-title,
    .rtl .appointment-form,
    .rtl .price-feature,
    .rtl .tag-list,
    .rtl .categories-blog ul li a,
    .rtl .doctor-block .inner-box,
    .rtl .feature-block .inner-box,
    .rtl .ui-selectmenu-button.ui-button,
    .rtl .main-slider-three .content-column .inner-column,
    .rtl .health-section .content-column .inner-column,
    .rtl .appointment-form .form-group input[type="text"],
    .rtl .appointment-form .form-group input[type="email"],
    .rtl .appointment-form .form-group input[type="tel"],
    .rtl .appointment-form .form-group input[type="url"],
    .rtl .appointment-form .form-group textarea,
    .rtl .appointment-form .form-group select,
    .rtl .testimonial-block-two .inner-box,
    .rtl .accordion-box .block .acc-btn,
    .rtl .accordion-box .block .content,
    .rtl .faq-form .form-group input,
    .rtl .faq-form .form-group textarea,
    .rtl .portfolio-page-section .filters,
    .rtl .appointment-form .form-group select,
    .rtl .doctor-detail .lower-content .inner-box,
    .rtl .doctor-detail .detail-column .inner-box,
    .rtl .comment-form .form-group input,
    .rtl .comment-form .form-group textarea,
    .rtl .comment-form .form-group,
    .rtl .product-details .info-column,
    .rtl .shop-comment-form .form-group input,
    .rtl .shop-comment-form .form-group label,
    .rtl .shop-comment-form .form-group,
    .rtl .shipping-block .inner-box,
    .rtl .login-section .inner-container,
    .rtl .login-form .form-group input,
    .rtl .checkout-form input,
    .rtl .order-box ul li,
    .rtl .department-detail,
    .rtl .payment-box .upper-box,
    .rtl .order-box .title-box .col,
    .rtl .checkout-form textarea,
    .rtl .checkout-form .form-group .text,
    .rtl .checkout-form .checkout-title h2,
    .rtl .checkout-form .form-group .field-label,
    .rtl .coupon-form .form-group input[type="text"],
    .rtl .shipping-form .form-group input,
    .rtl .cart-section .totals-table li h3,
    .rtl .shop-comment-form .form-group textarea,
    .rtl .cart-section .apply-coupon .form-group input,
    .rtl .contact-form .form-group input,
    .rtl .main-footer .footer-bottom .copyright,
    .rtl .contact-form .form-group textarea,
    .rtl .main-menu .navigation > li > ul > li > a,
    .rtl .main-menu .navigation > li > ul > li > ul > li > a,
    .rtl .contact-map-section .outer-container .map-content,
    .rtl .shop-single .product-details .prod-tabs .tab-btns,
    .rtl .service-block-four .inner-box,
    .rtl .service-block-five .inner-box,
    .rtl .main-menu .navigation > li .mega-menu-bar .column,
    .rtl .shop-single .product-details .prod-tabs .tabs-content .tab .content,
    .rtl .news-block-two .inner-box .lower-content .content,
    .rtl .welcome-section .content-column .inner-column .play-btn,
    .rtl .appointment-section-three .form-column .upper-box .upper-inner,
    .rtl .appointment-section-three .content-column .bold-text,
    .rtl .about-section-two .content-column .inner-column,
    .rtl .hospital-section .content-column .inner-column,
    .rtl .get-appointment-section .inner-container,
    .rtl .appointment-form-two .form-group,
    .rtl .appointment-form-two .form-group input,
    .rtl .appointment-form-two .form-group textarea,
    .rtl .schedule-section .schedule-column .inner-column,
    .rtl .departments-info-tabs .departments-tabs .tabs-content .content-column .inner-column,
    .rtl .doctor-info-tabs .doctor-tabs .tabs-content .content-list,
    .rtl .department-section-three .department-tabs .tabs-content .tab,
    .rtl .department-section-three .department-tabs .tab-btns .tab-btn{
        text-align:right;
    }

    .rtl .appointment-form-two .form-group .icon{
        left:10px;
        right:auto;
    }

    .rtl .doctor-info-tabs .doctor-tabs .tabs-content .content-list li span{
        left:0px;
        right:auto;
    }

    .rtl .about-section-two .content-column .about-list-info .list-inner,
    .rtl .appointment-section-three .content-column .appointment-list .list-inner{
        padding-left:0px;
        padding-right:40px;
        text-align:right;
    }

    .rtl .about-section-two .content-column .about-list-info .list-inner:before,
    .rtl .appointment-section-three .content-column .appointment-list .list-inner .icon{
        right:0px;
        left:auto;
        transform:rotate(180deg);
    }

    .rtl .service-block-four .inner-box .list li span{
        left:0px;
        right:auto;
    }

    .rtl .about-section .content-column .inner-column{
        padding-right:0px;
        text-align:right;
    }

    .rtl .doctor-block .inner-box .doctor-time-list li span{
        text-align:left;
        left:0px;
        right:auto;
    }

    .rtl .categories-blog ul li span,
    .rtl .appointment-form .form-group .icon{
        left:15px;
        right:auto;
    }

    .rtl .header-style-three .header-upper .nav-outer{
        padding-left:0px;
        padding-right:40px;
    }

    .rtl .health-section .content-column .text{
        max-width:100%;
    }

    .rtl .feature-block .inner-box .upper-box{
        padding-left:0px;
        padding-right:50px;
    }

    .rtl .fact-counter.style-two .column .inner .content{
        text-align:right;
        padding-left:0px;
        padding-right:75px;
    }

    .rtl .fact-counter .column .inner .icon{
        right:0px;
        left:auto;
        transform:rotate(180deg);
    }

    .rtl .accordion-box .block .icon-outer{
        left:40px;
    }

    .rtl .comming-soon .emailed-form .form-group input[type="submit"],
    .rtl .comming-soon .emailed-form button{
        left:5px;
        right:auto;
    }

    .rtl .comming-soon .emailed-form .form-group input{
        padding-left:180px;
    }

    .rtl .doctor-detail .detail-column .info-list li p{
        padding-left:0px;
        text-align:right;
        padding-right:180px;
    }

    .rtl .doctor-detail .detail-column .info-list li strong{
        right:0px;
        left:0px;
    }

    .rtl .blog-cat li a:after{
        left:25px;
        right:auto;
    }

    .rtl .brochure-widget .brouchers li a{
        padding-left:15px;
        padding-right:45px;
        text-align:right;
    }

    .rtl .brochure-widget .brouchers li a .icon{
        right:12px;
        left:auto;
    }

    .rtl .popular-posts .post{
        padding-left:0px;
        text-align:right;
        padding-right:105px;
    }

    .rtl .payment-box .payment-options li .radio-option input[type="radio"],
    .rtl .sidebar .related-posts .post .post-thumb,
    .rtl .sidebar-page-container .comments-area .comment-box .author-thumb,
    .rtl .popular-posts .post-thumb{
        right:0px;
        left:auto;
    }

    .rtl .cart-section .totals-table li .col:last-child{
        text-align:left;
    }

    .rtl .sidebar-page-container .comments-area .comment{
        padding-left:0px;
        text-align:right;
        padding-right:140px;
    }

    .rtl .sidebar .related-posts .post{
        padding-left:0px;
        text-align:right;
        padding-right:118px;
    }

    .rtl .payment-box .payment-options li .radio-option label{
        padding-left:0px;
        padding-right:30px;
    }

    .rtl .contact-map-section .map-content .info-list li{
        padding-left:0px;
        padding-right:25px;
        text-align:right;
    }

    .rtl .contact-map-section .map-content .info-list li .icon{
        right:0px;
        left:auto;
    }

    .rtl .main-menu .navigation > li > ul > li.dropdown > a:after{
        display:none;
    }

    .rtl .service-block-two .inner-box{
        padding-left:0px;
        padding-right:80px;
        text-align:right;
    }

    .rtl .service-block-two .inner-box .icon-box{
        right:0px;
        left:auto;
    }

    .rtl .timetable .doctor-btn,
    .rtl .default-section .timeline-column .btn-box .timeline-btn{
        text-align:right;
    }

    .rtl .timetable .doctor-btn .fa,
    .rtl .default-section .timeline-column .btn-box .timeline-btn .icon{
        float:right;
        margin-right:0px;
        margin-left:12px;
    }

    .rtl .page-title .bread-crumb li{
        float:right;
        text-align:right;
    }

    .rtl .page-title .bread-crumb li .fas{
        float:right;
        top:8px;
        margin-right:0px;
        margin-left:8px;
        position:relative;
    }

    .rtl .page-title .bread-crumb li:after{
        right:auto;
        left:-10px;
        transform:rotate(180deg);
    }

    .rtl .search-popup .search-form fieldset input[type="search"]{
        text-align:right;
        padding:20px 20px 20px 220px;
    }

    .rtl .search-popup .search-form fieldset input[type="submit"]{
        left:0px;
        right:auto;
    }

    /************************ Mega Menu ***************************/

    .main-menu .navigation > li.has-mega-menu{
        position:static;
    }

    .main-menu .navigation > li.has-mega-menu:before,
    .main-menu .navigation > li.has-mega-menu:after{
        display:none;
    }

    .main-menu .navigation > li > .mega-menu{
        position:absolute;
        left:0px;
        right: 0;
        margin: auto;
        width:100%;
        max-width: 1170px;
        background-color: #ffffff;
        padding: 45px 40px 30px 45px;
        top: 100%;
        z-index:100;
        opacity: 0;
        -webkit-transform: scaleY(0);
        -moz-transform: scaleY(0);
        -ms-transform: scaleY(0);
        -o-transform: scaleY(0);
        transform: scaleY(0);
        -webkit-transform-origin: top;
        -moz-transform-origin: top;
        -ms-transform-origin: top;
        -o-transform-origin: top;
        transform-origin: top;
        transition:all 500ms ease;
        -moz-transition:all 500ms ease;
        -webkit-transition:all 500ms ease;
        -ms-transition:all 500ms ease;
        -o-transition:all 500ms ease;
        -webkit-box-shadow:2px 2px 5px 1px rgba(0,0,0,0.05),-2px 0px 5px 1px rgba(0,0,0,0.05);
        -ms-box-shadow:2px 2px 5px 1px rgba(0,0,0,0.05),-2px 0px 5px 1px rgba(0,0,0,0.05);
        -o-box-shadow:2px 2px 5px 1px rgba(0,0,0,0.05),-2px 0px 5px 1px rgba(0,0,0,0.05);
        -moz-box-shadow:2px 2px 5px 1px rgba(0,0,0,0.05),-2px 0px 5px 1px rgba(0,0,0,0.05);
        box-shadow:2px 2px 5px 1px rgba(0,0,0,0.05),-2px 0px 5px 1px rgba(0,0,0,0.05);
    }

    .main-menu .navigation > li:hover > .mega-menu{
        opacity: 1;
        visibility: visible;
        -webkit-transform: scaleY(1);
        -moz-transform: scaleY(1);
        -ms-transform: scaleY(1);
        -o-transform: scaleY(1);
        transform: scaleY(1);
    }

    .main-menu .navigation > li > .mega-menu .mega-menu-bar{
        position: relative;
    }

    .main-menu .navigation > li .mega-menu-bar h3{
        position:relative;
        color:#020e28;
        font-size:20px;
        font-weight:600;
        padding-bottom:10px;
        border-bottom:1px solid #f2f2f2;
    }

    .main-menu .navigation > li .mega-menu-bar > ul{
        position:relative;
    }

    .main-menu .navigation > li .mega-menu-bar .column > ul > li{
        position:relative;
        width:100%;
        border-bottom:1px solid #f2f2f2;
        text-transform:capitalize;
        transition:all 500ms ease;
        -moz-transition:all 500ms ease;
        -webkit-transition:all 500ms ease;
        -ms-transition:all 500ms ease;
        -o-transition:all 500ms ease;
    }

    .main-menu .navigation > li .mega-menu-bar .column{
        position:relative;
        margin-bottom:10px;
    }

    .main-menu .navigation > li .mega-menu-bar .column > ul > li:last-child{
        border:none;
    }

    .main-menu .navigation > li .mega-menu-bar .column > ul > li > a{
        position:relative;
        display:block;
        padding:10px 0px;
        line-height:20px;
        font-weight:600;
        font-size:14px;
        color:#333333;
        font-family: 'Lora', serif;
        text-transform:capitalize;
        transition:all 500ms ease;
        -moz-transition:all 500ms ease;
        -webkit-transition:all 500ms ease;
        -ms-transition:all 500ms ease;
        -o-transition:all 500ms ease;
    }
    .main-menu .navigation > li .mega-menu-bar .column > ul > li > a:hover{
        color:#004cda;
    }

    /***

====================================================================
	Services Section Three
====================================================================

***/

    .services-section-three{
        position:relative;
        padding:80px 0px 50px;
    }

    .service-block-four{
        position:relative;
    }

    .service-block-four .inner-box{
        position:relative;
        padding:30px 30px;
        min-height:299px;
        background-color:#004cda;
    }

    .service-block-four:nth-child(2) .inner-box{
        background-color:#222222 !important;
    }

    .service-block-four:nth-child(3) .inner-box{
        background-color:#003eb3;
    }

    .service-block-four .inner-box .icon-box{
        position:relative;
        color:#ffffff;
        font-size:50px;
        line-height:1em;
    }

    .service-block-four .inner-box .icon-box .icon{
        position:relative;
    }

    .service-block-four .inner-box h4{
        position:relative;
        color:#ffffff;
        margin-top:18px;
        font-size:20px;
    }

    .service-block-four .inner-box h4 a{
        position:relative;
        color:#ffffff;
    }

    /* List */

    .service-block-four .inner-box .list{
        position:relative;
        margin-top:18px;
    }

    .service-block-four .inner-box .list li{
        position:relative;
        padding-bottom:12px;
        margin-bottom:12px;
        color:#ffffff;
        border-bottom:1px solid rgba(255,255,255,0.60);
    }

    .service-block-four .inner-box .list li span{
        position:absolute;
        right:0px;
    }

    .service-block-four .inner-box .list li:last-child{
        margin-bottom:0px;
    }

    /* List Two */

    .service-block-four .inner-box .list-two{
        position:relative;
        margin-top:18px;
    }

    .service-block-four .inner-box .list-two li{
        position:relative;
        padding-bottom:12px;
        margin-bottom:12px;
        color:#ffffff;
        padding-left:30px;
        border-bottom:1px solid rgba(255,255,255,0.60);
    }

    .service-block-four .inner-box .list-two li:before{
        position:absolute;
        content: "\f16f";
        left:0px;
        top:0px;
        color:#ffffff;
        font-family: "Flaticon";
    }

    .service-block-four .inner-box .list-two li:last-child{
        margin-bottom:0px;
    }

    .service-block-four .inner-box .text{
        position:relative;
        color:#ffffff;
        margin-top:14px;
        font-size:14px;
        line-height:1.7em;
        margin-bottom:15px;
    }

    .service-block-four .inner-box .appointment-btn{
        position:relative;
        color:#ffffff;
        font-size:14px;
        padding:10px 34px;
        letter-spacing:1px;
        display:inline-block;
        border:2px solid #ffffff;
        border-radius:50px;
        transition:all 500ms ease;
        -moz-transition:all 500ms ease;
        -webkit-transition:all 500ms ease;
        -ms-transition:all 500ms ease;
        -o-transition:all 500ms ease;
    }

    .service-block-four .inner-box .appointment-btn:hover{
        background-color:#ffffff;
        color:#004cda;
    }

    /***

====================================================================
	About Section
====================================================================

***/

    .about-section{
        position:relative;
        padding:60px 0px 40px;
    }

    .about-section .content-column{
        position:relative;
        margin-bottom:40px;
    }

    .about-section .content-column .inner-column{
        position:relative;
        padding-right:60px;
    }

    .about-section .content-column .sec-title{
        margin-bottom:30px;
    }

    .about-section .content-column .bold-text{
        position:relative;
        color:#222222;
        font-size:22px;
        line-height:1.6em;
        font-weight:600;
    }

    .about-section .content-column .text{
        position:relative;
        color:#777777;
        font-size:14px;
        line-height:1.9em;
        font-weight:400;
        margin-top:15px;
        margin-bottom:30px;
    }

    .service-block-five{
        position:relative;
        margin-bottom:40px;
    }

    .service-block-five .inner-box{
        position:relative;
    }

    .service-block-five .inner-box .icon-box{
        position:relative;
        width:100px;
        height:74px;
        color:#004cda;
        font-size:40px;
        line-height:1em;
        padding:15px 0px;
        text-align:center;
        background:url(../images/icons/icon-6.png) no-repeat;
        transition: all 900ms ease;
        -moz-transition: all 900ms ease;
        -webkit-transition: all 900ms ease;
        -ms-transition: all 900ms ease;
        -o-transition: all 900ms ease;
    }

    .service-block-five .inner-box:hover .icon-box{
        transform:rotateY(360deg);
    }

    .service-block-five .inner-box h4{
        position:relative;
        color:#222222;
        font-size:18px;
        font-weight:700;
        line-height:1.3em;
        margin-top:20px;
    }

    .service-block-five .inner-box .text{
        position:relative;
        color:#777777;
        font-size:16px;
        font-weight:400;
        line-height:1.7em;
        margin-top:8px;
    }

    /***

====================================================================
	Appointment Section Three
====================================================================

***/

    .appointment-section-three{
        position:relative;
        padding:100px 0px 70px;
        background-color:#ebf1fc;
    }

    .appointment-section-three .form-column{
        position:relative;
        margin-bottom:40px;
    }

    .appointment-section-three .form-column .inner-column{
        position:relative;
        overflow:hidden;
        border-radius:20px 20px 0px 0px;
    }

    .appointment-section-three .form-column .upper-box{
        position:relative;
    }

    .appointment-section-three .form-column .upper-box .upper-inner{
        position:relative;
        padding:30px 30px;
        background-color:#004cda;
    }

    .appointment-section-three .form-column .icon-box{
        position: relative;
        color: #ffffff;
        font-size: 40px;
        line-height: 1em;
        font-weight:300;
    }

    .appointment-section-three .form-column h3{
        position: relative;
        color: #ffffff;
        margin-top: 18px;
        font-size: 24px;
        font-weight:700;
    }

    .appointment-section-three .form-column .text{
        position: relative;
        color: #ffffff;
        margin-top: 14px;
        font-size: 15px;
        line-height: 1.8em;
    }

    .appointment-section-three .form-column .lower-box{
        position:relative;
    }

    .appointment-section-three .form-column .lower-box .upper-inner{
        position:relative;
        padding:30px 30px;
        border:1px solid #bbbbbb;
        border-top:0px;
        background-color:#ffffff;
    }

    .appointment-section-three .form-column .lower-box .submit-btn{
        color:#ffffff;
        width:100%;
        font-size:14px;
        font-weight:700;
        padding:15px 15px;
        letter-spacing:1px;
        text-transform:uppercase;
        background-color:#222222;
        font-family: 'Lora', serif;
    }

    /*Custom Select*/

    .form-group .ui-selectmenu-button.ui-button{
        width:100%;
        font-size:14px;
        font-style:normal;
        height:50px;
        padding:10px 20px 10px 20px;
        line-height:28px;
        color:#777777;
        border: none;
        border-radius:4px;
        background:none;
        border:1px solid #cccccc;
    }

    .form-group .ui-button .ui-icon{
        background:none;
        position:relative;
        top:2px;
        text-indent:0px;
        color:#333333;
    }

    .form-group .ui-button .ui-icon:before{
        font-family: 'Font Awesome 5 Free';
        content: "\f107";
        position:absolute;
        right:0px;
        top:2px !important;
        top:13px;
        width:10px;
        height:20px;
        display:block;
        color:#999999;
        line-height:20px;
        font-size:16px;
        font-weight:normal;
        text-align:center;
        z-index:5;
        font-weight:800;
    }

    .ui-widget.ui-widget-content{

    }

    .ui-menu .ui-menu-item{
        font-size:14px;
    }

    .ui-menu .ui-menu-item:last-child{
        border:none;
    }

    .ui-state-active, .ui-widget-content .ui-state-active{
        background:#004cda;
        border-color:#004cda;
    }

    .ui-menu .ui-menu-item-wrapper{
        position:relative;
        display:block;
        padding:8px 20px;
        font-size:14px;
        line-height:24px;
    }

    .ui-menu-item:hover{
        background-color:#004cda;
    }

    .appointment-section-three .content-column{
        position:relative;
    }

    .appointment-section-three .content-column .inner-column{
        position:relative;
        padding-left:50px;
        padding-top:50px;
    }

    .appointment-section-three .content-column .inner-column .sec-title{
        margin-bottom:30px;
    }

    .appointment-section-three .content-column .inner-column .sec-title .separator:after{
        border-color:#ebf1fc;
    }

    .appointment-section-three .content-column .bold-text{
        position: relative;
        color: #222222;
        font-size: 22px;
        line-height: 1.6em;
        font-weight: 600;
        margin-bottom:50px;
    }

    .appointment-section-three .content-column .appointment-list{
        position:relative;
        margin-bottom:50px;
    }

    .appointment-section-three .content-column .appointment-list .list-inner{
        position:relative;
        padding-left:40px;
    }

    .appointment-section-three .content-column .appointment-list .list-inner .icon{
        position:absolute;
        left:0px;
        top:0px;
        color:#222222;
        font-size:22px;
        line-height:1em;
    }

    .appointment-section-three .content-column .appointment-list h4{
        position:relative;
        color:#004cda;
        font-size:18px;
        font-weight:700;
        line-height:1.2em;
    }

    .appointment-section-three .content-column .appointment-list .text{
        position:relative;
        color:#777777;
        font-size:16px;
        line-height:1.8em;
        margin-top:12px;
    }

    /***

====================================================================
	About Section Two
====================================================================

***/

    .about-section-two{
        position:relative;
        padding:110px 0px 60px;
    }

    .about-section-two .content-column{
        position:relative;
        margin-bottom:40px;
    }

    .about-section-two .content-column .inner-column{
        position:relative;
        max-width:540px;
    }

    .about-section-two .content-column .sec-title{
        margin-bottom:30px;
    }

    .about-section-two .content-column .bold-text{
        position: relative;
        color: #222222;
        font-size: 22px;
        line-height: 1.6em;
        font-weight: 600;
        margin-bottom: 20px;
    }

    .about-section-two .content-column .text{
        position: relative;
        color: #777777;
        font-size: 16px;
        line-height: 1.8em;
        font-weight: 400;
        margin-bottom: 50px;
    }

    .about-section-two .content-column .about-list-info{
        position:relative;
    }

    .about-section-two .content-column .about-list-info .list-inner{
        position:relative;
        padding-left:30px;
        color:#004cda;
        font-size:18px;
        font-weight:700;
        margin-bottom:20px;
        font-family: 'Lora', serif;
    }

    .about-section-two .content-column .about-list-info .list-inner:before{
        position:absolute;
        content:'\f0a4';
        left:0px;
        top:3px;
        color:#222222;
        font-size:16px;
        line-height:1em;
        font-weight:400;
        font-family: 'Font Awesome 5 Free';
    }

    .about-section-two .info-column{
        position:relative;
    }

    .about-section-two .info-column .inner-column{
        position:relative;
        padding-left:40px;
    }

    /***

====================================================================
	Doctor Tabs Style
====================================================================

***/

    .doctor-info-tabs{
        position:relative;
        padding:0px 0px;
        background-color:#ffffff;
    }

    .doctor-info-tabs .doctor-tabs{
        position:relative;
    }

    .doctor-info-tabs .doctor-tabs .tab-btns{
        position:relative;
        background-color:#222222;
    }

    .doctor-info-tabs .doctor-tabs .tab-btns .tab-btn{
        position:relative;
        display:block;
        float:left;
        font-size:16px;
        color:#ffffff;
        font-weight:600;
        line-height:24px;
        cursor:pointer;
        width:50%;
        text-align:center;
        letter-spacing:1px;
        padding:18px 15px 18px;
        transition:all 500ms ease;
        font-family: 'Lora', serif;
        text-transform:capitalize;
    }

    .doctor-info-tabs .doctor-tabs .tab-btns .tab-btn:hover,
    .doctor-info-tabs .doctor-tabs .tab-btns .tab-btn.active-btn{
        color:#ffffff;
        background:#004cda;
    }

    .doctor-info-tabs .doctor-tabs .tabs-content{
        position:relative;
        padding-top:30px;
        padding-left:35px;
        padding-right:35px;
        border:1px solid #d7d7d7;
    }

    .doctor-info-tabs .doctor-tabs .tabs-content .tab{
        position:relative;
        display:none;
    }

    .doctor-info-tabs .doctor-tabs .tabs-content .tab.active-tab{
        display:block;
    }

    .doctor-info-tabs .doctor-tabs .tabs-content .content-list{
        position:relative;
    }

    .doctor-info-tabs .doctor-tabs .tabs-content .content-list li{
        position:relative;
        color:#777777;
        font-size:15px;
        padding-bottom:14px;
        margin-bottom:14px;
        border-bottom:1px solid rgba(0,0,0,0.20);
    }

    .doctor-info-tabs .doctor-tabs .tabs-content .content-list li:before{
        position:absolute;
        content:'----';
        left:50%;
        color:#777777;
        font-size:14px;
        margin-left:-25px;
    }

    .doctor-info-tabs .doctor-tabs .tabs-content .content-list li span{
        position:absolute;
        right:0px;
    }

    .doctor-info-tabs .doctor-tabs .tabs-content .content-list li:last-child{
        border-bottom:none;
    }

    /***

====================================================================
	Counter Section Two
====================================================================

***/

    .counter-section-two{
        position:relative;
        padding-bottom:80px;
    }

    /*fact counter*/

    .fact-counter-two{
        position:relative;
    }

    .fact-counter-two .column{
        position:relative;
        margin-bottom:30px;
    }

    .fact-counter-two .column .inner{
        position:relative;
        padding:35px 15px 35px;
        border:2px solid transparent;
        box-shadow:0px 0px 15px rgba(0,0,0,0.10);

        transition: all 600ms ease;
        -moz-transition: all 600ms ease;
        -webkit-transition: all 600ms ease;
        -ms-transition: all 600ms ease;
        -o-transition: all 600ms ease;
    }

    .fact-counter-two .column:hover .inner{
        border-color:#222222;
    }

    .fact-counter-two .column .inner .content{
        position:relative;
        text-align:center;
    }

    .fact-counter-two .column .inner .icon{
        position:relative;
        color:#000000;
        font-size:54px;
        text-align:center;
        line-height:1em;
        font-weight: 400;
        margin-bottom:0px;
        transition:all 0.3s ease;
        -moz-transition:all 0.3s ease;
        -webkit-transition:all 0.3s ease;
        -ms-transition:all 0.3s ease;
        -o-transition:all 0.3s ease;
    }

    .fact-counter-two .count-outer .percentage{
        display:inline-block;
        font-weight:600;
        color:#020e28;
        font-size:48px;
        line-height:1em;
    }

    .fact-counter-two .column .inner .count-outer{
        position:relative;
        font-weight:700;
        color:#004cda;
        font-size:30px;
        line-height:1em;
        margin-top:20px;
        font-family: 'Lora', serif;
    }

    .fact-counter-two .column .inner .counter-title{
        position:relative;
        font-size:18px;
        font-weight:400;
        margin-top:14px;
        color:#777777;
        font-family: 'Lato', sans-serif;
    }

    /***

====================================================================
	Hospital Section
====================================================================

***/

    .hospital-section{
        position:relative;
        padding-top:110px;
        background-size:cover;
    }

    .hospital-section .image-column{
        position:relative;
    }

    .hospital-section .image-column .inner-column{
        position:relative;
    }

    .hospital-section .image-column .inner-column .image{
        position:relative;
    }

    .hospital-section .content-column{
        position:relative;
    }

    .hospital-section .content-column .inner-column{
        position:relative;
    }

    .hospital-section .content-column .sec-title{
        position:relative;
        margin-bottom:35px;
    }

    .hospital-section .content-column .bold-text{
        position: relative;
        color: #222222;
        font-size: 20px;
        line-height: 1.6em;
        font-weight: 600;
        margin-bottom: 40px;
    }

    /***

====================================================================
	Doctor Tabs Style
====================================================================

***/

    .hospital-info-tabs{
        position:relative;
    }

    .hospital-info-tabs .hospital-tabs{
        position:relative;
    }

    .hospital-info-tabs .hospital-tabs .tab-btns{
        position:relative;
        border-radius:50px;
        overflow:hidden;
        margin-bottom:60px;
        border:1px solid #dddddd;
    }

    .hospital-info-tabs .hospital-tabs .tab-btns .tab-btn{
        position:relative;
        display:block;
        float:left;
        font-size:16px;
        color:#222222;
        font-weight:600;
        line-height:24px;
        cursor:pointer;
        width:25%;
        text-align:center;
        letter-spacing:1px;
        padding:18px 15px 18px;
        transition:all 500ms ease;
        font-family: 'Lora', serif;
        text-transform:capitalize;
        background-color:#ffffff;
        border-right:1px solid #dddddd;
    }

    .hospital-info-tabs .hospital-tabs .tab-btns .tab-btn:hover,
    .hospital-info-tabs .hospital-tabs .tab-btns .tab-btn.active-btn{
        color:#ffffff;
        background:#004cda;
    }

    .hospital-info-tabs .hospital-tabs .tabs-content{
        position:relative;
    }

    .hospital-info-tabs .hospital-tabs .tabs-content .tab{
        position:relative;
        display:none;
    }

    .hospital-info-tabs .hospital-tabs .tabs-content .tab.active-tab{
        display:block;
    }

    .hospital-info-tabs .hospital-tabs .tabs-content .text{
        position:relative;
        margin-bottom:40px;
    }

    .hospital-info-tabs .hospital-tabs .tabs-content .text p{
        position:relative;
        color:#777777;
        font-size:16px;
        line-height:1.8em;
        margin-bottom:30px;
    }

    .hospital-info-tabs .hospital-tabs .tabs-content .text p:last-child{
        margin-bottom:0px;
    }

    .hospital-info-tabs .hospital-tabs .tabs-content .more-btn{
        position:relative;
        color:#ffffff;
        padding:18px 46px;
        border-radius:50px;
        margin-bottom:45px;
        background-color:#222222;
        transition:all 0.3s ease;
        -moz-transition:all 0.3s ease;
        -webkit-transition:all 0.3s ease;
        -ms-transition:all 0.3s ease;
        -o-transition:all 0.3s ease;
    }

    .hospital-info-tabs .hospital-tabs .tabs-content .more-btn:hover{
        background-color:#004cda;
    }

    .hospital-info-tabs .hospital-tabs .tabs-content .image img{
        width:100%;
        display:block;
    }

    /***

====================================================================
	Get Appointment Section
====================================================================

***/

    .get-appointment-section{
        position:relative;
        padding:120px 0px 120px;
    }

    .get-appointment-section .inner-container{
        position:relative;
        padding:30px 45px;
        border-radius:5px;
        box-shadow:0px 0px 15px rgba(0,0,0,0.10);
    }

    .get-appointment-section h3{
        position:relative;
        color:#222222;
        font-size:24px;
        font-weight:600;
        line-height:1.3em;
        margin-bottom:22px;
    }

    /* Appointment Form */

    .appointment-form-two{
        position: relative;
        z-index:1;
    }

    .appointment-form-two .form-group{
        position:relative;
        margin-bottom:30px;
    }

    .appointment-form-two .form-group label{
        position:relative;
        color:#004cda;
        font-size:16px;
        margin-bottom:15px;
    }

    .ui-selectmenu-button.ui-button,
    .appointment-form-two .form-group input[type="text"],
    .appointment-form-two .form-group input[type="email"],
    .appointment-form-two .form-group input[type="tel"],
    .appointment-form-two .form-group input[type="url"],
    .appointment-form-two .form-group textarea,
    .appointment-form-two .form-group select{
        position: relative;
        display: block;
        width: 100%;
        font-size: 14px;
        line-height: 20px;
        color: #888888;
        font-weight: 400;
        padding: 14px 20px;
        border-radius:0px;
        z-index:1;
        border: 1px solid #cccccc;
        background-color: #ffffff;
        -webkit-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
        transition: all 300ms ease;
    }

    .appointment-form-two .form-group input:focus,
    .appointment-form-two .form-group select:focus,
    .appointment-form-two .form-group textarea:focus{
        border-color:#004cda;
    }

    .appointment-form-two .form-group textarea{
        height: 150px;
        resize: none;
        border-radius:10px;
    }

    .appointment-form-two .form-group input[type="submit"],
    .appointment-form-two button{
        padding:12px 40px 12px;
        margin-top:35px;
        width:100%;
    }

    .appointment-form-two .form-group input[type="submit"]:hover,
    .appointment-form-two button:hover{
        opacity: .95;
    }

    .appointment-form-two .form-group .icon{
        position: absolute;
        right: 10px;
        top: 37px;
        height: 50px;
        width: 50px;
        z-index:1;
        line-height: 50px;
        text-align: center;
        font-size: 14px;
        color: #999999;
    }

    /***

====================================================================
	Schedule Section
====================================================================

***/

    .schedule-section{
        position:relative;
        padding:110px 0px 80px;
        background-size:cover;
        background-attachment:fixed;
    }

    .schedule-section:before{
        position:absolute;
        content:'';
        left:0px;
        top:0px;
        right:0px;
        bottom:0px;
        background-color:rgba(255,255,255,0.85);
    }

    .schedule-section .schedule-column{
        position:relative;
    }

    .schedule-section .schedule-column .inner-column{
        position:relative;
        width: 100%;
        margin-bottom:40px;
        /* overflow-x: auto; */
    }

    .schedule-section .schedule-column .inner-column .content{
        width: 100%;
        min-width: 665px;
        border:1px solid #d7d7d7;
        border-bottom:none;
    }

    .schedule-section .schedule-column .inner-column .title-box{
        position:relative;
        margin-right:-2px;
    }

    .schedule-section .schedule-column .inner-column .title-box li{
        position:relative;
        padding:20px 30px;
        color:#ffffff;
        width:33.333%;
        float:left;
        font-size:17px;
        font-weight:700;
        display:inline-block;
        background-color:#004cda;
        font-family: 'Lora', serif;
        border-right:2px solid rgba(255,255,255,0.50);
    }

    .schedule-section .schedule-column .inner-column .title-box li:last-child{
        border-right:none;
    }

    .schedule-section .schedule-column .inner-column .content-box{
        position:relative;
    }

    .schedule-section .schedule-column .inner-column .content-box li{
        position:relative;
        padding:20px 30px;
        color:#777777;
        width:33.333%;
        float:left;
        font-size:17px;
        font-weight:700;
        display:inline-block;
        background-color:#ffffff;
        font-family: 'Lora', serif;
        border-right:2px solid #d7d7d7;
        border-bottom:2px solid #d7d7d7;
    }

    .schedule-section .schedule-column .inner-column .content-box li:last-child{
        border-right:none;
    }

    .schedule-section .appointment-column{
        position:relative;
        margin-bottom:40px;
    }

    .schedule-section .appointment-column .inner-column{
        position:relative;
        overflow:hidden;
        margin-left:40px;
        margin-top:45px;
        border-radius:20px 20px 0px 0px;
    }

    .schedule-section .appointment-column .inner-column .upper-box{
        position:relative;
    }

    .schedule-section .appointment-column .inner-column .upper-box .upper-inner{
        position:relative;
        padding:30px 30px;
        background-color:#004cda;
    }

    .schedule-section .appointment-column .inner-column .upper-box h3{
        position: relative;
        color: #ffffff;
        font-size: 24px;
        font-weight:700;
    }

    .schedule-section .appointment-column .inner-column .lower-box{
        position:relative;
    }

    .schedule-section .appointment-column .inner-column .lower-box .upper-inner{
        position:relative;
        padding:30px 30px;
        border:1px solid #bbbbbb;
        border-top:0px;
        background-color:#ffffff;
    }

    .schedule-section .appointment-column .inner-column .lower-box .submit-btn{
        color:#ffffff;
        width:100%;
        font-size:14px;
        font-weight:700;
        padding:15px 15px;
        letter-spacing:1px;
        text-transform:uppercase;
        background-color:#222222;
        font-family: 'Lora', serif;
    }

    /***

====================================================================
	Provide Section
====================================================================

***/

    .provider-section{
        position:relative;
        padding:110px 0px 80px;
    }

    .provider-section .blocks-column{
        position:relative;
    }

    .provider-section .blocks-column .inner-column{
        position:relative;
    }

    .provider-section .appointment-column{
        position:relative;
        margin-bottom:40px;
    }

    .provider-section .appointment-column .inner-column{
        position:relative;
        overflow:hidden;
        margin-top:8px;
        border-radius:20px 20px 0px 0px;
    }

    .provider-section .appointment-column .inner-column .upper-box{
        position:relative;
    }

    .provider-section .appointment-column .inner-column .upper-box .upper-inner{
        position:relative;
        padding:30px 30px;
        background-color:#004cda;
    }

    .provider-section .appointment-column .inner-column .upper-box h3{
        position: relative;
        color: #ffffff;
        font-size: 24px;
        font-weight:700;
    }

    .provider-section .appointment-column .inner-column .lower-box{
        position:relative;
    }

    .provider-section .appointment-column .inner-column .lower-box .upper-inner{
        position:relative;
        padding:30px 30px;
        border:1px solid #bbbbbb;
        border-top:0px;
        background-color:#ffffff;
    }

    .provider-section .appointment-column .inner-column .lower-box .submit-btn{
        color:#ffffff;
        width:100%;
        font-size:14px;
        font-weight:700;
        padding:15px 15px;
        letter-spacing:1px;
        text-transform:uppercase;
        background-color:#222222;
        font-family: 'Lora', serif;
    }

    .service-block-six{
        position:relative;
        margin-bottom:30px;
    }

    .service-block-six .inner-box{
        position:relative;
        text-align:center;
        padding:45px 30px 45px;
        background-color:#ffffff;
        box-shadow:0px 0px 10px rgba(0,0,0,0.10);
    }

    .service-block-six .inner-box .border-one{
        position:absolute;
        left:0px;
        top:0px;
        width:40px;
        height:40px;
        transition: all 600ms ease;
        -webkit-transition: all 600ms ease;
        -ms-transition: all 600ms ease;
        -o-transition: all 600ms ease;
        -moz-transition: all 600ms ease;
    }

    .service-block-six .inner-box .border-one:before{
        position:absolute;
        content:'';
        left:0px;
        top:0px;
        width:100%;
        height:1px;
        background-color:#004cda;
    }

    .service-block-six .inner-box .border-one:after{
        position:absolute;
        content:'';
        left:0px;
        top:0px;
        width:1px;
        height:100%;
        background-color:#004cda;
    }

    .service-block-six .inner-box:hover .border-one:before,
    .service-block-six .inner-box:hover .border-one:after{

    }

    .service-block-six .inner-box:hover .border-one{
        width:100%;
        height:100%;
        display:block;
    }

    .service-block-six .inner-box .border-two{
        position:absolute;
        right:0px;
        bottom:0px;
        width:40px;
        height:40px;
        transition: all 600ms ease;
        -webkit-transition: all 600ms ease;
        -ms-transition: all 600ms ease;
        -o-transition: all 600ms ease;
        -moz-transition: all 600ms ease;
    }

    .service-block-six .inner-box .border-two:before{
        position:absolute;
        content:'';
        right:0px;
        bottom:0px;
        width:100%;
        height:1px;
        background-color:#004cda;
    }

    .service-block-six .inner-box .border-two:after{
        position:absolute;
        content:'';
        right:0px;
        top:0px;
        width:1px;
        height:100%;
        background-color:#004cda;
    }

    .service-block-six .inner-box:hover .border-two{
        width:100%;
        height:100%;
        display:block;
    }

    .service-block-six .inner-box:hover .border-two:before,
    .service-block-six .inner-box:hover .border-two:after{

    }

    .service-block-six .inner-box .icon-box{
        position:relative;
        width:80px;
        height:80px;
        color:#9c9c9c;
        font-size:40px;
        line-height:80px;
        border-radius:50px;
        margin:0 auto;
        border:2px dashed #cfcfcf;
        transition: all 300ms ease;
        -webkit-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
    }

    .service-block-six .inner-box:hover .icon-box{
        border-color:#004cda;
    }

    .service-block-six .inner-box h3{
        position:relative;
        color:#222222;
        font-size:20px;
        font-weight:700;
        line-height:1.3em;
        margin-top:25px;
    }

    .service-block-six .inner-box h3 a{
        position:relative;
        color:#222222;
        transition: all 300ms ease;
        -webkit-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
    }

    /***

====================================================================
	Department Section
====================================================================

***/

    .departments-section{
        position:relative;
        padding:100px 0px 70px;
    }

    /***

====================================================================
	Doctor Tabs Style
====================================================================

***/

    .departments-info-tabs{
        position:relative;
    }

    .departments-info-tabs .departments-tabs{
        position:relative;
    }

    .departments-info-tabs .departments-tabs .tab-btns{
        position:relative;
        margin-bottom:110px;
        border-bottom:1px solid #dddddd;
    }

    .departments-info-tabs .departments-tabs .tab-btns .tab-btn{
        position:relative;
        top:1px;
        display:block;
        float:left;
        font-size:16px;
        color:#004cda;
        font-weight:600;
        line-height:24px;
        cursor:pointer;
        width:16.666%;
        text-align:center;
        letter-spacing:1px;
        padding:35px 15px 30px;
        transition:all 500ms ease;
        font-family: 'Lora', serif;
        text-transform:capitalize;
        background-color:none;
        border-top:2px solid transparent;
        border-bottom:2px solid transparent;
    }

    .departments-info-tabs .departments-tabs .tab-btns .tab-btn:before{
        position:absolute;
        content:'';
        left:50%;
        bottom:-11px;
        opacity:0;
        transition: all 300ms ease;
        -webkit-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
        border-left: 5px solid transparent;
        border-right: 5px solid transparent;
        border-top: 10px solid #004cda;
    }

    .departments-info-tabs .departments-tabs .tab-btns .tab-btn.active-btn::before,
    .departments-info-tabs .departments-tabs .tab-btns .tab-btn:hover::before{
        opacity:1;
    }

    .departments-info-tabs .departments-tabs .tab-btns .tab-btn .icon{
        position:relative;
        display:block;
        font-size:50px;
        font-weight:400;
        margin-bottom:20px;
    }

    .departments-info-tabs .departments-tabs .tab-btns .tab-btn.active-btn .icon,
    .departments-info-tabs .departments-tabs .tab-btns .tab-btn:hover .icon{
        color:#004cda;
    }

    .departments-info-tabs .departments-tabs .tab-btns .tab-btn:hover,
    .departments-info-tabs .departments-tabs .tab-btns .tab-btn.active-btn{
        color:#222222;
        border-top-color:#222222;
        border-bottom-color:#004cda;
        background-color:rgba(0,76,218,0.05);
    }

    .departments-info-tabs .departments-tabs .tabs-content{
        position:relative;
    }

    .departments-info-tabs .departments-tabs .tabs-content .tab{
        position:relative;
        display:none;
    }

    .departments-info-tabs .departments-tabs .tabs-content .tab.active-tab{
        display:block;
    }

    .departments-info-tabs .departments-tabs .tabs-content .gallery-column{
        position:relative;
        margin-bottom:40px;
    }

    .departments-info-tabs .departments-tabs .tabs-content .gallery-column .row{
        margin:0px -10px;
    }

    .departments-info-tabs .departments-tabs .tabs-content .gallery-column .row .column{
        padding:0px 10px;
    }

    .departments-info-tabs .departments-tabs .tabs-content .gallery-column .image{
        position:relative;
        margin-bottom:20px;
    }

    .departments-info-tabs .departments-tabs .tabs-content .gallery-column .image img{
        position:relative;
        width:100%;
        display:block;
    }

    .departments-info-tabs .departments-tabs .tabs-content .content-column{
        position:relative;
    }

    .departments-info-tabs .departments-tabs .tabs-content .content-column .inner-column{
        position:relative;
    }

    .departments-info-tabs .departments-tabs .tabs-content .content-column .inner-column h2{
        position:relative;
        color:#222222;
        font-size:30px;
        font-weight:700;
        line-height:1.3em;
    }

    .departments-info-tabs .departments-tabs .tabs-content .content-column .inner-column .bold-text{
        position:relative;
        color:#004cda;
        font-size:16px;
        font-weight:400;
        line-height:1.9em;
        margin:15px 0px;
    }

    .departments-info-tabs .departments-tabs .tabs-content .content-column .inner-column .text{
        position:relative;
        color:#777777;
        font-size:14px;
        font-weight:400;
        line-height:2.2em;
        margin-bottom:50px;
    }

    .color-palate {
        display: none;
    }

</style>
<!--Page Title-->



    <section class="page-title" style="background-image:url(images/background/7.jpg);">
        <div class="auto-container">
            <h1>Dr. Detail For MediTech</h1>
			<div class="text">What We Actually Do?</div>
			<ul class="bread-crumb clearfix">
				<li><a href="index.html"><span class="fas fa-home"></span> Home </a></li>
				<li>Doctor Detail</li>
			</ul>
        </div>
    </section>
    <!--End Page Title-->

	<!-- Doctor Detail Section -->
    <section class="doctor-detail">
        <div class="auto-container">
            <!-- Upper Box -->
            <div class="upper-box">
                <div class="row clearfix">
                    <div class="image-box col-lg-4 col-md-12 col-sm-12">

                    </div>

                    <div class="detail-column col-lg-8 col-md-12 col-sm-12">
                        <div class="inner-box">
                            <div class="info-header">
                                <p>Provide Comprehensive Quality Care</p>
                                <div class="image" style="width: 150px;height: 150px" >
                                    @if($doctor->image)
                                        <img src="{{asset('Dashboard/img/products/'.$doctor->image->filename)}}"
                                             height="150px" width="150px" alt="">

                                    @else
                                        <img src="{{asset('Dashboard/img/doctor_default.png')}}" height="150px"
                                             width="150px" alt="">
                                    @endif
                                </div>
                                <h3>I‘m Dr.   {{ $doctor['name']  }}</h3>
                                <span class="designation">{{$doctor->section->name}}
                                </span>
                            </div>
                            <ul class="info-list">
                                <li>
                                    <strong>Expertise</strong>
                                    <p>{{$doctor->section->name_en}}</p>
                                </li>
                                <li>
                                    <strong>Education</strong>
                                    <p>Doctor of Medicine, University of Texas, USA (1990) Medical Orientation Program, St. Louis University (St. Louis, Missouri 1996)</p>
                                </li>
                                <li>
                                    <strong>Experience</strong>
                                    <p>15 years of Experience in Medicine</p>
                                </li>
                                <li>
                                    <strong>Profession</strong>
                                    <p>MD Dean and Executive Vice President for Medical Affairs School of Medicine and Graduate School of Biomedical Sciences University of Texas Health Science Center at San Antonio</p>
                                </li>
                            </ul>
                        </div>
                    </div>



                </div>
            </div>

            <!-- Lower Content -->
            <div class="lower-content">
                <div class="row clearfix">

					<!-- Form Column -->
                    <div class="form-column col-lg-8 col-md-12 col-sm-12">
                        <div class="inner-box">
                            <div class="appointment-form">
								<div class="sec-title centered">
									<h2>Appointment Form</h2>
									<p>Get to Book Your Appointment Now</p>
								</div>

                                <form method="post" action="appointment.html">
                                    <div class="row clearfix">
                                        <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                            <input type="text" name="username" placeholder="Name" required="">
                                            <span class="icon fa fa-user"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                            <input type="email" name="email" placeholder="Email" required="">
                                            <span class="icon fa fa-envelope"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                            <input type="tel" name="phone" placeholder="Phone No" required="">
                                            <span class="icon fas fa-phone"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                            <select class="custom-select-box">
                                                <option>Cardiology Department</option>
                                                <option>Neurology Department</option>
                                                <option>Urology Department</option>
                                                <option>Gynecological Conditions</option>
                                                <option>Pediatric Department</option>
                                                <option>Laboratory Department</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                            <input type="text" name="day" placeholder="Day">
                                            <span class="icon fa fa-calendar"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                            <input type="text" name="time" placeholder="Time" class="">
                                            <span class="icon far fa-clock"></span>
                                        </div>

                                        <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                            <textarea name="message" placeholder="Message"></textarea>
                                        </div>

                                        <div class="col-md-12 col-sm-12 col-xs-12 form-group text-center">
                                            <button class="theme-btn btn-style-two" type="submit" name="submit-form"><span class="txt">Book Appointment</span></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Info Column -->
                    <div class="info-column col-lg-4 col-md-12 col-sm-12">
                        <div class="inner-box">
                            <ul class="contact-list">
                                <li><span>E-mail:</span> example@company.com</li>
                                <li><span>Phone: </span> +000 000 0000</li>
                                <li><span>Timming:</span> 9:00am -5:00pm</li>
								<li class="clearfix">
									<a href="#" class="clearfix theme-btn btn-style-two"><span class="txt btn-txt">On Vacation</span></a>
									<span class="pull-right time">12:00pm -3:00pm</span>
								</li>
                            </ul>

                            <ul class="social-icon-one">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            </ul>

                            <div class="timetable">
                                <h3><small>Check Our</small> Weekly Timetable</h3>
                                <p>Suspendisse potenti. Maecenas dapibus ac tellus sed pulvinar. Vestibulum bib volutpat accumsan non laoreet nulla luctus...</p>
                                <ul>
                                    <li>Monday - Friday <span>8.00 - 18.00</span></li>
                                    <li>Saturday <span>9.00 - 16.00</span></li>
                                    <li>Sunday <span>9.00 - 16.00</span></li>
                                </ul>
                                <a href="#" class="theme-btn doctor-btn"><i class="fa fa-user-md"></i> See Doctors Time Table</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Doctor Detail Section -->

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

