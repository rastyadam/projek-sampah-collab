<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Toko;
use Illuminate\Http\Request;

class TokoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // HALAMAN UTAMA ADMIN
    public function index(Request $request)
    {
        $status = $request->get('status', 'all');
        $query = Toko::latest();

        if ($status != 'all') {
            $query->where('status', $status);
        }

        $toko = $query->paginate(10);
        return view('admin.toko.index', compact('toko', 'status'));
    }

    // DETAIL TOKO
    public function show(Toko $toko)
    {
        return view('admin.toko.show', compact('toko'));
    }

    // APPROVE TOKO
    public function approve(Toko $toko)
    {
        $toko->update(['status' => 'approved']);
        return back()->with('success', '✅ Toko ' . $toko->nama_toko . ' DISUJUJI!');
    }

    // REJECT TOKO
    public function reject(Request $request, Toko $toko)
    {
        $request->validate(['alasan' => 'required']);
        $toko->update([
            'status' => 'rejected',
            'alasan_reject' => $request->alasan
        ]);
        return back()->with('success', '❌ Toko ditolak!');
    }
}