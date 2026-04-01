<?php
namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // 1. ORDERAN MASUK (Hanya yang statusnya 'diproses' atau 'siap')
    public function incomingOrders()
    {
        $orders = Order::whereIn('status', ['diproses', 'siap'])
                       ->with('user') // Supaya tahu siapa yang beli
                       ->latest()
                       ->get();
        return view('orders.incoming', compact('orders'));
    }

    // 2. UPDATE STATUS (Untuk fitur Status Pesan)
    public function updateStatus(Request $request, Order $order)
    {
        $request->validate(['status' => 'required|in:diproses,siap,selesai,batal']);
        
        $order->update(['status' => $request->status]);

        return back()->with('success', 'Status pesanan berhasil diperbarui!');
    }

    // 3. RIWAYAT ORDER (Hanya yang sudah 'selesai' atau 'batal')
    public function history()
    {
        $history = Order::whereIn('status', ['selesai', 'batal'])
                        ->latest()
                        ->get();
        return view('orders.history', compact('history'));
    }
}
?>