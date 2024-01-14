@extends('Dashboard.layouts.master')
@section('css')
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">المنتجات</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0"> / عرض المنتجات</span>
						</div>
					</div>
                </div>

				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row opened -->
<?php
use PharIo\Manifest\Url;

?>
					<div class="col-xl-12">
						<div class="card">
                            <div class="card-header pb-0">
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-primary"   href="{{ route('Pharmacy.create')  }}">
                                        اضافة منتج جديد
                                    </a>
                                </div>
                            </div>
							<div class="card-header pb-0">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mg-b-0">عرض المنتجات</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-hover mb-0 text-md-nowrap">
										<thead>
											<tr>
												<th>ثورة  المنتج</th>
												<th>اسم المنتج</th>
												<th>سعر المنتج</th>
												<th>تفاصيل المنتج</th>
												<th>عمليات</th>
											</tr>
										</thead>
										<tbody>
                                        @foreach($products as $product)

											<tr>
                                                <td>
                                                    @if($product->image)
                                                        <img src="{{asset('Dashboard/img/products/'.$product->image->filename)}}"
                                                             height="50px" width="50px" alt="">

                                                    @else
                                                        <img src="{{asset('Dashboard/img/doctor_default.png')}}" height="50px"
                                                             width="50px" alt="">
                                                    @endif
                                                </td>
												<td>{{$product->name}}</td>
												<td>{{$product->price}}</td>
												<td>{{$product->des}}</td>

												<td>$320,800</td>
											</tr>
                                        @endforeach


										</tbody>
									</table>
								</div>
							</div>
						</div>
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
@endsection
