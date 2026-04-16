<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ProfilController;

// --- HALAMAN DEPAN (UNTUK PEMBELI) ---
Route::get('/', function () {
    return view('kantin'); // Halaman awal daftar semua kantin
})->name('home');

Route::get('/dapur-bu-sitti', function () { return view('dapur-bu-sitti'); });
Route::get('/pak-kumis', function () { return view('pak-kumis'); });
Route::get('/geprek-mas-mono', function () { return view('geprek-pak-amiin'); });
Route::get('/dapoer-mbak-ros', function () { return view('dapoer-mbak-ros'); });
Route::get('/cak-anwar', function () { return view('cak-anwar'); });
Route::get('/seblak-teh-santy', function () { return view('seblak-teh-santy'); });
Route::get('/profil', [ProfilController::class, 'index'])->name('profil');

// --- HALAMAN DASHBOARD (UNTUK PENJUAL) ---

Route::get('/dashboard', function () {
    return view('dashboard'); // Memanggil file dashboard.blade.php yang baru dibuat
})->name('dashboard');

// CRUD Menu
Route::resource('menu', MenuController::class);

// Orders & Status
Route::prefix('orders')->name('orders.')->group(function () {
    Route::get('/incoming', [OrderController::class, 'incomingOrders'])->name('incoming');
    Route::patch('/{order}/status', [OrderController::class, 'updateStatus'])->name('updateStatus');
    Route::get('/history', [OrderController::class, 'history'])->name('history');
});

// Reports
Route::get('/reports', [ReportController::class, 'index'])->name('reports.index');