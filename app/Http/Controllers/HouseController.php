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

    // public function getAddToCard(Request $request, $id)
    // {
    //     $product = Product::find($id);
    //     $oldCard = Session::has('card') ? Session::get('card') : null;
    //     $card = new Card($oldCard);
    //     $card->add($product, $product->id);

    //     $request->session()->put('card', $card);
    //     return redirect()->back();
    // }
    function get_cart_session_hash(){
        $cart_hash =  session()->get('cart_session_hash');
    
        if($cart_hash){
            return $cart_hash;
        }
        session()->put('cart_session_hash',Str::random(60));
        return  session()->get('cart_session_hash');
    }
    
    function get_cart(){
        return Cart::where("hash_id", get_cart_session_hash())->get();;
    }
    
    function clear_cart(){
        return Cart::where("hash_id", get_cart_session_hash())->delete();
    }
    
    function add_product_to_cart(Request $request,$id){
        $product = Product::find($id);
        return Cart::create(
            [
                "product_id" =>$product->name,
                "quantity" => $request->quantity,
                "hash_id" => get_cart_session_hash()
            ]
        );
    }
    
    public function add(Request $product, $request)
    {
        // clear_cart();
        // add_product_to_cart($product->name, $request->quantity);
        // return get_cart();
    
        
        $user = User::first();
        // $user->wallet->deposit(100);
        if($user->wallet->canWithdraw($product->price)){
            $user->wallet->withdraw($request->quantity);
            return  redirect()->back()->with('message', 'تم الإضافة الى السلة');
    
        }else{
            return redirect()->back()->with('message', 'يرجى التواصل مع المسؤول   736001100,  778080098,  775588402 ');;
        }
    }
        // public function addCart(Request $request,$id)
        // {
        //     $product = Product::find($id);
        //     $session = Session::has('carts') ? Session::get('carts') : null;
        //     $cart = new Cart;
        //     $cart ->product_name = $product->name;
        //     $cart->quantity = $request->quantity;
        //     $cart ->price = $product->price;
        //     $cart->save();
        //     $request->session()->put('carts', $cart);
        //     return redirect()->back();
        // }

}
