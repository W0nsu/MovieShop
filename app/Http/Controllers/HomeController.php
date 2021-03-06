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
        $movies = Movie::get();
        $genres = HomeController::getGenres();
        return view('home', ['movies' => $movies, 'genres' => $genres]);
    }
    //Grouping by genre
    public function getByGenre(Request $request){
        $category = $request -> path();
        $category = substr($category, 5);
        $moviesByGenre = Movie::where('category', $category) -> get();
        $genres = HomeController::getGenres();
        return view('home', ['movies' => $moviesByGenre, 'genres' => $genres]);
    }
    
    public function getGenres(){
        $genres = Movie::select('category as genre') -> get();
        return $genres;
    }
    

}
