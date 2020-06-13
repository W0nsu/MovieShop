<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Movie;
use Session;

class CartController extends Controller
{
    public function getIndex()
    {
        $movies = Movie::all();
        return view('home', ['movies'=> $movies]);

    }

      //Adding new movie to cart
    public function getAddToCart(Request $request, $id){
        $movie = Movie::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart -> add($movie, $movie->id);
        
        $request->session()->put('cart',$cart);
        //dd($request->session()->get('cart'));
        return redirect()->route('home');
    }

    public function getSubstractedCart($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart -> substractOneMovie($id);

        Session::put('cart', $cart);
        return redirect()->route('shoppingCart');
    }
    
    //Shopping Cart
    public function getCart(){
        
        if (!Session::has('cart')){  
            return view('shopping-cart');    
        }
        
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shopping-cart', ['movies' => $cart->items, 'totalPrice'=>$cart->totalPrice]);
    }
}
