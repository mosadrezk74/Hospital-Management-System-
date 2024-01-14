@extends('Dashboard.layouts.master')
@section('css')
     <link rel="stylesheet" href="{{ URL::asset('Dashboard/plugins/sumoselect/sumoselect-rtl.css') }}">
    <link href="{{URL::asset('dashboard/plugins/notify/css/notifIt.css')}}" rel="stylesheet"/>

     <link href="{{URL::asset('Dashboard/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
     <link href="{{URL::asset('Dashboard/plugins/amazeui-datetimepicker/css/amazeui.datetimepicker.css')}}" rel="stylesheet">
    <link href="{{URL::asset('Dashboard/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.css')}}" rel="stylesheet">
    <link href="{{URL::asset('Dashboard/plugins/pickerjs/picker.min.css')}}" rel="stylesheet">
     <link href="{{URL::asset('Dashboard/plugins/spectrum-colorpicker/spectrum.css')}}" rel="stylesheet">

    @section('title')
        حجز معاد
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto"> {{trans('main-sidebar_trans.doctors')}}</h4><span
                    class="text-muted mt-1 tx-13 mr-2 mb-0">/
              أضافة معياد</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')

    @include('Dashboard.messages_alert')
    <div style="background-color: white">
        <!-- row -->
        <div class="row" >
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body" >
                        <form action="{{ route('Bookings.store') }}"  method="post" autocomplete="off" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="pd-30 pd-sm-40 bg-white-200">

                                <div class="row row-xs align-items-center mg-b-20">
                                    <div class="col-md-1">
                                        <label for="exampleInputEmail1">
                                            اسم المريض</label>
                                    </div>
                                    <div class="col-md-11 mg-t-5 mg-md-t-0">
                                        <input class="form-control"  name="name" type="text" autofocus>
                                    </div>
                                </div>

                                <div class="row row-xs align-items-center mg-b-20">
                                    <div class="col-md-1">
                                        <label for="exampleInputEmail1">
                                          رقم المريض</label>
                                    </div>
                                    <div class="col-md-11 mg-t-5 mg-md-t-0">
                                        <input class="form-control" name="phone" type="tel" maxlength="11">

                                    </div>
                                </div>
                                <div class="row row-xs align-items-center mg-b-20">
                                    <div class="col-md-1">
                                        <label for="exampleInputEmail1">
                                            اسم الدكتور</label>
                                    </div>

                                    <div class="col-md-11 mg-t-5 mg-md-t-0">
                                        <select name="doctor_id" class="form-control SlectBox">
                                            <option value="" selected disabled>------</option>
                                            @foreach($doctors as $doctor)
                                                <option value="{{$doctor->id}}">{{$doctor->name}}</option>

                                            @endforeach
                                        </select>
                                    </div>


                                </div>

                                <div class="row row-xs align-items-center mg-b-20">
                                    <div class="col-md-1">
                                        <label for="exampleInputEmail1">
                                           الميعاد</label>
                                    </div>
                                    <div class="col-md-11 mg-t-5 mg-md-t-0">
                                        <input class="form-control" name="appointment" type="text"   >
                                    </div>
                                </div>

                                <button type="submit"
                                        class="btn btn-main-primary pd-x-30 mg-r-5 mg-t-5">
                                    إضافة معياد</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /row -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection
@section('js')

    <!--Internal  Form-elements js-->
    <script src="{{ URL::asset('Dashboard/js/select2.js') }}"></script>
    <script src="{{ URL::asset('Dashboard/js/advanced-form-elements.js') }}"></script>

    <!--Internal Sumoselect js-->
    <script src="{{ URL::asset('Dashboard/plugins/sumoselect/jquery.sumoselect.js') }}"></script>
    <!--Internal  Notify js -->
    <script src="{{URL::asset('dashboard/plugins/notify/js/notifIt.js')}}"></script>
    <script src="{{URL::asset('/plugins/notify/js/notifit-custom.js')}}"></script>


    <!--Internal  Datepicker js -->
    <script src="{{URL::asset('dashboard/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
    <!--Internal  jquery.maskedinput js -->
    <script src="{{URL::asset('dashboard/plugins/jquery.maskedinput/jquery.maskedinput.js')}}"></script>
    <!--Internal  spectrum-colorpicker js -->
    <script src="{{URL::asset('dashboard/plugins/spectrum-colorpicker/spectrum.js')}}"></script>
    <!-- Internal Select2.min js -->
    <script src="{{URL::asset('dashboard/plugins/select2/js/select2.min.js')}}"></script>
    <!--Internal Ion.rangeSlider.min js -->
    <script src="{{URL::asset('dashboard/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>
    <!--Internal  jquery-simple-datetimepicker js -->
    <script src="{{URL::asset('dashboard/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js')}}"></script>
    <!-- Ionicons js -->
    <script src="{{URL::asset('dashboard/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.js')}}"></script>
    <!--Internal  pickerjs js -->
    <script src="{{URL::asset('dashboard/plugins/pickerjs/picker.min.js')}}"></script>
    <!-- Internal form-elements js -->
    <script src="{{URL::asset('dashboard/js/form-elements.js')}}"></script>


@endsection
