@extends('layouts.app')
@section('content')
<!-- Aktiviti Section -->
<section id="aktiviti" class="py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-emerald-50 rounded-full mb-6">
                <i class="fas fa-calendar-check text-emerald-600"></i>
                <span class="text-sm font-semibold text-emerald-700">Program & Aktiviti</span>
            </div>
            <h2 class="text-4xl lg:text-5xl font-bold text-slate-900 mb-4">
                Aktiviti Kampung
            </h2>
            <p class="text-xl text-slate-600 max-w-2xl mx-auto">
                Pelbagai program dan aktiviti untuk pembangunan komuniti
            </p>
        </div>

        <!-- Activity Items -->
        <div class="space-y-16">
            
            <!-- Activity 1 - SULAM 2024 -->
            <div class="bg-white rounded-3xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-500">
                <div class="grid lg:grid-cols-2 gap-0">
                    <!-- Image Carousel -->
                    <div class="relative bg-slate-900 order-2 lg:order-1">
                        <!-- Carousel Container -->
                        <div class="relative h-full min-h-[400px]">
                            <!-- Slides -->
                            <div class="carousel-slides-1 h-full">
                                <!-- Slide 1 -->
                                <div class="carousel-slide active absolute inset-0">
                                    <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=800" 
                                         alt="SULAM 2024 - Image 1" 
                                         class="w-full h-full object-cover">
                                </div>
                                <!-- Slide 2 -->
                                <div class="carousel-slide absolute inset-0 opacity-0">
                                    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=800" 
                                         alt="SULAM 2024 - Image 2" 
                                         class="w-full h-full object-cover">
                                </div>
                                <!-- Slide 3 -->
                                <div class="carousel-slide absolute inset-0 opacity-0">
                                    <img src="https://images.unsplash.com/photo-1517486808906-6ca8b3f04846?w=800" 
                                         alt="SULAM 2024 - Image 3" 
                                         class="w-full h-full object-cover">
                                </div>
                                <!-- Add more slides here via backend loop -->
                            </div>

                            <!-- Navigation Arrows -->
                            <button onclick="prevSlide(1)" class="absolute left-4 top-1/2 -translate-y-1/2 w-12 h-12 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-white transition-all duration-300 shadow-lg z-10 group">
                                <i class="fas fa-chevron-left text-slate-900 group-hover:scale-110 transition-transform"></i>
                            </button>
                            <button onclick="nextSlide(1)" class="absolute right-4 top-1/2 -translate-y-1/2 w-12 h-12 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-white transition-all duration-300 shadow-lg z-10 group">
                                <i class="fas fa-chevron-right text-slate-900 group-hover:scale-110 transition-transform"></i>
                            </button>

                            <!-- Dots Indicator -->
                            <div class="absolute bottom-6 left-1/2 -translate-x-1/2 flex gap-2 z-10">
                                <button onclick="goToSlide(1, 0)" class="carousel-dot-1 w-2 h-2 bg-white rounded-full transition-all duration-300 active"></button>
                                <button onclick="goToSlide(1, 1)" class="carousel-dot-1 w-2 h-2 bg-white/50 rounded-full transition-all duration-300"></button>
                                <button onclick="goToSlide(1, 2)" class="carousel-dot-1 w-2 h-2 bg-white/50 rounded-full transition-all duration-300"></button>
                                <!-- Add more dots here via backend loop -->
                            </div>

                            <!-- Image Counter -->
                            <div class="absolute top-6 right-6 px-4 py-2 bg-slate-900/80 backdrop-blur-sm text-white text-sm font-semibold rounded-full z-10">
                                <span class="carousel-counter-1">1</span> / 3
                            </div>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="p-8 lg:p-12 flex flex-col justify-center order-1 lg:order-2">
                        <!-- Date Badge -->
                        <div class="inline-flex items-center gap-2 px-4 py-2 bg-blue-50 text-blue-700 rounded-full mb-6 w-fit">
                            <i class="fas fa-calendar text-blue-600"></i>
                            <span class="text-sm font-semibold">2024</span>
                        </div>

                        <h3 class="text-3xl lg:text-4xl font-bold text-slate-900 mb-4">
                            Program Service Learning Malaysia University For Society (SULAM 2024)
                        </h3>

                        <p class="text-slate-600 leading-relaxed mb-6">
                            Bertempat di Dewan Orang Ramai Kampung Budiman telah diadakan Program Service Learning Malaysia University For Society bersama penduduk Kampung Budiman dengan kerjasama mahasiswa UTM.
                        </p>

                        <!-- Tags -->
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="px-3 py-1 bg-emerald-100 text-emerald-700 text-xs font-semibold rounded-full">
                                Pendidikan
                            </span>
                            <span class="px-3 py-1 bg-purple-100 text-purple-700 text-xs font-semibold rounded-full">
                                Kerjasama UTM
                            </span>
                            <span class="px-3 py-1 bg-orange-100 text-orange-700 text-xs font-semibold rounded-full">
                                Komuniti
                            </span>
                        </div>

                        <!-- Stats -->
                        <div class="grid grid-cols-3 gap-4 pt-6 border-t border-slate-200">
                            <div>
                                <div class="text-2xl font-bold text-emerald-600 mb-1">50+</div>
                                <div class="text-xs text-slate-600">Peserta</div>
                            </div>
                            <div>
                                <div class="text-2xl font-bold text-blue-600 mb-1">3</div>
                                <div class="text-xs text-slate-600">Hari</div>
                            </div>
                            <div>
                                <div class="text-2xl font-bold text-purple-600 mb-1">10+</div>
                                <div class="text-xs text-slate-600">Aktiviti</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Activity 2 - Cybersafe -->
            <div class="bg-white rounded-3xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-500">
                <div class="grid lg:grid-cols-2 gap-0">
                    <!-- Content -->
                    <div class="p-8 lg:p-12 flex flex-col justify-center">
                        <!-- Date Badge -->
                        <div class="inline-flex items-center gap-2 px-4 py-2 bg-red-50 text-red-700 rounded-full mb-6 w-fit">
                            <i class="fas fa-calendar text-red-600"></i>
                            <span class="text-sm font-semibold">14 Disember 2024</span>
                        </div>

                        <h3 class="text-3xl lg:text-4xl font-bold text-slate-900 mb-4">
                            Program Cybersafe
                        </h3>

                        <p class="text-slate-600 leading-relaxed mb-4">
                            Pada 14 Disember 2024 bertempat di dewan orang ramai Kampung Budiman telah diadakan Cybersafe Sisters: Memperkasakan Wanita Melalui Kesedaran Keselamatan Siber bersama penduduk kampung budiman dengan kerjasama mahasiswa UTM.
                        </p>

                        <p class="text-slate-600 leading-relaxed mb-6">
                            Antara aktiviti menarik ialah ceramah kesedaran keselamatan siber, Cyber Bingo, teka-teki scammer, kuiz keselamatan siber.
                        </p>

                        <!-- Tags -->
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="px-3 py-1 bg-red-100 text-red-700 text-xs font-semibold rounded-full">
                                Keselamatan Siber
                            </span>
                            <span class="px-3 py-1 bg-pink-100 text-pink-700 text-xs font-semibold rounded-full">
                                Pemberdayaan Wanita
                            </span>
                            <span class="px-3 py-1 bg-purple-100 text-purple-700 text-xs font-semibold rounded-full">
                                Kerjasama UTM
                            </span>
                        </div>

                        <!-- Stats -->
                        <div class="grid grid-cols-3 gap-4 pt-6 border-t border-slate-200">
                            <div>
                                <div class="text-2xl font-bold text-red-600 mb-1">40+</div>
                                <div class="text-xs text-slate-600">Peserta</div>
                            </div>
                            <div>
                                <div class="text-2xl font-bold text-pink-600 mb-1">1</div>
                                <div class="text-xs text-slate-600">Hari</div>
                            </div>
                            <div>
                                <div class="text-2xl font-bold text-purple-600 mb-1">5+</div>
                                <div class="text-xs text-slate-600">Aktiviti</div>
                            </div>
                        </div>
                    </div>

                    <!-- Image Carousel -->
                    <div class="relative bg-slate-900">
                        <!-- Carousel Container -->
                        <div class="relative h-full min-h-[400px]">
                            <!-- Slides -->
                            <div class="carousel-slides-2 h-full">
                                <!-- Slide 1 -->
                                <div class="carousel-slide active absolute inset-0">
                                    <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?w=800" 
                                         alt="Cybersafe - Image 1" 
                                         class="w-full h-full object-cover">
                                </div>
                                <!-- Slide 2 -->
                                <div class="carousel-slide absolute inset-0 opacity-0">
                                    <img src="https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?w=800" 
                                         alt="Cybersafe - Image 2" 
                                         class="w-full h-full object-cover">
                                </div>
                                <!-- Slide 3 -->
                                <div class="carousel-slide absolute inset-0 opacity-0">
                                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=800" 
                                         alt="Cybersafe - Image 3" 
                                         class="w-full h-full object-cover">
                                </div>
                                <!-- Add more slides here via backend loop -->
                            </div>

                            <!-- Navigation Arrows -->
                            <button onclick="prevSlide(2)" class="absolute left-4 top-1/2 -translate-y-1/2 w-12 h-12 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-white transition-all duration-300 shadow-lg z-10 group">
                                <i class="fas fa-chevron-left text-slate-900 group-hover:scale-110 transition-transform"></i>
                            </button>
                            <button onclick="nextSlide(2)" class="absolute right-4 top-1/2 -translate-y-1/2 w-12 h-12 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-white transition-all duration-300 shadow-lg z-10 group">
                                <i class="fas fa-chevron-right text-slate-900 group-hover:scale-110 transition-transform"></i>
                            </button>

                            <!-- Dots Indicator -->
                            <div class="absolute bottom-6 left-1/2 -translate-x-1/2 flex gap-2 z-10">
                                <button onclick="goToSlide(2, 0)" class="carousel-dot-2 w-2 h-2 bg-white rounded-full transition-all duration-300 active"></button>
                                <button onclick="goToSlide(2, 1)" class="carousel-dot-2 w-2 h-2 bg-white/50 rounded-full transition-all duration-300"></button>
                                <button onclick="goToSlide(2, 2)" class="carousel-dot-2 w-2 h-2 bg-white/50 rounded-full transition-all duration-300"></button>
                                <!-- Add more dots here via backend loop -->
                            </div>

                            <!-- Image Counter -->
                            <div class="absolute top-6 right-6 px-4 py-2 bg-slate-900/80 backdrop-blur-sm text-white text-sm font-semibold rounded-full z-10">
                                <span class="carousel-counter-2">1</span> / 3
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Activity 3 - Program Asnaf -->
            <div class="bg-white rounded-3xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-500">
                <div class="grid lg:grid-cols-2 gap-0">
                    <!-- Image Carousel -->
                    <div class="relative bg-slate-900 order-2 lg:order-1">
                        <!-- Carousel Container -->
                        <div class="relative h-full min-h-[400px]">
                            <!-- Slides -->
                            <div class="carousel-slides-3 h-full">
                                <!-- Slide 1 -->
                                <div class="carousel-slide active absolute inset-0">
                                    <img src="https://images.unsplash.com/photo-1559027615-cd4628902d4a?w=800" 
                                         alt="Program Asnaf - Image 1" 
                                         class="w-full h-full object-cover">
                                </div>
                                <!-- Slide 2 -->
                                <div class="carousel-slide absolute inset-0 opacity-0">
                                    <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?w=800" 
                                         alt="Program Asnaf - Image 2" 
                                         class="w-full h-full object-cover">
                                </div>
                                <!-- Slide 3 -->
                                <div class="carousel-slide absolute inset-0 opacity-0">
                                    <img src="https://images.unsplash.com/photo-1469571486292-0ba58a3f068b?w=800" 
                                         alt="Program Asnaf - Image 3" 
                                         class="w-full h-full object-cover">
                                </div>
                                <!-- Add more slides here via backend loop -->
                            </div>

                            <!-- Navigation Arrows -->
                            <button onclick="prevSlide(3)" class="absolute left-4 top-1/2 -translate-y-1/2 w-12 h-12 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-white transition-all duration-300 shadow-lg z-10 group">
                                <i class="fas fa-chevron-left text-slate-900 group-hover:scale-110 transition-transform"></i>
                            </button>
                            <button onclick="nextSlide(3)" class="absolute right-4 top-1/2 -translate-y-1/2 w-12 h-12 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-white transition-all duration-300 shadow-lg z-10 group">
                                <i class="fas fa-chevron-right text-slate-900 group-hover:scale-110 transition-transform"></i>
                            </button>

                            <!-- Dots Indicator -->
                            <div class="absolute bottom-6 left-1/2 -translate-x-1/2 flex gap-2 z-10">
                                <button onclick="goToSlide(3, 0)" class="carousel-dot-3 w-2 h-2 bg-white rounded-full transition-all duration-300 active"></button>
                                <button onclick="goToSlide(3, 1)" class="carousel-dot-3 w-2 h-2 bg-white/50 rounded-full transition-all duration-300"></button>
                                <button onclick="goToSlide(3, 2)" class="carousel-dot-3 w-2 h-2 bg-white/50 rounded-full transition-all duration-300"></button>
                                <!-- Add more dots here via backend loop -->
                            </div>

                            <!-- Image Counter -->
                            <div class="absolute top-6 right-6 px-4 py-2 bg-slate-900/80 backdrop-blur-sm text-white text-sm font-semibold rounded-full z-10">
                                <span class="carousel-counter-3">1</span> / 3
                            </div>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="p-8 lg:p-12 flex flex-col justify-center order-1 lg:order-2">
                        <!-- Date Badge -->
                        <div class="inline-flex items-center gap-2 px-4 py-2 bg-green-50 text-green-700 rounded-full mb-6 w-fit">
                            <i class="fas fa-calendar text-green-600"></i>
                            <span class="text-sm font-semibold">2024</span>
                        </div>

                        <h3 class="text-3xl lg:text-4xl font-bold text-slate-900 mb-4">
                            Program Serahan Asnaf
                        </h3>

                        <p class="text-slate-600 leading-relaxed mb-6">
                            Program bantuan kepada golongan asnaf di Kampung Budiman. Inisiatif ini bertujuan untuk membantu meringankan beban keluarga yang memerlukan dan meningkatkan kesejahteraan komuniti.
                        </p>

                        <!-- Tags -->
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="px-3 py-1 bg-green-100 text-green-700 text-xs font-semibold rounded-full">
                                Kebajikan
                            </span>
                            <span class="px-3 py-1 bg-teal-100 text-teal-700 text-xs font-semibold rounded-full">
                                Bantuan Asnaf
                            </span>
                            <span class="px-3 py-1 bg-emerald-100 text-emerald-700 text-xs font-semibold rounded-full">
                                Komuniti
                            </span>
                        </div>

                        <!-- Stats -->
                        <div class="grid grid-cols-3 gap-4 pt-6 border-t border-slate-200">
                            <div>
                                <div class="text-2xl font-bold text-green-600 mb-1">30+</div>
                                <div class="text-xs text-slate-600">Penerima</div>
                            </div>
                            <div>
                                <div class="text-2xl font-bold text-teal-600 mb-1">1</div>
                                <div class="text-xs text-slate-600">Hari</div>
                            </div>
                            <div>
                                <div class="text-2xl font-bold text-emerald-600 mb-1">RM</div>
                                <div class="text-xs text-slate-600">Bantuan</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add more activities here via backend loop -->

        </div>

        <!-- View All Button -->
        <div class="text-center mt-16">
            <a href="#" class="inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-emerald-500 to-teal-600 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl hover:scale-105 transition-all duration-300">
                <span>Lihat Semua Aktiviti</span>
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<style>
    .carousel-slide {
        transition: opacity 0.5s ease-in-out;
    }
    
    .carousel-slide.active {
        opacity: 1;
    }
    
    .carousel-dot-1.active,
    .carousel-dot-2.active,
    .carousel-dot-3.active {
        width: 2rem;
        background-color: white;
    }
