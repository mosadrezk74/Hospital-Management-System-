@extends('Dashboard.layouts.master')

@section('title')
    المواعيد
@stop

@section('css')
    <!-- Internal Data table css -->
    <link href="{{URL::asset('Dashboard/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('Dashboard/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('Dashboard/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('Dashboard/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('Dashboard/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('Dashboard/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
    <!--Internal   Notify -->
    <link href="{{URL::asset('dashboard/plugins/notify/css/notifIt.css')}}" rel="stylesheet"/>
@endsection

@section('page-header')


    <style>
        .NNN{
            display: flex;
            /*margin: 10px;*/
        }
        .NNN a{
            /*padding: 10px;*/
            margin: 10px;

        }
        .NNN form input{
            margin: 10px;
         }


    </style>
    @section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">المواعيد</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ {{trans('Dashboard/main-sidebar_trans.view_all')}}</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
				<!-- breadcrumb -->
@endsection
@section('content')
    @include('Dashboard.Sections.messages_alert')

    <!-- row -->

                <!-- row opened -->
                <div class="row row-sm">
                    <div class="col-xl-12">
                        <div class="card"  >
                            <div class="card-header pb-0">
                                <div class="d-flex justify-content-between">
                                    <a type="button" class="btn btn-dark"   href="{{ route('Bookings.index')  }}"  >
                                        اضافة ميعاد
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-md-nowrap" id="example1">
                                        <thead>
                                        <tr>
                                            <th class="wd-15p border-bottom-0">#</th>
                                            <th class="wd-15p border-bottom-0">اسم المريض </th>
                                            <th class="wd-15p border-bottom-0">الميعاد</th>
                                            <th class="wd-15p border-bottom-0">اسم الدكــتور</th>
                                            <th class="wd-15p border-bottom-0">رقم الهاتف</th>
                                            <th class="wd-15p border-bottom-0">العمليات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                @foreach($booking as  $book)

                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{$book->name}}</td>
                                                <td>{{$book->appointment}}</td>
                                                <td>{{$book->doctor->name}}</td>
                                                <td>{{$book->phone}}</td>
{{--                                                <td>{{ $book->created_at->diffForHumans() }}</td>--}}
                                                <td>
                                                    <div class="NNN">
                                                        <a href="{{ route('Bookings.edit', $book->id) }}" class="modal-effect btn btn-sm btn-dark">Edit</a>
                                                        <form action="{{ route('Bookings.destroy', $book->id) }}" method="post" class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <input type="submit" value="Delete" class="modal-effect btn btn-sm btn-danger" data-effect="effect-scale">
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach


                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


				<!-- row closed -->

			<!-- Container closed -->

		<!-- main-content closed -->
@endsection
@section('js')
    <!-- Internal Data tables -->
    <!-- Internal Data tables -->
    <script src="{{URL::asset('Dashboard/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('Dashboard/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('Dashboard/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::asset('Dashboard/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('Dashboard/plugins/datatable/js/jquery.dataTables.js')}}"></script>
    <script src="{{URL::asset('Dashboard/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
    <script src="{{URL::asset('Dashboard/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{URL::asset('Dashboard/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{URL::asset('Dashboard/plugins/datatable/js/jszip.min.js')}}"></script>
    <script src="{{URL::asset('Dashboard/plugins/datatable/js/pdfmake.min.js')}}"></script>
    <script src="{{URL::asset('Dashboard/plugins/datatable/js/vfs_fonts.js')}}"></script>
    <script src="{{URL::asset('Dashboard/plugins/datatable/js/buttons.html5.min.js')}}"></script>
    <script src="{{URL::asset('Dashboard/plugins/datatable/js/buttons.print.min.js')}}"></script>
    <script src="{{URL::asset('Dashboard/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
    <script src="{{URL::asset('Dashboard/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::asset('Dashboard/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
    <!--Internal  Datatable js -->
    <script src="{{URL::asset('Dashboard/js/table-data.js')}}"></script>
    <!--Internal  Notify js -->
    <script src="{{URL::asset('dashboard/plugins/notify/js/notifIt.js')}}"></script>
    <script src="{{URL::asset('/plugins/notify/js/notifit-custom.js')}}"></script>

@endsection
