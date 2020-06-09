<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function returnUser (Request $request) {
        
        $user = [
            'login' => $request -> input('login'),
            'password' => $request -> input('password')
        ];   
        return view('welcome', ['user' => $user]);
    }
}
