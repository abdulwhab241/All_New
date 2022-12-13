<?php

namespace App\Http\Controllers;

use App\Models\Product;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function index()
    {
        $houses = Product::all();
        return view('houses.index',compact('houses'));
    }

    public function show($house)
    {
        return view('house.show', [
            'house' => Product::findOrFail($house)
        ]);
    }
}
