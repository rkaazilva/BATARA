<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\BumdesController;

// ==========================
// Seller Routes
// ==========================
Route::prefix('seller')->group(function () {
    Route::get('/dashboard', fn() => view('seller.dashboard'))->name('seller.dashboard');

    Route::get('/produk', fn() => view('seller.produk'))->name('seller.produk');
    Route::get('/produk/create', fn() => view('seller.produk_create'))->name('seller.produk.create');

    Route::get('/pesanan', fn() => view('seller.pesanan'))->name('seller.pesanan');
    Route::get('/laporan', fn() => view('seller.laporan'))->name('seller.laporan');
    Route::get('/profil', fn() => view('seller.profil'))->name('seller.profil');
});

// ==========================
// Logout Route
// ==========================
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/'); // arahkan ke halaman utama
})->name('logout');

// ==========================
// Super Admin Routes
// ==========================
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', fn() => view('admin.dashboard_admin'))->name('superadmin.dashboard');
    Route::get('/bumdes', fn() => view('admin.bumdes_admin'))->name('superadmin.bumdes');
    Route::get('/bumdes/create', fn() => view('admin.bumdes_create_admin'))->name('superadmin.bumdes.create');

    // ❌ sebelumnya pakai view langsung, sekarang kita arahkan ke controller
    Route::get('/verifikasi-bumdes', [SuperAdminController::class, 'verifikasiBumdes'])
        ->name('superadmin.verifikasi_bumdes');

    Route::get('/laporan', fn() => view('admin.laporan_admin'))->name('superadmin.laporan');
    Route::get('/users', fn() => view('admin.users_admin'))->name('superadmin.users');
});

// ==========================
// BUMDES Routes
// ==========================
Route::prefix('bumdes')->group(function () {
    Route::get('/dashboard', [BumdesController::class, 'dashboard'])->name('bumdes.dashboard');
    Route::get('/verifikasi-seller', [BumdesController::class, 'verifikasiSeller'])->name('bumdes.verifikasi');
    Route::get('/daftar-usaha', [BumdesController::class, 'daftarUsaha'])->name('bumdes.usaha');
    Route::get('/manajemen-seller', [BumdesController::class, 'manajemenSeller'])->name('bumdes.seller');
    Route::get('/transaksi-laporan', [BumdesController::class, 'transaksiLaporan'])->name('bumdes.laporan');
    Route::get('/arsip-dokumen', [BumdesController::class, 'arsipDokumen'])->name('bumdes.arsip');
    Route::get('/profil', [BumdesController::class, 'profil'])->name('bumdes.profil');
});
