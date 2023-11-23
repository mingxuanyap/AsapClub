<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('/landing', function () {
    return view('landing');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/product-listing', function () {
    return view('productlisting');
});

Route::get('/product-details', function () {
    return view('productdetails');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/checkout1', function () {
    return view('checkout1');
});

Route::get('/profile', function () {
    return view('profile');
});




