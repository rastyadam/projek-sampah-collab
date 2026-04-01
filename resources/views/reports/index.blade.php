@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded-lg shadow">
    <h1 class="text-2xl font-bold mb-6">Laporan Penjualan</h1>
    
    <!-- Filter Tanggal -->
    <form method="GET" class="mb-6 p-4 bg-gray-50 rounded-lg">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Tanggal Mulai</label>
                <input type="date" name="start_date" value="{{ $start_date->format('Y-m-d') }}" class="w-full border rounded px-3 py-2">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Tanggal Akhir</label>
                <input type="date" name="end_date" value="{{ $end_date->format('Y-m-d') }}" class="w-full border rounded px-3 py-2">
            </div>
            <div class="flex items-end">
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 w-full">Filter</button>
            </div>
        </div>
    </form>

    <!-- Summary Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="p-6 bg-indigo-100 rounded-lg text-center">
            <p class="text-indigo-600 font-semibold text-lg">Total Order</p>
            <p class="text-3xl font-bold text-indigo-800">{{ $total_orders }}</p>
        </div>
        <div class="p-6 bg-green-100 rounded-lg text-center">
            <p class="text-green-600 font-semibold text-lg">Total Pendapatan</p>
            <p class="text-3xl font-bold text-green-800">Rp {{ number_format($total_revenue) }}</p>
        </div>
        <div class="p-6 bg-gray-100 rounded-lg text-center">
            <p class="text-gray-600 font-semibold text-lg">Periode</p>
            <p class="text-xl font-bold">{{ $start_date->format('d/m/Y') }} - {{ $end_date->format('d/m/Y') }}</p>
        </div>
    </div>

    <!-- Tabel Sales -->
    @if($sales->count() > 0)
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr class="bg-gray-50">
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">No</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Pembeli</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Items</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Total</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tanggal</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach($sales as $index => $order)
                    <tr>
                        <td class="px-6 py-4">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4">
                            {{ $order->user->name ?? 'Guest' }}
                        </td>
                        <td class="px-6 py-4">
                            <ul class="list-disc list-inside max-w-xs">
                                @foreach($order->orderItems ?? [] as $item)
                                    <li>{{ $item->product->name ?? 'Item' }} (x{{ $item->quantity ?? 1 }})</li>
                                @endforeach
                            </ul>
                        </td>
                        <td class="px-6 py-4 text-right font-semibold text-green-600">Rp {{ number_format($order->total_price ?? $order->total ?? 0) }}</td>
                        <td class="px-6 py-4 text-sm text-gray-500">{{ $order->created_at->format('d/m/Y H:i') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="text-center py-12 bg-gray-50 rounded-lg">
            <p class="text-gray-500 text-xl">Tidak ada data penjualan di periode ini.</p>
        </div>
    @endif
</div>
@endsection
