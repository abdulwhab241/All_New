@extends('layout')
@section('title', ' إنشاء حساب')
@section('Page')
<section>
{{-- <div class="container">
<form>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div> --}}

<div class="container">
    <div class="row">
        @if (Session::has('message'))
            <div class="alert alert-info">
                {{Session::get('message')}}
            </div>
        @endif
        {{-- <div class="col-lg-6">
            <div class="login_box_img">
                <div class="hover">
                    <h4> متجر أوول نيو ورك 🏬</h4>
                    <p>اطلب يصلك طلبك لباب بيتك (خدمة توصيل بصنعاء وجميع المحافظات)</p>
                    <a class="button button-account" href="{{ route('home.register') }}">إنشاء حساب</a>
                </div>
            </div>
        </div> --}}
        @if (isset(Auth::user()->name))
            <h6>Welcom {{ Auth::user()->name}}</h6>
        @endif
        <div class="col-lg-6" style="text-align: center;">
            <div class="login_form_inner">
                <h3>تسجيل الدخول</h3>
                <form  method="POST" action="{{ route('home.checkLogin') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12 form-group">
                        <input type="text"  class="form-control" id="name"  value="{{ old('name') }}" required name="name" placeholder="اسم المستخدم" >
                        @if ($errors->has('name'))
                            <span class="text-danger-50">{{ $errors->First('name') }}</span>
                        @endif
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="Password" style="font-weight: bold; color:black;" value="{{ old('password') }}" class="form-control" required id="Password" name="Password" placeholder="كلمة المرور">
                        {{-- @if ($errors->has('password'))
                        <span class="text-danger-50">{{ $errors->First('password') }}</span>
                    @endif --}}
                    </div>
                    <div class="col-md-12 form-group">
                        <button type="submit" value="submit" class="button button-login w-100">تسجيل</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<

</section>
@endsection