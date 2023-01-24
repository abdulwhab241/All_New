@extends('layout')
@section('title', 'إتمام الطلب')
@section('Page')


  <!--================Checkout Area =================-->
  <section class="checkout_area section-margin--small">
    <div class="container">
        {{-- <div class="returning_customer">
            <div class="check_title">
                <h2>Returning Customer? <a href="#">Click here to login</a></h2>
            </div>
            <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new
                customer, please proceed to the Billing & Shipping section.</p>
            <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                <div class="col-md-6 form-group p_star">
                    <input type="text" class="form-control" placeholder="Username or Email*" onfocus="this.placeholder=''" onblur="this.placeholder = 'Username or Email*'" id="name" name="name">
                    <!-- <span class="placeholder" data-placeholder="Username or Email"></span> -->
                </div>
                <div class="col-md-6 form-group p_star">
                    <input type="password" class="form-control" placeholder="Password*" onfocus="this.placeholder=''" onblur="this.placeholder = 'Password*'" id="password" name="password">
                    <!-- <span class="placeholder" data-placeholder="Password"></span> -->
                </div>
                <div class="col-md-12 form-group">
                    <button type="submit" value="submit" class="button button-login">login</button>
                    <div class="creat_account">
                        <input type="checkbox" id="f-option" name="selector">
                        <label for="f-option">Remember me</label>
                    </div>
                    <a class="lost_pass" href="#">Lost your password?</a>
                </div>
            </form>
        </div> --}}
        {{-- <div class="cupon_area">
            <div class="check_title">
                <h2>Have a coupon? <a href="#">Click here to enter your code</a></h2>
            </div>
            <input type="text" placeholder="Enter coupon code">
            <a class="button button-coupon" href="#">Apply Coupon</a>
        </div> --}}
        <div class="billing_details">
            <div class="row">
                <div class="col-lg-8">
                    <h3>تفاصيل الفاتورة</h3>
                    <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                        <div class="col-md-6 form-group p_star">
                            <label style=" color:black; font-weight: bold; padding:5px; margin:5px;">الاسم الأول:</label>
                            <input type="text" class="form-control" id="first" name="name">
                            {{-- <span class="placeholder" data-placeholder="الاسم الأول"></span> --}}
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <label style=" color:black; font-weight: bold; padding:5px; margin:5px;">الاسم الأخير:</label>
                            <input type="text" class="form-control" id="last" name="name">
                            {{-- <span class="placeholder" data-placeholder="الاسم الأخير"></span> --}}
                        </div>
                        <div class="col-md-12 form-group">
                            <label style=" color:black; font-weight: bold; padding:5px; margin:5px;">اسم الشركة (اختياري)</label>
                            <input type="text" class="form-control" id="company" name="company" >
                        </div>
                        <div class="col-md-12 form-group">
                            <label style=" color:black; font-weight: bold; padding:5px; margin:5px;">عنوان الشارع / الحي:</label>
                            <input type="text" class="form-control" id="number" name="address">
                            {{-- <span class="placeholder" data-placeholder="Phone number"></span> --}}
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <label style=" color:black; font-weight: bold; padding:5px; margin:5px;"> المدينة:</label>
                            <input type="text" class="form-control" id="email" name="city">
                            {{-- <span class="placeholder" data-placeholder="Email Address"></span> --}}
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <label style=" color:black; font-weight: bold; padding:5px; margin:5px;"> المنطقة:</label>
                            <input type="text" class="form-control" id="email" name="area">
                            {{-- <span class="placeholder" data-placeholder="Email Address"></span> --}}
                        </div>
                        <div class="col-md-12 form-group">
                            <label style=" color:black; font-weight: bold; padding:5px; margin:5px;"> الهاتف:</label>
                            <input type="text" class="form-control" id="email" name="phone">
                            {{-- <span class="placeholder" data-placeholder="Email Address"></span> --}}
                        </div>
                        <div class="col-md-12 form-group">
                            <label style=" color:black; font-weight: bold; padding:5px; margin:5px;"> البريد الإلكتروني:</label>
                            <input type="text" class="form-control" id="email" name="email">
                            {{-- <span class="placeholder" data-placeholder="Email Address"></span> --}}
                        </div>
                        <div class="col-md-12 form-group">
                            <label style=" color:black; font-weight: bold; padding:5px; margin:5px;"> ملاحظات الطلب (اختياري)</label>
                            <textarea class="form-control different-control w-100" name="notice" id="content" cols="20" rows="5" ></textarea>
                            {{-- <span class="placeholder" data-placeholder="Email Address"></span> --}}
                        </div>

