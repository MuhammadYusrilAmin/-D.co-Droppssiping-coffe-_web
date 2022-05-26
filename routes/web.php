<?php

use App\Http\Controllers\userControl;
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
});

Route::get('/', function () {
    return view('landing_page/index');
});

Route::resource('/transaksi',  \App\Http\Controllers\transaksiController::class)->middleware('auth');

Route::resource('/user',  \App\Http\Controllers\userControl::class)->middleware('auth');

Route::resource('/barang',  \App\Http\Controllers\barangController::class)->middleware('auth');

Route::resource('/detail',  \App\Http\Controllers\detailController::class)->middleware('auth');

Route::get('/checkout', function () {
    return view('checkout.index');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
