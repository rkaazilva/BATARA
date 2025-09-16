<?php

use Illuminate\Support\Facades\Route;

// Halaman awal seller (dashboard)
Route::get('/seller/dashboard', function () {
    return view('seller.dashboard');
});

// Produk
Route::get('/seller/produk', function () {
    return view('seller.produk');
});

// Tambah Produk
Route::get('/seller/produk/create', function () {
    return view('seller.produk_create');
});

// Pesanan
Route::get('/seller/pesanan', function () {
    return view('seller.pesanan');
});

// Laporan
Route::get('/seller/laporan', function () {
    return view('seller.laporan');
});

// Profil UMKM
Route::get('/seller/profil', function () {
    return view('seller.profil');
});


Route::get('/logout', function () {
    Auth::logout();
    return redirect('/'); // arahkan ke halaman utama
})->name('logout');

