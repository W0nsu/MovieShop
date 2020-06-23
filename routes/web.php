<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home/{genre}', 'HomeController@getByGenre')->name('genre');

Route::get('/home/Add-to-cart/{id}', 'CartController@getAddToCart')->name('add');

Route::get('/home/substract-from-cart/{id}', 'CartController@getSubstractedCart')->name('substract');

Route::get('/home/shop/Cart', 'CartController@getCart')->name('shoppingCart');

Route::get('/home/movie/insert','MovieController@insertform')->name('insertData');

Route::post('create','MovieController@insert');

Route::get('delete/{id}','MovieController@destroy');

Route::get('/home/movie/edit/{id}','MovieController@index')->name('editData');

Route::post('edit/{id}','MovieController@edit');