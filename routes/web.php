<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


  Route::get('/', [ProductController::class, 'index'])->name('products.index');
  Route::get('/product/create', function () {
    return view('pages.products-create');
  });
