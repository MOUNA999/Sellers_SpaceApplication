<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin\registerAdminController;
use App\Http\Controllers\Admin\productAdminController;
use App\Http\Controllers\Admin\VendeuseAdminController;
use App\Http\Controllers\Admin\CategorieAdminController;
use App\Http\Controllers\Admin\OrderAdminController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Administrateur
Route::get('admin', [AdminController::class, 'index']);
Route::get('dash', [AdminController::class, 'dashboard']);


//Product
Route::get('product', [productAdminController::class,"getProduct"]);//1
Route::get('product/codeBar/{codeBar}', [productAdminController::class,"getByCodeBar"]);
Route::get('product/{id}', [productAdminController::class,"getOneProduct"]);//1
Route::get('product/reference/{reference}', [productAdminController::class,"getByReference"]);//1
Route::get('product/category/{category}', [productAdminController::class,"getByCategory"]);//1
Route::post('product/add', [ProductAdminController::class, 'add']);//1
Route::put('product/update/{id}', [ProductAdminController::class, 'update']);//1


//Seller
Route::get('vendeuse', [VendeuseAdminController::class,"getVendeuse"]);//1
Route::get('vendeuse/{id}', [VendeuseAdminController::class,"getOneVendeuse"]);//1
 Route::put('vendeuse/{id}', [VendeuseAdminController::class, 'update']);//1
 Route::post('vendeuse', [VendeuseAdminController::class, 'login']);
//delete

 // Categorie
Route::get('categorie', [CategorieAdminController::class, 'getCategories']);//1
Route::get('categorie/{id}', [CategorieAdminController::class, 'getOneCategorie']);//1
Route::post('categorie/add', [CategorieAdminController::class, 'addCategorie']);//1
Route::put('categorie/update/{id}', [CategorieAdminController::class, 'updateCategorie']);//1
Route::delete('categorie/delete/{id}', [CategorieAdminController::class, 'deleteCategorie']);//1

//Order
Route::get('order', [OrderAdminController::class, 'getOrder']);//1
Route::get('order/{id}', [OrderAdminController::class, 'getById']);//1
Route::get('order/codeOrder/{code}', [OrderAdminController::class, 'getByCodeOrder']);//1
Route::get('order/date/{date_debut}/{date_fin}', [OrderAdminController::class, 'getOrdersByDate']);//1
Route::post('order/add', [OrderAdminController::class, 'addOrder']);//1