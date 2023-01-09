<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StaticController extends Controller
{
    public function index() 
    {
        return view('welcome');
    }
   

    public function register() 
    {
        return view('register');
        
    }

    public function search(Request $request)
    {
        // $search = request()->query('search');
        if($request->search)
        {
            $posts = Product::where('name', 'LIKE', '%'. $request->search .'%')->latest()->get();
            return view('search', compact('posts'));
        }
        else
        {
            return redirect()->back()->with('message', 'Empty search ');
        }
    }

}
