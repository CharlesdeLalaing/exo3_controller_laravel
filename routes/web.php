<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StoreController;
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

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/store', [StoreController::class, 'store'])->name('store');
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/product', [ProductController::class, 'product'])->name('product');


