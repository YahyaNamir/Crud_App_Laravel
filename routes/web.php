<?php

use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get("/product", [ProductController::class, 'productF'])->name('products.product');
Route::get("/product/create", [ProductController::class, 'createF'])->name('products.create');
Route::post("/product", [ProductController::class, 'storeF'])->name('products.store');
Route::get("/product/{products}/modify", [ProductController::class, 'modifyF'])->name('products.modify');
Route::put("/product/{products}/update", [ProductController::class, 'updateF'])->name('products.update');
Route::delete("/product/{products}/delete", [ProductController::class, 'deleteF'])->name('products.delete');
