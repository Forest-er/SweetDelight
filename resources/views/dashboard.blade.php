@extends('layouts.sidebar')

@section('content')
<main class="flex flex-col overflow-y-auto w-full bg-gradient-to-b from-amber-50/30 to-orange-50/30">
    <div class="max-w-4xl mx-auto w-full px-4">
        
        <!-- Header Section -->
        <div class="mb-8">
            <h1 class="text-3xl md:text-4xl font-bold text-amber-900 mb-2">Feed Resep</h1>
            <p class="text-amber-700">Temukan inspirasi resep terbaru dari komunitas Sweet Delight</p>
        </div>

        <!-- POST CARD 1 -->
        <article class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 mb-6 overflow-hidden border border-amber-100 transform hover:-translate-y-1">
            <!-- User Info Header -->
            <div class="flex items-center p-5 border-b border-amber-50">
                <div class="relative">
                    <div class="w-14 h-14 bg-gradient-to-br from-amber-400 to-amber-600 rounded-full flex items-center justify-center ring-4 ring-amber-100">
                        <span class="text-white font-bold text-lg">JD</span>
                    </div>
                    <div class="absolute -bottom-1 -right-1 w-5 h-5 bg-green-500 rounded-full border-2 border-white"></div>
                </div>
                <div class="ml-4 flex-1">
                    <p class="font-bold text-lg text-amber-900">Jane Doe</p>
                    <p class="text-amber-600 text-sm">@janedoeress • 2 jam yang lalu</p>
                </div>
                <button class="text-amber-700 hover:text-amber-900 transition">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"/>
                    </svg>
                </button>
            </div>

            <!-- Image Container -->
            <div class="relative group">
                <img src="{{ asset('images/herocookies.png') }}" class="w-full h-96 object-cover" alt="Cookies">
                
                <!-- Overlay on Hover -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                
                <!-- Action Bar -->
                <div class="absolute bottom-0 left-0 right-0 bg-[#564638]/95 backdrop-blur-sm text-white px-6 py-4 transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                    <div class="flex justify-between items-center">
                        <a href="#" class="flex items-center space-x-2 hover:text-amber-300 transition-colors font-semibold">
                            <span>Lihat Selengkapnya</span>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                        <div class="flex items-center space-x-4">
                            <button class="hover:text-amber-300 transition-colors transform hover:scale-110">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/>
                                </svg>
                            </button>
                            <button class="hover:text-amber-300 transition-colors transform hover:scale-110">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Section -->
            <div class="p-6">
                <!-- Interaction Buttons -->
                <div class="flex items-center space-x-6 mb-4 pb-4 border-b border-amber-100">
                    <button class="flex items-center space-x-2 text-amber-700 hover:text-red-500 transition-colors group">
                        <svg class="w-6 h-6 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                        <span class="font-semibold">245</span>
                    </button>
                    <button class="flex items-center space-x-2 text-amber-700 hover:text-amber-900 transition-colors group">
                        <svg class="w-6 h-6 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                        </svg>
                        <span class="font-semibold">32</span>
                    </button>
                    <button class="flex items-center space-x-2 text-amber-700 hover:text-amber-900 transition-colors group ml-auto">
                        <svg class="w-6 h-6 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"/>
                        </svg>
                    </button>
                </div>

                <!-- Description -->
                <div class="space-y-3">
                    <p class="text-gray-800 leading-relaxed">
                        Tidak perlu momen besar untuk merasa hangat. Cukup satu loyang cookies, piring kecil, dan suasana rumah yang tenang. Karena kadang, cara terbaik mencintai diri sendiri adalah dengan memanggang sesuatu yang bikin hati bahagia. 🍪
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-amber-100 text-amber-700 rounded-full text-sm font-medium hover:bg-amber-200 transition-colors cursor-pointer">#CozyBakes</span>
                        <span class="px-3 py-1 bg-amber-100 text-amber-700 rounded-full text-sm font-medium hover:bg-amber-200 transition-colors cursor-pointer">#HomeFeels</span>
                        <span class="px-3 py-1 bg-amber-100 text-amber-700 rounded-full text-sm font-medium hover:bg-amber-200 transition-colors cursor-pointer">#SimpleJoy</span>
                    </div>
                </div>
            </div>
        </article>

        <!-- POST CARD 2 -->
        <article class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 mb-6 overflow-hidden border border-amber-100 transform hover:-translate-y-1">
            <div class="flex items-center p-5 border-b border-amber-50">
                <div class="relative">
                    <div class="w-14 h-14 bg-gradient-to-br from-amber-400 to-amber-600 rounded-full flex items-center justify-center ring-4 ring-amber-100">
                        <span class="text-white font-bold text-lg">JD</span>
                    </div>
                    <div class="absolute -bottom-1 -right-1 w-5 h-5 bg-green-500 rounded-full border-2 border-white"></div>
                </div>
                <div class="ml-4 flex-1">
                    <p class="font-bold text-lg text-amber-900">Jane Doe</p>
                    <p class="text-amber-600 text-sm">@janedoeress • 5 jam yang lalu</p>
                </div>
                <button class="text-amber-700 hover:text-amber-900 transition">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"/>
                    </svg>
                </button>
            </div>

            <div class="relative group">
                <img src="{{ asset('images/herocookies.png') }}" class="w-full h-96 object-cover" alt="Cookies">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="absolute bottom-0 left-0 right-0 bg-[#564638]/95 backdrop-blur-sm text-white px-6 py-4 transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                    <div class="flex justify-between items-center">
                        <a href="#" class="flex items-center space-x-2 hover:text-amber-300 transition-colors font-semibold">
                            <span>Lihat Selengkapnya</span>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                        <div class="flex items-center space-x-4">
                            <button class="hover:text-amber-300 transition-colors transform hover:scale-110">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/>
                                </svg>
                            </button>
                            <button class="hover:text-amber-300 transition-colors transform hover:scale-110">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-6">
                <div class="flex items-center space-x-6 mb-4 pb-4 border-b border-amber-100">
                    <button class="flex items-center space-x-2 text-amber-700 hover:text-red-500 transition-colors group">
                        <svg class="w-6 h-6 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                        <span class="font-semibold">187</span>
                    </button>
                    <button class="flex items-center space-x-2 text-amber-700 hover:text-amber-900 transition-colors group">
                        <svg class="w-6 h-6 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                        </svg>
                        <span class="font-semibold">18</span>
                    </button>
                    <button class="flex items-center space-x-2 text-amber-700 hover:text-amber-900 transition-colors group ml-auto">
                        <svg class="w-6 h-6 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"/>
                        </svg>
                    </button>
                </div>

                <div class="space-y-3">
                    <p class="text-gray-800 leading-relaxed">
                        Tidak perlu momen besar untuk merasa hangat. Cukup satu loyang cookies, piring kecil, dan suasana rumah yang tenang. Karena kadang, cara terbaik mencintai diri sendiri adalah dengan memanggang sesuatu yang bikin hati bahagia. 🍪
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-amber-100 text-amber-700 rounded-full text-sm font-medium hover:bg-amber-200 transition-colors cursor-pointer">#CozyBakes</span>
                        <span class="px-3 py-1 bg-amber-100 text-amber-700 rounded-full text-sm font-medium hover:bg-amber-200 transition-colors cursor-pointer">#HomeFeels</span>
                        <span class="px-3 py-1 bg-amber-100 text-amber-700 rounded-full text-sm font-medium hover:bg-amber-200 transition-colors cursor-pointer">#SimpleJoy</span>
                    </div>
                </div>
            </div>
        </article>

        <!-- Load More Button -->
        <div class="text-center py-8">
            <button class="bg-gradient-to-r from-amber-600 to-amber-700 hover:from-amber-700 hover:to-amber-800 text-white px-8 py-3 rounded-xl font-semibold shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300">
                Muat Lebih Banyak
            </button>
        </div>

    </div>
</main>
@endsection