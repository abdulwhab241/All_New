<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ElectricController extends Controller
{
    public function index()
    {
            $electrics = Product::all();
            return view('electrics.index', compact('electrics'));
    }
    public function show($electric)
    {
        return view('electrics.show', [
            'electric' => Product::findOrFail($electric)
        ]);
    }
}
