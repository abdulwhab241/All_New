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
    public function register() 
    {
        return view('register');
    }

    public function create(Request $request)
    {
        $request->validate([
                        'name' => ['required','string', 'max:255'],
                        'email' => ['required','string', 'email', 'max:255','unique:users'],
                        'password' => ['required','string', 'min:5'],
                        'confirmPassword',
        ]);
        $create_user = new User;
        $create_user->name = $request->input('name');
        $create_user->email = $request->input('email');
        $create_user->password = $request->input('password');
        $create_user->save();
        $request->session()->put('create_user', time());
        return redirect('/register')->with('message', 'تم إنشاء الحساب بنجاح');
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
