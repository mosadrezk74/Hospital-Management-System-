<!-- Back-to-top -->
<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>
<!-- JQuery min js -->
<script src="{{URL::asset('Dashboard/plugins/jquery/jquery.min.js')}}"></script>

{{--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"  ></script>--}}

<!-- Bootstrap Bundle js -->
<script src="{{URL::asset('Dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Ionicons js -->
<script src="{{URL::asset('Dashboard/plugins/ionicons/ionicons.js')}}"></script>
<!-- Moment js -->
<script src="{{URL::asset('Dashboard/plugins/moment/moment.js')}}"></script>

<!-- Rating js-->
<script src="{{URL::asset('Dashboard/plugins/rating/jquery.rating-stars.js')}}"></script>
<script src="{{URL::asset('Dashboard/plugins/rating/jquery.barrating.js')}}"></script>

<!--Internal  Perfect-scrollbar js -->
<script src="{{URL::asset('Dashboard/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{URL::asset('Dashboard/plugins/perfect-scrollbar/p-scroll.js')}}"></script>
<!--Internal Sparkline js -->
<script src="{{URL::asset('Dashboard/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
<!-- Custom Scroll bar Js-->
<script src="{{URL::asset('Dashboard/plugins/mscrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<!-- right-sidebar js -->
<script src="{{URL::asset('Dashboard/plugins/sidebar/sidebar-rtl.js')}}"></script>
<script src="{{URL::asset('Dashboard/plugins/sidebar/sidebar-custom.js')}}"></script>
<!-- Eva-icons js -->
<script src="{{URL::asset('Dashboard/js/eva-icons.min.js')}}"></script>
@yield('js')
<!-- Sticky js -->
<script src="{{URL::asset('Dashboard/js/sticky.js')}}"></script>
<!-- custom js -->
<script src="{{URL::asset('Dashboard/js/custom.js')}}"></script><!-- Left-menu js-->
<script src="{{URL::asset('Dashboard/plugins/side-menu/sidemenu.js')}}"></script>
<script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
<script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('bf45e2af9220c2d6cfa2', {
        cluster: 'mt1'
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
        alert(JSON.stringify(data));
    });
</script>
@livewireScripts
