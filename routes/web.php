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
    return view('welcome');
})->middleware('auth');

Route::get('/user', function () {
    return view('user.index');
});

Route::resource('/user',  \App\Http\Controllers\userController::class)->middleware('auth');

Route::resource('/barang',  \App\Http\Controllers\barangController::class)->middleware('auth');

Route::get('/checkout', function () {
    return view('checkout.index');
});

Route::get('/transaksi', function () {
    return view('transaksi.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
