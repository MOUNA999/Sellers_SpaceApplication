<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\productAdminController;
use App\Http\Controllers\Admin\OrderAdminController;
use App\Http\Controllers\Admin\VendeuseAdminController;
use App\Http\Controllers\Admin\loginController;
use App\Http\Controllers\Admin\registerAdminController;
use App\Http\Controllers\Admin\caissesAdminController;
use App\Http\Controllers\Admin\pointVenteAdminController;
use App\Http\Controllers\Admin\GerantAdminController;


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
    return view('admin.login');
});


Route::get('/order', [OrderAdminController::class,"index"])->name('order');
Route::get('/vendeuse', [VendeuseAdminController::class,"index"])->name('vendeuse');





Route::get('/', [loginController::class, 'index'])->name('index');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Profil   -----------------Début---------------------
//Route::get('admin/{id}', [registerAdminController::class, 'index'])->name('admin.index');
Route::get('admin/register', [registerAdminController::class, 'showRegistrationForm'])->name('admin.login.register');
Route::get('admin/login', [registerAdminController::class, 'showLoginForm'])->name('admin.login');
Route::get('/admin/update/{id}', [registerAdminController::class, 'index'])->name('update');

Route::post('inscription', [registerAdminController::class, 'inscription'])->name('admin.registration');
Route::post('login', [registerAdminController::class, 'login'])->name('loginn');

Route::get('logout', [registerAdminController::class, 'logout'])->name('logout')->middleware('auth', 'preventBackHistory');
Route::get('getUsers', [registerAdminController::class, 'getUsers']);

Route::put('/admin/changePassword', [registerAdminController::class, 'changePassword'])->name('admin.changePassword');
Route::put('/admin/ProfileEdit', [registerAdminController::class, 'update'])->name('admin.editProfile');
//Authentification   -----------------Fin---------------------





//Product
Route::get('product', [productAdminController::class,"index"])->name('product');
Route::get('product/add', [productAdminController::class, 'addProductForm'])->name('addProductForm');
Route::post('product/add', [productAdminController::class, 'addProduct'])->name('addProduct');
Route::put('product/update/{produit}', [productAdminController::class, 'updateProduct'])->name('admin.updateProduct');
Route::get('product/update/{id}', [productAdminController::class,"updateForm"])->name('updateProduct');
Route::delete('product/delete/{id}', [productAdminController::class, 'deleteProduct']);
Route::post('/import-csv', [productAdminController::class,"importCSV"])->name('importCsv');
Route::get('/products', [productAdminController::class, 'getChunkData'])->name('products.index');



//Vendeuse

Route::get('vendeuse', [VendeuseAdminController::class,"index"])->name('vendeuse');
Route::get('vendeuse/get', [VendeuseAdminController::class, 'getVendeuse']);
Route::post('vendeuse/add', [VendeuseAdminController::class, 'addVendeuse'])->name('addVendeuse');
Route::put('vendeuse/update/{vendeuse}', [VendeuseAdminController::class, 'updateVendeuse'])->name('admin.updateVendeuse');

Route::put('/vendeuse/changePassword', [registerAdminController::class, 'changePassword'])->name('admin.changePassword');
Route::get('vendeuse/update/{id}', [VendeuseAdminController::class,"updateForm"])->name('updateVendeuse');


//caisse
Route::get('caisse', [caissesAdminController::class,"index"])->name('caisse');
Route::get('caisse/add', [caissesAdminController::class, 'addCaisseForm'])->name('addCaisseForm');
Route::post('caisse/add', [caissesAdminController::class, 'addCaisse'])->name('addCaisse');
Route::put('caisse/update/{caisse}', [caissesAdminController::class, 'updateCaisse'])->name('admin.updateCaisse');
Route::get('caisse/update/{id}', [caissesAdminController::class,"updateForm"])->name('updateCaisse');
Route::delete('caisse/delete/{id}', [caissesAdminController::class, 'deleteCaisse']);

//Point de Vente
Route::get('pointVente', [pointVenteAdminController::class,"index"])->name('pointVente');
Route::get('pointVente/add', [pointVenteAdminController::class, 'addPointVenteForm'])->name('addPointVenteForm');
Route::post('pointVente/add', [pointVenteAdminController::class, 'addPointVente'])->name('addPointVente');
Route::put('pointVente/update/{pointVente}', [pointVenteAdminController::class, 'updatePointVente'])->name('admin.updatePointVente');
Route::get('pointVente/update/{id}', [pointVenteAdminController::class,"updateForm"])->name('updatePointVente');
Route::delete('pointVente/delete/{id}', [pointVenteAdminController::class, 'deletePointVente']);


//gerant

Route::get('gerant', [GerantAdminController::class,"index"])->name('gerant');
Route::get('gerant/get', [VendeuseAdminController::class, 'getGerant']);
Route::post('gerant/add', [VendeuseAdminController::class, 'addGeranr'])->name('addGerant');
Route::put('gerant/update/{gerant}', [VendeuseAdminController::class, 'updateGerant'])->name('admin.updateGerant');

Route::put('/gerant/changePassword', [registerAdminController::class, 'changePassword'])->name('admin.changePassword');
Route::get('gerant/update/{id}', [VendeuseAdminController::class,"updateForm"])->name('updateGerant');

//order
Route::get('order/caisse2', [OrderAdminController::class,"caisse2"])->name('caisse2');
Route::get('order/caisse1', [OrderAdminController::class,"caisse1"])->name('caisse1');