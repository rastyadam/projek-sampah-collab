<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        // Data yang mau kamu tampilkan di halaman profil
        $data = [
            'nama' => 'Adrian Wijaya',
            'email' => 'adrianwijaya@gmail.com',
            'nisn' => '1234567890',
            'kelas' => 'XI',
            'jurusan' => 'RPL',
            'status_pesanan' => 'Diproses'
        ];

        return view('profil', $data); // Ini akan mencari file profil.blade.php
    }
}