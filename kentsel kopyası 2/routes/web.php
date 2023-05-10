<?php

use App\Http\Controllers\API\BinaController;
use App\Http\Controllers\API\FirmaController;
use App\Http\Controllers\API\TeklifController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserRegisterController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/firmagiris', function () {
    return view('firmagiris');
});

Route::get('firmakaydol', function () {
    return view('firmakaydol');
});

Route::get('/binagiris', function () {
    return view('binagiris');
});

Route::get('/teklifbekleyenmulkler', function () {
        return view('teklifbekleyenmulkler');
});


Route::get('/firma/girisekrani', function () {
    return view('firmagirisekrani');
});

Route::get('/binayakatil', function () {
    return view('binayakatil');
})->middleware(['auth'])->name('binayakatil');


Route::get('/', function () {
    return view('index');
});

route::get('/binaekle', function () {
    return view('binaekle');
})->middleware(['auth'])->name('binaekle');

/* Route::get('/binaekle', function () {
    return view('binaekle');
})->name('binaekle'); */


route::get('/binasakinikaydol', function () {
    return view('binasakinikaydol');
});


route::get('/binasakingiris', function () {
    return view('binasakingiris');
});

Route::get('/sıkcasorulansorular', function () {
    return redirect('/#faq');
});


Route::post('/firmakayıt', [FirmaController::class, 'register']);
Route::post('/kullanıcı/binasakini', [UserRegisterController::class, 'register']);
Route::post('/kullanıcı/giris', [UserRegisterController::class, 'login']);
Route::get('/profile', [UserRegisterController::class, 'showProfile'])->name('profile.show');
Route::post('/logout', [UserRegisterController::class, 'logoutUser'])->name('logout');
Route::post('/binaekle', [BinaController::class, 'register'])->name('binaekle');
Route::post('/firmakayıt', [FirmaController::class, 'register'])->name('firmakayıt');
Route::get('/firmagirisekrani', [FirmaController::class, 'getfirmagirisekrani'])->name('getfirmagirisekrani');
Route::post('/teklifbekleyenmulklerstore', [TeklifController::class, 'store'])->name('teklifbekleyenmulklerstore');
Route::post('/logout', [FirmaController::class, 'destroy'])->name('logout');
Route::post('/binagiris', [UserRegisterController::class, 'binagiris'])->name('binagiris');
Route::post('/firmagirisekrani', [FirmaController::class, 'firmagirisekrani'])->name('firmagirisekrani');
Route::get('/userlogout', [UserRegisterController::class, 'logoutUser'])->name('userlogout');
Route::get('/userlogout', [UserRegisterController::class, 'logoutUser'])->name('userlogout');
Route::get('bina/store', [BinaController::class, 'store'])->name('bina.store');
Route::post('join-building', [BinaController::class, 'joinBuilding'])->name('join-building');
Route::get('/login', function () {
    return view('login');
});


Route::get('/forget-password', function () {
    return view('forget-password');
});

Route::get('/reset-password', function ($token) {
    return view('reset_password', compact('token'));
});
