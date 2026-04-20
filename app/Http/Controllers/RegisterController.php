<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        // Karena kita jadikan satu di login.blade.php, kita arahkan ke login saja
        // atau jika ingin halaman terpisah, buat file baru di auth/register.blade.php
        return view('auth.login'); 
    }

    public function register(Request $request)
    {
        // 1. Validasi Input (Nama, NISN/Identitas, PW, Verifikasi PW)
        $request->validate([
            'nama_lengkap' => 'required|string|max:100',
            'identitas'    => 'required|string|unique:users,identitas', // NISN
            'password'     => 'required|string|min:6|confirmed', // Harus cocok dengan password_confirmation
            'role'         => 'required|in:siswa'
        ], [
            'identitas.unique' => 'NISN sudah terdaftar!',
            'password.confirmed' => 'Verifikasi password tidak cocok.'
        ]);

        // 2. Simpan ke Database
        User::create([
            'nama_lengkap' => $request->nama_lengkap,
            'identitas'    => $request->identitas,
            'password'     => Hash::make($request->password), // Enkripsi PW
            'role'         => 'siswa',
        ]);

        return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan login.');
    }
}