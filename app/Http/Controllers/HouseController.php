<?php

namespace App\Http\Controllers;

use App\Models\Product;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function index()
    {
        // else
        // [
        //     $posts = Product::simplePaginate(3);
        // ]
        $houses = Product::where('category_id',3)->paginate(PAGINATION_COUNT);
        return view('houses.index',compact('houses'));
    }

    public function show($house)
    {
        return view('houses.show', [
            'house' => Product::findOrFail($house)
        ]);
    }


}
