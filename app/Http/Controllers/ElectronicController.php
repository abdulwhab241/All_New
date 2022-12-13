<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ElectronicController extends Controller
{
    public function index()
    {
        $electronics = Product::all();
        return view('electronics.index', compact('electronics'));
    }
    public function show($electronic)
    {
        return view('electronics.show', [
            'electronic' => Product::findOrFail($electronic)
        ]);
    }
}
