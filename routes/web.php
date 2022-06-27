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

//Route::get('/', function () {
//return view('welcome');
//});

Route::get('/', function () {
    return view('home.home');
});

Route::get('/login', function () {
    return view('login.login');
});

Route::get('/cart', function () {
    return view('cart.cart');
});

Route::get('/contact', function () {
    return view('contact.contact');
});

Route::get('/error', function () {
    return view('/error');
});

//Route::get('/login/login')->name('login');

//Route::get('/', [HomeController::class, 'home']);
