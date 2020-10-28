<?php

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





Route::get('berandaAdmin', function () {
    return view('admin.beranda');
});
Route::get('berandaUser', function () {
    return view('users.beranda');
});
Route::get('produkUser', function () {
    return view('users.produk');
});
Route::get('produkAdmin', function () {
    return view('admin.produk');
});
Route::get('kategoriUser', function () {
    return view('users.kategori');
});
Route::get('kategoriAdmin', function () {
    return view('admin.kategori');
});
Route::get('loginUser', function () {
    return view('users.login');
});
Route::get('loginAdmin', function () {
    return view('admin.login');
});
Route::get('registerUser', function () {
    return view('users.register');
});
Route::get('registerAdmin', function () {
    return view('admin.register');
});
Route::get('admin', function () {
    return view('admin.baseAdmin');
});
Route::get('users', function () {
    return view('users.baseUser');
});
