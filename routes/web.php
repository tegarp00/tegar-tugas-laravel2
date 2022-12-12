<?php

use App\Http\Controllers\ProductController;
use App\Models\TableProduct;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
        $produk = TableProduct::paginate(10);

        return view('list', [
            'produk' => $produk
        ]);
});

Route::any("/login", [AuthController::class, "login"])->name("login")->middleware(["noAuth"]);
Route::any("/logout", [AuthController::class, "logout"])->name("logout")->middleware(["withAuth"]);

Route::prefix("product")
  -> name("product.")
  -> controller(ProductController::class)
  ->group(function () {
  Route::any('/upload', 'upload')->name("upload")->middleware(["withAuth"]);
  Route::post('/upload', 'createProduct')->name("createProduct");
  Route::get('/list', 'index')->name("index");
  Route::get('/list/detail/{id}', 'detailProduct')->name("detailProduct");
  Route::get('/list/detail/edit/{id}', 'updateProdct')->name("updateProdct")->middleware(["withAuth"]);
  Route::post('/list/detail/edit/{id}', 'updateProduct')->name("updateProduct");
  Route::get('/list/delete/{id}', 'deleteProduct')->name("deleteProduct")->middleware(["withAuth"]);
});