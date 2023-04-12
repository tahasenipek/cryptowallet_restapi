<?php

use App\Http\Controllers\API\CryptomoneyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\ForgetController;
use App\Http\Controllers\API\AuthController;
use Illuminate\Support\Facades\Auth;
 
//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
Route::post('/forgetpassword', [ForgetController::class, 'forgetpassword']);
Route::post('/resetpassword/{token}', [ForgetController::class, 'updatePassword']);
Route::post('/reset/{token}', [ForgetController::class, 'resetpassword']);
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/login', [RegisterController::class, 'login'])->name('login');
Route::post('logout', [RegisterController::class, 'destroy'])->name('logout');
Route::get('/user', [UserController::class, 'index'])->name('alluser');
Route::get('/user/{id}', [UserController::class, 'show'])->name('show');
Route::put('/update/{user}', [UserController::class, 'update'])->name('update');
Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('destroy');
Route::get('/coins', [CryptomoneyController::class, 'index'])->name('coins');
/* Route::middleware('auth:api')->group( function () {
    Route::resource('products', ProductController::class);
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    $user = Auth::user(); // Oturum açmış kullanıcının bilgilerini al
    $userId = $user->id; // Kullanıcının benzersiz kimliğini al
    $userData = User::find($userId); // Kullanıcının veritabanındaki bilgilerini al
    $response = ['username' => $userData->username]; // Kullanıcı adını al ve yanıtı oluştur
    return response()->json($response);
}); */



/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); */

/*  Route::post('login', [\App\Http\Controllers\ApiController::class, 'login']); */
/* Route::middleware('auth:api')->group(function(){

    Route::get('/user', function()
    {
        return \Illuminate\Support\Facades\Auth::user();
    });
});  */