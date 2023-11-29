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
    return view('cyclemart');
});
Route::get('/regis', function () {
    return view('regis');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/sign up', function () {
    return view('sign up');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/fitur-diy', function () {
    return view('fitur-diy');
});
Route::get('/fitur-omon', function () {
    return view('fitur-omon');
});
Route::get('/fitur-craft', function () {
    return view('fitur-craft');
});
Route::get('/pot-bunga', function () {
    return view('pot-bunga');
});
Route::get('/tas-cyclemart', function () {
    return view('tas-cyclemart');
});
Route::get('/kursi-santai', function () {
    return view('kursi-santai');
});
Route::get('/tong-sampah', function () {
    return view('tong-sampah');
});



