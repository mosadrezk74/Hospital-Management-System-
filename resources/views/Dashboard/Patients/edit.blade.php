@extends('Dashboard.layouts.master')
@section('css')
    <!--Internal   Notify -->
    <link href="{{URL::asset('dashboard/plugins/notify/css/notifIt.css')}}" rel="stylesheet"/>
@endsection
@section('title')
   تعديل بيانات مريض
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">المرضي</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/  تعديل بيانات مريض</span>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
@include('Dashboard.messages_alert')
<!-- row -->
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('Patients.update' , [$patient->id]) }}"
                      method="POST"
                      class="form bg-white p-6 border-1" >
                    @method('PUT')
                        @csrf
                    <div class="row">
                        <div class="col-3">
                            <label>اسم المريض</label>
                            <input type="text" name="name"  value="{{$patient->name}}" class="form-control @error('name') is-invalid @enderror " required>
                            <input type="hidden" name="id" value="{{$patient->id}}">
                        </div>

                        <div class="col">
                            <label>البريد الالكتروني</label>
                            <input type="email" name="email"  value="{{$patient->email}}" class="form-control @error('email') is-invalid @enderror" required>
                        </div>


                        <div class="col">
                            <label>تاريخ الميلاد</label>
                            <input class="form-control fc-datepicker" value="{{$patient->Date_Birth}}" name="Date_Birth" type="text" required>
                        </div>

                    </div>
                    <br>

                    <div class="row">
                        <div class="col-3">
                            <label>رقم الهاتف</label>
                            <input type="number" name="Phone"  value="{{$patient->Phone}}" class="form-control @error('Phone') is-invalid @enderror" required>
                        </div>

                        <div class="col">
                            <label>الجنس</label>
                            <select class="form-control" name="Gender" required>
                                <option value="1" {{$patient->Gender == 1 ? 'selected':''}}>ذكر</option>
                                <option value="2" {{$patient->Gender == 2 ? 'selected':''}}>انثي</option>
                            </select>
                        </div>

                        <div class="col">
                            <label>فصلية الدم</label>
                            <select class="form-control" name="Blood_Group" required>
                                <option value="O-"{{$patient->Blood_Group == "O-" ? 'selected':''}} >O-</option>
                                <option value="O+" {{$patient->Blood_Group == "O+" ? 'selected':''}}>O+</option>
                                <option value="A+" {{$patient->Blood_Group == "A+" ? 'selected':''}}>A+</option>
                                <option value="A-" {{$patient->Blood_Group == "A-" ? 'selected':''}}>A-</option>
                                <option value="B+" {{$patient->Blood_Group == "B+" ? 'selected':''}}>B+</option>
                                <option value="B-" {{$patient->Blood_Group == "B-" ? 'selected':''}}>B-</option>
                                <option value="AB+"{{$patient->Blood_Group == "AB+" ? 'selected':''}}>AB+</option>
                                <option value="AB-"{{$patient->Blood_Group == "AB-" ? 'selected':''}}>AB-</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label>العنوان</label>
                            <textarea rows="5" cols="10" class="form-control" name="Address">{{$patient->Address}}</textarea>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col">
                            <button class="btn btn-success">حفظ البيانات</button>
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

    <!--Internal  Datepicker js -->
    <script src="{{ URL::asset('dashboard/plugins/jquery-ui/ui/widgets/datepicker.js') }}"></script>
    <script>
        var date = $('.fc-datepicker').datepicker({
            dateFormat: 'yy-mm-dd'
        }).val();
    </script>
    <script src="{{URL::asset('dashboard/plugins/notify/js/notifIt.js')}}"></script>
    <script src="{{URL::asset('/plugins/notify/js/notifit-custom.js')}}"></script>
@endsection
