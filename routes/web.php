<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfilController;

// --- 1. GUEST ROUTES (Hanya untuk yang BELUM Login) ---
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
});

// --- REDIRECT UTAMA ---
// Jika user buka alamat utama, lempar ke login
Route::get('/', function () {
    return redirect()->route('login');
})->name('home'); 

// Penyelamat jika Laravel redirect otomatis ke /home
Route::get('/home', function () {
    return redirect()->route('siswa.dashboard');
});

// --- 2. PROTECTED ROUTES (Wajib Login) ---
Route::middleware(['auth'])->group(function () {

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    // Dashboard berdasarkan role
    Route::get('/admin/dashboard', fn() => view('dashboard.admin'))->name('admin.dashboard');
    Route::get('/toko/dashboard', fn() => view('dashboard.penjual'))->name('penjual.dashboard');
    Route::get('/siswa/dashboard', fn() => view('kantin'))->name('siswa.dashboard');

    Route::get('/toko/dashboard', function () {
        return view('dashboard.penjual'); 
    })->name('penjual.dashboard');

    Route::get('/siswa/dashboard', function () {
        return view('kantin'); 
    })->name('siswa.dashboard');

    // --- Halaman Kantin & Profil ---
    Route::get('/kantin', function () { return view('kantin'); })->name('kantin.index');
    Route::get('/profil', [ProfilController::class, 'index'])->name('profil');

    // Rute Toko Spesifik
    Route::get('/dapur-bu-sitti', function () { return view('dapur-bu-sitti'); })->name('kantin.sitti');
    Route::get('/pak-kumis', function () { return view('pak-kumis'); })->name('kantin.kumis');
    Route::get('/geprek-mas-mono', function () { return view('geprek-pak-amiin'); })->name('kantin.geprek');
    Route::get('/dapoer-mbak-ros', function () { return view('dapoer-mbak-ros'); })->name('kantin.ros');
    Route::get('/cak-anwar', function () { return view('cak-anwar'); })->name('kantin.anwar');
    Route::get('/seblak-teh-santy', function () { return view('seblak-teh-santy'); })->name('kantin.santy');

    // --- Fitur Penjual/Admin ---
    Route::resource('menu', MenuController::class);

    // Orders
    Route::prefix('orders')->name('orders.')->group(function () {
        Route::get('/incoming', [OrderController::class, 'incomingOrders'])->name('incoming');
        Route::patch('/{order}/status', [OrderController::class, 'updateStatus'])->name('updateStatus');
        Route::get('/history', [OrderController::class, 'history'])->name('history');
    });

    Route::get('/reports', [ReportController::class, 'index'])->name('reports.index');
});

// ========== ADMIN PANEL TOKO ==========
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/toko', [App\Http\Controllers\Admin\TokoController::class, 'index'])->name('toko.index');
    Route::get('/toko/{toko}', [App\Http\Controllers\Admin\TokoController::class, 'show'])->name('toko.show');
    Route::post('/toko/{toko}/approve', [App\Http\Controllers\Admin\TokoController::class, 'approve'])->name('toko.approve');
    Route::post('/toko/{toko}/reject', [App\Http\Controllers\Admin\TokoController::class, 'reject'])->name('toko.reject');
});

