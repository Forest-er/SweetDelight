@extends('layouts.sidebar')

@section('content')
<main class="flex flex-col py-6 md:py-10 overflow-y-auto w-full bg-gradient-to-b from-amber-50/30 to-orange-50/30">
    <div class="max-w-4xl mx-auto w-full px-4">
        
        <!-- Header Section -->
        <div class="mb-8">
            <div class="flex items-center space-x-3 mb-4">
                <a href="{{ route('dashboard') }}" class="text-amber-700 hover:text-amber-900 transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                </a>
                <h1 class="text-3xl md:text-4xl font-bold text-amber-900">Buat Resep Baru</h1>
            </div>
            <p class="text-amber-700">Bagikan resep favoritmu dengan komunitas Sweet Delight! 🍪</p>
        </div>

        <!-- Form Card -->
        <form action="" method="POST" enctype="multipart/form-data" class="bg-white rounded-2xl shadow-xl border border-amber-100 overflow-hidden">
            @csrf
            
            <!-- Image Upload Section -->
            <div class="relative bg-gradient-to-br from-amber-100 to-orange-100 p-8 border-b border-amber-200">
                <div class="max-w-2xl mx-auto">
                    <label class="block text-center mb-4">
                        <span class="text-lg font-bold text-amber-900 mb-2 block">Foto Resep</span>
                        <span class="text-sm text-amber-700">Upload foto hasil masakanmu yang menggugah selera!</span>
                    </label>
                    
                    <div class="relative">
                        <!-- Preview Area -->
                        <div id="imagePreviewArea" class="hidden mb-4">
                            <div class="relative rounded-xl overflow-hidden shadow-lg">
                                <img id="imagePreview" src="" alt="Preview" class="w-full h-80 object-cover">
                                <button type="button" id="removeImage" class="absolute top-4 right-4 bg-red-500 hover:bg-red-600 text-white p-2 rounded-full shadow-lg transition transform hover:scale-110">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <!-- Upload Button -->
                        <div id="uploadButton" class="relative border-3 border-dashed border-amber-400 rounded-xl p-12 bg-white/50 hover:bg-white/80 transition cursor-pointer group">
                            <input type="file" id="gambar" name="gambar" accept="image/*" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" required>
                            <div class="text-center">
                                <div class="w-20 h-20 mx-auto mb-4 bg-amber-200 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform">
                                    <svg class="w-10 h-10 text-amber-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <p class="text-amber-900 font-semibold mb-2">Klik untuk upload foto</p>
                                <p class="text-sm text-amber-600">atau drag & drop file di sini</p>
                                <p class="text-xs text-amber-500 mt-2">PNG, JPG, JPEG hingga 5MB</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form Fields -->
            <div class="p-8 space-y-6">
                
                <!-- Nama Resep -->
                <div>
                    <label for="nama" class="block text-amber-900 font-bold mb-2 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                        </svg>
                        Nama Resep
                    </label>
                    <input 
                        type="text" 
                        id="nama" 
                        name="nama" 
                        placeholder="Contoh: Chocolate Chip Cookies Crispy"
                        class="w-full px-4 py-3 border-2 border-amber-200 rounded-xl focus:border-amber-500 focus:ring-4 focus:ring-amber-100 transition outline-none"
                        required
                    >
                </div>

                <!-- Kategori -->
                <div>
                    <label for="id_kategori" class="block text-amber-900 font-bold mb-2 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                        </svg>
                        Kategori
                    </label>
                    <select 
                        id="id_kategori" 
                        name="id_kategori"
                        class="w-full px-4 py-3 border-2 border-amber-200 rounded-xl focus:border-amber-500 focus:ring-4 focus:ring-amber-100 transition outline-none appearance-none bg-white cursor-pointer"
                        required
                    >
                        <option value="">Pilih Kategori</option>
                        <option value="1">Cookies</option>
                        <option value="2">Cheesecake</option>
                        <option value="3">Cupcakes</option>
                        <option value="4">Pancake</option>
                        <option value="5">Waffle</option>
                        <option value="6">Brownies</option>
                    </select>
                </div>

                <!-- Deskripsi -->
                <div>
                    <label for="deskripsi" class="block text-amber-900 font-bold mb-2 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"/>
                        </svg>
                        Deskripsi
                    </label>
                    <textarea 
                        id="deskripsi" 
                        name="deskripsi" 
                        rows="4"
                        placeholder="Ceritakan tentang resep ini... Apa yang membuatnya spesial?"
                        class="w-full px-4 py-3 border-2 border-amber-200 rounded-xl focus:border-amber-500 focus:ring-4 focus:ring-amber-100 transition outline-none resize-none"
                        required
                    ></textarea>
                    <p class="text-sm text-amber-600 mt-1">💡 Tips: Ceritakan asal-usul resep atau kenangan spesial dengan makanan ini!</p>
                </div>

                <!-- Bahan-bahan -->
                <div>
                    <label for="bahan" class="block text-amber-900 font-bold mb-2 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>
                        </svg>
                        Bahan-bahan
                    </label>
                    <textarea 
                        id="bahan" 
                        name="bahan" 
                        rows="6"
                        placeholder="Tulis bahan-bahan yang diperlukan (pisahkan dengan enter)&#10;Contoh:&#10;200gr tepung terigu&#10;100gr gula pasir&#10;2 butir telur&#10;100gr mentega"
                        class="w-full px-4 py-3 border-2 border-amber-200 rounded-xl focus:border-amber-500 focus:ring-4 focus:ring-amber-100 transition outline-none resize-none font-mono text-sm"
                        required
                    ></textarea>
                    <p class="text-sm text-amber-600 mt-1">📝 Tulis setiap bahan di baris baru dengan takaran yang jelas</p>
                </div>

                <!-- Langkah-langkah -->
                <div>
                    <label for="langkah" class="block text-amber-900 font-bold mb-2 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                        Langkah-langkah Pembuatan
                    </label>
                    <textarea 
                        id="langkah" 
                        name="langkah" 
                        rows="8"
                        placeholder="Tulis langkah-langkah pembuatan (pisahkan dengan enter)&#10;Contoh:&#10;1. Kocok telur dan gula hingga mengembang&#10;2. Masukkan tepung terigu, aduk rata&#10;3. Tambahkan mentega cair, aduk kembali&#10;4. Tuang ke loyang yang sudah diolesi mentega&#10;5. Panggang 180°C selama 25 menit"
                        class="w-full px-4 py-3 border-2 border-amber-200 rounded-xl focus:border-amber-500 focus:ring-4 focus:ring-amber-100 transition outline-none resize-none font-mono text-sm"
                        required
                    ></textarea>
                    <p class="text-sm text-amber-600 mt-1">👨‍🍳 Tulis langkah demi langkah dengan detail agar mudah diikuti</p>
                </div>

            </div>

            <!-- Action Buttons -->
            <div class="bg-amber-50 px-8 py-6 border-t border-amber-200 flex flex-col sm:flex-row gap-4 justify-end">
                <a href="{{ route('dashboard') }}" class="px-6 py-3 border-2 border-amber-300 text-amber-700 font-semibold rounded-xl hover:bg-amber-100 transition text-center">
                    Batal
                </a>
                <button type="submit" class="px-8 py-3 bg-gradient-to-r from-amber-600 to-amber-700 hover:from-amber-700 hover:to-amber-800 text-white font-bold rounded-xl shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 flex items-center justify-center space-x-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                    <span>Publikasikan Resep</span>
                </button>
            </div>
        </form>

        <!-- Tips Card -->
        <div class="mt-8 bg-gradient-to-r from-amber-100 to-orange-100 rounded-2xl p-6 border-2 border-amber-200">
            <h3 class="font-bold text-amber-900 text-lg mb-3 flex items-center">
                <span class="text-2xl mr-2">💡</span>
                Tips Membuat Resep yang Menarik
            </h3>
            <ul class="space-y-2 text-amber-800">
                <li class="flex items-start">
                    <span class="text-amber-600 mr-2">✓</span>
                    <span>Gunakan foto dengan pencahayaan yang baik</span>
                </li>
                <li class="flex items-start">
                    <span class="text-amber-600 mr-2">✓</span>
                    <span>Tulis takaran bahan dengan jelas dan spesifik</span>
                </li>
                <li class="flex items-start">
                    <span class="text-amber-600 mr-2">✓</span>
                    <span>Jelaskan langkah-langkah dengan detail namun mudah dipahami</span>
                </li>
                <li class="flex items-start">
                    <span class="text-amber-600 mr-2">✓</span>
                    <span>Bagikan tips & trik khusus agar resep lebih berhasil</span>
                </li>
            </ul>
        </div>

    </div>
