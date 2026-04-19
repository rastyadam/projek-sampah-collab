<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    protected $fillable = [
        'nama_toko', 'pemilik_nama', 'pemilik_nik', 'pemilik_no_hp',
        'alamat', 'foto_ktp', 'foto_selfie', 'status', 'alasan_reject'
    ];
}