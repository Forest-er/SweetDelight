<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    @vite (['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<div class="min-h-screen flex bg-gray-50 text-gray-900">
    <div class="w-64 flex-shrink-0"></div>

    <aside class="w-80 bg-[#3C2E22] text-white flex flex-col justify-between py-8 px-10 fixed h-full z-50 shadow-2xl rounded-r-2xl">
        
        <div class="flex flex-col space-y-12">
            <h1 class="text-4xl font-extrabold text-center tracking-wider pb-4">
                SWEET DELIGHT
            </h1>

            <nav class="flex flex-col space-y-2">
                
                {{-- Contoh variabel aktif (Ganti dengan logic Blade yang sebenarnya) --}}
                @php $currentRoute = 'beranda'; @endphp 

                @php
                    $navItems = [
                        ['name' => 'Beranda', 'route' => route('dashboard'), 'icon' => '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l-2 2m2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 100-2z"/></svg>', 'key' => 'beranda'],
                        ['name' => 'Profile', 'route' => route('profile'), 'icon' => '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14c4.418 0 8 2.015 8 4v2H4v-2c0-1.985 3.582-4 8-4z"/></svg>', 'key' => 'profile'],
                        ['name' => 'Explore', 'route' => route('search'), 'icon' => '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>', 'key' => 'explore'],
                        ['name' => 'Your Recipe', 'route' => '#', 'icon' => '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0h2m-2 0h2m0 0h2v-2c0-.55.45-1 1-1h2a1 1 0 011 1v2h2m-6 0h2m-2 0h2m0 0h2v-2c0-.55.45-1 1-1h2a1 1 0 011 1v2h2"/></svg>', 'key' => 'recipes'],
                    ];
                @endphp

                @foreach ($navItems as $item)
                    @php
                        $isActive = $item['key'] === $currentRoute;
                        $baseClass = 'flex items-center space-x-3 py-2.5 px-3 rounded-xl text-base font-medium transition duration-300 transform hover:scale-[1.03]';
                        // Konsistensi Warna: bg-amber-600 untuk aktif, hover:bg-amber-700/50 untuk interaksi
                        $activeClass = $isActive ? 'bg-amber-600 text-white shadow-md' : 'hover:bg-amber-700/40 hover:text-amber-400 text-gray-200';
                    @endphp
                    
                    <a href="{{ $item['route'] }}" class="{{ $baseClass }} {{ $activeClass }}">
                        {!! $item['icon'] !!}
                        <span>{{ $item['name'] }}</span>
                    </a>
                @endforeach
            </nav>
        </div>
    
        <form action="{{ route('logout') }}" method="POST" class="w-full mt-10">
            @csrf
            <button type="submit" class="w-full flex items-center justify-center space-x-2 bg-red-600 hover:bg-red-700 py-2.5 rounded-xl font-semibold transition duration-200 shadow-lg">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                </svg>
                <span>Logout</span>
            </button>
        </form>

    </aside>

    <main class="w-full py-6">
        @yield('content')
    </main>
</div>
</body>
</html>