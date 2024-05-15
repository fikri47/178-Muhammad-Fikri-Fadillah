<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('dashboard');
});

Route::get('/produk', function () {
    return view('pages.admin.produk.index');
});

Route::get('/produk/create', function () {
    return view('pages.admin.produk.create');
});

Route::get('/pemesanan/create', function () {
    return view('pages.admin.pemesanan.create');
});

Route::get('/pemesanan', function () {
    return view('pages.admin.pemesanan.index');
});

Route::get('/surat/create', function () {
    return view('pages.admin.surat.create');
});

Route::get('/surat', function () {
    return view('pages.admin.surat.index');
});
