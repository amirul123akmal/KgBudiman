@extends('layouts.app')

@section('content')
<!-- Budiman Biz HUB Section -->
<section id="biz-hub" class="relative min-h-screen flex items-center justify-center overflow-hidden">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=1920" 
             alt="Budiman Biz HUB" 
             class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-linear-to-br from-slate-900/90 via-emerald-900/85 to-slate-900/90"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 w-full py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-emerald-500/20 backdrop-blur-sm rounded-full border border-emerald-400/30 mb-6">
                    <i class="fas fa-store text-emerald-400"></i>
                    <span class="text-sm font-semibold text-emerald-300">Perniagaan Tempatan</span>
                </div>
                
                <h1 class="text-5xl lg:text-7xl font-bold text-white mb-6 leading-tight">
                    Budiman Biz
                    <span class="text-transparent bg-clip-text bg-linear-to-r from-emerald-400 to-teal-400">
                        HUB
                    </span>
                </h1>
                
                <p class="text-lg lg:text-xl text-slate-300 mb-8 leading-relaxed max-w-3xl mx-auto">
                    Sokong perniagaan tempatan kami. Pelbagai produk dan perkhidmatan berkualiti dari usahawan Kampung Budiman.
                </p>

                <!-- Stats -->
                <div class="flex flex-wrap justify-center gap-8 mt-12">
                    <div class="text-center">
                        <div class="text-4xl font-bold text-emerald-400 mb-1">15+</div>
                        <div class="text-sm text-slate-300">Perniagaan</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-bold text-emerald-400 mb-1">50+</div>
                        <div class="text-sm text-slate-300">Produk</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-bold text-emerald-400 mb-1">100%</div>
                        <div class="text-sm text-slate-300">Tempatan</div>
                    </div>
                </div>
            </div>

            <!-- Business Cards Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                <!-- Business Card 1 - Warung Cangkir Geddy -->
                <div class="group bg-white rounded-3xl overflow-hidden shadow-2xl hover:shadow-emerald-500/20 transition-all duration-500 hover:-translate-y-2">
                    <!-- Image -->
                    <div class="relative aspect-[4/3] overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?w=800" 
                             alt="Warung Cangkir Geddy" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <!-- Category Badge -->
                        <div class="absolute top-4 left-4">
                            <span class="px-4 py-2 bg-orange-500 text-white text-xs font-bold rounded-full shadow-lg">
                                <i class="fas fa-utensils mr-1"></i>
                                Makanan & Minuman
                            </span>
                        </div>
                        <!-- Status Badge -->
                        <div class="absolute top-4 right-4">
                            <span class="px-3 py-1 bg-green-500 text-white text-xs font-bold rounded-full shadow-lg flex items-center gap-1">
                                <span class="w-2 h-2 bg-white rounded-full animate-pulse"></span>
                                Buka
                            </span>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-slate-900 mb-2">
                            Warung Cangkir Geddy
                        </h3>
                        <p class="text-slate-600 mb-4 line-clamp-2">
                            Menyediakan pelbagai jenis makanan dan minuman tempatan yang sedap dan berkualiti.
                        </p>

                        <!-- Info Grid -->
                        <div class="space-y-3 mb-6">
                            <div class="flex items-center gap-3 text-sm text-slate-600">
                                <i class="fas fa-clock text-emerald-600 w-4"></i>
                                <span>8:00 AM - 10:00 PM</span>
                            </div>
                            <div class="flex items-center gap-3 text-sm text-slate-600">
                                <i class="fas fa-map-marker-alt text-emerald-600 w-4"></i>
                                <span>Lot 123, Kampung Budiman</span>
                            </div>
                            <div class="flex items-center gap-3 text-sm text-slate-600">
                                <i class="fas fa-phone text-emerald-600 w-4"></i>
                                <a href="tel:0123456789" class="hover:text-emerald-600 transition-colors">012-345 6789</a>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex gap-3">
                            <a href="tel:0123456789" class="flex-1 px-4 py-3 bg-emerald-500 hover:bg-emerald-600 text-white font-semibold rounded-xl transition-all duration-300 text-center shadow-md hover:shadow-lg">
                                <i class="fas fa-phone mr-2"></i>
                                Hubungi
                            </a>
                            <a href="https://wa.me/60123456789" class="px-4 py-3 bg-green-500 hover:bg-green-600 text-white font-semibold rounded-xl transition-all duration-300 shadow-md hover:shadow-lg">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                            <button class="px-4 py-3 bg-slate-100 hover:bg-slate-200 text-slate-700 font-semibold rounded-xl transition-all duration-300">
                                <i class="fas fa-share-alt"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Business Card 2 - Mahmud Hydroponic -->
                <div class="group bg-white rounded-3xl overflow-hidden shadow-2xl hover:shadow-emerald-500/20 transition-all duration-500 hover:-translate-y-2">
                    <!-- Image -->
                    <div class="relative aspect-[4/3] overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1530836369250-ef72a3f5cda8?w=800" 
                             alt="Mahmud Hydroponic" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <!-- Category Badge -->
                        <div class="absolute top-4 left-4">
                            <span class="px-4 py-2 bg-green-500 text-white text-xs font-bold rounded-full shadow-lg">
                                <i class="fas fa-leaf mr-1"></i>
                                Pertanian
                            </span>
                        </div>
                        <!-- Status Badge -->
                        <div class="absolute top-4 right-4">
                            <span class="px-3 py-1 bg-green-500 text-white text-xs font-bold rounded-full shadow-lg flex items-center gap-1">
                                <span class="w-2 h-2 bg-white rounded-full animate-pulse"></span>
                                Buka
                            </span>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-slate-900 mb-2">
                            Mahmud Hydroponic
                        </h3>
                        <p class="text-slate-600 mb-4 line-clamp-2">
                            Sayur-sayuran segar hasil tanaman hidroponik berkualiti tinggi dan organik.
                        </p>

                        <!-- Info Grid -->
                        <div class="space-y-3 mb-6">
                            <div class="flex items-center gap-3 text-sm text-slate-600">
                                <i class="fas fa-clock text-emerald-600 w-4"></i>
                                <span>7:00 AM - 7:00 PM</span>
                            </div>
                            <div class="flex items-center gap-3 text-sm text-slate-600">
                                <i class="fas fa-map-marker-alt text-emerald-600 w-4"></i>
                                <span>Lot 456, Kampung Budiman</span>
                            </div>
                            <div class="flex items-center gap-3 text-sm text-slate-600">
                                <i class="fas fa-phone text-emerald-600 w-4"></i>
                                <a href="tel:0123456789" class="hover:text-emerald-600 transition-colors">012-345 6789</a>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex gap-3">
                            <a href="tel:0123456789" class="flex-1 px-4 py-3 bg-emerald-500 hover:bg-emerald-600 text-white font-semibold rounded-xl transition-all duration-300 text-center shadow-md hover:shadow-lg">
                                <i class="fas fa-phone mr-2"></i>
                                Hubungi
                            </a>
                            <a href="https://wa.me/60123456789" class="px-4 py-3 bg-green-500 hover:bg-green-600 text-white font-semibold rounded-xl transition-all duration-300 shadow-md hover:shadow-lg">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                            <button class="px-4 py-3 bg-slate-100 hover:bg-slate-200 text-slate-700 font-semibold rounded-xl transition-all duration-300">
                                <i class="fas fa-share-alt"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Business Card 3 - Talamaz Kitchen -->
                <div class="group bg-white rounded-3xl overflow-hidden shadow-2xl hover:shadow-emerald-500/20 transition-all duration-500 hover:-translate-y-2">
                    <!-- Image -->
                    <div class="relative aspect-[4/3] overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?w=800" 
                             alt="Talamaz Kitchen" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <!-- Category Badge -->
                        <div class="absolute top-4 left-4">
                            <span class="px-4 py-2 bg-pink-500 text-white text-xs font-bold rounded-full shadow-lg">
                                <i class="fas fa-cookie-bite mr-1"></i>
                                Kuih Tradisional
                            </span>
                        </div>
                        <!-- Status Badge -->
                        <div class="absolute top-4 right-4">
                            <span class="px-3 py-1 bg-green-500 text-white text-xs font-bold rounded-full shadow-lg flex items-center gap-1">
                                <span class="w-2 h-2 bg-white rounded-full animate-pulse"></span>
                                Buka
                            </span>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-slate-900 mb-2">
                            Talamaz Kitchen
                        </h3>
                        <p class="text-slate-600 mb-4 line-clamp-2">
                            Kuih-muih tradisional Melayu yang lazat dan autentik untuk setiap majlis.
                        </p>

                        <!-- Info Grid -->
                        <div class="space-y-3 mb-6">
                            <div class="flex items-center gap-3 text-sm text-slate-600">
                                <i class="fas fa-clock text-emerald-600 w-4"></i>
                                <span>9:00 AM - 6:00 PM</span>
                            </div>
                            <div class="flex items-center gap-3 text-sm text-slate-600">
                                <i class="fas fa-map-marker-alt text-emerald-600 w-4"></i>
                                <span>Lot 789, Kampung Budiman</span>
                            </div>
                            <div class="flex items-center gap-3 text-sm text-slate-600">
                                <i class="fas fa-phone text-emerald-600 w-4"></i>
                                <a href="tel:0123456789" class="hover:text-emerald-600 transition-colors">012-345 6789</a>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex gap-3">
                            <a href="tel:0123456789" class="flex-1 px-4 py-3 bg-emerald-500 hover:bg-emerald-600 text-white font-semibold rounded-xl transition-all duration-300 text-center shadow-md hover:shadow-lg">
                                <i class="fas fa-phone mr-2"></i>
                                Hubungi
                            </a>
                            <a href="https://wa.me/60123456789" class="px-4 py-3 bg-green-500 hover:bg-green-600 text-white font-semibold rounded-xl transition-all duration-300 shadow-md hover:shadow-lg">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                            <button class="px-4 py-3 bg-slate-100 hover:bg-slate-200 text-slate-700 font-semibold rounded-xl transition-all duration-300">
                                <i class="fas fa-share-alt"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Add more business cards as needed -->
                <!-- You can duplicate the above card structure -->
            </div>

            <!-- Filter/Category Section -->
            <div class="mt-16 p-8 bg-white/10 backdrop-blur-md rounded-3xl border border-white/20">
                <div class="text-center mb-8">
                    <h3 class="text-2xl font-bold text-white mb-2">Cari Perniagaan Mengikut Kategori</h3>
                    <p class="text-slate-300">Pilih kategori untuk melihat perniagaan yang berkaitan</p>
                </div>

                <div class="flex flex-wrap justify-center gap-4">
                    <button class="px-6 py-3 bg-white text-slate-900 font-semibold rounded-xl hover:bg-emerald-500 hover:text-white transition-all duration-300 shadow-lg hover:scale-105">
                        <i class="fas fa-th-large mr-2"></i>
                        Semua
                    </button>
                    <button class="px-6 py-3 bg-white/20 backdrop-blur-sm text-white font-semibold rounded-xl hover:bg-white hover:text-slate-900 transition-all duration-300 border border-white/30">
                        <i class="fas fa-utensils mr-2"></i>
                        Makanan
                    </button>
                    <button class="px-6 py-3 bg-white/20 backdrop-blur-sm text-white font-semibold rounded-xl hover:bg-white hover:text-slate-900 transition-all duration-300 border border-white/30">
                        <i class="fas fa-leaf mr-2"></i>
                        Pertanian
                    </button>
                    <button class="px-6 py-3 bg-white/20 backdrop-blur-sm text-white font-semibold rounded-xl hover:bg-white hover:text-slate-900 transition-all duration-300 border border-white/30">
                        <i class="fas fa-cookie-bite mr-2"></i>
                        Kuih-muih
                    </button>
                    <button class="px-6 py-3 bg-white/20 backdrop-blur-sm text-white font-semibold rounded-xl hover:bg-white hover:text-slate-900 transition-all duration-300 border border-white/30">
                        <i class="fas fa-shopping-bag mr-2"></i>
                        Perkhidmatan
                    </button>
                </div>
            </div>

            <!-- Call to Action -->
            <div class="mt-16 text-center">
                <div class="inline-block p-8 bg-linear-to-r from-emerald-500 to-teal-600 rounded-3xl shadow-2xl">
                    <div class="max-w-2xl">
                        <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-store text-white text-3xl"></i>
                        </div>
                        <h3 class="text-3xl font-bold text-white mb-4">
                            Ingin Sertai Budiman Biz HUB?
                        </h3>
                        <p class="text-emerald-50 text-lg mb-8">
                            Daftar perniagaan anda sekarang dan jangkau lebih ramai pelanggan dalam komuniti kita.
                        </p>
                        <div class="flex flex-wrap gap-4 justify-center">
                            <a href="#daftar" class="px-8 py-4 bg-white text-emerald-600 font-semibold rounded-xl hover:bg-emerald-50 transition-all duration-300 shadow-lg hover:shadow-xl hover:scale-105 inline-flex items-center gap-2">
                                <i class="fas fa-plus-circle"></i>
                                Daftar Perniagaan
                            </a>
                            <a href="/#hubungi" class="px-8 py-4 bg-white/10 backdrop-blur-sm text-white font-semibold rounded-xl border-2 border-white/30 hover:bg-white/20 transition-all duration-300 inline-flex items-center gap-2">
                                <i class="fas fa-info-circle"></i>
                                Maklumat Lanjut
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection