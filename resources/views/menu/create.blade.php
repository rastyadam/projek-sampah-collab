@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded-lg shadow max-w-2xl mx-auto">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Tambah Menu Baru</h1>
        <a href="{{ route('menu.index') }}" class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition">Kembali</a>
    </div>

    <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                {{ session('success') }}
            </div>
        @endif

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Nama Menu *</label>
            <input type="text" name="name" required class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('name') border-red-500 @enderror" value="{{ old('name') }}">
            @error('name')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Kategori *</label>
                <select name="category" required class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500">
                    <option value="">Pilih Kategori</option>
                    <option value="makanan berat" {{ old('category') == 'makanan berat' ? 'selected' : '' }}>Makanan Berat</option>
                    <option value="minuman" {{ old('category') == 'minuman' ? 'selected' : '' }}>Minuman</option>
                    <option value="snack" {{ old('category') == 'snack' ? 'selected' : '' }}>Snack</option>
                    <option value="paket hemat" {{ old('category') == 'paket hemat' ? 'selected' : '' }}>Paket Hemat</option>
                </select>
                @error('category')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Harga (Rp) *</label>
                <input type="number" name="price" step="0.01" min="0" required class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('price') border-red-500 @enderror" value="{{ old('price') }}">
                @error('price')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Stok *</label>
            <input type="number" name="stock" min="0" required class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('stock') border-red-500 @enderror" value="{{ old('stock') }}">
            @error('stock')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Deskripsi (Opsional)</label>
            <textarea name="description" rows="3" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('description') border-red-500 @enderror">{{ old('description') }}</textarea>
            @error('description')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Foto Menu (Opsional)</label>
            <input type="file" name="image" accept="image/*" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 @error('image') border-red-500 @enderror">
            @error('image')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
            <p class="text-sm text-gray-500 mt-1">Max 2MB, JPG/PNG</p>
        </div>

        <div class="flex space-x-3">
            <button type="submit" class="flex-1 bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 transition font-medium">Simpan Menu</button>
            <a href="{{ route('menu.index') }}" class="flex-1 bg-gray-600 text-white px-6 py-2 rounded-lg hover:bg-gray-700 transition text-center font-medium">Batal</a>
        </div>
    </form>
</div>
@endsection
