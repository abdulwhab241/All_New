@extends('layout')
@section('title', 'تسجيل الدخول')
@section('Page')
<section>
<div class="container" style="margin-bottom: 20px;">
    <div class="row">
        <div class="col-lg-6" style="background-color: #F1F6F7;">
            <div class="login_form_inner">
                <h3 style="color: cornflowerblue; font-weight: bold;">تسجيل الدخول</h3>
                @if (Session::has('message'))
                <div class="alert alert-info">
                    <span> {{Session::get('message')}} </span>
                </div>
                @endif
                <form  method="POST" action="{{ route('check') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12 form-group">
                        <input type="text"  class="form-control" id="name"  value="{{ old('name') }}"  name="name" placeholder="اسم المستخدم" >
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->First('name') }}</span>
                        @endif
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="Password" style="font-weight: bold; color:black;" value="{{ old('password') }}" class="form-control"  id="password" name="password" placeholder="كلمة المرور">
                        @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->First('password') }}</span>
                    @endif
                    </div>
                    <div class="col-md-12 form-group">
                        <button type="submit" value="submit" class="btn btn-outline-info btn-lg w-100">تسجيل</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</section>
@endsection