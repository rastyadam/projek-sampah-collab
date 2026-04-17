<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

// --- 1. GUEST ROUTES (Hanya untuk yang BELUM Login) ---
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
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

// PERBAIKAN: Gunakan GET, bukan POST agar tidak 404
Route::get('/', function () {
    return redirect()->route('login');
});

// Penyelamat jika Laravel redirect otomatis ke /home
Route::get('/home', function () {
    return redirect()->route('siswa.dashboard');
});

// --- 2. PROTECTED ROUTES (Hanya untuk yang SUDAH Login) ---
Route::middleware(['auth'])->group(function () {
    
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    // Dashboard berdasarkan Role
    Route::get('/admin/dashboard', function () {
        return view('dashboard.admin'); 
    })->name('admin.dashboard');

    Route::get('/toko/dashboard', function () {
        return view('dashboard.penjual'); 
    })->name('penjual.dashboard');

    Route::get('/siswa/dashboard', function () {
        return view('kantin'); 
    })->name('siswa.dashboard');

    // --- Halaman Kantin ---
    Route::get('/kantin', function () { return view('kantin'); })->name('kantin.index');
    
    Route::get('/dapur-bu-sitti', function () { return view('dapur-bu-sitti'); })->name('kantin.sitti');
    Route::get('/pak-kumis', function () { return view('pak-kumis'); })->name('kantin.kumis');
    Route::get('/geprek-mas-mono', function () { return view('geprek-pak-amiin'); })->name('kantin.geprek');
    Route::get('/dapoer-mbak-ros', function () { return view('dapoer-mbak-ros'); })->name('kantin.ros');
    Route::get('/cak-anwar', function () { return view('cak-anwar'); })->name('kantin.anwar');
    Route::get('/seblak-teh-santy', function () { return view('seblak-teh-santy'); })->name('kantin.santy');

    Route::resource('menu', MenuController::class);

    Route::prefix('orders')->name('orders.')->group(function () {
        Route::get('/incoming', [OrderController::class, 'incomingOrders'])->name('incoming');
        Route::patch('/{order}/status', [OrderController::class, 'updateStatus'])->name('updateStatus');
        Route::get('/history', [OrderController::class, 'history'])->name('history');
    });

    Route::get('/reports', [ReportController::class, 'index'])->name('reports.index');
});