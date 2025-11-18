@extends('layouts.sidebar')

@section('content')
    <a href="{{ route('dashboard') }}" class="bg-[#851111] text-white ml-20 px-6 py-2 rounded-lg font-semibold hover:bg-[#9b8a7a] transition-all">
                    <i class="bi bi-arrow-left"></i> Kembali ke Beranda
                </a>
    <div class="hero flex flex-col items-center gap-8">
        <h1 class="text-5xl font-extrabold text-center">Cookies Coklat</h1>
        <img src="{{ asset('images/herocookies.png') }}" alt="" class="w-1/2 rounded-xl border-8 border-[#3C2E22]">
        <div class="card flex shadow-lg w-1/2 border rounded-2xl px-4 py-2  items-center justify-between">
            <div class="flex items-center gap-4">
                <img src="{{ asset('images/profile.jpeg') }}" alt="" class="w-12 h-12 rounded-full">
                <h1 class="text-2xl font-semibold">{{ auth()->user()->name }}</h1>
            </div>
            <form action="">
                @csrf
                <button class="bg-[#3C2E22] text-white px-4 py-2 rounded-lg font-semibold hover:bg-amber-800 duration-200">
                    <i class="bi bi-bookmark-fill"></i> Simpan Resep
                </button>
                <button class="bg-[#3C2E22] text-white px-4 py-2 rounded-lg font-semibold hover:bg-amber-800 duration-200">
                    <i class="bi bi-person-plus-fill"></i> Ikuti
                </button>
            </form>
        </div>
        <div class="description max-w-4xl text-xl">
            <p>
                Cookies coklat adalah kue kering yang terbuat dari adonan tepung, gula, mentega, dan potongan coklat. 
                Cookies ini memiliki tekstur renyah di luar dan lembut di dalam, dengan rasa manis yang khas dari coklat. 
                Cocok dinikmati sebagai camilan atau teman minum teh/kopi.
            </p>
    </div>
    </div>
<section class="max-w-4xl my-10 mx-auto bg-white">
    <div class="mb-6">
        <h2 class="text-3xl font-semibold mb-2">Bahan</h2>
        <ul class="list-disc list-inside text-gray-700 space-y-1 text-xl">
            <li>Mentega atau margarin, dilunakkan 120 gr</li>
            <li>Gula merah 75 gr</li>
            <li>Gula halus 75 gr</li>
            <li>Telur sedang 1 butir</li>
            <li>Ekstrak vanila 1 sdt</li>
            <li>Tepung terigu 180 gr</li>
            <li>Baking powder ½ sdt</li>
            <li>Garam ¼ sdt</li>
            <li>Choco chips 150 gr</li>
        </ul>
    </div>

    <!-- Cara Memasak -->
    <div class="mb-10">
        <h2 class="text-3xl font-semibold mb-2">Cara Memasak</h2>
        <ol class="list-decimal list-inside text-gray-700 space-y-2 text-xl">
            <li>
                <span class="font-medium">Adonan Cookies</span><br>
                Kocok mentega, gula merah, dan gula halus hingga lembut.  
                Tambahkan telur dan vanila, aduk rata.
            </li>
            <li>
                <span class="font-medium">Campuran Kering</span><br>
                Masukkan tepung, baking powder, dan garam, aduk hingga jadi adonan.  
                Tambahkan chocochips, aduk rata.
            </li>
            <li>
                <span class="font-medium">Pemanggangan</span><br>
                Bentuk bulat kecil, taruh di loyang.  
                Panggang suhu 170°C selama 15–20 menit hingga matang.
            </li>
        </ol>
    </div>

    <!-- Garis pembatas -->
    <hr class="border-t border-gray-300 mb-6">

    <!-- Komentar -->
    <div>
        <h3 class="text-2xl font-semibold mb-3">Komentar</h3>
        <!-- Input komentar -->
        <div class="flex items-center mb-4">
            <input type="text" placeholder="Tulis komentar" class="flex-grow border border-gray-300 rounded-l-md p-2 focus:outline-none focus:ring-2 focus:ring-amber-600">
            <button class="bg-[#3C2E22] text-white px-4 py-2 rounded-r-md hover:bg-amber-800 duration-200">
                <i class="bi bi-send"></i>
            </button>
        </div>

        <!-- Daftar komentar -->
        <div class="space-y-4">
            <div class="border rounded-md p-3">
                <div class="flex flex-row">
                    <img src="{{ asset('images/profile.jpeg') }}" alt="" class="w-20 h-20 rounded-full">
                    <div class="ml-3">
                        <p class="font-semibold text-xl">User 01</p>
                        <p class="text-gray-700 text-lg mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit...</p>
                        <p class="text-md text-gray-500">14-10-2025</p>
                    </div>
                </div>
            </div>

            <div class="border rounded-md p-3">
                <div class="flex flex-row">
                    <img src="{{ asset('images/profile.jpeg') }}" alt="" class="w-20 h-20 rounded-full">
                    <div class="ml-3">
                        <p class="font-semibold text-xl">User 01</p>
                        <p class="text-gray-700 text-lg mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit...</p>
                        <p class="text-md text-gray-500">14-10-2025</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection