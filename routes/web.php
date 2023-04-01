<?php

use App\Models\Product;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\cartController;
use App\Http\Controllers\CategoriController;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product',[ProductController::class, 'index']);
Route::get('/product/cart',[cartController::class, 'index']);
Route::get('/product/Categori',[CategoriController::class, 'index']);
Route::get('/product/add',[ProductController::class, 'create']);
Route::get('/product/{id}/edit',[ProductController::class, 'edit']);

Route::put('/product/{id}',[ProductController::class, 'update']);
Route::get('/product/{id}/delete',[ProductController::class, 'destroy']);