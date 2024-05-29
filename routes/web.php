<?php

use App\Http\Controllers\PemesananController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\SuratJalanController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProdukController::class, 'getAll']);

Route::get('/admin', function () {
    return view('dashboard');
});

Route::resource('produk', ProdukController::class);
Route::resource('pemesanan', PemesananController::class);
Route::resource('surat', SuratController::class);

Route::get('/surat/create/{id}', [SuratJalanController::class, 'create']);

Route::post('/surat/{pemesanan_id}', [SuratJalanController::class, 'store']);
Route::put('/surat/{surat_id}', [SuratJalanController::class, 'change'])->name('surat.change');

