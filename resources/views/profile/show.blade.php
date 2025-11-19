    @extends('layouts.sidebar')

    @section('content')
    <div class="max-w-6xl mx-auto py-10">

        <!-- Profile Header -->
        <div class="flex flex-col items-center mb-10">
            <img src="{{ asset('images/profile.jpeg') }}" alt="Profile" class="w-32 h-32 rounded-full mb-4">
            <h1 class="text-3xl font-bold">{{ $user->name }}</h1>
            <p class="text-gray-500">{{ $user->email }}</p>
            <div class="flex gap-6 mt-2">
                <span>{{ $user->following()->count() }} mengikuti</span>
                <span>{{ $user->followers()->count() }} pengikut</span>

            </div>
            <a href="{{ route('recipe.add') }}" class="mt-4 px-6 py-2 bg-amber-600 text-white rounded-lg hover:bg-amber-700 transition">
                <i class="bi bi-plus-lg"></i> Tambah Resep
            </a>
        </div>

        <!-- Recipes List -->
        <div class="flex flex-col items-center">
            <h2 class="text-2xl font-bold text-amber-900 mb-4 text-center">Resep yang Dipublikasikan</h2>

            @forelse($recipes as $recipe)
            <div class="bg-white shadow-lg rounded-xl overflow-hidden mb-6 w-full md:w-3/4">

                <!-- Gambar -->
                <div class="flex items-center justify-center gap-3 mt-3">

                    <img
                        src="{{ $recipe->gambar ? asset('storage/' . $recipe->gambar) : asset('images/default.jpg') }}"
                        alt="{{ $recipe->nama }}"
                        class="w-3/4 h-56 object-cover object-center rounded-xl border-4 border-[#3C2E22] shadow-md">
                </div>


                <div class="p-6">
                    <!-- Judul -->
                    <h3 class="text-xl font-bold text-amber-800 text-center"">{{ $recipe->nama }}</h3>

                    <!-- Deskripsi -->
                    <p class=" text-gray-700 mb-2 text-center">{{ Str::limit($recipe->deskripsi, 100) }}</p>

                        <!-- Kategori -->
                        <p class="text-sm text-gray-500 mb-2 text-center">
                            Kategori:
                            <span class="font-semibold">
                                {{ $recipe->kategori->nama ?? 'Tidak ada' }}
                            </span>
                        </p>

                        <!-- Tombol Aksi -->
                        <div class="flex items-center justify-center gap-3 mt-3">


                            <!-- Detail -->
                            <a
                                href="{{ route('recipes.show', $recipe->id_recipe) }}"
                                class="px-4 py-2 bg-amber-600 text-white rounded-lg hover:bg-amber-700 transition ">
                                Lihat Detail
                            </a>

                            <!-- Edit -->
                            <a
                                href="{{ route('recipes.edit', $recipe->id_recipe) }}"
                                class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                                Edit
                            </a>

                            <!-- Hapus -->
                            <form action="{{ route('recipes.destroy', $recipe->id_recipe) }}" method="POST"
                                onsubmit="return confirm('Yakin ingin menghapus resep ini?')">
                                @csrf
                                @method('DELETE')
                                <button
                                    type="submit"
                                    class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition">
                                    Hapus
                                </button>
                            </form>

                        </div>
                </div>

            </div>
            @empty
            <p class="text-gray-700 text-center">Belum ada resep yang kamu publikasikan.</p>
            @endforelse

        </div>



    </div>
    @endsection