@extends('layout')
@section('title', 'إتمام الطلب')
@section('Page')


<!--================Checkout Area =================-->
<section class="checkout_area section-margin--small">
    <div class="container">
        @if (Session::has('message'))
        <div class="alert alert-info">
        <span style="text-align: center; font-weight: bold;"><h4 style="text-align: center font-weight: bold; color:red;">{{Session::get('message')}}</h4>  </span>
        </div>
        @endif
        @if(count(get_cart()) > 0)
        <div class="billing_details">
            <div class="row">
                <div class="col-lg-8" style="background-color: #F1F6F7;">
                    <h3 style="margin-top: 20px;">تفاصيل الفاتورة</h3>
                    <form class="row contact_form" action="{{route('confirm')}}" method="POST" novalidate="novalidate">
                        <div class="col-md-6 form-group p_star">
                            <label style=" color:black; font-weight: bold; padding:5px; margin:5px;">الاسم الأول:</label>
                            <input type="text" class="form-control" id="first" name="name">
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <label style=" color:black; font-weight: bold; padding:5px; margin:5px;">الاسم الأخير:</label>
                            <input type="text" class="form-control" id="last" name="name">
                        </div>
                        <div class="col-md-12 form-group">
                            <label style=" color:black; font-weight: bold; padding:5px; margin:5px;">اسم الشركة (اختياري)</label>
                            <input type="text" class="form-control" id="company" name="company" >
                        </div>
                        <div class="col-md-12 form-group">
                            <label style=" color:black; font-weight: bold; padding:5px; margin:5px;">عنوان الشارع / الحي:</label>
                            <input type="text" class="form-control" id="number" name="address">
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <label style=" color:black; font-weight: bold; padding:5px; margin:5px;"> المدينة:</label>
                            <input type="text" class="form-control" id="email" name="city">
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <label style=" color:black; font-weight: bold; padding:5px; margin:5px;"> المنطقة:</label>
                            <input type="text" class="form-control" id="email" name="area">
                        </div>
                        <div class="col-md-12 form-group">
                            <label style=" color:black; font-weight: bold; padding:5px; margin:5px;"> الهاتف:</label>
                            <input type="text" class="form-control" id="email" name="phone">
                        </div>
                        <div class="col-md-12 form-group">
                            <label style=" color:black; font-weight: bold; padding:5px; margin:5px;"> البريد الإلكتروني:</label>
                            <input type="text" class="form-control" id="email" name="email">
                        </div>
                        <div class="col-md-12 form-group">
                            <label style=" color:black; font-weight: bold; padding:5px; margin:5px;"> ملاحظات الطلب (اختياري)</label>
                            <textarea class="form-control different-control w-100" name="notice" id="content" cols="20" rows="5" ></textarea>
                        </div>
                   
                </div>
                <div class="col-lg-4">
                    <div class="order_box">
                        <table class="table list">
                            <thead>
                                <th scope="col" style="width: 50%;">المنتج</th>
                                <th scope="col" style="width: 8%;"></th>
                                <th scope="col" style="width: 22%;">المجموع</th>
                            </thead>
                            <tbody>
                                @php $total = 0; @endphp
                                @if (get_cart())
                                @foreach (get_cart() as $cart)
                                    @php
                                        $sub_total = data_get($cart,"product.price") * data_get($cart,"quantity");
                                        $total += $sub_total;
                                    @endphp
                                <tr>
                                    <td>
                                        <span class="last" style="font-weight: bold;">{{data_get($cart,"product.name")}}</span>
                                    </td>
                                    <td>
                                        <span class="middle">{{data_get($cart,"quantity")}}</span>
                                    </td>
                                    <td>
                                        <span class="last">{{number_format($sub_total)}}</span>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                                </tbody>
                                </table> 
                        <ul class="list list_2">
                            <li><a href="#">الإجمالي <span>{{number_format($total)}} YER </span></a></li>
                        </ul>
                        <div class="payment_item">
                            <div class="radion_btn">
                                <input type="radio" id="f-option5" name="pay" value="حوالة مصرفية مباشرة">
                                <label for="f-option5">حوالة مصرفية مباشرة</label>
                                <img src="/img/product/card.jpg" alt="">
                                <div class="check"></div>
                            </div>
                            <p style="font-weight: bold; color:black;">
                                قم بإجراء ايداع مباشرة لأحد حساباتنا ببنك الكريمي .للتفاصيل تواصل مع 778080098_775588402_736001100. 
                            <span > لن يتم شحن طلبك حتى يتم التأكد من عملية الدفع.</span>
                            </p>
                        </div>
                        <div class="payment_item active">
                            <div class="radion_btn">
                                <input type="radio" id="f-option6" name="pay" value="الدفع نقدًا عند الاستلام">
                                <label for="f-option6"> الدفع نقدًا عند الاستلام </label>
                                <div class="check"></div>
                            </div>
                            <p style="font-weight: bold; color:black;">
                                سيتم استخدام بياناتك الشخصية لمعالجة طلبك، ودعم تجربتك في هذا الموقع.
                            </p>
                        </div>

                        <div class="text-center">
                            <button class="button button-paypal" type="submit">تأكيد الطلب</button>
                        </div>
                    </div>
                </div>
            </form>
                @else
                <h3 style="margin: 10px; font-weight: bold; text-align: center; color:blue;">سلة المشتريات فارغة حالياً يرجى إضافة منتجات لإتمام الطلب!</h3>
                <p style="text-align: center; margin-top: 25px;"><a class="btn btn-outline-info btn-lg" href="{{ route('home.index') }}" style="width: 15%;">العوده الى المتجر</a></p>
                @endif
            </div>
        </div>
    </div>
</section>
<!--================End Checkout Area =================-->

@endsection