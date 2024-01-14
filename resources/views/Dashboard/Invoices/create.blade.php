@extends('Dashboard.layouts.master')
@section('css')
@endsection
@section('title')
    فاتورة خدمة مفردة
@stop
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الفواتير</h4><span
                    class="text-muted mt-1 tx-13 mr-2 mb-0">/  فاتورة خدمة مفردة</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection

@section('content')
    <div>

    <form  autocomplete="off">
                @csrf
                <div class="row">
                    <div class="col">
                        <label>اسم المريض</label>

                        <select  class="form-control" required>
                            <option value=""  >-- اختار من القائمة --</option>
                            @foreach($patients as $patient)
                                <option value="{{$patient->id}}">{{$patient->name}}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="col">
                        <label>اسم الدكتور</label>
                        <select  class="form-control"  id="exampleFormControlSelect1" required>
                            <option value="" >-- اختار من القائمة --</option>
                            @foreach($doctors as $doctor)
                                <option value="{{$doctor->id}}">{{$doctor->name}}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="col">
                        <label>القسم</label>
                        <input type="text" class="form-control" readonly >
                    </div>

                    <div class="col">
                        <label>نوع الفاتورة</label>
                        <select  class="form-control">
                            <option value="" >-- اختار من القائمة --</option>
                            <option value="1">نقدي</option>
                            <option value="2">اجل</option>
                        </select>
                    </div>


                </div><br>
        <?php

        $tax=0;
        $taxRate=17;


        ?>

                <div class="row row-sm">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header pb-0">
                                <div class="d-flex justify-content-between">
                                    <h4 class="card-title mg-b-0"></h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped mg-b-0 text-md-nowrap" style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>اسم الخدمة</th>
                                            <th>سعر الخدمة</th>
                                            <th>قيمة الخصم</th>
                                            <th>نسبة الضريبة</th>
                                            <th>قيمة الضريبة</th>
                                            <th>الاجمالي مع الضريبة</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>
                                                <select class="form-control"  id="exampleFormControlSelect1">
                                                    <option value="">-- اختار الخدمة --</option>
                                                    @foreach($services as $service)
                                                        <option value="{{$service->id}}">{{$service->name}}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td><input  type="text" class="form-control" readonly></td>
                                            <td><input  type="text" class="form-control"></td>
                                            <th><input  type="text" class="form-control"  value="{{$tax}}"></th>
                                            <td><input  type="text" class="form-control"  readonly value="{{$taxRate}}" ></td>
                                            <td><input  type="text" class="form-control" readonly ></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div><!-- bd -->
                            </div><!-- bd -->
                        </div><!-- bd -->
                    </div>
                </div>

                <input class="btn btn-outline-success" type="submit" value="تاكيد البيانات">
            </form>

{{--    @endif--}}


</div>
@endsection
@section('js')

@endsection


