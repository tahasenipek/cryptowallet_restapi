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

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/forget-password', function () {
    return view('forget-password');
});

Route::get('/reset-password', function ($token) {
    return view('reset_password', compact('token'));
});
