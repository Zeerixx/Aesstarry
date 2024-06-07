<?php

use App\Http\Controllers\UserController;
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

Route::get('/about', function () {
    return view('about');
});
Route::get('/cart', function () {
    return view('keranjang');
});
Route::get('/summary', function () {
    return view('summary');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/', [UserController::class, 'home'])->name('home');
Route::get('/detail', [UserController::class, 'detail'])->name('detail');
Route::get('/keranjang', [UserController::class, 'keranjang'])->name('keranjang');
Route::get('/summary', [UserController::class, 'summary'])->name('summary');
Route::get('/home', [UserController::class, 'main'])->name('home');
