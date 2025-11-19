@extends('layouts.sidebar')

@section('content')
<div class="max-w-6xl mx-auto px-6 py-10">
    <h1 class="text-4xl font-bold text-amber-900 mb-8 text-center">Your Recipes</h1>

    @if(session('success'))
    <div class="bg-green-100 text-green-800 px-4 py-2 rounded mb-6">
        {{ session('success') }}
    </div>
    @endif

    @if(!$recipe->isEmpty())
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 justify-items-center">
        @foreach($recipe as $item)
        <div class="bg-white shadow-lg rounded-xl overflow-hidden w-full md:w-3/4">
            <div class="flex items-center justify-center mt-3">
                <img src="{{ $item->gambar ? asset('storage/' . $item->gambar) : asset('images/default.jpg') }}"
                    alt="{{ $item->nama }}"
                    class="w-3/4 h-56 object-cover object-center rounded-xl border-4 border-[#3C2E22] shadow-md">
            </div>
            <div class="p-6">
                <h2 class="text-2xl font-semibold mb-1 text-amber-800 text-center">{{ $item->nama }}</h2>
                <p class="text-amber-700 mb-2 text-center">{{ $item->kategori->nama ?? 'Kategori tidak tersedia' }}</p>
                <div class="flex justify-center items-center gap-4 mt-4">
                    <a href="{{ route('recipes.show', $item->id_recipe) }}" class="bg-amber-600 text-white px-4 py-2 rounded-lg font-semibold hover:bg-amber-700 transition">Lihat</a>
                    <a href="{{ route('recipes.edit', $item->id_recipe) }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg font-semibold hover:bg-blue-700 transition">Edit</a>
                    <form action="{{ route('recipes.destroy', $item->id_recipe) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus resep ini?')">
                        @csrf
                        @method('DELETE')
                        <button class="bg-red-600 text-white px-4 py-2 rounded-lg font-semibold hover:bg-red-700 transition">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endif

</div>
@endsection