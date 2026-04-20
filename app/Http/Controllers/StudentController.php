<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function profile()
    {
        // Nantinya data ini bisa diambil dari Auth::user()
        return view('siswa.profile');
    }
}