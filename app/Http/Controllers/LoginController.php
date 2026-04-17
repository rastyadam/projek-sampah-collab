<?php

namespace App\Http\Controllers; // NAMESPACE DISESUAIKAN (Tanpa \Auth)

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    // Tampilkan Halaman Login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // 1. Validasi Input
        $request->validate([
            'identitas' => 'required|string',
            'password' => 'required|string',
            'role' => 'required|in:siswa,admin,penjual',
        ]);

        // 2. Buat Kunci Pembatas (Throttle) untuk fitur kunci 1 menit
        $throttleKey = Str::lower($request->input('identitas')) . '|' . $request->ip();

        // 3. Cek apakah sudah 3 kali salah
        if (RateLimiter::tooManyAttempts($throttleKey, 3)) {
            $seconds = RateLimiter::availableIn($throttleKey);
            
            return redirect()->back()
                ->with('lockout', true)
                ->withErrors(['msg' => "Terlalu banyak percobaan. Silakan coba lagi dalam $seconds detik."]);
        }

        // 4. Proses Login
        $credentials = $request->only('identitas', 'password', 'role');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            RateLimiter::clear($throttleKey); // Reset percobaan jika sukses

            return $this->redirectBasedOnRole(Auth::user()->role);
        }

        // 5. Jika Gagal, tambah hitungan salah (kunci selama 60 detik)
        RateLimiter::hit($throttleKey, 60);

        throw ValidationException::withMessages([
            'identitas' => ['Identitas, password, atau role salah.'],
        ]);
    }

    protected function redirectBasedOnRole($role)
    {
        switch ($role) {
            case 'admin': return redirect()->intended('/admin/dashboard');
            case 'penjual': return redirect()->intended('/toko/dashboard');
            default: return redirect()->intended('/siswa/dashboard');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}