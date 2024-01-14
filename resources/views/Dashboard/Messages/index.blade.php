@extends('Dashboard.layouts.master')
@section('css')
@endsection
@section('page-header')
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
{{--###########################################################################--}}
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">Dashboard</div>

{{--                                    @if(Session::has('success'))--}}
{{--                                        <div class="col-12 alert alert-success justify-content-center d-flex">--}}
{{--                                            <p class="text-center" > {{Session::get('success')}}</p>--}}
{{--                                        </div>--}}
{{--                                    @endif--}}
                                    @if(isset($posts) && $posts -> count() > 0)
                                        @foreach($posts as $post)
                                            <div class="card-body">
                                                @if (session('status'))
                                                    <div class="alert alert-success" role="alert">
                                                        {{ session('status') }}
                                                    </div>
                                                @endif
                                                <h1> {{$post -> title}} - @if(Auth::id() == $post -> user -> id)   المالك @endif</h1>
                                                <br>
                                                {{$post -> content}}

                                                <br>
                                                <br>
                                                <h5>التعليقات</h5>
                                                @if($post -> comments() -> count() >0)
                                                    @foreach($post -> comments  as $_comment)
                                                        <p>{{$_comment -> comment}}</p>
                                                    @endforeach
                                                @endif
                                                <br><br>
                                                <form method="POST" action="{{route('comment.save')}}"
                                                      enctype="multipart/form-data">
                                                    @csrf

                                                    <input type="hidden" name="post_id" value="{{$post -> id}}">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="post_content">
                                                        @error('name_ar')
                                                        <small class="form-text text-danger">{{$message}}</small>
                                                        @enderror
                                                    </div>


                                                    @if(Auth::id() != $post -> user -> id)
                                                        <button type="submit" class="btn btn-primary">أضافه ردك</button>
                                                    @endif
                                                </form>


                                            </div>
                                        @endforeach
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>

				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
@endsection
