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
//welcome page route
Route::get('/', function () {
    return view('welcome');
});

//website page route
Route::get('/website',function(){
    return view('website/website');
});
//navbar page route
Route::get('/navbar',function(){
    return view('navbar');
});

//login page route
Route::get('/login',function(){
    return view('navbar/login');
});

//registe page route
Route::get('/register', function () {
    return view('navbar/register');
});

//contact page route
Route::get('/contact',function(){
    return view('navbar/contact');
});

//cart page route
Route::get('/cart',function(){
    return view('navbar/cart');
});

//hero page route
Route::get('/hero',function(){
    return view('hero/hero');
});

//feature product route
Route::get('/feature',function(){
    return view('feature');
});