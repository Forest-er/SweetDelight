<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])


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
                    @php
                    $currentRoute = Route::currentRouteName();
                    @endphp

                    @php
                    $navItems = [
                    ['name' => 'Beranda', 'route' => route('dashboard'), 'icon' => '', 'key' => 'dashboard'],
                    ['name' => 'Profile', 'route' => route('profile'), 'icon' => '', 'key' => 'profile'],
                    ['name' => 'Explore', 'route' => route('search'), 'icon' => '', 'key' => 'search'],
                    ['name' => 'Your Recipes', 'route' => route('recipes'), 'icon' => '', 'key' => 'recipes'],


                    ];
                    @endphp

                    @foreach ($navItems as $item)
                    @php
                    $isActive = $currentRoute === $item['key'];
                    $baseClass = 'flex items-center space-x-3 py-2.5 px-3 rounded-xl text-base font-medium transition duration-300 transform hover:scale-[1.03]';
                    $activeClass = $isActive
                    ? 'bg-amber-600 text-white shadow-md'
                    : 'hover:bg-amber-700/40 hover:text-amber-400 text-gray-200';
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
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                    <span>Logout</span>
                </button>
            </form>

        </aside>

        <div class="w-full py-6">
            @yield('content')
        </div>
    </div>
</body>

</html>