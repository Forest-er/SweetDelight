@extends('layouts.app')

@section('content')
<div class="h-10"></div>
    <div class="flex items-center justify-center min-h-screen p-4 mt-10">
        
        <div class="w-full max-w-5xl bg-white rounded-3xl shadow-2xl overflow-hidden bg-gradient-to-b from-amber-50/30 to-orange-50/30">
            
            <div class="lg:grid lg:grid-cols-2">
                
                <div class="relative hidden lg:flex **bg-amber-100** p-16 items-center justify-center order-2 lg:order-1">
                    <div class="text-center text-amber-900 space-y-4">
                        <h3 class="text-3xl font-extrabold">Dunia Manis Menanti Anda!</h3>
                        <p class="text-lg opacity-80">Jadilah bagian dari komunitas kami. Pendaftaran hanya butuh waktu singkat.</p>
                        <img 
                            src="{{ asset('images/herocake.png') }}" 
                            alt="Illustrasi Kue Sweet Delight" 
                            class="w-full max-w-xs mx-auto mt-6 rounded-lg shadow-2xl transform rotate-3"
                        />
                        <span class="absolute bottom-5 left-5 text-sm font-semibold text-amber-700">#RecipeGoals</span>
                    </div>
                </div>

                <div class="p-8 md:p-12 lg:p-16 space-y-8 order-1 lg:order-2">
                    
                    <h1 class="text-xl font-bold text-amber-900 flex items-center mb-4">
                        <svg class="w-6 h-6 mr-2 text-amber-500" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/>
                        </svg>
                        SWEET DELIGHT
                    </h1>

                    <div class="space-y-1">
                        <h2 class="text-4xl font-extrabold text-amber-900">
                            Create Your Account
                        </h2>
                        <p class="text-lg text-amber-800">
                            Just a few details and you're good to go!
                        </p>
                    </div>

                    <form method="POST" action="{{ route('register') }}" class="space-y-4">
                        @csrf 

                        <div>
                            <label for="name" class="block text-sm font-medium text-amber-800 mb-1">Name</label>
                            <input
                                id="name" 
                                type="text" 
                                name="name" 
                                value="{{ old('name') }}" 
                                required 
                                autofocus 
                                autocomplete="name"
                                placeholder="Nama Lengkap"
                                class="w-full px-4 py-3 border-2 border-amber-300 rounded-lg focus:outline-none focus:border-amber-600 focus:ring-amber-600 text-amber-900"
                            />
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-amber-800 mb-1">Email</label>
                            <input
                                id="email" 
                                type="email" 
                                name="email" 
                                value="{{ old('email') }}" 
                                required 
                                autocomplete="username"
                                placeholder="Alamat Email"
                                class="w-full px-4 py-3 border-2 border-amber-300 rounded-lg focus:outline-none focus:border-amber-600 focus:ring-amber-600 text-amber-900"
                            />
                        </div>

                        <div>
                            <label for="password" class="block text-sm font-medium text-amber-800 mb-1">Password</label>
                            <input
                                id="password" 
                                type="password" 
                                name="password" 
                                required 
                                autocomplete="new-password"
                                placeholder="••••••••"
                                class="w-full px-4 py-3 border-2 border-amber-300 rounded-lg focus:outline-none focus:border-amber-600 focus:ring-amber-600 text-amber-900"
                            />
                        </div>

                        <div>
                            <label for="password_confirmation" class="block text-sm font-medium text-amber-800 mb-1">Confirm Password</label>
                            <input
                                id="password_confirmation" 
                                type="password" 
                                name="password_confirmation" 
                                required 
                                autocomplete="new-password"
                                placeholder="Konfirmasi Password"
                                class="w-full px-4 py-3 border-2 border-amber-300 rounded-lg focus:outline-none focus:border-amber-600 focus:ring-amber-600 text-amber-900"
                            />
                        </div>

                        <div class="flex items-center justify-between pt-4">
                             <a class="underline text-sm text-amber-700 hover:text-amber-900 rounded-md font-medium" href="{{ route('login') }}">
                                Already registered?
                            </a>

                            <button type="submit" class="py-3 px-8 bg-amber-800 text-white font-bold rounded-xl hover:bg-amber-900 transition-colors shadow-lg shadow-amber-500/50">
                                Register
                            </button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
    
@endsection