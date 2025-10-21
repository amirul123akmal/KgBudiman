<!DOCTYPE html>
<html lang="ms" class="scroll-smooth">
<x-header />
<body class="bg-slate-50 text-slate-800 antialiased">
    <x-navbar />
    @yield('content')
    <x-footer />

    <button id="scrollToTop" 
            class="fixed bottom-8 right-8 w-14 h-14 bg-gradient-to-r from-emerald-500 to-teal-600 text-white rounded-full shadow-2xl hover:scale-110 transition-all duration-300 opacity-0 pointer-events-none z-50">
        <i class="fas fa-arrow-up"></i>
    </button>
</body>
</html>
