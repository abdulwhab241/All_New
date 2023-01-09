<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login() 
    {
        return view('login');
    }
    public function checkLogin(Request $user)
    {
        
        // $user->validate([
        //             'name' => 'required',
        //             'password' => 'required',
        //             ]);
        // $user_data = array(
        //     'name' => $user->get('name'),
        //     'password' => $user->get('password')
        // );
        // if(User::attempt($user_data))
        // {
        //     return back()->with(['message' => 'Login successfully !']);
        // }
        // else
        // {
        //     return back()->with('error', 'Wrong Login Details');
        // }
    } 
}
