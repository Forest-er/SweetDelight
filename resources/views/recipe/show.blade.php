    @extends('layouts.sidebar')

    @section('content')
    <a href="{{ route('dashboard') }}" class="bg-[#851111] text-white ml-20 px-6 py-2 rounded-lg font-semibold hover:bg-[#9b8a7a] transition-all">
        <i class="bi bi-arrow-left"></i> Kembali ke Beranda
    </a>

    <div class="hero flex flex-col items-center gap-8 mt-6">
        <h1 class="text-5xl font-extrabold text-center">{{ $recipe->nama }}</h1>
        <img src="{{ asset('storage/' . $recipe->gambar) }}" alt="{{ $recipe->nama }}" class="w-1/2 rounded-xl border-8 border-[#3C2E22]">

        <div class="card flex shadow-lg w-1/2 border rounded-2xl px-4 py-2 items-center justify-between">
            <div class="flex items-center gap-4">
                <img src="{{ asset('images/profile.jpeg') }}" alt="{{ $recipe->user->name }}" class="w-12 h-12 rounded-full">
                <div>
                    <h1 class="text-2xl font-semibold">{{ $recipe->user->name }}</h1>
                    <p class="text-sm text-gray-500">{{ $recipe->kategori->nama ?? 'Kategori tidak tersedia' }}</p>
                </div>
            </div>
        </div>

        <div class="description max-w-4xl text-xl mt-6">
            <p>{{ $recipe->deskripsi }}</p>
        </div>
    </div>

    <section class="max-w-4xl my-10 mx-auto bg-white p-6 rounded-xl shadow-lg">
        <div class="mb-6">
            <h2 class="text-3xl font-semibold mb-2">Bahan</h2>
            <ul class="list-disc list-inside text-gray-700 space-y-1 text-xl">
                @foreach(explode("\n", $recipe->bahan) as $bahan)
                <li>{{ $bahan }}</li>
                @endforeach
            </ul>
        </div>

        <div class="mb-10">
            <h2 class="text-3xl font-semibold mb-2">Cara Memasak</h2>
            <ol class="list-decimal list-inside text-gray-700 space-y-2 text-xl">
                @foreach(explode("\n", $recipe->langkah) as $step)
                <li>{{ $step }}</li>
                @endforeach
            </ol>
        </div>

        <hr class="border-t border-gray-300 mb-6">

        <!-- Komentar (placeholder) -->
        <div>
            <h3 class="text-2xl font-semibold mb-3">Komentar</h3>
            <div class="flex items-center mb-4">
                <input type="text" placeholder="Tulis komentar" class="flex-grow border border-gray-300 rounded-l-md p-2 focus:outline-none focus:ring-2 focus:ring-amber-600">
                <button class="bg-[#3C2E22] text-white px-4 py-2 rounded-r-md hover:bg-amber-800 duration-200">
                    <i class="bi bi-send"></i>
                </button>
            </div>
        </div>
    </section>
    @endsection