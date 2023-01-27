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

    public function remove($id ,$user_id)
    {
            $product =Cart::where('id',$id)->where("user_id",$user_id)->first();
            if($product)
            {
                $product->delete();
                return redirect()->back()->with('error', ' تم حذف المنتج من السلة ');
            }
            else{
                return redirect()->back()->with('error', 'المنتج غير موجود');
            }
    }
}
