<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
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


Route::get('/', [HomePageController::class, 'home']);

Route::get('/cart', [CartController::class, 'cart']);

Route::get('/products', [ProductController::class, 'products']);

Route::get('/product/{id?}', [ProductController::class, 'productId'])->where('id', '[0-9]+');
