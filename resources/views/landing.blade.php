@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section id="home" class="relative min-h-screen flex items-center justify-center overflow-hidden mt-20">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=1920" 
                 alt="Kampung Budiman" 
                 class="w-full h-full object-cover">
            <div class="absolute inset-0 hero-overlay"></div>
        </div>

        <!-- Hero Content -->
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div class="text-white fade-in">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-emerald-500/20 backdrop-blur-sm rounded-full border border-emerald-400/30 mb-6">
                        <span class="w-2 h-2 bg-emerald-400 rounded-full animate-pulse"></span>
                        <span class="text-sm font-semibold text-emerald-300">Selamat Datang</span>
                    </div>
                    
                    <h1 class="text-5xl lg:text-7xl font-bold mb-6 leading-tight text-balance">
                        Kampung<br/>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 to-teal-400">
                            Budiman
                        </span>
                    </h1>
                    
                    <p class="text-lg lg:text-xl text-slate-300 mb-8 leading-relaxed max-w-xl">
                        Komuniti yang mesra, moden dan bersatu padu. Menjadi kampung contoh dalam pembangunan dan kemajuan.
                    </p>

                    <div class="flex flex-wrap gap-4">
                        <a href="#pengenalan" class="group px-8 py-4 bg-gradient-to-r from-emerald-500 to-teal-600 text-white font-semibold rounded-xl shadow-xl hover:shadow-2xl hover:scale-105 transition-all duration-300 flex items-center gap-2">
                            Ketahui Lebih Lanjut
                            <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                        </a>
                        <a href="#hubungi" class="px-8 py-4 bg-white/10 backdrop-blur-sm text-white font-semibold rounded-xl border-2 border-white/30 hover:bg-white/20 transition-all duration-300">
                            Hubungi Kami
                        </a>
                    </div>

                    <!-- Stats -->
                    <div class="grid grid-cols-3 gap-6 mt-12 pt-12 border-t border-white/20">
                        <div>
                            <div class="text-3xl font-bold text-emerald-400 mb-1">1930</div>
                            <div class="text-sm text-slate-300">Tahun Ditubuhkan</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-emerald-400 mb-1">500+</div>
                            <div class="text-sm text-slate-300">Penduduk</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-emerald-400 mb-1">20+</div>
                            <div class="text-sm text-slate-300">Kemudahan</div>
                        </div>
                    </div>
                </div>

                <!-- Right Content - JPKKK Logo Card -->
                <div class="hidden lg:block fade-in">
                    <div class="glass-card rounded-3xl p-8 shadow-2xl transform hover:scale-105 transition-transform duration-500">
                        <div class="bg-white rounded-2xl p-8 shadow-inner">
                            <img src="https://via.placeholder.com/400x400/10b981/ffffff?text=JPKKK+Logo" 
                                 alt="JPKKK Kampung Budiman" 
                                 class="w-full h-auto">
                        </div>
                        <div class="mt-6 text-center">
                            <h3 class="text-xl font-bold text-slate-800 mb-2">JPKKK</h3>
                            <p class="text-sm text-slate-600 font-medium">Jawatankuasa Pembangunan dan Kemajuan Kampung</p>
                            <div class="mt-4 pt-4 border-t border-slate-200">
                                <p class="text-lg font-bold text-emerald-600">KAMPUNG BUDIMAN</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-10">
            <div class="flex flex-col items-center gap-2 text-white animate-bounce">
                <span class="text-xs font-medium">Tatal ke bawah</span>
                <i class="fas fa-chevron-down"></i>
            </div>
        </div>
    </section>

    <!-- Pengenalan Section -->
    <section id="pengenalan" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <!-- Content -->
                <div class="order-2 lg:order-1">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-emerald-50 rounded-full mb-6">
                        <i class="fas fa-info-circle text-emerald-600"></i>
                        <span class="text-sm font-semibold text-emerald-700">Tentang Kami</span>
                    </div>

                    <h2 class="text-4xl lg:text-5xl font-bold text-slate-900 mb-6 leading-tight">
                        Pengenalan
                    </h2>

                    <div class="prose prose-lg max-w-none">
                        <p class="text-slate-600 leading-relaxed mb-6">
                            Kampung Budiman telah dibuka pada awal tahun <strong class="text-slate-900">1930-an</strong> oleh Ketua Kampung Meru iaitu <strong class="text-slate-900">Tuan Haji Mohd. Sharif</strong>.
                        </p>
                        
                        <p class="text-slate-600 leading-relaxed mb-6">
                            Kampung ini asalnya berada di bawah pentadbiran Kampung Meru, Klang. Diperingkat awal iaitu sekitar tahun 1950-an, Kampung ini dikenali sebagai <strong class="text-slate-900">Kampung Jalan Paip</strong>.
                        </p>

                        <p class="text-slate-600 leading-relaxed">
                            Ini kerana kampung ini dibuka bagi pembinaan laluan paip dari kolam air Tasik Subang ke Sungai Kuning.
                        </p>
                    </div>

                    <!-- Key Features -->
                    <div class="grid sm:grid-cols-2 gap-4 mt-8">
                        <div class="flex items-start gap-3 p-4 bg-emerald-50 rounded-xl">
                            <div class="w-10 h-10 bg-emerald-500 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-history text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-slate-900 mb-1">Sejarah Panjang</h4>
                                <p class="text-sm text-slate-600">Lebih 90 tahun warisan</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3 p-4 bg-teal-50 rounded-xl">
                            <div class="w-10 h-10 bg-teal-500 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-users text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-slate-900 mb-1">Komuniti Erat</h4>
                                <p class="text-sm text-slate-600">Penduduk yang mesra</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Image Grid -->
                <div class="order-1 lg:order-2">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="space-y-4">
                            <div class="aspect-square rounded-2xl overflow-hidden shadow-xl">
                                <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400" 
                                     alt="Kampung" 
                                     class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
                            </div>
                            <div class="aspect-[4/3] rounded-2xl overflow-hidden shadow-xl">
                                <img src="https://images.unsplash.com/photo-1523978591478-c753949ff840?w=400" 
                                     alt="Komuniti" 
                                     class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
                            </div>
                        </div>
                        <div class="space-y-4 pt-8">
                            <div class="aspect-[4/3] rounded-2xl overflow-hidden shadow-xl">
                                <img src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?w=400" 
                                     alt="Rumah" 
                                     class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
                            </div>
                            <div class="aspect-square rounded-2xl overflow-hidden shadow-xl">
                                <img src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?w=400" 
                                     alt="Persekitaran" 
                                     class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Waktu Berurusan Section -->
    <section class="py-20 bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-emerald-500/20 backdrop-blur-sm rounded-full border border-emerald-400/30 mb-6">
                    <i class="fas fa-clock text-emerald-400"></i>
                    <span class="text-sm font-semibold text-emerald-300">Waktu Operasi</span>
                </div>
                <h2 class="text-4xl lg:text-5xl font-bold text-white mb-4">
                    Waktu Berurusan
                </h2>
                <p class="text-xl text-slate-300 max-w-2xl mx-auto">
                    Kami sedia membantu anda pada waktu berikut
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Monday - Thursday -->
                <div class="bg-white/10 backdrop-blur-md rounded-2xl p-8 border border-white/20 hover:bg-white/15 transition-all duration-300 hover:scale-105">
                    <div class="w-16 h-16 bg-gradient-to-br from-emerald-500 to-teal-600 rounded-xl flex items-center justify-center mb-6 shadow-lg">
                        <i class="fas fa-calendar-week text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Isnin - Khamis</h3>
                    <p class="text-3xl font-bold text-emerald-400 mb-2">8:00 - 17:00</p>
                    <p class="text-sm text-slate-400">Waktu Pejabat</p>
                </div>

                <!-- Friday -->
                <div class="bg-white/10 backdrop-blur-md rounded-2xl p-8 border border-white/20 hover:bg-white/15 transition-all duration-300 hover:scale-105">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center mb-6 shadow-lg">
                        <i class="fas fa-mosque text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Jumaat</h3>
                    <p class="text-3xl font-bold text-blue-400 mb-2">8:00 - 12:00</p>
                    <p class="text-sm text-slate-400">Separuh Hari</p>
                </div>

                <!-- Weekend -->
                <div class="bg-white/10 backdrop-blur-md rounded-2xl p-8 border border-white/20 hover:bg-white/15 transition-all duration-300 hover:scale-105">
                    <div class="w-16 h-16 bg-gradient-to-br from-red-500 to-pink-600 rounded-xl flex items-center justify-center mb-6 shadow-lg">
                        <i class="fas fa-calendar-times text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Sabtu & Ahad</h3>
                    <p class="text-3xl font-bold text-red-400 mb-2">TUTUP</p>
                    <p class="text-sm text-slate-400">Cuti Hujung Minggu</p>
                </div>

                <!-- Emergency -->
                <div class="bg-gradient-to-br from-emerald-500 to-teal-600 rounded-2xl p-8 shadow-2xl hover:scale-105 transition-all duration-300">
                    <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-phone-alt text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Kecemasan</h3>
                    <p class="text-3xl font-bold text-white mb-2">24/7</p>
                    <p class="text-sm text-emerald-100 mb-4">Sentiasa Bersedia</p>
                    <button class="w-full px-4 py-2 bg-white text-emerald-600 font-semibold rounded-lg hover:bg-emerald-50 transition-colors">
                        Hubungi Sekarang
                    </button>
                </div>
            </div>

            <!-- Additional Info -->
            <div class="mt-12 p-8 bg-white/5 backdrop-blur-sm rounded-2xl border border-white/10">
                <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-yellow-500/20 rounded-lg flex items-center justify-center">
                            <i class="fas fa-info-circle text-yellow-400 text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-white mb-1">Nota Penting</h4>
                            <p class="text-sm text-slate-400">Waktu mungkin berubah pada cuti umum dan perayaan</p>
                        </div>
                    </div>
                    <a href="#hubungi" class="px-6 py-3 bg-white/10 backdrop-blur-sm text-white font-semibold rounded-lg border border-white/20 hover:bg-white/20 transition-colors whitespace-nowrap">
                        Lihat Kalendar Penuh
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Facilities Section -->
    <section id="fasiliti" class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-emerald-50 rounded-full mb-6">
                    <i class="fas fa-building text-emerald-600"></i>
                    <span class="text-sm font-semibold text-emerald-700">Kemudahan</span>
                </div>
                <h2 class="text-4xl lg:text-5xl font-bold text-slate-900 mb-4">
                    Fasiliti Kampung
                </h2>
                <p class="text-xl text-slate-600 max-w-2xl mx-auto">
                    Pelbagai kemudahan untuk keselesaan penduduk
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Facility Card 1 -->
                <div class="group bg-white rounded-2xl p-8 shadow-md hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                    <div class="w-16 h-16 bg-gradient-to-br from-emerald-500 to-teal-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-mosque text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Surau</h3>
                    <p class="text-slate-600 leading-relaxed mb-4">
                        Tempat ibadah yang selesa dan bersih untuk penduduk kampung.
                    </p>
                    <a href="#" class="inline-flex items-center gap-2 text-emerald-600 font-semibold hover:gap-3 transition-all">
                        Ketahui Lebih
                        <i class="fas fa-arrow-right text-sm"></i>
                    </a>
                </div>

                <!-- Facility Card 2 -->
                <div class="group bg-white rounded-2xl p-8 shadow-md hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-futbol text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Padang Bola</h3>
                    <p class="text-slate-600 leading-relaxed mb-4">
                        Padang serbaguna untuk aktiviti sukan dan rekreasi.
                    </p>
                    <a href="#" class="inline-flex items-center gap-2 text-blue-600 font-semibold hover:gap-3 transition-all">
                        Ketahui Lebih
                        <i class="fas fa-arrow-right text-sm"></i>
                    </a>
                </div>

                <!-- Facility Card 3 -->
                <div class="group bg-white rounded-2xl p-8 shadow-md hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-home text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Dewan Serbaguna</h3>
                    <p class="text-slate-600 leading-relaxed mb-4">
                        Ruang untuk majlis dan aktiviti kemasyarakatan.
                    </p>
                    <a href="#" class="inline-flex items-center gap-2 text-purple-600 font-semibold hover:gap-3 transition-all">
                        Ketahui Lebih
                        <i class="fas fa-arrow-right text-sm"></i>
                    </a>
                </div>

                <!-- Facility Card 4 -->
                <div class="group bg-white rounded-2xl p-8 shadow-md hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                    <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-red-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-child text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Taman Permainan</h3>
                    <p class="text-slate-600 leading-relaxed mb-4">
                        Kawasan bermain yang selamat untuk kanak-kanak.
                    </p>
                    <a href="#" class="inline-flex items-center gap-2 text-orange-600 font-semibold hover:gap-3 transition-all">
                        Ketahui Lebih
                        <i class="fas fa-arrow-right text-sm"></i>
                    </a>
                </div>

                <!-- Facility Card 5 -->
                <div class="group bg-white rounded-2xl p-8 shadow-md hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                    <div class="w-16 h-16 bg-gradient-to-br from-teal-500 to-cyan-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-parking text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Tempat Letak Kereta</h3>
                    <p class="text-slate-600 leading-relaxed mb-4">
                        Ruang parkir yang mencukupi untuk kemudahan penduduk.
                    </p>
                    <a href="#" class="inline-flex items-center gap-2 text-teal-600 font-semibold hover:gap-3 transition-all">
                        Ketahui Lebih
                        <i class="fas fa-arrow-right text-sm"></i>
                    </a>
                </div>

                <!-- Facility Card 6 -->
                <div class="group bg-white rounded-2xl p-8 shadow-md hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                    <div class="w-16 h-16 bg-gradient-to-br from-yellow-500 to-amber-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-lightbulb text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Lampu Jalan</h3>
                    <p class="text-slate-600 leading-relaxed mb-4">
                        Pencahayaan yang baik untuk keselamatan pada waktu malam.
                    </p>
                    <a href="#" class="inline-flex items-center gap-2 text-yellow-600 font-semibold hover:gap-3 transition-all">
                        Ketahui Lebih
                        <i class="fas fa-arrow-right text-sm"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

