<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\CategoryController;
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

Route::get('/', [IndexController::class, "index"])->name("home");
Route::get('/category/{slug}', [CategoryController::class, "index"])->name("category");
Route::get('/product/{slug}', [ProductController::class, "index"])->name("product");
Route::get('/contacts', [ContactsController::class, "index"])->name("contacts");
