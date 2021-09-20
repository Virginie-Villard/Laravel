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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('1', function() { return 'Je suis la page 1 !'; });
// Route::get('2', function() { return 'Je suis la page 2 !'; });
// Route::get('3', function() { return 'Je suis la page 3 !'; });

Route::get('/', function() {
    return view('homepage.blade');
});

Route::get('/cart', function() {
    return view('cart');
});

Route::get('/product-list.blade', function() {
    return 'Liste des produits';
});

Route::get('{n?}', function($n = 1) {
    return 'Je suis la page ' . $n . ' !';
});

Route::get('/product/{n?}', function($n = 1) {
    return 'Je suis la page produit ' . $n . ' !';
});
