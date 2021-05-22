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
    return view('0333_home');
});

Route::get('/artikel', function () {
    return view('0333_artikel');
});

Route::get('/tentang-saya', function () {
    return view('0333_tentang');
});