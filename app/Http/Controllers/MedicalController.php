<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class MedicalController extends Controller
{
    public function index()
    {
        $medicals = Product::all();
        return view('medicals.index', compact('medicals'));
    }

    public function show($medical)
    {
        return view('medicals.show', [
            'medical' => Product::findOrFail($medical) 
        ]);
    }
}
