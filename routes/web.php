<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductControllerWeb;
use Illuminate\Support\Facades\Route;
use App\Models\Product;

Route::get('/products', [ProductControllerWeb::class, 'index'] )->name('products.index');

Route::get('/products/{product}', [ProductControllerWeb::class, 'show'] )->name('product.index');


Route::get('/', function () {
    return view('welcome');
});


