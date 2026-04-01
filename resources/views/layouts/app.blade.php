<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kantin Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-slate-50 to-indigo-50 font-sans">
    <div class="flex h-screen">
        <div class="w-64 bg-gradient-to-b from-indigo-800 to-indigo-900 text-white shadow-2xl flex flex-col">
<div class="p-6 text-xl font-bold border-b border-indigo-800 shadow-lg">🍽️ Panel Penjual</div>
            <nav class="flex-1 p-6 space-y-3 pt-8">
                <a href="/dashboard" class="flex items-center px-4 py-3 rounded-xl hover:bg-indigo-700 transition-all duration-200 shadow-md">
                    <span class="mr-3 text-lg">📊</span> Dashboard
                </a>
                <a href="/menu" class="flex items-center px-4 py-3 rounded-xl hover:bg-indigo-700 transition-all duration-200 shadow-md bg-indigo-700/50">
                    <span class="mr-3 text-lg">🍴</span> Kelola Menu
                </a>
                <a href="/orders/incoming" class="flex items-center px-4 py-3 rounded-xl hover:bg-indigo-700 transition-all duration-200 shadow-md">
                    <span class="mr-3 text-lg">🔔</span> Order Masuk
                </a>
                <a href="/reports" class="flex items-center px-4 py-3 rounded-xl hover:bg-indigo-700 transition-all duration-200 shadow-md">
                    <span class="mr-3 text-lg">📈</span> Laporan
                </a>
            </nav>
            <div class="p-6 border-t border-indigo-800 shadow-lg">
                <button class="w-full bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-xl transition-all duration-200 font-medium">Logout</button>
            </div>
        </div>

        <div class="flex-1 flex flex-col overflow-hidden">
            <header class="bg-white/80 backdrop-blur-md shadow-sm p-4 flex justify-between items-center border-b border-gray-200">
                <div class="flex items-center space-x-3">
                    <h2 id="page-title" class="text-2xl font-bold bg-gradient-to-r from-gray-800 to-gray-600 bg-clip-text text-transparent">Dashboard</h2>
                </div>
            </header>

            <main class="flex-1 overflow-y-auto p-8">
                @yield('content')
            </main>
        </div>
    </div>

    <script>
        // Dynamic page title
        document.title = document.getElementById('page-title')?.textContent + ' - Kantin Admin' || 'Kantin Admin';
    </script>
</body>
</html>
