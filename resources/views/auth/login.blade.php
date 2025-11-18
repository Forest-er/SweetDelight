@extends('layouts.app')

@section('content')
<div class="h-20"></div>
<div class="flex items-center justify-center min-h-screen p-4">
    
    <div class="w-full max-w-5xl bg-white rounded-3xl shadow-2xl overflow-hidden">
        
        <div class="lg:grid lg:grid-cols-2">
            
            <div class="p-8 md:p-12 lg:p-16 space-y-8">
                
                <div class="space-y-1">
                    <h1 class="text-xl font-bold text-amber-900 flex items-center">
                        <svg class="w-6 h-6 mr-2 text-amber-500" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/>
                        </svg>
                        SWEET DELIGHT
                    </h1>
                </div>

                <div class="space-y-2">
                    <h2 class="text-4xl font-extrabold text-amber-900">
                        Haii, Selamat Datang Kembali!
                    </h2>
                    <p class="text-lg text-amber-800">
                        Hey, Ayo login dan nikmati kembali pengalamanmu!
                    </p>
                </div>

                <form action="/login" method="POST" class="space-y-6">
                    @csrf {{-- Laravel CSRF Token --}}

                    <div>
                        <input
                            type="email"
                            name="email"
                            placeholder="stanley@gmail.com"
                            class="w-full px-4 py-3 border-2 border-amber-300 rounded-lg focus:outline-none focus:border-amber-600 text-amber-900"
                            required
                        >
                    </div>

                    <div>
                        <input
                            type="password"
                            name="password"
                            placeholder="••••••••••••"
                            class="w-full px-4 py-3 border-2 border-amber-300 rounded-lg focus:outline-none focus:border-amber-600 text-amber-900"
                            required
                        >
                    </div>
                    
                    <div class="flex justify-between items-center text-sm">
                        <label class="flex items-center text-amber-800">
                            <input type="checkbox" name="remember" class="w-4 h-4 text-amber-600 border-amber-300 rounded focus:ring-amber-500 mr-2">
                            Remember me
                        </label>
                        <a href="/forgot-password" class="text-amber-700 hover:text-amber-900 font-medium">
                            Forgot Password?
                        </a>
                    </div>

                    <button type="submit" class="w-full py-3 bg-amber-800 text-white font-bold rounded-xl hover:bg-amber-900 transition-colors shadow-lg shadow-amber-500/50">
                        Sign In
                    </button>
                </form>

                <div class="text-center pt-4">
                    <p class="text-sm text-gray-600">
                        Don't have an account? 
                        <a href="/register" class="text-amber-700 font-semibold hover:underline">Sign Up</a>
                    </p>
                </div>
            </div>
            
            <div class="relative hidden lg:block bg-[#564638] p-16 flex items-center justify-center">
                <div class="text-center text-white space-y-4">
                    <h3 class="text-3xl font-extrabold">Nikmati Ribuan Resep!</h3>
                    <p class="text-lg opacity-80">Masuk untuk menyimpan favorit dan berbagi kreasi Anda.</p>
                    <img 
                        src="{{ asset('images/herocake.png') }}" 
                        alt="Illustrasi Kue Sweet Delight" 
                        class="w-full max-w-3xl mx-auto mt-6 rounded-lg animate-[spin_20s_linear_infinite]"
                    />
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection