<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartDetails;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function add(Request $request, $id)
    {
        // Check user is login or not
        if(isset(Auth::user()->name))
        {
            $product = Product::find($id);
            $message =  add_product_to_cart($product->id, $request->quantity);
            return redirect()->back()->with('message',$message);
        }
        else
        {
            return redirect('/login')->with('message', ' يرحى تسجيل الدخول من اجل اتمام العملية ');
        }
    }

    public function remove(Request $request)
    {
        // $cart =Cart::where('product_id')->delete();
        $to_delete = Cart::findOrFail($request)->where('product_id')->delete();
        // $to_delete ->delete();
        return redirect()->back()->with('error', ' تم حذف المنتج من السلة ');

        // $cart = session()->get('cart');

        // if(isset($cart[$product_id]))
        // {
        //     unset($cart[$product_id]);
        //     session()->put('cart', $cart);
        // }
        // return redirect()->back()->with('error', ' تم حذف المنتج من السلة ');
    }
}
