<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class MedicalController extends Controller
{
    public function index()
    {
        $medicals = Product::where('category_id',4)->paginate(PAGINATION_COUNT);
        return view('medicals.index', compact('medicals'));
    }

    public function show($medical)
    {
        return view('medicals.show', [
            'medical' => Product::findOrFail($medical) 
        ]);
    }
}
