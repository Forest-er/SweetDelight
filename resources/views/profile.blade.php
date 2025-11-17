@extends('layouts.sidebar')

@section('content')
<main class="flex">
    <div class="h-[320px]"></div>
    <div class="container flex flex-col items-center w-full px-8 py-6 bg-white shadow-lg ml-20">
        <img src="{{ asset('images/profile.jpeg') }}" alt="" class="w-32 h-32 rounded-full">
        <p class="text-lg font-semibold">{{ Auth::user()->name }}!</p>
        <p class="text-xl text-gray-500">{{ Auth::user()->email }}</p>
        <div class="flex gap-10 my-5">
            <p class="text-lg text-gray-500">0 mengikuti</p>
            <p class="text-lg text-gray-500">0 pengikut</p>
        </div>
        <a href="{{ route('recipe/add') }}" class="bg-[#3C2E22] text-white px-4 py-2 rounded-lg font-semibold hover:bg-amber-800 duration-200">
            <i class="bi bi-plus-lg"></i> Tambah Resep
        </a>
        <div class="flex mt-5 w-full justify-evenly">
            <button id="resep" class="w-full py-4">Resep (0)</button>
            <button id="tersimpan" class="w-full py-4">Tersimpan (0)</button>
        </div>

    </div>
</main>

<script>
    const resepButton = document.getElementById('resep');
    const tersimpanButton = document.getElementById('tersimpan');
    let pages = "resep";

    function updateUI() {
        if (pages === "resep") {
            resepButton.classList.add('border-b-4', 'border-blue-500');
            resepButton.classList.remove('border-black');
            
            tersimpanButton.classList.remove('border-b-4', 'border-blue-500');
            tersimpanButton.classList.add('border-b-4', 'border-black');
        } else {
            tersimpanButton.classList.add('border-b-4', 'border-blue-500');
            tersimpanButton.classList.remove('border-black');

            resepButton.classList.remove('border-b-4', 'border-blue-500');
            resepButton.classList.add('border-b-4','border-black');
        }
    }

    resepButton.addEventListener('click', () => {
        pages = "resep";
        updateUI();
    });

    tersimpanButton.addEventListener('click', () => {
        pages = "tersimpan";
        updateUI();
    });

    // panggil saat halaman load
    updateUI();
</script>

@endsection