<!-- Contact Section -->
<section id="hubungi" class="py-20 bg-gradient-to-br from-slate-900 via-slate-800 to-emerald-900 relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>

    <!-- Decorative Blobs -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-emerald-500/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-teal-500/10 rounded-full blur-3xl"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-emerald-500/20 backdrop-blur-sm rounded-full border border-emerald-400/30 mb-6">
                <i class="fas fa-envelope text-emerald-400"></i>
                <span class="text-sm font-semibold text-emerald-300">Hubungi Kami</span>
            </div>
            <h2 class="text-4xl lg:text-5xl font-bold text-white mb-4">
                Mari Berhubung
            </h2>
            <p class="text-xl text-slate-300 max-w-2xl mx-auto">
                Kami sedia membantu anda. Jangan ragu untuk menghubungi kami untuk sebarang pertanyaan atau maklum balas.
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-12 items-start">
            <!-- Contact Info -->
            <div>
                <div class="space-y-6 mb-8">
                    <!-- Phone -->
                    <div class="flex items-start gap-4 p-6 bg-white/10 backdrop-blur-md rounded-2xl border border-white/20 hover:bg-white/15 transition-all duration-300">
                        <div class="w-14 h-14 bg-gradient-to-br from-emerald-500 to-teal-600 rounded-xl flex items-center justify-center flex-shrink-0 shadow-lg">
                            <i class="fas fa-phone-alt text-white text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-white text-lg mb-2">Telefon</h4>
                            <p class="text-emerald-300 font-semibold text-lg">+60 3-XXXX XXXX</p>
                            <p class="text-sm text-slate-400 mt-1">Isnin - Jumaat, 8:00 - 17:00</p>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="flex items-start gap-4 p-6 bg-white/10 backdrop-blur-md rounded-2xl border border-white/20 hover:bg-white/15 transition-all duration-300">
                        <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center flex-shrink-0 shadow-lg">
                            <i class="fas fa-envelope text-white text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-white text-lg mb-2">Email</h4>
                            <p class="text-blue-300 font-semibold">jpkkk@kampungbudiman.my</p>
                            <p class="text-sm text-slate-400 mt-1">Kami akan balas dalam 24 jam</p>
                        </div>
                    </div>

                    <!-- Address -->
                    <div class="flex items-start gap-4 p-6 bg-white/10 backdrop-blur-md rounded-2xl border border-white/20 hover:bg-white/15 transition-all duration-300">
                        <div class="w-14 h-14 bg-gradient-to-br from-purple-500 to-pink-600 rounded-xl flex items-center justify-center flex-shrink-0 shadow-lg">
                            <i class="fas fa-map-marker-alt text-white text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-white text-lg mb-2">Alamat</h4>
                            <p class="text-slate-300">Kampung Budiman,<br>41000 Klang, Selangor</p>
                        </div>
                    </div>

                    <!-- WhatsApp -->
                    <div class="flex items-start gap-4 p-6 bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl shadow-xl hover:scale-105 transition-all duration-300">
                        <div class="w-14 h-14 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center flex-shrink-0">
                            <i class="fab fa-whatsapp text-white text-2xl"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-white text-lg mb-2">WhatsApp</h4>
                            <p class="text-white font-semibold text-lg mb-2">+60 12-XXX XXXX</p>
                            <a href="#" class="inline-flex items-center gap-2 text-sm text-white/90 hover:text-white font-medium">
                                Tekan untuk chat
                                <i class="fas fa-arrow-right text-xs"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="p-6 bg-white/5 backdrop-blur-sm rounded-2xl border border-white/10">
                    <h4 class="font-semibold text-white text-lg mb-4">Ikuti Kami</h4>
                    <div class="flex gap-3">
                        <a href="#" class="w-12 h-12 bg-white/10 hover:bg-gradient-to-br hover:from-blue-500 hover:to-blue-600 rounded-xl flex items-center justify-center transition-all duration-300 group border border-white/20">
                            <i class="fab fa-facebook-f text-slate-300 group-hover:text-white"></i>
                        </a>
                        <a href="#" class="w-12 h-12 bg-white/10 hover:bg-gradient-to-br hover:from-pink-500 hover:to-rose-600 rounded-xl flex items-center justify-center transition-all duration-300 group border border-white/20">
                            <i class="fab fa-instagram text-slate-300 group-hover:text-white"></i>
                        </a>
                        <a href="#" class="w-12 h-12 bg-white/10 hover:bg-gradient-to-br hover:from-sky-500 hover:to-blue-600 rounded-xl flex items-center justify-center transition-all duration-300 group border border-white/20">
                            <i class="fab fa-twitter text-slate-300 group-hover:text-white"></i>
                        </a>
                        <a href="#" class="w-12 h-12 bg-white/10 hover:bg-gradient-to-br hover:from-red-500 hover:to-rose-600 rounded-xl flex items-center justify-center transition-all duration-300 group border border-white/20">
                            <i class="fab fa-youtube text-slate-300 group-hover:text-white"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="bg-white rounded-3xl p-8 lg:p-10 shadow-2xl">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-12 h-12 bg-gradient-to-br from-emerald-500 to-teal-600 rounded-xl flex items-center justify-center">
                        <i class="fas fa-paper-plane text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900">Hantar Mesej</h3>
                </div>
                
                <form class="space-y-5">
                    <div class="grid sm:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">
                                Nama Penuh <span class="text-red-500">*</span>
                            </label>
                            <input type="text" 
                                   required
                                   class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent focus:bg-white transition-all"
                                   placeholder="Nama anda">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">
                                No. Telefon <span class="text-red-500">*</span>
                            </label>
                            <input type="tel" 
                                   required
                                   class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent focus:bg-white transition-all"
                                   placeholder="+60 12-345 6789">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">
                            Email <span class="text-red-500">*</span>
                        </label>
                        <input type="email" 
                               required
                               class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent focus:bg-white transition-all"
                               placeholder="email@contoh.com">
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">
                            Subjek <span class="text-red-500">*</span>
                        </label>
                        <input type="text" 
                               required
                               class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent focus:bg-white transition-all"
                               placeholder="Tajuk mesej anda">
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">
                            Mesej <span class="text-red-500">*</span>
                        </label>
                        <textarea rows="5" 
                                  required
                                  class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent focus:bg-white transition-all resize-none"
                                  placeholder="Tulis mesej anda di sini..."></textarea>
                    </div>

                    <button type="submit" 
                            class="w-full px-8 py-4 bg-gradient-to-r from-emerald-500 to-teal-600 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl hover:scale-105 transition-all duration-300 flex items-center justify-center gap-2">
                        <i class="fas fa-paper-plane"></i>
                        Hantar Mesej
                    </button>

                    <p class="text-xs text-slate-500 text-center">
                        Dengan menghantar mesej, anda bersetuju dengan 
                        <a href="#" class="text-emerald-600 hover:underline">Dasar Privasi</a> kami.
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection