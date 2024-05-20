<?php

use App\Http\Controllers\PemesananController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\SuratController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('dashboard');
});

Route::resource('produk', ProdukController::class);
Route::resource('pemesanan', PemesananController::class);
Route::resource('surat', SuratController::class);