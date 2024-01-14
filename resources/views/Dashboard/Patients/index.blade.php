@extends('Dashboard.layouts.master')
@section('css')
    <link href="{{URL::asset('dashboard/plugins/notify/css/notifIt.css')}}" rel="stylesheet"/>
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">المرضي</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ قائمة المرضي</span>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
    <style>
        .NNN{
            display: flex;
            /*margin: 10px;*/
        }

        .NNN form input{
            margin: 10px;
        }


    </style>

    @include('Dashboard.messages_alert')
				<!-- row opened -->
				<div class="row row-sm">
					<!--div-->
					<div class="col-xl-12">
						<div class="card">
							<div class="card-header pb-0">
								<div class="d-flex justify-content-between">
                                    <a href="{{route('Patients.create')}}" class="btn btn-primary">اضافة مريض جديد</a>
								</div>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table text-md-nowrap" id="example1">
										<thead>
											<tr>
												<th>#</th>
 												<th>اسم المريض</th>
												<th >البريد الالكتروني</th>
												<th>تاريخ الميلاد</th>
												<th>رقم الهاتف</th>
												<th>الجنس</th>
                                                <th >فصلية الدم</th>
                                                <th >العنوان</th>
                                                <th>العمليات</th>
											</tr>
										</thead>
										<tbody>
                                        @foreach($patients as $patient)
											<tr>
                                                <td>{{$loop->iteration}}</td>

                                                <td><a href="{{ route('Patients.show' , $patient->id ) }}">{{$patient->name}}</a></td>
                                                <td>{{$patient->email}}</td>
                                                <td>{{$patient->Date_Birth}}</td>
                                                <td>{{$patient->Phone}}</td>
                                                <td>{{$patient->Gender == 1 ? 'ذكر' :'انثي'}}</td>
                                                <td>{{$patient->Blood_Group}}</td>
                                                <td>{{$patient->Address}}</td>
                                                <td>
                                                    <div class="NNN">

                                                        <a href="{{route('Patients.edit',$patient->id)}}" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>


                                                        <form action="{{ route('Patients.destroy' , $patient ->id ) }}" method="post">
                                                            @csrf
                                                            @method('DELETE')

                                                            <button class="btn btn-sm btn-danger" type="submit"   data-effect="effect-scale" data-toggle="modal"><i class="fas fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </div>


                                                </td>
											</tr>
                                           @include('Dashboard.Patients.Deleted')
                                        @endforeach
										</tbody>
									</table>
								</div>
							</div><!-- bd -->
						</div><!-- bd -->
					</div>
					<!--/div-->
				</div>
				<!-- /row -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
    <!--Internal  Notify js -->
    <script src="{{URL::asset('dashboard/plugins/notify/js/notifIt.js')}}"></script>
    <script src="{{URL::asset('/plugins/notify/js/notifit-custom.js')}}"></script>
@endsection
