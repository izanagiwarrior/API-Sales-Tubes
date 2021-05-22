<?php

use GuzzleHttp\Psr7\Request;
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

// Product
Route::get('product', [App\Http\Controllers\ProductController::class, 'index2'])->name('product');
Route::get('product/create', [App\Http\Controllers\ProductController::class, 'create_view']);
Route::post('product/create', [App\Http\Controllers\ProductController::class, 'create_process'])->name('product.create');
Route::get('product/update/{id}', [App\Http\Controllers\ProductController::class, 'update_view'])->name('product.update');
Route::post('product/update/{id}', [App\Http\Controllers\ProductController::class, 'update_process'])->name('product.process');
Route::post('/deleteProduct', [App\Http\Controllers\ProductController::class, 'deleteProduct'])->name('deleteProduct');

// Seller
Route::get('seller', [App\Http\Controllers\SellerController::class, 'index2'])->name('seller');
Route::get('seller/create', [App\Http\Controllers\SellerController::class, 'create_view']);
Route::post('seller/create', [App\Http\Controllers\SellerController::class, 'create_process'])->name('seller.create');
Route::get('seller/update/{id}', [App\Http\Controllers\SellerController::class, 'update_view'])->name('seller.update');
Route::post('seller/update/{id}', [App\Http\Controllers\SellerController::class, 'update_process'])->name('seller.process');
Route::post('/deleteSeller', [App\Http\Controllers\SellerController::class, 'deleteSeller'])->name('deleteSeller');

// Consumen
Route::get('consumen', [App\Http\Controllers\ConsumenController::class, 'index2'])->name('consumen');
Route::get('consumen/create', [App\Http\Controllers\ConsumenController::class, 'create_view']);
Route::post('consumen/create', [App\Http\Controllers\ConsumenController::class, 'create_process'])->name('consumen.create');
Route::get('consumen/update/{id}', [App\Http\Controllers\ConsumenController::class, 'update_view'])->name('consumen.update');
Route::post('consumen/update/{id}', [App\Http\Controllers\ConsumenController::class, 'update_process'])->name('consumen.process');
Route::post('/deleteConsumen', [App\Http\Controllers\ConsumenController::class, 'deleteConsumen'])->name('deleteConsumen');

// Pesanan
Route::get('order', [App\Http\Controllers\OrderController::class, 'index2'])->name('order');
Route::get('order/create', [App\Http\Controllers\OrderController::class, 'create_view']);
Route::post('order/create', [App\Http\Controllers\OrderController::class, 'create_process'])->name('order.create');
Route::get('order/update/{id}', [App\Http\Controllers\OrderController::class, 'update_view'])->name('order.update');
Route::post('order/update/{id}', [App\Http\Controllers\OrderController::class, 'update_process'])->name('order.process');
Route::post('/deleteOrder', [App\Http\Controllers\OrderController::class, 'deleteOrder'])->name('deleteOrder');