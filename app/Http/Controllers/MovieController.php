<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Cart;
use App\Movie;
use Session;


class MovieController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //Getting genres and movies
    public function index($id){
        
        $genres = app('App\Http\Controllers\HomeController')->getGenres();
        $movies = Movie::where('id', $id)->get();
        return view('edit',['movies'=>$movies, 'genres' => $genres]);
        }
    
    public function insertform(){
        
        $genres = app('App\Http\Controllers\HomeController')->getGenres();
        return view('create', ['genres' => $genres]);
    }

    //Insert new movie to the database
    public function insert(Request $request){
        $path = $request->input('path');
        $title = $request->input('title');
        $category = $request->input('category');
        $production_year = $request->input('production_year');
        $description = $request->input('description');
        $price = $request->input('price');

        $data=array('path' => $path, "title" => $title, "category" => $category, "production_year" => $production_year, "description" => $description, "price" => $price);
        DB::table('movies')->insert($data);

        $genres = app('App\Http\Controllers\HomeController')->getGenres();
        return redirect()->route('home');
    }

    //Delete movie from database
    public function destroy($id) {
        $deleting = Movie::where('id',$id)->delete();
        return redirect()->route('home');
        }


    //Edit movie
    public function edit(Request $request,$id) {
        $path = $request->input('path');
        $title = $request->input('title');
        $category = $request->input('category');
        $production_year = $request->input('production_year');
        $description = $request->input('description');
        $price = $request->input('price');

        $update = Movie::where('id', $id)->update(['path' => $path, 'title'=> $title, 
        'category' => $category, 'production_year' => $production_year, 'description' => $description, 'price'=> $price]);

        return redirect()->route('home');
    }
}
