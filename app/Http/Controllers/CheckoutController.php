<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}
