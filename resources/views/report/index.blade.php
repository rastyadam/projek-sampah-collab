<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-6">Orderan Masuk</h1>

    <div class="overflow-x-auto bg-white rounded-lg shadow">
        <table class="min-w-full leading-normal">
            <thead>
                <tr class="bg-gray-100 border-b">
                    <th class="px-5 py-3 text-left text-xs font-semibold text-gray-600 uppercase">No. Pesanan</th>
                    <th class="px-5 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Item</th>
                    <th class="px-5 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Total</th>
                    <th class="px-5 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Status</th>
                    <th class="px-5 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                <tr class="border-b">
                    <td class="px-5 py-5 text-sm font-bold">{{ $order->order_number }}</td>
                    <td class="px-5 py-5 text-sm">
                        @foreach($order->details as $detail)
                            <p>{{ $detail->menu->name }} (x{{ $detail->quantity }})</p>
                        @endforeach
                    </td>
                    <td class="px-5 py-5 text-sm">Rp{{ number_format($order->total_price) }}</td>
                    <td class="px-5 py-5 text-sm">
                        <span class="px-3 py-1 rounded-full text-xs font-bold 
                            {{ $order->status == 'diproses' ? 'bg-yellow-100 text-yellow-700' : 'bg-blue-100 text-blue-700' }}">
                            {{ strtoupper($order->status) }}
                        </span>
                    </td>
                    <td class="px-5 py-5 text-sm">
                        <form action="{{ route('orders.updateStatus', $order->id) }}" method="POST">
                            @csrf @method('PATCH')
                            <select name="status" onchange="this.form.submit()" class="text-xs border rounded p-1">
                                <option value="diproses" {{ $order->status == 'diproses' ? 'selected' : '' }}>Diproses</option>
                                <option value="siap" {{ $order->status == 'siap' ? 'selected' : '' }}>Siap</option>
                                <option value="selesai" {{ $order->status == 'selesai' ? 'selected' : '' }}>Selesai</option>
                                <option value="batal" {{ $order->status == 'batal' ? 'selected' : '' }}>Batal</option>
                            </select>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>