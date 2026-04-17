<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfilController;

/*
|--------------------------------------------------------------------------
| GUEST ROUTES (Belum Login)
|--------------------------------------------------------------------------
*/
Route::middleware(['guest'])->group(function () {

    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);

    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
});


/*
|--------------------------------------------------------------------------
| PUBLIC ROUTES
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('kantin');
})->name('home');

Route::get('/profil', [ProfilController::class, 'index'])->name('profil');

Route::get('/dapur-bu-sitti', fn() => view('dapur-bu-sitti'));
Route::get('/pak-kumis', fn() => view('pak-kumis'));
Route::get('/geprek-mas-mono', fn() => view('geprek-pak-amiin'));
Route::get('/dapoer-mbak-ros', fn() => view('dapoer-mbak-ros'));
Route::get('/cak-anwar', fn() => view('cak-anwar'));
Route::get('/seblak-teh-santy', fn() => view('seblak-teh-santy'));


/*
|--------------------------------------------------------------------------
| PROTECTED ROUTES (Sudah Login)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    // Dashboard berdasarkan role
    Route::get('/admin/dashboard', fn() => view('dashboard.admin'))->name('admin.dashboard');
    Route::get('/toko/dashboard', fn() => view('dashboard.penjual'))->name('penjual.dashboard');
    Route::get('/siswa/dashboard', fn() => view('kantin'))->name('siswa.dashboard');

    // Dashboard umum
    Route::get('/dashboard', fn() => view('dashboard'))->name('dashboard');

    // Menu CRUD
    Route::resource('menu', MenuController::class);

    // Orders
    Route::prefix('orders')->name('orders.')->group(function () {
        Route::get('/incoming', [OrderController::class, 'incomingOrders'])->name('incoming');
        Route::patch('/{order}/status', [OrderController::class, 'updateStatus'])->name('updateStatus');
        Route::get('/history', [OrderController::class, 'history'])->name('history');
    });

    Route::get('/reports', [ReportController::class, 'index'])->name('reports.index');
});