{{-- 
                        <div class="col-md-12 form-group p_star">
                            <select class="country_select">
                                <option value="1">Country</option>
                                <option value="2">Country</option>
                                <option value="4">Country</option>
                            </select>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="add1" name="add1">
                            <span class="placeholder" data-placeholder="Address line 01"></span>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="add2" name="add2">
                            <span class="placeholder" data-placeholder="Address line 02"></span>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="city" name="city">
                            <span class="placeholder" data-placeholder="Town/City"></span>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <select class="country_select">
                                <option value="1">District</option>
                                <option value="2">District</option>
                                <option value="4">District</option>
                            </select>
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="zip" name="zip" placeholder="Postcode/ZIP">
                        </div>
                        <div class="col-md-12 form-group">
                            <div class="creat_account">
                                <input type="checkbox" id="f-option2" name="selector">
                                <label for="f-option2">Create an account?</label>
                            </div>
                        </div>
                        <div class="col-md-12 form-group mb-0">
                            <div class="creat_account">
                                <h3>Shipping Details</h3>
                                <input type="checkbox" id="f-option3" name="selector">
                                <label for="f-option3">Ship to a different address?</label>
                            </div>
                            <textarea class="form-control" name="message" id="message" rows="1" placeholder="Order Notes"></textarea>
                        </div> --}}
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="order_box">
                        <h2>طلبك</h2>
                        <ul class="list">
                            <li><a href="#"><h4>المنتج <span>المجموع</span></h4></a></li>
                            <li><a href="#">Fresh Blackberry <span class="middle">x 02</span> <span class="last">$720.00</span></a></li>
                            <li><a href="#">Fresh Tomatoes <span class="middle">x 02</span> <span class="last">$720.00</span></a></li>
                            <li><a href="#">Fresh Brocoli <span class="middle">x 02</span> <span class="last">$720.00</span></a></li>
                        </ul>
                        <ul class="list list_2">
                            {{-- <li><a href="#">Subtotal <span>$2160.00</span></a></li>
                            <li><a href="#">Shipping <span>Flat rate: $50.00</span></a></li> --}}
                            <li><a href="#">الإجمالي <span>$2210.00</span></a></li>
                        </ul>
                        <div class="payment_item">
                            <div class="radion_btn">
                                <input type="radio" id="f-option5" name="selector">
                                <label for="f-option5">حوالة مصرفية مباشرة</label>
                                <img src="/img/product/card.jpg" alt="">
                                <div class="check"></div>
                            </div>
                            <p>
                                قم بإجراء ايداع مباشرة لأحد حساباتنا ببنك الكريمي .للتفاصيل تواصل مع 778080098_775588402_736001100. لن يتم شحن طلبك حتى يتم التأكد من عملية الدفع.
                            </p>
                        </div>
                        <div class="payment_item active">
                            <div class="radion_btn">
                                <input type="radio" id="f-option6" name="selector">
                                <label for="f-option6"> الدفع نقدًا عند الاستلام </label>
                                {{-- <img src="img/product/card.jpg" alt=""> --}}
                                <div class="check"></div>
                            </div>
                            <p>
                                سيتم استخدام بياناتك الشخصية لمعالجة طلبك، ودعم تجربتك في هذا الموقع.
                            </p>
                        </div>
                        {{-- <div class="creat_account">
                            <input type="checkbox" id="f-option4" name="selector">
                            <label for="f-option4">I’ve read and accept the </label>
                            <a href="#">terms & conditions*</a>
                        </div> --}}
                        <div class="text-center">
                          <a class="button button-paypal" href="#">تأكيد الطلب</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
  <!--================End Checkout Area =================-->

@endsection