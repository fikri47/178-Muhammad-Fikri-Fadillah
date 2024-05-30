<?php

use App\Http\Controllers\PemesananController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\SuratJalanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::resource('produk', ProdukController::class)->middleware('auth');


Route::group(['middleware'=> 'guest'], function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginAccess']);
    Route::get('/', [ProdukController::class, 'getAll']);
    Route::get('/produk/{produk}', [ProdukController::class, 'single']);
    
});

Route::group(['middleware'=> 'auth'], function() {
    Route::get('/admin', function () {
        return view('dashboard');
    });

    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
    
    Route::resource('pemesanan', PemesananController::class);
    Route::resource('surat', SuratController::class);

    Route::get('/surat/create/{id}', [SuratJalanController::class, 'create']);

    Route::post('/surat/{pemesanan_id}', [SuratJalanController::class, 'store']);
    Route::put('/surat/{surat_id}', [SuratJalanController::class, 'change'])->name('surat.change');
});
