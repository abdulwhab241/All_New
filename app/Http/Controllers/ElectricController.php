<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ElectricController extends Controller
{
    public function index()
    {
            $electrics = Product::where('category_id',1)->get();
            return view('electrics.index', compact('electrics'));
    }

    public function show($electric)
    {
        return view('electrics.show', [
            'electric' => Product::findOrFail($electric)
        ]);
    }
}
