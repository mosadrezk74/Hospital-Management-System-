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

    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <a class="btn btn-primary pull-right" href="{{route( 'Invoices.create' )}}"  style="color: white" >اضافة فاتورة جديدة </a><br><br>

                    <table class="table text-md-nowrap" id="example1" data-page-length="50"style="text-align: center">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>اسم الخدمة</th>
                            <th>اسم المريض</th>
                            <th>تاريخ الفاتورة</th>
                            <th>اسم الدكتور</th>
                            <th>القسم</th>
                            <th>سعر الخدمة</th>
                            <th>قيمة الخصم</th>
                            <th>نسبة الضريبة</th>
                            <th>قيمة الضريبة</th>
                            <th>الاجمالي مع الضريبة</th>
                            <th>نوع الفاتورة</th>
                            <th>العمليات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($Invoices as $Invoice)
                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td>{{ $single_invoice->Service->name }}</td>
                                <td>{{ $single_invoice->Patient->name }}</td>
                                <td>{{ $single_invoice->invoice_date }}</td>
                                <td>{{ $single_invoice->Doctor->name }}</td>
                                <td>{{ $single_invoice->Section->name }}</td>
                                <td>{{ number_format($single_invoice->price, 2) }}</td>
                                <td>{{ number_format($single_invoice->discount_value, 2) }}</td>
                                <td>{{ $single_invoice->tax_rate }}%</td>
                                <td>{{ number_format($single_invoice->tax_value, 2) }}</td>
                                <td>{{ number_format($single_invoice->total_with_tax, 2) }}</td>
                                <td>{{ $single_invoice->type == 1 ? 'نقدي':'اجل' }}</td>
                                <td>
                                    <button  class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete_invoice"  ><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>

                        @endforeach
                    </table>
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
