<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartDetails;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index() 
    {
        return view('cart.index');
    }

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

    public function remove()
    {
        // $product = Cart::where('product_id', $product_id)->first();
        // if($product)
        // {
        //     $product->delete();
        //     return redirect()->back()->with('error', ' تم حذف المنتج من السلة ');
        // }
        // else{
        //     return redirect()->back()->with('error', 'المنتج غير موجود!');
        // }
        // $to_delete =Cart::where('product_id');
        // $to_delete = Cart::findOrFail($id);
        // $to_delete ->delete();
        // clear_product($id);
        // $delete =Cart::where("user_id", auth()->id())->where('id',$cart)->delete();
        $delete =Cart::where("user_id", auth()->id())->where('id');
        $delete -> delete();
        return $delete;
        // clear_product($cart);
        // dd($delete);
        // clear_product($id);
        // $delete = Cart::where('id', $id)->where("user_id", auth()->id())->delete();
        // return redirect()->back()->with('error', ' تم حذف المنتج من السلة ');

        // $cart = session()->get('cart');

        // if(isset($cart[$product_id]))
        // {
        //     unset($cart[$product_id]);
        //     session()->put('cart', $cart);
        // }
        // return redirect()->back()->with('error', ' تم حذف المنتج من السلة ');
    }
}
