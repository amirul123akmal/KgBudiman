    <nav class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-md shadow-sm border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 bg-gradient-to-br from-emerald-500 to-teal-600 rounded-xl flex items-center justify-center shadow-lg">
                        <i class="fas fa-home text-white text-xl"></i>
                    </div>
                    <div>
                        <h1 class="text-xl font-bold text-slate-900">Kampung Budiman</h1>
                        <p class="text-xs text-slate-500 font-medium">JPKKK Official</p>
                    </div>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center gap-8">
                    <a href="#home" class="nav-link text-sm font-semibold text-slate-700 hover:text-emerald-600">
                        Home
                    </a>
                    <a href="#fasiliti" class="nav-link text-sm font-semibold text-slate-700 hover:text-emerald-600">
                        Fasiliti
                    </a>
                    <a href="#hubungi" class="nav-link text-sm font-semibold text-slate-700 hover:text-emerald-600">
                        Hubungi Kami
                    </a>
                    <a href="#biz-hub" class="nav-link text-sm font-semibold text-slate-700 hover:text-emerald-600">
                        Budiman Biz HUB
                    </a>
                </div>

                <!-- CTA Button -->
                <div class="hidden md:flex items-center gap-4">
                    <button class="px-6 py-2.5 bg-gradient-to-r from-emerald-500 to-teal-600 text-white text-sm font-semibold rounded-lg shadow-md hover:shadow-lg hover:scale-105 transition-all duration-300">
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
        <div id="mobileMenu" class="hidden md:hidden bg-white border-t border-slate-200">
            <div class="px-4 py-4 space-y-3">
                <a href="#home" class="block px-4 py-2 text-sm font-semibold text-slate-700 hover:bg-emerald-50 hover:text-emerald-600 rounded-lg transition-colors">
                    Home
                </a>
                <a href="#fasiliti" class="block px-4 py-2 text-sm font-semibold text-slate-700 hover:bg-emerald-50 hover:text-emerald-600 rounded-lg transition-colors">
                    Fasiliti
                </a>
                <a href="#hubungi" class="block px-4 py-2 text-sm font-semibold text-slate-700 hover:bg-emerald-50 hover:text-emerald-600 rounded-lg transition-colors">
                    Hubungi Kami
                </a>
                <a href="#biz-hub" class="block px-4 py-2 text-sm font-semibold text-slate-700 hover:bg-emerald-50 hover:text-emerald-600 rounded-lg transition-colors">
                    Budiman Biz HUB
                </a>
                <button class="w-full px-4 py-2.5 bg-gradient-to-r from-emerald-500 to-teal-600 text-white text-sm font-semibold rounded-lg shadow-md">
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
</script>
