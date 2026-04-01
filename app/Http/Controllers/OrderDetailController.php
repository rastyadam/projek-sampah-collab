<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Menampilkan riwayat order atau daftar orderan masuk
     */
    public function index()
    {
        // Contoh: Menampilkan semua order terbaru
        $orders = Order::with('user')->latest()->get();
        return view('orders.index', compact('orders'));
    }

    /**
     * Logika Checkout / Simpan Pesanan Baru
     */
    public function store(Request $request)
    {
        // 1. Validasi input
        $request->validate([
            'items' => 'required|array',
            'items.*.menu_id' => 'required|exists:menus,id',
            'items.*.quantity' => 'required|integer|min:1',
            'payment_method' => 'required',
        ]);

        // Gunakan Database Transaction agar jika satu gagal, semua dibatalkan (aman!)
        return DB::transaction(function () use ($request) {
            
            // 2. Buat Nomor Order Unik
            $orderNumber = 'INV-' . strtoupper(uniqid());

            // 3. Simpan ke Tabel Orders (Data Utama)
            $order = Order::create([
                'user_id' => auth()->id() ?? 1,
                'store_id' => 1, 
                'order_number' => $orderNumber,
                'total_price' => 0, 
                'status' => 'diproses',
                'payment_method' => $request->payment_method,
                'payment_status' => 'pending',
            ]);

            $totalPrice = 0;

            // 4. Looping Simpan ke Tabel Order Details
            foreach ($request->items as $item) {
                $menu = Menu::lockForUpdate()->find($item['menu_id']);
                
                $subtotal = $menu->price * $item['quantity'];
                $totalPrice += $subtotal;

                OrderDetail::create([
                    'order_id' => $order->id,
                    'menu_id' => $menu->id,
                    'quantity' => $item['quantity'],
                    'price_at_purchase' => $menu->price,
                ]);

                // 5. Kurangi stok menu
                $menu->decrement('stock', $item['quantity']);
            }

            // 6. Update Total Harga Final
            $order->update(['total_price' => $totalPrice]);

            return redirect()->route('orders.index')->with('success', 'Pesanan ' . $orderNumber . ' berhasil dibuat!');
        });
    }

    /**
     * Update Status & Logika Pengembalian Stok jika Batal
     */
    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:diproses,siap,selesai,batal'
        ]);

        $order = Order::with('details.menu')->findOrFail($id);
        
        // Logika: Jika status diubah ke 'batal', kembalikan stok menu
        if ($request->status == 'batal' && $order->status != 'batal') {
            foreach ($order->details as $detail) {
                if ($detail->menu) {
                    $detail->menu->increment('stock', $detail->quantity);
                }
            }
        }

        $order->update(['status' => $request->status]);

        return back()->with('success', 'Status pesanan diperbarui menjadi ' . $request->status);
    }
}