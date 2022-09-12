<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TextPagesController;
use App\Http\Controllers\BascetController;
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
Route::get('/opt', [TextPagesController::class, "opt_sotrudnihestvo"])->name("opt_sotrudnihestvo");
Route::get('/pay', [TextPagesController::class, "pay"])->name("pay");
Route::get('/aktsii', [TextPagesController::class, "aktsii"])->name("aktsii");
Route::get('/brands', [TextPagesController::class, "brands"])->name("brands");
Route::get('/about', [TextPagesController::class, "about"])->name("about");
Route::get('/dostavka', [TextPagesController::class, "dostavka"])->name("dostavka");

Route::get('/bascet', [BascetController::class, "index"])->name("bascet");
Route::post('/bascet/add', [BascetController::class, "add"])->name("bascet_add");
