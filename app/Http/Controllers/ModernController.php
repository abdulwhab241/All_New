<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ModernController extends Controller
{
    public function index()
    {
        $moderns = Product::where('category_id',5)->get();
        return view('moderns.index', compact('moderns'));
    }

    public function show($modern)
    {
        return view('moderns.show', [
            'moderns' =>Product::findOrFail($modern)
        ]);
    }
}
