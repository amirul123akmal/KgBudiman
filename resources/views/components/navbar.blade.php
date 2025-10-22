    <nav class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-md shadow-sm border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <div class="flex items-center gap-3" x-data>
                    <div x-on:click="window.location.href = '/'" class="cursor-pointer w-12 h-12 bg-linear-to-br from-emerald-500 to-teal-600 rounded-xl flex items-center justify-center shadow-lg">
                        <i class="fas fa-home text-white text-xl"></i>
                    </div>
                    <div>
                        <h1 class="text-xl font-bold text-slate-900">Kampung Budiman</h1>
                        <p class="text-xs text-slate-500 font-medium">JPKK Official</p>
                    </div>
                </div>
                
                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center gap-8">
                    <a href="/#home" class="nav-link text-sm font-semibold text-slate-700 hover:text-emerald-600">
                        Home
                    </a>
                    <a href="/#fasiliti" class="nav-link text-sm font-semibold text-slate-700 hover:text-emerald-600">
                        Fasiliti
                    </a>
                    <a href="{{ route('jawatankuasa') }}" class="nav-link text-sm font-semibold text-slate-700 hover:text-emerald-600">
                        Kepimpinan
                    </a>
                    
                    <!-- Servis Dropdown -->
                    <div class="relative group">
                        <button class="nav-link text-sm font-semibold text-slate-700 hover:text-emerald-600 flex items-center gap-1">
                            Servis
                            <i class="fas fa-chevron-down text-xs transition-transform duration-300 group-hover:rotate-180"></i>
                        </button>
                        
                        <!-- Dropdown Menu -->
                        <div class="absolute top-full left-0 mt-2 w-56 bg-white rounded-xl shadow-xl border border-slate-200 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0 z-50">
                            <!-- Arrow -->
                            <div class="absolute -top-2 left-6 w-4 h-4 bg-white border-l border-t border-slate-200 transform rotate-45"></div>
                            
                            <div class="relative bg-white rounded-xl overflow-hidden py-2">
                                <a href="{{ route('biz-hub') }}" class="flex items-center gap-3 px-4 py-3 text-slate-700 hover:bg-emerald-50 hover:text-emerald-600 transition-colors group/item">
                                    <div class="w-10 h-10 bg-emerald-100 rounded-lg flex items-center justify-center group-hover/item:bg-emerald-500 transition-colors">
                                        <i class="fas fa-store text-emerald-600 group-hover/item:text-white transition-colors"></i>
                                    </div>
                                    <div>
                                        <div class="font-semibold text-sm">Budiman Biz HUB</div>
                                        <div class="text-xs text-slate-500">Perniagaan tempatan</div>
                                    </div>
                                </a>
                                
                                <a href="/#Aduan" class="flex items-center gap-3 px-4 py-3 text-slate-700 hover:bg-blue-50 hover:text-blue-600 transition-colors group/item">
                                    <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center group-hover/item:bg-blue-500 transition-colors">
                                        <i class="fas fa-comment-alt text-blue-600 group-hover/item:text-white transition-colors"></i>
                                    </div>
                                    <div>
                                        <div class="font-semibold text-sm">Aduan</div>
                                        <div class="text-xs text-slate-500">Hantar maklum balas</div>
                                    </div>
                                </a>
                                
                                <a href="/#hubungi" class="flex items-center gap-3 px-4 py-3 text-slate-700 hover:bg-purple-50 hover:text-purple-600 transition-colors group/item">
                                    <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center group-hover/item:bg-purple-500 transition-colors">
                                        <i class="fas fa-envelope text-purple-600 group-hover/item:text-white transition-colors"></i>
                                    </div>
                                    <div>
                                        <div class="font-semibold text-sm">Hubungi Kami</div>
                                        <div class="text-xs text-slate-500">Dapatkan bantuan</div>
                                    </div>
                                </a>
                                <div class="border-t border-slate-200 my-2"></div>

                                <a href="{{ route('aktivity') }}" class="flex items-center gap-3 px-4 py-3 text-slate-700 hover:bg-orange-50 hover:text-orange-600 transition-colors group/item">
                                    <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center group-hover/item:bg-orange-500 transition-colors">
                                        <i class="fas fa-file-alt text-orange-600 group-hover/item:text-white transition-colors"></i>
                                    </div>
                                    <div>
                                        <div class="font-semibold text-sm">Aktiviti</div>
                                        <div class="text-xs text-slate-500">Borang & dokumen</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                <!-- CTA Button -->
                <div class="hidden md:flex items-center gap-4">
                    <button class="px-6 py-2.5 bg-linear-to-r from-emerald-500 to-teal-600 text-white text-sm font-semibold rounded-lg shadow-md hover:shadow-lg hover:scale-105 transition-all duration-300">
                        <i class="fas fa-search mr-2"></i>
                        Cari
                    </button>
                </div>
                
                <!-- Mobile Menu Button -->
                <button id="mobileMenuBtn" class="md:hidden p-2 rounded-lg hover:bg-slate-100 transition-colors">
                    <i class="fas fa-bars text-slate-700 text-xl"></i>
                </button>
                
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <!-- Mobile Menu -->
        <div id="mobileMenu" class="hidden md:hidden bg-white border-t border-slate-200">
            <div class="px-4 py-4 space-y-3">
                <a href="/#home" class="block px-4 py-2 text-sm font-semibold text-slate-700 hover:bg-emerald-50 hover:text-emerald-600 rounded-lg transition-colors">
                    Home
                </a>
                <a href="/#fasiliti" class="block px-4 py-2 text-sm font-semibold text-slate-700 hover:bg-emerald-50 hover:text-emerald-600 rounded-lg transition-colors">
                    Fasiliti
                </a>
                <a href="{{ route('jawatankuasa') }}" class="block px-4 py-2 text-sm font-semibold text-slate-700 hover:bg-emerald-50 hover:text-emerald-600 rounded-lg transition-colors">
                    Kepimpinan
                </a>
                
                <!-- Mobile Servis Dropdown -->
                <div class="space-y-2">
                    <button onclick="toggleMobileServis()" class="w-full flex items-center justify-between px-4 py-2 text-sm font-semibold text-slate-700 hover:bg-slate-50 rounded-lg transition-colors">
                        <span>Servis</span>
                        <i id="servisChevron" class="fas fa-chevron-down text-xs transition-transform duration-300"></i>
                    </button>
                    
                    <div id="mobileServisMenu" class="hidden pl-4 space-y-2">
                        <a href="{{ route('biz-hub') }}" class="flex items-center gap-3 px-4 py-2 text-sm text-slate-600 hover:bg-emerald-50 hover:text-emerald-600 rounded-lg transition-colors">
                            <i class="fas fa-store text-emerald-600 w-4"></i>
                            Budiman Biz HUB
                        </a>
                        <a href="/#Aduan" class="flex items-center gap-3 px-4 py-2 text-sm text-slate-600 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-colors">
                            <i class="fas fa-comment-alt text-blue-600 w-4"></i>
                            Aduan
                        </a>
                        <a href="/#hubungi" class="flex items-center gap-3 px-4 py-2 text-sm text-slate-600 hover:bg-purple-50 hover:text-purple-600 rounded-lg transition-colors">
                            <i class="fas fa-envelope text-purple-600 w-4"></i>
                            Hubungi Kami
                        </a>
                        <a href="{{ route('aktivity') }}" class="flex items-center gap-3 px-4 py-2 text-sm text-slate-600 hover:bg-orange-50 hover:text-orange-600 rounded-lg transition-colors">
                            <i class="fas fa-file-alt text-orange-600 w-4"></i>
                            Aktiviti
                        </a>
                    </div>
                </div>
                
                <button class="w-full px-4 py-2.5 bg-linear-to-r from-emerald-500 to-teal-600 text-white text-sm font-semibold rounded-lg shadow-md">
                    <i class="fas fa-search mr-2"></i>
                    Cari
                </button>
            </div>
        </div>
        
    </nav>
    
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Mobile Menu Toggle
            const mobileMenuBtn = document.getElementById('mobileMenuBtn');
            const mobileMenu = document.getElementById('mobileMenu');
            
            mobileMenuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
            
            // Scroll to Top Button
            const scrollToTopBtn = document.getElementById('scrollToTop');
            
            if (scrollToTopBtn) {
                window.addEventListener('scroll', () => {
                    if (window.pageYOffset > 300) {
                        scrollToTopBtn.classList.remove('opacity-0', 'pointer-events-none');
                        scrollToTopBtn.classList.add('opacity-100');
                    } else {
                        scrollToTopBtn.classList.add('opacity-0', 'pointer-events-none');
                        scrollToTopBtn.classList.remove('opacity-100');
                    }
                });
                
                scrollToTopBtn.addEventListener('click', () => {
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                });
            }
            
            // Smooth Scroll for Navigation Links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        const offset = 80;
                        const targetPosition = target.offsetTop - offset;
                        window.scrollTo({
                            top: targetPosition,
                            behavior: 'smooth'
                        });
                        // Close mobile menu if open
                        mobileMenu.classList.add('hidden');
                    }
                });
            });
            
            // Add animation on scroll
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('fade-in');
                    }
                });
            }, observerOptions);
            
            document.querySelectorAll('section').forEach(section => {
                observer.observe(section);
            });
        });
        // Mobile Servis Dropdown Toggle
        function toggleMobileServis() {
            const menu = document.getElementById('mobileServisMenu');
            const chevron = document.getElementById('servisChevron');
            menu.classList.toggle('hidden');
            chevron.classList.toggle('rotate-180');
        }
    </script>
    