</main>

<script>
    // Image Preview Functionality
    const imageInput = document.getElementById('gambar');
    const imagePreview = document.getElementById('imagePreview');
    const imagePreviewArea = document.getElementById('imagePreviewArea');
    const uploadButton = document.getElementById('uploadButton');
    const removeImageBtn = document.getElementById('removeImage');

    imageInput.addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                imagePreview.src = e.target.result;
                imagePreviewArea.classList.remove('hidden');
                uploadButton.classList.add('hidden');
            }
            reader.readAsDataURL(file);
        }
    });

    removeImageBtn.addEventListener('click', function() {
        imageInput.value = '';
        imagePreview.src = '';
        imagePreviewArea.classList.add('hidden');
        uploadButton.classList.remove('hidden');
    });

    // Drag and drop functionality
    const dropArea = uploadButton;

    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
        dropArea.addEventListener(eventName, preventDefaults, false);
    });

    function preventDefaults(e) {
        e.preventDefault();
        e.stopPropagation();
    }

    ['dragenter', 'dragover'].forEach(eventName => {
        dropArea.addEventListener(eventName, highlight, false);
    });

    ['dragleave', 'drop'].forEach(eventName => {
        dropArea.addEventListener(eventName, unhighlight, false);
    });

    function highlight(e) {
        dropArea.classList.add('border-amber-600', 'bg-amber-50');
    }

    function unhighlight(e) {
        dropArea.classList.remove('border-amber-600', 'bg-amber-50');
    }

    dropArea.addEventListener('drop', handleDrop, false);

    function handleDrop(e) {
        const dt = e.dataTransfer;
        const files = dt.files;
        imageInput.files = files;
        
        const event = new Event('change', { bubbles: true });
        imageInput.dispatchEvent(event);
    }
</script>
@endsection