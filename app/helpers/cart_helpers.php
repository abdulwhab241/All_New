<?php

use App\Models\Cart;
use Illuminate\Support\Str;

function get_cart(){
    return Cart::with(["product"])->where("user_id", auth()->id())->get();
}

function clear_cart(){
    return Cart::where("user_id", auth()->id())->delete();
}

function add_product_to_cart($product_id,$quantity):string{


    if(!auth()->id()){
        return "يلزم تسجيل الدخول";
    }

if($product = Cart::where("product_id",$product_id)->where("user_id", auth()->id())->first())    {


    if($product->quantity == $quantity){
        return "تم اضافة الصنف مسبقاَ";
    }else{
        $product->quantity = $product->quantity + $quantity;
        $product->save();
        return "تم زيادة الكمية";
    }


}else{
    Cart::create(
        [
            "product_id" => $product_id,
            "quantity" => $quantity,
            "user_id" => auth()->id()
        ]
    );
}

    return "تم اضافة الصنف للسلة";

}