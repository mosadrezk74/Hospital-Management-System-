@extends('Dashboard/layouts.master')
@section('css')
@endsection
@section('page-header')

    <style>
        .row{
             padding: 100px;
        }
        option{
            width: 100%;

        }
    </style>
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Pages</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Empty</span>
						</div>
					</div>
					<div class="d-flex my-xl-auto right-content">
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-info btn-icon ml-2"><i class="mdi mdi-filter-variant"></i></button>
						</div>
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-danger btn-icon ml-2"><i class="mdi mdi-star"></i></button>
						</div>
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-warning  btn-icon ml-2"><i class="mdi mdi-refresh"></i></button>
						</div>
						<div class="mb-3 mb-xl-0">
							<div class="btn-group dropdown">
								<button type="button" class="btn btn-primary">14 Aug 2019</button>
								<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdownMenuDate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="sr-only">Toggle Dropdown</span>
								</button>
								<div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuDate" data-x-placement="bottom-end">
									<a class="dropdown-item" href="#">2015</a>
									<a class="dropdown-item" href="#">2016</a>
									<a class="dropdown-item" href="#">2017</a>
									<a class="dropdown-item" href="#">2018</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row">

                    <form action="" method="post" autocomplete="off">
                        {{ csrf_field() }}
                        <div class="modal-body">

                            <div class="form-group">
                                <label for="status">{{trans('doctors.Status')}}</label>
                                <select class="form-control" id="status" name="status" required  >
                                    <option value="" selected disabled>--{{trans('doctors.Choose')}}--</option>
                                    <option value="1">{{trans('doctors.Enabled')}}</option>
                                    <option value="0">{{trans('doctors.Not_enabled')}}</option>
                                </select>
                            </div>

                            <input type="hidden" name="id" value= ">
                        </div>
                        <div class="modal-footer">
                             <button type="submit" class="btn btn-primary">{{trans('Dashboard/sections_trans.submit')}}</button>
                        </div>
                    </form>




				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
@endsection
