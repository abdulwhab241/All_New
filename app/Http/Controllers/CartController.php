<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartDetails;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function add(Request $request)
    {
        // $products = Product::findOrFail($request);
        // // Check user is login or not
        // if(isset(Auth::user()->name))
        // {
        //     // Check cart is exists or not
        //     if($cart = Cart::where('user_id',$request->user_id)->where('status',0)->where('is_open',0)->exists())
        //     {
        //         $cart = Cart::where('user_id', $request->user_id)->where('status', 0)->where('is_open', 0)->first();
        //         // Check product is exists or not 
        //         if($cartDetails = CartDetails::where('cart_id', $cart->id)->where('is_open',0)->exists())
        //         {
        //             return redirect()->back()->with('message',"تم اضافة الصنف مسبقاَ");
        //         }
        //         else
        //         {
        //             $productCreate = CartDetails::create([
        //                 'cart_id' => $cart->id,
        //                 'product_id' => $products['id']
        //             ]);
        //             return redirect()->back();
        //         }
        //     }
        //     else
        //     {
        //         // Create cart
        //         $cartCreate = Cart::create([
        //             'user_id' => auth('web')->user()->id
        //         ]);
        //         // Create product
        //         $createCartDetails = CartDetails::create([
        //             'cart_id' => $cartCreate['id'],
        //             'product_id' => $products['id']
        //             // 'qty' => $request->quantity
        //         ]);
        //         return redirect()->back()->with('message', 'تم إضافة المنتج الى السلة');
        //     }
        // }
        // else
        // {
        //     return redirect('/login')->with('message', ' يرحى تسجيل الدخول من اجل اتمام العملية ');
        // }
    }
}
