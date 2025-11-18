@extends('layouts.sidebar')

@section('content')
    <main class="flex flex-col w-full bg-gradient-to-b from-amber-50/30 to-orange-50/30 my-10">
    <div class="max-w-4xl mx-auto w-full">
        
        <!-- Header Section -->
        <a href="{{ route('dashboard') }}" class="bg-[#3C2E22] text-white px-4 py-2 rounded-lg hover:bg-[#8f796a]  transition"> <i class="bi bi-arrow-left"></i> Kembali</a>    
        <h1 class="text-4xl font-semibold text-[#3C2E22] my-5">Cari Resep</h1>
        <form action="" class="mt-5">
            @csrf
            <div class="flex bg-[#3C2E22] rounded-lg px-2 py-3 w-2/3">
                <input type="text" name="search" placeholder="Cari resep..." class="w-full px-4 py-2 border border-[#3C2E22] rounded-l-lg focus:outline-none focus:ring-2 focus:ring-[#3C2E22]">
                <button type="submit" class="bg-[#564638] text-white px-4 py-2  rounded-r-lg hover:bg-[#8f796a]  transition"><i class="bi bi-search"></i></button>
            </div>
        </form>

        <div class="flex flex-col my-10">
            <div class="card w-full rounded-lg shadow-md flex flex-row border border-gray-300 my-5">
                <img src="{{ asset('images/herocookies.png') }}" alt="" class="w-1/3 rounded-lg">
                <div class="w- p-4">
                    <h2 class="text-2xl font-bold text-[#3C2E22]">Resep Cookies</h2>
                    <p class="text-[#564638] my-2">Ini adalah resep cookies yang enak dan mudah diolah. Cukup ikuti langkah-langkahnya dan Anda akan memiliki cookies yang lezat di tangan.</p>
                    <a href="{{ route('profile') }}" class="flex items-center">
                        <img src="{{ asset('images/profile.jpeg') }}" alt="" class="w-10 rounded-full">
                        <p class="text-[#564638] ml-2">@User123</p>
                    </a>
                    
                </div>
                <form action="" class=" p-4">
                    @csrf
                    <button type="submit" class="bg-[#564638] text-white px-4 py-2 rounded-lg hover:bg-[#8f796a]  transition"><i class="bi bi-heart"></i></button>
                </form>
            </div>
            <div class="card w-full rounded-lg shadow-md flex flex-row border border-gray-300 my-5">
                <img src="{{ asset('images/herocookies.png') }}" alt="" class="w-1/3 rounded-lg">
                <div class="w- p-4">
                    <h2 class="text-2xl font-bold text-[#3C2E22]">Resep Cookies</h2>
                    <p class="text-[#564638] my-2">Ini adalah resep cookies yang enak dan mudah diolah. Cukup ikuti langkah-langkahnya dan Anda akan memiliki cookies yang lezat di tangan.</p>
                    <a href="{{ route('profile') }}" class="flex items-center">
                        <img src="{{ asset('images/profile.jpeg') }}" alt="" class="w-10 rounded-full">
                        <p class="text-[#564638] ml-2">@User123</p>
                    </a>
                    
                </div>
                <form action="" class=" p-4">
                    @csrf
                    <button type="submit" class="bg-[#564638] text-white px-4 py-2 rounded-lg hover:bg-[#8f796a]  transition"><i class="bi bi-heart"></i></button>
                </form>
            </div>
            <div class="card w-full rounded-lg shadow-md flex flex-row border border-gray-300 my-5">
                <img src="{{ asset('images/herocookies.png') }}" alt="" class="w-1/3 rounded-lg">
                <div class="w- p-4">
                    <h2 class="text-2xl font-bold text-[#3C2E22]">Resep Cookies</h2>
                    <p class="text-[#564638] my-2">Ini adalah resep cookies yang enak dan mudah diolah. Cukup ikuti langkah-langkahnya dan Anda akan memiliki cookies yang lezat di tangan.</p>
                    <a href="{{ route('profile') }}" class="flex items-center">
                        <img src="{{ asset('images/profile.jpeg') }}" alt="" class="w-10 rounded-full">
                        <p class="text-[#564638] ml-2">@User123</p>
                    </a>
                    
                </div>
                <form action="" class=" p-4">
                    @csrf
                    <button type="submit" class="bg-[#564638] text-white px-4 py-2 rounded-lg hover:bg-[#8f796a]  transition"><i class="bi bi-heart"></i></button>
                </form>
            </div>
        </div>

        <!-- Load More Button -->
        <div class="text-center py-8">
            <button class="bg-gradient-to-r from-amber-600 to-amber-700 hover:from-amber-700 hover:to-amber-800 text-white px-8 py-3 rounded-xl font-semibold shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300">
                Muat Lebih Banyak
            </button>
        </div>

    </div>
</main>
@endsection
