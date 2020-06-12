<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Cart;
use App\Movie;
use Session;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $movies = DB::table('movies') -> get();
        $genres = HomeController::getGenres();
        error_log($genres);
        return view('home', ['movies' => $movies, 'genres' => $genres]);
    }

    public function getByGenre(Request $request){
        $category = $request -> path();
        $category = substr($category, 5);
        error_log($category);
        $moviesByGenre = DB::table('movies') -> where('category', $category) -> get();
        $genres = HomeController::getGenres();
        return view('home', ['movies' => $moviesByGenre, 'genres' => $genres]);
    }
    // Private functions
    private function getGenres(){
        $genres = DB::table('movies') -> select('category as genre') -> get();
        return $genres;
    }
    
    //Adding new movie to cart
    public function getAddToCart(Request $request, $id){
        $movie = Movie::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart -> add($movie, $movie->id);
        
        $request->session()->put('cart',$cart);
        redirect('/home');
    }
    
    public function getCart(){
        error_log('chuj mi w dupe');
        if (!Session::has('cart')){ 
            return view('shopCart');
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shopCart', ['movies' => $cart->items, 'totalPrice'=>$cart->totalPrice]);
    }
    
}
