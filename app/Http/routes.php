<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', function () {
    return view('frontend/index');
})->name('home');

Route::get('about', function () {
    return view('frontend/about');
})->name('about');

Route::get('products', function () {
    return view('frontend/products');
})->name('products');

Route::get('store', function () {
    return view('frontend/store');
})->name('store');