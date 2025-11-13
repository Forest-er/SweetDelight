<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>
    @vite (['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<div class="max-h-screen flex bg-white text-gray-900">
<div class="w-64"></div>
  <!-- SIDEBAR -->
  <aside class="w-64 bg-[#3C2E22] text-white flex flex-col justify-between rounded-r-2xl p-6 fixed h-screen z-99">
    <div>
      <!-- Logo -->
      <h1 class="text-2xl font-extrabold mb-10 text-center">SWEET DELIGHT</h1>

      <!-- Navigation -->
      <nav class="flex flex-col space-y-4 text-lg font-medium">
        <a href="#" class="hover:text-amber-400 transition">Beranda</a>
        <a href="#" class="hover:text-amber-400 transition">Profile</a>
        <a href="#" class="hover:text-amber-400 transition">Explore</a>
        <a href="#" class="hover:text-amber-400 transition">Your Recipe</a>
      </nav>
    </div>
  
    <!-- Logout Button -->
    <form action="{{ route('logout') }}" method="POST" class="inline">
        @csrf
        <button type="submit" class="text-white bg-red-600 hover:bg-red-700 py-2 rounded-lg font-semibold transition">Logout</button>
    </form>

  </aside>

<main class="w-full">
    @yield('content')
</main>
</body>
</html>