</style>

<script>
    // Carousel functionality
    let currentSlides = {
        1: 0,
        2: 0,
        3: 0
    };

    const totalSlides = {
        1: 3,
        2: 3,
        3: 3
    };

    function showSlide(carouselId, index) {
        const slides = document.querySelectorAll(`.carousel-slides-${carouselId} .carousel-slide`);
        const dots = document.querySelectorAll(`.carousel-dot-${carouselId}`);
        const counter = document.querySelector(`.carousel-counter-${carouselId}`);
        
        // Hide all slides
        slides.forEach(slide => {
            slide.classList.remove('active');
        });
        
        // Remove active from all dots
        dots.forEach(dot => {
            dot.classList.remove('active');
        });
        
        // Show current slide
        slides[index].classList.add('active');
        dots[index].classList.add('active');
        
        // Update counter
        counter.textContent = index + 1;
        
        currentSlides[carouselId] = index;
    }

    function nextSlide(carouselId) {
        let newIndex = currentSlides[carouselId] + 1;
        if (newIndex >= totalSlides[carouselId]) {
            newIndex = 0;
        }
        showSlide(carouselId, newIndex);
    }

    function prevSlide(carouselId) {
        let newIndex = currentSlides[carouselId] - 1;
        if (newIndex < 0) {
            newIndex = totalSlides[carouselId] - 1;
        }
        showSlide(carouselId, newIndex);
    }

    function goToSlide(carouselId, index) {
        showSlide(carouselId, index);
    }

    // Auto-play carousel (optional)
    // setInterval(() => {
    //     nextSlide(1);
    //     nextSlide(2);
    //     nextSlide(3);
    // }, 5000);
</script>

@endsection