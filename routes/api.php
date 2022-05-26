<?php

use App\Http\Controllers\API\barangController;
use App\Http\Controllers\API\transaksiController;
use App\Http\Controllers\API\userController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('apiProduk', [barangController::class, 'getAll']);

Route::post('register', [userController::class, 'register']);
Route::post('login', [userController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('userApi', [userController::class, 'fetch']);
    Route::post('userApi', [userController::class, 'updateProfile']);
    Route::post('logout', [userController::class, 'logout']);

    Route::get('transactions', [transaksiController::class, 'all']);
});
