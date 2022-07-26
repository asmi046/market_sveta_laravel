<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TextPagesController;
use App\Http\Controllers\BascetController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\AuthController;
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
Route::get('/vozvrat', [TextPagesController::class, "vozvrat"])->name("vozvrat");
Route::get('/aktsii', [TextPagesController::class, "aktsii"])->name("aktsii");
Route::get('/policy', [TextPagesController::class, "policy"])->name("policy");
Route::get('/brands', [BrandController::class, "index"])->name("brands");
Route::get('/brand/{slug}', [BrandController::class, "brand_page"])->name("brand_page");
Route::get('/about', [TextPagesController::class, "about"])->name("about");
Route::get('/dostavka', [TextPagesController::class, "dostavka"])->name("dostavka");

Route::get('/bascet/thencs', [BascetController::class, "thencs"])->name("bascet_thencs");
Route::get('/bascet', [BascetController::class, "index"])->name("bascet");
Route::post('/bascet/add', [BascetController::class, "add"])->name("bascet_add");
Route::post('/bascet/update', [BascetController::class, "update"])->name("bascet_update");
Route::get('/bascet/get', [BascetController::class, "get_all"])->name("bascet_get");
Route::delete('/bascet/clear', [BascetController::class, "clear"])->name("bascet_clear");
Route::delete('/bascet/delete', [BascetController::class, "delete"])->name("bascet_delete");
Route::post('/bascet/send', [BascetController::class, "send"])->name("bascet_send");

Route::get('/favorites', [FavoriteController::class, "index"])->name("favorites");
Route::get('/favorites/get', [FavoriteController::class, "get_all"])->name("favorites_get");
Route::post('/favorites/add', [FavoriteController::class, "add"])->name("favorites_add");
Route::delete('/favorites/delete', [FavoriteController::class, "delete"])->name("favorites_delete");
Route::delete('/favorites/clear', [FavoriteController::class, "clear"])->name("favorites_clear");