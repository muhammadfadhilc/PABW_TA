<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BanjirController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WargaAuthController;
use App\Http\Controllers\WargaController;
use Illuminate\Support\Facades\Route;

// =========================================================
// TUGAS PRAKTIKUM 1 - LAPORBANJIR BPBD KABUPATEN BANDUNG
// =========================================================
Route::prefix('laporbanjir')->group(function () {
    Route::get('/', fn () => redirect()->route('banjir.form'))->name('banjir.home');
    Route::get('/form', [BanjirController::class, 'form'])->name('banjir.form');
    Route::post('/lapor', [BanjirController::class, 'store'])->name('banjir.store');
    Route::get('/konfirmasi', [BanjirController::class, 'confirmation'])->name('banjir.konfirmasi');
    Route::get('/daftar', [BanjirController::class, 'index'])->name('banjir.index');
});

// =========================================================
// TUGAS PRAKTIKUM 2 - KONVERSI SMARTRESIDENT KE LARAVEL BLADE
// =========================================================
Route::get('/', [HomeController::class, 'index'])->name('smartresident.home');

Route::get('/warga/login', [WargaAuthController::class, 'showLogin'])->name('warga.login');
Route::post('/warga/login', [WargaAuthController::class, 'login'])->name('warga.login.store');
Route::get('/warga/register', [WargaAuthController::class, 'showRegister'])->name('warga.register');
Route::post('/warga/register', [WargaAuthController::class, 'register'])->name('warga.register.store');
Route::post('/warga/logout', [WargaAuthController::class, 'logout'])->name('warga.logout');

Route::get('/warga/dashboard', [WargaController::class, 'dashboard'])->name('warga.dashboard');
Route::get('/warga/laporan/baru', [WargaController::class, 'createReport'])->name('warga.laporan.create');
Route::post('/warga/laporan', [WargaController::class, 'storeReport'])->name('warga.laporan.store');
Route::get('/warga/laporan/{id}/konfirmasi', [WargaController::class, 'confirmation'])->name('warga.laporan.konfirmasi');

Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.store');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/laporan/{id}', [AdminController::class, 'detail'])->name('admin.laporan.detail');
Route::patch('/admin/laporan/{id}/status', [AdminController::class, 'updateStatus'])->name('admin.laporan.status');
Route::delete('/admin/laporan/{id}', [AdminController::class, 'deleteReport'])->name('admin.laporan.delete');
Route::get('/admin/manajemen', [AdminController::class, 'manage'])->name('admin.manajemen');
Route::post('/admin/manajemen', [AdminController::class, 'createAdmin'])->name('admin.manajemen.store');
Route::patch('/admin/manajemen/{id}', [AdminController::class, 'updateAdmin'])->name('admin.manajemen.update');
Route::delete('/admin/manajemen/{id}', [AdminController::class, 'deleteAdmin'])->name('admin.manajemen.delete');
