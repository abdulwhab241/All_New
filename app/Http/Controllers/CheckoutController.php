<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Requests\CheckRequest;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index() 
    {
        if(isset(Auth::user()->name))
            {
                return view('checkouts.index');
            }
            else
            {
                return redirect('/login')->with('message', ' يرحى تسجيل الدخول من اجل اتمام العملية ');
            }
    }

    public function confirm(Request $request)
    {
        // dd($request) ;
    
        try {
            $Carts = Cart::where('user_id',auth()->user()->id)->get();

            foreach ($Carts as $Cart){
                $ids = explode(',',$Cart->id);

                Order::updateOrCreate([
                    'cart_id'=> $Cart->id,
                    'user_id'=> auth()->user()->id,
                    'first_name'=> strip_tags($request->first),
                    'last_name'=> strip_tags($request->last),
                    'company_name'=> strip_tags($request->company),
                    'address'=> strip_tags($request->address),
                    'city'=> strip_tags($request->city),
                    'area'=> strip_tags($request->area),
                    'phone'=> strip_tags($request->phone),
                    'email'=> strip_tags($request->email),
                    'payment_method'=> strip_tags($request->pay),
                    'order_notice'=> strip_tags($request->notice),
                ]);
        }

            return redirect()->route('/');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
        
    }
}
