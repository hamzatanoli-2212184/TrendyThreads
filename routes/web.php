<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\ProductController; // Import the ProductController

Route::controller(WebController::class)->group(function () {
    Route::get('/', 'index')->name('home'); // Home page
    Route::get('/shop', 'shop')->name('shop'); // Shop page
    Route::get('/men', 'men')->name('men'); // Men page
    Route::get('/women', 'women')->name('women'); // Women page
    Route::get('/cart', 'cart')->name('cart'); // Cart page
    Route::get('/contact', 'contact')->name('contact'); // Contact page
    Route::get('/shop',  'index')->name('shop');

   
});

// Product routes for CRUD operations
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/products', [ProductController::class, 'index'])->name('admin.products.index'); // Show products list
    Route::get('/products/create', [ProductController::class, 'create'])->name('admin.products.create'); // Create new product
    Route::post('/products', [ProductController::class, 'store'])->name('admin.products.store'); // Store new product
    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('admin.products.edit'); // Edit product
    Route::put('/products/{product}', [ProductController::class, 'update'])->name('admin.products.update'); // Update product
    Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('admin.products.destroy'); // Delete product

});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('products', ProductController::class);
});


require __DIR__.'/auth.php';