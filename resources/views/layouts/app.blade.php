<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
    <header class="fixed w-full top-0 bg-[#564638] shadow-lg z-50 px-20">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-amber-600 rounded-lg flex items-center justify-center">
                    <span class="text-2xl">🍰</span>
                </div>
                <h1 class="text-2xl font-bold text-white">SWEET DELIGHT</h1>
            </div>

            @auth
                <div class="space-x-4 flex items-center">
                <span class="text-white font-semibold">{{ Auth::user()->name }}</span>
                <a href="" class="bg-[#851111] text-white px-6 py-2 rounded-lg font-semibold hover:bg-[#9b8a7a] transition-all">
                    Logout
                </a>
                </div>
            @else
                <a href="{{ route('login') }}" class="bg-[#847568] text-white px-6 py-2 rounded-lg font-semibold hover:bg-[#9b8a7a] transition-all">
                    + Tulis Resep
                </a>
            @endauth
        </div>
    </header>
    <main class="">
        @yield('content')
    </main>
    <footer class="bg-[#564638] text-white py-12 mt-12 px-20">
        <div class="container mx-auto px-6 grid md:grid-cols-3 gap-8">
            <div>
                <div class="flex items-center space-x-3 mb-4">
                    <div class="w-10 h-10 bg-amber-600 rounded-lg flex items-center justify-center">
                        <span class="text-2xl">🍰</span>
                    </div>
                    <h3 class="text-2xl font-bold">SWEET DELIGHT</h3>
                </div>
                <p class="text-amber-200">
                    Platform berbagi resep makanan terbaik untuk kamu yang suka memasak dan berbagi.
                </p>
            </div>

            <div>
                <h4 class="text-xl font-bold mb-4">Menu</h4>
                <ul class="space-y-2 text-amber-200">
                    <li><a href="#" class="hover:text-white transition-colors">Beranda</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Semua Resep</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Tentang Kami</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Kontak</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-xl font-bold mb-4">Ikuti Kami</h4>
                <div class="flex space-x-4">
                    <a href="#" class="w-10 h-10 bg-amber-700 hover:bg-amber-600 rounded-lg flex items-center justify-center transition-colors">
                        📘
                    </a>
                    <a href="#" class="w-10 h-10 bg-amber-700 hover:bg-amber-600 rounded-lg flex items-center justify-center transition-colors">
                        📷
                    </a>
                    <a href="#" class="w-10 h-10 bg-amber-700 hover:bg-amber-600 rounded-lg flex items-center justify-center transition-colors">
                        🐦
                    </a>
                </div>
            </div>
        </div>

        <div class="border-t border-amber-700 mt-8 pt-8 text-center text-amber-200">
            <p>&copy; 2024 Sweet Delight. All rights reserved.</p>
        </div>
    </footer>
    </body>
</html>
