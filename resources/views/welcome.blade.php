@extends('layouts.app')

@section('content')
<div class="h-5"></div>
<section class="px-4 md:px-8 max-w-7xl mx-auto w-full mt-12">
    <div class="flex flex-col lg:flex-row w-full gap-16 justify-center items-center">
        
        <!-- BAGIAN GAMBAR -->
        <div class="relative flex-1 flex justify-center items-center">
            <div class="bg-[#564638] w-[150px] md:w-[250px] h-[300px] md:h-[400px] rounded-b-2xl relative flex items-center justify-center">
            </div>
            <img 
            src="{{ asset('images/herocake.png') }}" 
                alt="Strawberry Cake Slice on a Plate" 
                class="absolute w-[300px] md:w-[400px] h-auto object-contain animate-[spin_20s_linear_infinite]" 
            />
        </div>

        <!-- BAGIAN TEKS -->
        <div class="flex-2 text-center justify-center items-center">
            <h2 class="text-4xl md:text-6xl font-extrabold leading-tight text-[#3C2E22]">
                SWEET DELIGHT’S RECIPES
            </h2>
            <p class="text-xl md:text-2xl font-medium mb-8 mt-4 text-[#564638]">
                Cari resep kue favoritmu di sini!
            </p>

            <form action="/recipes/search" method="GET" class="relative w-full mx-auto">
                <div class="absolute inset-0 bg-[#3C2E22] rounded-lg blur opacity-30"></div>
                <div class="relative bg-white rounded-2xl shadow-xl overflow-hidden border-4 border-[#3C2E22]">
                    <div class="flex items-stretch">
                        <input
                            type="text"
                            name="q"
                            placeholder="Cari resep..."
                            class="flex-1 px-6 py-4 text-lg focus:outline-none text-amber-900 placeholder-amber-400"
                        />
                        <button 
                            type="submit" 
                            class="flex-shrink-0 px-8 py-4 bg-[#564638] hover:bg-amber-700 text-white transition-colors duration-300 flex items-center justify-center"
                        >
                            <i class="bi bi-search text-2xl"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Recipe Categories -->
<section class="container mx-auto px-4 py-16">
    <div class="flex flex-wrap gap-10">

        @php
        $categories = [
            ['name' => 'Cookies', 'image' => 'cookies.png'],
            ['name' => 'Cheesecake', 'image' => 'cheesecake.png'],
            ['name' => 'Cupcake', 'image' => 'cupcake.png'],
            ['name' => 'Donat', 'image' => 'donat.png'],
            ['name' => 'Bolu', 'image' => 'bolu.png'],
            ['name' => 'Pie', 'image' => 'pie.png']
        ];
        @endphp

        @foreach ($categories as $category)
        <div class="card flex w-full sm:w-[48%] lg:w-[30%] relative hover:-translate-y-2 transition-all duration-300">
            <div class="w-1/3 flex justify-center items-center relative">
                <img 
                    src="{{ asset('images/' . $category['image']) }}" 
                    alt="{{ $category['name'] }}" 
                    class="absolute z-10 w-100 -right-16 top-1/2 -translate-y-1/2"
                >
            </div>
            <div class="p-6 bg-[#564638] w-2/3 rounded-lg flex flex-col justify-center items-center space-y-4 shadow-2xl">
                <h3 class="text-3xl font-extrabold text-white">{{ $category['name'] }}</h3>
                <a href="#" class="text-white text-lg font-semibold bg-[#3C2E22] px-6 py-2 rounded-2xl hover:bg-amber-800 transform hover:-translate-y-1 duration-200">
                    Lihat <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</section>

<!-- CTA Section -->
<section class="container mx-auto px-4 py-20">
    <div class="relative overflow-hidden rounded-3xl bg-gradient-to-r from-[#564638] to-[#3C2E22] text-2xl">
        <div class="absolute top-0 right-0 w-1/2 h-full opacity-10">
            <div class="grid grid-cols-2 gap-4 p-8">
                <img src="https://images.unsplash.com/photo-1562376552-0d160a2f238d?w=150&h=150&fit=crop" alt="" class="rounded-2xl transform rotate-6">
                <img src="https://images.unsplash.com/photo-1567620905732-2d1ec7ab7445?w=150&h=150&fit=crop" alt="" class="rounded-2xl transform -rotate-6">
                <img src="https://images.unsplash.com/photo-1614707267537-b85aaf00c4b7?w=150&h=150&fit=crop" alt="" class="rounded-2xl transform rotate-3">
                <img src="https://images.unsplash.com/photo-1533134486753-c833f0ed4866?w=150&h=150&fit=crop" alt="" class="rounded-2xl transform -rotate-3">
            </div>
        </div>
        
        <div class="relative z-10 text-center py-20 px-4">
            <h3 class="text-4xl md:text-5xl font-extrabold text-white mb-6">
                IKUT SHARING TENTANG RESEP<br />RESEPMU SEKARANG
            </h3>
            <a href="/register" class="inline-block bg-[#847568] hover:bg-amber-600 text-white px-10 py-4 rounded-xl text-xl font-bold transition-all duration-300 shadow-xl hover:shadow-2xl transform hover:-translate-y-1">
                Mulai Sharing
            </a>
        </div>
    </div>
</section>
@endsection
