@extends('layouts.app')

@section('content')
<div class="min-h-screen p-4 md:p-8" style="background-color: var(--cream-nusa);">
    
    <div class="mb-8 border-b border-gray-200 pb-6">
        <h1 class="text-3xl font-extrabold tracking-tight" style="color: var(--maroon-nusa);">
            Selamat Datang, Pak Kumis! 
            {{-- {{ Auth::user()->name }}! --}}
        </h1>
        <p class="text-gray-500 mt-1 font-medium">
            Pantau aktivitas dan ringkasan kantin Anda hari ini secara real-time.
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        
        <div class="relative overflow-hidden bg-white border border-gray-100 p-6 rounded-2xl shadow-sm hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-semibold uppercase tracking-wider text-gray-400">Total Menu</p>
                    <p class="text-4xl font-black mt-2" style="color: var(--maroon-nusa);">12</p>
                </div>
                <div class="p-3 rounded-xl" style="background-color: rgba(122, 29, 29, 0.1);">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" style="color: var(--maroon-nusa);" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </div>
            </div>
            <div class="absolute bottom-0 left-0 w-full h-1" style="background-color: var(--gold-nusa);"></div>
        </div>

        <div class="relative overflow-hidden bg-white border border-gray-100 p-6 rounded-2xl shadow-sm hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-semibold uppercase tracking-wider text-gray-400">Orderan Baru</p>
                    <div class="flex items-baseline gap-2 mt-2">
                        <p class="text-4xl font-black" style="color: var(--maroon-nusa);">5</p>
                        <span class="text-xs font-bold px-2 py-1 rounded-full bg-green-100 text-green-700">+2 jam ini</span>
                    </div>
                </div>
                <div class="p-3 rounded-xl" style="background-color: rgba(243, 156, 18, 0.1);">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" style="color: var(--gold-nusa);" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
                </div>
            </div>
            <div class="absolute bottom-0 left-0 w-full h-1" style="background-color: var(--maroon-nusa);"></div>
        </div>

    </div>
</div>
@endsection