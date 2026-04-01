@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded-lg shadow">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Kelola Menu</h1>
        <a href="{{ route('menu.create') }}" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition">+ Tambah Menu</a>
    </div>

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    @if($menus->count() > 0)
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr class="bg-gray-50">
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Gambar</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Kategori</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Harga</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Stok</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach($menus as $menu)
                    <tr>
                        <td class="px-6 py-4">
                            @if($menu->image)
                                <img src="{{ asset('storage/' . $menu->image) }}" alt="{{ $menu->name }}" class="w-16 h-16 object-cover rounded">
                            @else
                                <div class="w-16 h-16 bg-gray-200 rounded flex items-center justify-center text-sm text-gray-500">No Image</div>
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            <div class="font-semibold">{{ $menu->name }}</div>
                            @if($menu->description)
                                <div class="text-sm text-gray-500">{{ Str::limit($menu->description, 50) }}</div>
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            <span class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">
                                {{ ucwords(str_replace('-', ' ', $menu->category)) }}
                            </span>
                        </td>
                        <td class="px-6 py-4 text-right font-semibold text-green-600">
                            Rp {{ number_format($menu->price) }}
                        </td>
                        <td class="px-6 py-4 text-right">
                            <span class="font-semibold {{ $menu->stock > 0 ? 'text-green-600' : 'text-red-600' }}">
                                {{ $menu->stock }}
                            </span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="px-2 py-1 text-xs font-semibold rounded-full 
                                {{ $menu->is_available ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                {{ $menu->is_available ? 'Tersedia' : 'Habis' }}
                            </span>
                        </td>
                        <td class="px-6 py-4 text-sm font-medium space-x-2">
                            <a href="{{ route('menu.edit', $menu) }}" class="text-blue-600 hover:text-blue-900">Edit</a>
                            <form action="{{ route('menu.destroy', $menu) }}" method="POST" class="inline" onsubmit="return confirm('Hapus menu ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="text-center py-12">
            <p class="text-gray-500 text-lg">Belum ada menu. <a href="{{ route('menu.create') }}" class="text-blue-600 font-semibold">Tambah sekarang!</a></p>
        </div>
    @endif
</div>
@endsection
