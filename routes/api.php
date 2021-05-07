<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Consumen
Route::get('consumen', [App\Http\Controllers\ConsumenController::class, 'index']);
Route::post('consumen', [App\Http\Controllers\ConsumenController::class, 'create']);
Route::put('/consumen/{id}', [App\Http\Controllers\ConsumenController::class, 'update']);
Route::delete('/consumen/{id}', [App\Http\Controllers\ConsumenController::class, 'delete']);

// Order
Route::get('order', [App\Http\Controllers\OrderController::class, 'index']);
Route::post('order', [App\Http\Controllers\OrderController::class, 'create']);
Route::put('/order/{id}', [App\Http\Controllers\OrderController::class, 'update']);
Route::delete('/order/{id}', [App\Http\Controllers\OrderController::class, 'delete']);

// Product
Route::get('product', [App\Http\Controllers\ProductController::class, 'index']);
Route::post('product', [App\Http\Controllers\ProductController::class, 'create']);
Route::put('/product/{id}', [App\Http\Controllers\ProductController::class, 'update']);
Route::delete('/product/{id}', [App\Http\Controllers\ProductController::class, 'delete']);

// Seller
Route::get('seller', [App\Http\Controllers\SellerController::class, 'index']);
Route::post('seller', [App\Http\Controllers\SellerController::class, 'create']);
Route::put('/seller/{id}', [App\Http\Controllers\SellerController::class, 'update']);
Route::delete('/seller/{id}', [App\Http\Controllers\SellerController::class, 'delete']);
