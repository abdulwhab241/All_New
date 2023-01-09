<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Cart;
use App\Models\Product;
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

    // public function getAddToCard(Request $request, $id)
    // {
    //     $product = Product::find($id);
    //     $oldCard = Session::has('card') ? Session::get('card') : null;
    //     $card = new Card($oldCard);
    //     $card->add($product, $product->id);

    //     $request->session()->put('card', $card);
    //     return redirect()->back();
    // }
        public function addCart(Request $request,$id)
        {
            $product = Product::find($id);
            $session = Session::has('carts') ? Session::get('carts') : null;
            $cart = new Cart;
            $cart ->product_name = $product->name;
            $cart->quantity = $request->quantity;
            $cart ->price = $product->price;
            $cart->save();
            $request->session()->put('carts', $cart);
            return redirect()->back();
        }
    // public function addToCart($house)
    // {
    //     $cart = session()->get('cart');
    //     if(!$cart)
    //     {
    //         $cart = [
    //             $house->id =>[
    //                 'name' => $house->name,
    //                 'qty' => 1,
    //                 'price' => $house->price,
    //                 'image' => $house->image
    //             ]
    //         ];
    //         session()->put('cart' . $cart);
    //         return redirect()->back();
    //     }
    //     if(isset($cart[$house->id]))
    //     {
    //         $cart[$house->id]['qty']++;
    //         session()->put('cart' . $cart);
    //         return redirect()->back();
    //     }
    //     $cart[$house->id] = [
    //         'name' => $house->name,
    //         'qty' => 1,
    //         'price' => $house->price,
    //         'image' => $house->image
    //     ];
    //     session()->put('cart' . $cart);
    //     return redirect()->back();
    // }
}
