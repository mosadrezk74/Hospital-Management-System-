@extends('Dashboard/layouts.master')
@section('css')
@endsection
<style>
    label{
        padding:  5px;
        margin: 5px;
    }
</style>
@section('page-header')
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Pages</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Empty</span>
            </div>
        </div>
        <div class="d-flex my-xl-auto right-content">
            <div class="mb-3 mb-xl-0">
                <div class="btn-group dropdown">
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
@endsection


@section('content')
    <center>
<div class="OOO">
    <br>
    <br>

    <form action="{{ route('Sections.update' , [$section->id]) }}" method="POST" class="form bg-white p-6 border-1" >
        {{ method_field('patch') }}
        {{ csrf_field() }}
        @csrf

    <label for="exampleInputPassword1">{{trans('Dashboard/sections_trans.name_sections')}}</label>
    <input type="hidden" name="id" value="{{ $section->id }}">
    <label>
        <input type="text" name="name" value="{{$section->name}} " class="form-control">
    </label>
        <br>
        <label for="exampleInputPassword1">{{trans('Dashboard/sections_trans.name_section2')}}</label>
        <input type="hidden" name="id" value="{{ $section->id }}">
        <label>
            <input type="text" name="name2" value="{{$section->name_en}} " class="form-control">
        </label>

    <br>
    <br>

        <button type="submit" class="btn btn-primary">{{trans('Dashboard/sections_trans.submit')}}</button>

        <br>
        <br>
        <br>



    </form>
    </div>
    </center>



@endsection
