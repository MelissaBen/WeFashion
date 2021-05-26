<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductsController;


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
/*
Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', [MainController::class , 'index'])->name('home');
Route::get('/products', [MainController::class , 'index'])->name('products');
Route::get('/admin', [ProductsController::class , 'index'])->middleware('admin')->name('admin');
Route::get('/admin/create', [ProductsController::class , 'create'])->middleware('admin')->name('admin.create');
Route::delete('/admin/products/{product:id}/destroy', [ProductsController::class , 'destroy'])->middleware('admin')->name('admin.product.destroy');




Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
