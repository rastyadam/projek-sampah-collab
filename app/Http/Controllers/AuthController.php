<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Method untuk menampilkan halaman login
    // public function showLoginForm()
    // {
    //     return view('auth.login'); // Pastikan nama file view-nya benar
    // }

    // Method untuk memproses data login
    public function login(Request $request)
    {
        // Validasi input (sesuaikan dengan kebutuhan Anda)
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Proses autentikasi (gunakan Auth facade atau metode lain sesuai kebutuhan)
        if (Auth::attempt($request->only('email', 'password'))) {
            // Jika berhasil, redirect ke dashboard atau halaman yang diinginkan
            return redirect()->intended('dashboard');
        }

        // Jika gagal, kembali ke halaman login dengan pesan error
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }
}
?>
