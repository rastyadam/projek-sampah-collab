@extends('layouts.app')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow">
        <h1 class="text-2xl font-bold text-gray-800">Selamat Datang, Admin!</h1>
        <p class="text-gray-600 mt-2">Ini adalah ringkasan kantin kamu hari ini.</p>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-6">
            <div class="p-4 bg-indigo-100 rounded-lg">
                <p class="text-indigo-600 font-semibold">Total Menu</p>
                <p class="text-3xl font-bold">12</p>
            </div>
            <div class="p-4 bg-green-100 rounded-lg">
                <p class="text-green-600 font-semibold">Orderan Baru</p>
                <p class="text-3xl font-bold">5</p>
            </div>
        </div>
    </div>
@endsection