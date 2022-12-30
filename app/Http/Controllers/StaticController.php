<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function index() 
    {
        return view('welcome');
    }
    // public function contact() 
    // {
    //     return view('contact');
    // }
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
