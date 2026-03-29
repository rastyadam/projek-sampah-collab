<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('kantin');
});
Route::get('/dapur-bu-sitti', function () {
    return view('dapur-bu-sitti');
});
Route::get('/pak-kumis', function () {
    return view('pak-kumis'); // Pastikan nanti nama filenya pak-kumis.blade.php
});
Route::get('/geprek-mas-mono', function () {
    return view('geprek-pak-amiin'); // Sesuaikan nama file view-nya
});
Route::get('/dapoer-mbak-ros', function () {
    return view('dapoer-mbak-ros'); // Sesuaikan nama file view-nya
});
Route::get('/cak-anwar', function () {
    return view('cak-anwar'); // Sesuaikan nama file view-nya
});
Route::get('/seblak-teh-santy', function () {
    return view('seblak-teh-santy'); // Sesuaikan nama file view-nya
});

