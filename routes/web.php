<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

// Categories Routes
Route::get('/sub-categories/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('sub-categories.create');
Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{category}', [App\Http\Controllers\CategoryController::class, 'show'])->name('categories.show');
Route::post('/categories', [App\Http\Controllers\CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/{category}/edit', [App\Http\Controllers\CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{category}/edit', [App\Http\Controllers\CategoryController::class, 'update'])->name('categories.update');
Route::delete('/categories/{category}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('categories.destroy');

// Color Routes
Route::get('/color/create', [App\Http\Controllers\ColorController::class, 'create'])->name('color.create');
Route::get('/color', [App\Http\Controllers\ColorController::class, 'index'])->name('color.index');
Route::get('/color/{category}', [App\Http\Controllers\ColorController::class, 'show'])->name('color.show');
Route::post('/color', [App\Http\Controllers\ColorController::class, 'store'])->name('color.store');
Route::get('/color/{color}/edit', [App\Http\Controllers\ColorController::class, 'edit'])->name('color.edit');
Route::put('/color/{color}/edit', [App\Http\Controllers\ColorController::class, 'update'])->name('color.update');
Route::delete('/color/{color}', [App\Http\Controllers\ColorController::class, 'destroy'])->name('color.destroy');

// order Routes
Route::get('/order/create', [App\Http\Controllers\orderController::class, 'create'])->name('order.create');
Route::get('/order', [App\Http\Controllers\orderController::class, 'index'])->name('order.index');
Route::get('/order/{category}', [App\Http\Controllers\orderController::class, 'show'])->name('order.show');
Route::post('/order', [App\Http\Controllers\orderController::class, 'store'])->name('order.store');
Route::get('/order/{order}/edit', [App\Http\Controllers\orderController::class, 'edit'])->name('order.edit');
Route::put('/order/{order}/edit', [App\Http\Controllers\orderController::class, 'update'])->name('order.update');
Route::delete('/order/{order}', [App\Http\Controllers\orderController::class, 'destroy'])->name('order.destroy');

//product routes
Route::get('/product/create', [App\Http\Controllers\productController::class, 'create'])->name('product.create');
Route::get('/product', [App\Http\Controllers\productController::class, 'index'])->name('product.index');
Route::get('/product/{category}', [App\Http\Controllers\productController::class, 'show'])->name('product.show');
Route::post('/product', [App\Http\Controllers\productController::class, 'store'])->name('product.store');
Route::get('/product/{product}/edit', [App\Http\Controllers\productController::class, 'edit'])->name('product.edit');
Route::put('/product/{product}/edit', [App\Http\Controllers\productController::class, 'update'])->name('product.update');
Route::delete('/product/{product}', [App\Http\Controllers\productController::class, 'destroy'])->name('product.destroy');

// size Routes
Route::get('/size/create', [App\Http\Controllers\sizeController::class, 'create'])->name('size.create');
Route::get('/size', [App\Http\Controllers\sizeController::class, 'index'])->name('size.index');
Route::get('/size/{category}', [App\Http\Controllers\sizeController::class, 'show'])->name('size.show');
Route::post('/size', [App\Http\Controllers\sizeController::class, 'store'])->name('size.store');
Route::get('/size/{size}/edit', [App\Http\Controllers\sizeController::class, 'edit'])->name('size.edit');
Route::put('/size/{size}/edit', [App\Http\Controllers\sizeController::class, 'update'])->name('size.update');
Route::delete('/size/{size}', [App\Http\Controllers\sizeController::class, 'destroy'])->name('size.destroy');

// sub-category Routes
Route::get('/sub-category/create', [App\Http\Controllers\subcategoryController::class, 'create'])->name('sub-category.create');
Route::get('/sub-category', [App\Http\Controllers\subcategoryController::class, 'index'])->name('sub-category.index');
Route::get('/sub-category/{sub-category}', [App\Http\Controllers\subcategoryController::class, 'show'])->name('sub-category.show');
Route::post('/sub-category', [App\Http\Controllers\subcategoryController::class, 'store'])->name('sub-category.store');
Route::get('/sub-category/{sub-category}/edit', [App\Http\Controllers\subcategoryrController::class, 'edit'])->name('sub-category.edit');
Route::put('/sub-category/{sub-category}/edit', [App\Http\Controllers\subcategoryController::class, 'update'])->name('sub-category.update');
Route::delete('/sub-category/{sub-category}', [App\Http\Controllers\subcategoryController::class, 'destroy'])->name('sub-category.destroy');
