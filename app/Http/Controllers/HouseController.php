<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Cart;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Support\Facades\Session;


class HouseController extends Controller
{
    public function index()
    {
        $houses = Product::where('category_id',3)->paginate(PAGINATION_COUNT);
        return view('houses.index',compact('houses'));
    }

    public function show($house)
    {
        return view('houses.show', [
            'house' => Product::findOrFail($house)
        ]);
    }

    
    public function add(Request  $request, $id)
    {
        $product = Product::find($id);
        $message =  add_product_to_cart($product->id, $request->quantity);
        return redirect()->back()->with('message',$message);
    }
}
