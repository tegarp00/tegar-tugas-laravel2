<?php

use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('upload');
});

Route::prefix("product")
  -> name("product.")
  -> controller(ProductController::class)
  ->group(function () {
  Route::any('/upload', 'upload')->name("upload");
  Route::post('/upload', 'createProduct')->name("createProduct");
  Route::get('/list', 'index')->name("index");
  Route::get('/list/detail/{id}', 'detailProduct')->name("detailProduct");
  Route::get('/list/detail/edit/{id}', 'updateProdct')->name("updateProdct");
  Route::post('/list/detail/edit/{id}', 'updateProduct')->name("updateProduct");
  Route::get('/list/delete/{id}', 'deleteProduct')->name("deleteProduct");
});