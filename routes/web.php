<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;

Route::get('/', HomeController::class);


Route::prefix('product')->controller(ProductController::class)->group(function (){

    Route::get('/', 'index')->name('product.index');

    Route::get('/create', 'create');

    Route::get('/{product}', 'show')->name('product.show');

    Route::post('/store', 'store')->name('product.store');

    Route::delete('/{product}', 'destroy')->name('product.destroy');
});

// Cart Routes
use App\Http\Controllers\CartController;

Route::prefix('cart')->group(function () {
    Route::get('/', [CartController::class, 'index'])->name('cart.index');
    Route::post('/add/{product}', [CartController::class, 'add'])->name('cart.add');
    Route::post('/update/{id}', [CartController::class, 'update'])->name('cart.update');
    Route::post('/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
    Route::post('/clear', [CartController::class, 'clear'])->name('cart.clear');
});

// Admin Routes
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminCategoryController;

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/products', [AdminController::class, 'products'])->name('admin.products');
    
    // Admin Categories CRUD
    Route::resource('categories', AdminCategoryController::class, ['as' => 'admin']);
});
