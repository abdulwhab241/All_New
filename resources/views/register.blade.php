@extends('layout')
@section('title', ' إنشاء حساب')
@section('Page')
<section class="login_box_area section-margin">
<div class="container" style="margin-bottom: 20px;">
<div class="row">
	<div class="col-lg-6">
		<div class="login_box_img">
			<div class="hover">
				<h4>هل لديك بالفعل حساب؟</h4>
				<p>
					🏬 متجر أوول نيو ورك                         مكيفات _ دفايات _ سرويسات _ سخانات و غلايات ماء _ كاميرات  _ توربينات _  طباخات طاقة شمسية _ مساجات _ مستلزمات سيارات _ ادوات منزلية _ اكسسوارات _ لمبات انارة الشوارع 
				</p>
				<a class="button button-account" href="{{ route('home.login') }}">تسجيل الدخول </a>
			</div>
		</div>
	</div>
<div class="col-lg-6 md-6" style="background-color: #F1F6F7;">
<div class="login_form_inner register_form_inner">
<h3 style="color: cornflowerblue; font-weight: bold;">إنشاء حساب</h3>
@if (Session::has('message'))
<div class="alert alert-info">
	<span style="text-align: center; font-weight: bold;"> {{Session::get('message')}} </span>
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
@if ($errors->has('password'))
<span class="text-danger">{{ $errors->First('password') }}</span>
@endif
</div>
<div class="col-md-12 form-group">
<input type="password" class="form-control" id="confirmed" style="font-weight: bold; color:black;" name="confirmed" placeholder="تأكيد كلمة المرور">
@error('confirmed')
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