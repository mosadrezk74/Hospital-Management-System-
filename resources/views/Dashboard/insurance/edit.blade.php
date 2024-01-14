@extends('Dashboard.layouts.master')
@section('css')

    <!--Internal   Notify -->
    <link href="{{ URL::asset('Admin/assets/plugins/notify/css/notifIt.css') }}" rel="stylesheet"/>
@endsection
@section('title')
    {{trans('insurance.edit_Insurance')}}
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{trans('main-sidebar_trans.Services')}}</h4><span
                    class="text-muted mt-1 tx-13 mr-2 mb-0">/ {{trans('insurance.Insurance')}}</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">

                    <form action="{{ route('Insurances.update' , [$insurance->id]) }}" method="POST"
                          class="form bg-white p-6 border-1" >

                        {{ method_field('patch') }}
                        {{ csrf_field() }}
                        @csrf
                        <input type="hidden" name="id" value="{{$insurance->id}}">

                        <div class="row">

                            <div class="col">
                                <label>{{trans('insurance.Company_code')}}</label>
                                <input type="text" name="insurance_code" value="{{$insurance->insurance_code}}"
                                       class="form-control @error('insurance_code') is-invalid @enderror">
                                @error('insurance_code')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col">
                                <label>{{trans('insurance.Company_name')}}</label>
                                <input type="text" name="name" value="{{$insurance->name}}"
                                       class="form-control @error('name') is-invalid @enderror">
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>

                        <br>

                        <div class="row">

                            <div class="col">
                                <label>{{trans('insurance.discount_percentage')}} %</label>
                                <input type="number" name="discount_percentage" value="{{$insurance->discount_percentage}}"
                                       class="form-control @error ('discount_percentage') is-invalid @enderror">
                                @error('discount_percentage')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col">
                                <label>{{trans('insurance.Insurance_bearing_percentage')}} %</label>
                                <input type="number" name="Company_rate"
                                    value="{{$insurance->Company_rate}}"  class="form-control @error ('Company_rate') is-invalid @enderror">
                                @error('Company_rate')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col">
                                <label>{{trans('insurance.notes')}}</label>
                                <textarea rows="5" cols="10" class="form-control"
                                          name="notes">{{$insurance->notes}}</textarea>
                            </div>
                        </div>

                        <br>

                        <div class="col-md-11 mg-t-5 mg-md-t-0">
                            <div class="form-group">
                                <select class="form-control" id="status" name="status" required>
                                    <option value="" selected disabled>--{{trans('doctors.Choose')}}--</option>
                                    <option value="1">{{trans('doctors.Enabled')}}</option>
                                    <option value="0">{{trans('doctors.Not_enabled')}}</option>
                                </select>
                            </div>

                        </div>

                        <br>

                        <div class="row">
                            <div class="col">
                                <button class="btn btn-success">{{trans('insurance.save')}}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection
@section('js')
    <!--Internal  Notify js -->
    <script src="{{URL::asset('Admin/assets/plugins/notify/js/notifIt.js')}}"></script>
    <script src="{{URL::asset('Admin/assets/plugins/notify/js/notifit-custom.js')}}"></script>
@endsection
