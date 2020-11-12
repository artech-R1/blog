<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('berandaAdmin', [HomeController::class, 'showBeranda']);
Route::get('berandaUser', [UserProdukController::class, 'index']);
Route::get('produkUser/{produkUser}', [UserProdukController::class, 'show']);

Route::get('login', [AuthController::class, 'showLogin']);
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);



Route::resource('kategoriAdmin', KategoriController::class);
Route::resource('produkAdmin', ProdukController::class);
Route::resource('user', UserController::class);
