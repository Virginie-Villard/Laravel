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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('1', function() { return 'Je suis la page 1 !'; });
// Route::get('2', function() { return 'Je suis la page 2 !'; });
// Route::get('3', function() { return 'Je suis la page 3 !'; });

// Route::get('/', function() {
//     return view('homepage.blade');
// });

Route::get('/', [HomePageController::class, 'home']);

Route::get('/cart', [CartController::class, 'Cart']);

Route::get('/products', [ProductController::class, 'Products']);

Route::get('product/{id?}', function($id = 1) {
    return 'Je suis la page produit ' . $id . ' !';
});

// Route::get('/', [WelcomeController::class, 'index'])->name('home');

Route::get('/product/{n?}', function($n = 1) {
    return 'Je suis la page produit ' . $n . ' !';
});
