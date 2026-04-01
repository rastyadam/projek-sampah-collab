@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded-lg shadow max-w-2xl mx-auto">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Detail Menu: {{ $menu->name }}</h1>
        <div class="space-x-2">
            <a href="{{ route('menu.edit', $menu) }}" class="bg-yellow-600 text-white px-4 py-2 rounded-lg hover:bg-yellow-700">Edit</a>
            <a href="{{ route('menu.index') }}" class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700">Kembali</a>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div>
            @if($menu->image)
                <img src="{{ asset('storage/' . $menu->image) }}" alt="{{ $menu->name }}" class="w-full h-64 object-cover rounded-lg shadow-md">
            @else
                <div class="w-full h-64 bg-gray-200 rounded-lg flex items-center justify-center text-gray-500 text-lg">No Image</div>
            @endif
        </div>
        <div class="space-y-4">
            <div>
                <h2 class="text-xl font-bold text-gray-900">{{ $menu->name }}</h2>
                <span class="inline-block px-3 py-1 bg-blue-100 text-blue-800 text-sm font-semibold rounded-full mt-2">{{ ucwords(str_replace('-', ' ', $menu->category)) }}</span>
            </div>
            <div>
                <p class="text-3xl font-bold text-green-600">Rp {{ number_format($menu->price) }}</p>
            </div>
            <div class="grid grid-cols-2 gap-4 text-sm">
                <div>
                    <span class="text-gray-500">Stok:</span>
                    <p class="font-semibold {{ $menu->stock > 0 ? 'text-green-600' : 'text-red-600' }}">{{ $menu->stock }}</p>
                </div>
                <div>
                    <span class="text-gray-500">Status:</span>
                    <p class="font-semibold {{ $menu->is_available ? 'text-green-600' : 'text-red-600' }}">{{ $menu->is_available ? 'Tersedia' : 'Habis' }}</p>
                </div>
            </div>
            @if($menu->description)
                <div>
                    <span class="text-gray-500 block mb-1">Deskripsi:</span>
                    <p class="text-gray-900 whitespace-pre-wrap">{{ $menu->description }}</p>
                </div>
            @endif
            <div class="text-xs text-gray-500">
                Dibuat: {{ $menu->created_at->format('d/m/Y H:i') }}
            </div>
        </div>
    </div>
</div>
@endsection
