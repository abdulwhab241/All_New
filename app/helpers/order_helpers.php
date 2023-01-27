<?php

use App\Models\Cart;
use App\Models\Order;

function get_order(){
    return Order::with(["product"])->where("user_id", auth()->id())->get();
}

function clear_order(){
    return Order::where("user_id", auth()->id())->delete();
}

function add_order($first_name,$last_name,$company_name,$address,$city,$area,$phone,$payment_method,$order_notice,$cart_id,$email):string{


    if(!auth()->id()){
        return "يلزم تسجيل الدخول";
    }
else{
    Order::create(
        [
            "user_id" => auth()->id(),
            "cart_id" => $cart_id,
            "first_name" => $first_name,
            "last_name" => $last_name,
            "company_name" => $company_name,
            "address" => $address,
            "city" => $city,
            "area" => $area,
            "phone" => $phone,
            "email" => $email,
            "payment_method" => $payment_method,
            "order_notice" => $order_notice
        ]
    );
}

    return "تم إرسال الطلب بنجاح";

}