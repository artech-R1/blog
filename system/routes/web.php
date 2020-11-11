<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\UserProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('berandaAdmin', [HomeController::class, 'showBeranda']);
Route::get('berandaUser', [UserProdukController::class, 'index']);

Route::get('produkAdmin', [ProdukController::class, 'index']);
Route::get('produkAdmin/create', [ProdukController::class, 'create']);
Route::post('produkAdmin', [ProdukController::class, 'store']);
Route::get('produkUser/{produkUser}', [UserProdukController::class, 'show']);
Route::get('produkAdmin/{produkAdmin}', [ProdukController::class, 'show']);
Route::put('produkAdmin/{produkAdmin}', [ProdukController::class, 'update']);
Route::delete('produkAdmin/{produkAdmin}', [ProdukController::class, 'destroy']);
Route::get('produkAdmin/{produkAdmin}/edit', [ProdukController::class, 'edit']);
Route::get('kategoriAdmin', [HomeController::class, 'showKategori']);
Route::get('loginAdmin', [AuthController::class, 'showLogin']);
