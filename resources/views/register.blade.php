@extends('layout')
@section('title', ' إنشاء حساب')
@section('Page')
<section >
<div class="container" style="margin-bottom: 20px;">
<div class="row">
<div class="col-lg-6 md-6" style="background-color: #F1F6F7;">
<div class="login_form_inner register_form_inner">
<h3 style="color: cornflowerblue; font-weight: bold;">إنشاء حساب</h3>
@if (Session::has('message'))
<div class="alert alert-info">
	<span> {{Session::get('message')}} </span>
</div>
@endif
<form class="row login_form" action="{{ route('create') }}" method="POST" id="register_form" >
	@csrf
<div class="col-md-12 form-group">
<input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="أسم المستخدم" unique>
@error('name')
<span class="text-danger">
أسم المستخدم فارغ الرجاء إدخال أسم المستخدم
</span>
@enderror
</div>
<div class="col-md-12 form-group">
<input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Email Address">
@if ($errors->has('email'))
<span class="text-danger">{{ $errors->First('email') }}</span>
@endif
</div>
<div class="col-md-12 form-group">
<input type="password" class="form-control" id="password" style="font-weight: bold; color:black;" name="password" value="{{ old('password') }}" placeholder="كلمة المرور" >
@error('password')
<span class="text-danger">
كلمة المرور فارغة الرجاء إدخال كلمة المرور
</span>
@enderror
</div>
<div class="col-md-12 form-group">
<input type="password" class="form-control" id="confirmPassword" style="font-weight: bold; color:black;" name="confirmPassword" placeholder="تأكيد كلمة المرور">
@error('confirmPassword')
<span class="text-danger">
الرجاء تأكيد كلمة المرور
</span>
@enderror
</div>
<div class="col-md-12 form-group" >
<button type="submit" value="submit" class="btn btn-outline-info btn-lg w-100">إنشاء</button>
</div>
</form>
</div>
</div>
</div>
</div>


</section>
@endsection