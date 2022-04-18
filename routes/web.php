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
    return view('layout.default');
});

Route::get('/user', function () {
    return view('user.index');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/login2', function () {
    return view('layout.login');
});

Route::resource('/barang',  \App\Http\Controllers\barangController::class);

Route::get('/checkout', function () {
    return view('checkout.index');
});

Route::get('/transaksi', function () {
    return view('transaksi.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
