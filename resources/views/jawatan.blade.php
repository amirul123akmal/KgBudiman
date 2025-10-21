@extends('layouts.app')
@section('content')
<!-- Leadership/Committee Section -->
<section class="py-28 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-emerald-50 rounded-full mb-6">
                <i class="fas fa-users text-emerald-600"></i>
                <span class="text-sm font-semibold text-emerald-700">Kepimpinan</span>
            </div>
            <h2 class="text-4xl lg:text-5xl font-bold text-slate-900 mb-4">
                Ahli Jawatankuasa
            </h2>
            <p class="text-xl text-slate-600 max-w-2xl mx-auto">
                Berkhidmat untuk kemajuan dan kesejahteraan Kampung Budiman
            </p>
        </div>

        <!-- Leadership Cards Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                        <!-- Setiausaha Card -->
            <div class="group bg-linear-to-br from-blue-50 to-indigo-50 rounded-3xl p-8 shadow-md hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 border-2 border-blue-100">
                <!-- Image Container -->
                <div class="relative mb-6">
                    <div class="aspect-[3/4] rounded-2xl overflow-hidden bg-white shadow-lg">
                        <img src="https://via.placeholder.com/400x500/1e293b/ffffff?text=Setiausaha" 
                             alt="Pn Siti Azrah Binti Razali" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <!-- Badge -->
                    <div class="absolute -bottom-4 left-1/2 transform -translate-x-1/2">
                        <div class="px-6 py-2 bg-linear-to-r from-blue-500 to-indigo-600 text-white text-sm font-bold rounded-full shadow-lg">
                            <i class="fas fa-pen mr-2"></i>
                            Setiausaha
                        </div>
                    </div>
                </div>

                <!-- Content -->
                <div class="text-center mt-8">
                    <h3 class="text-2xl font-bold text-slate-900 mb-2">
                        Pn Siti Azrah Binti Razali
                    </h3>
                    <div class="flex items-center justify-center gap-2 text-slate-600 mb-4">
                        <i class="fas fa-phone text-blue-600"></i>
                        <a href="tel:0162781078" class="text-lg font-semibold hover:text-blue-600 transition-colors">
                            016-2781078
                        </a>
                    </div>
                    
                    <!-- Action Buttons -->
                    <div class="flex gap-3 mt-6">
                        <a href="tel:0162781078" class="flex-1 px-4 py-3 bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded-xl transition-all duration-300 flex items-center justify-center gap-2 shadow-md hover:shadow-lg">
                            <i class="fas fa-phone"></i>
                            <span class="text-sm">Call</span>
                        </a>
                        <a href="https://wa.me/60162781078" class="flex-1 px-4 py-3 bg-green-500 hover:bg-green-600 text-white font-semibold rounded-xl transition-all duration-300 flex items-center justify-center gap-2 shadow-md hover:shadow-lg">
                            <i class="fab fa-whatsapp"></i>
                            <span class="text-sm">WhatsApp</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Pengerusi Card -->
            <div class="group bg-linear-to-br from-emerald-50 to-teal-50 rounded-3xl p-8 shadow-md hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 border-2 border-emerald-100">
                <!-- Image Container -->
                <div class="relative mb-6">
                    <div class="aspect-3/4 rounded-2xl overflow-hidden bg-white shadow-lg">
                        <img src="https://via.placeholder.com/400x500/1e293b/ffffff?text=Pengerusi" 
                             alt="En Imran Bin Kairon" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <!-- Badge -->
                    <div class="absolute -bottom-4 left-1/2 transform -translate-x-1/2">
                        <div class="px-6 py-2 bg-linear-to-r from-emerald-500 to-teal-600 text-white text-sm font-bold rounded-full shadow-lg">
                            <i class="fas fa-crown mr-2"></i>
                            Pengerusi
                        </div>
                    </div>
                </div>

                <!-- Content -->
                <div class="text-center mt-8">
                    <h3 class="text-2xl font-bold text-slate-900 mb-2">
                        En Imran Bin Kairon
                    </h3>
                    <div class="flex items-center justify-center gap-2 text-slate-600 mb-4">
                        <i class="fas fa-phone text-emerald-600"></i>
                        <a href="tel:0116212202" class="text-lg font-semibold hover:text-emerald-600 transition-colors">
                            011-6212202
                        </a>
                    </div>
                    
                    <!-- Action Buttons -->
                    <div class="flex gap-3 mt-6">
                        <a href="tel:0116212202" class="flex-1 px-4 py-3 bg-emerald-500 hover:bg-emerald-600 text-white font-semibold rounded-xl transition-all duration-300 flex items-center justify-center gap-2 shadow-md hover:shadow-lg">
                            <i class="fas fa-phone"></i>
                            <span class="text-sm">Call</span>
                        </a>
                        <a href="https://wa.me/0116212202" class="flex-1 px-4 py-3 bg-green-500 hover:bg-green-600 text-white font-semibold rounded-xl transition-all duration-300 flex items-center justify-center gap-2 shadow-md hover:shadow-lg">
                            <i class="fab fa-whatsapp"></i>
                            <span class="text-sm">WhatsApp</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Bendahari Card -->
            <div class="group bg-linear-to-br from-purple-50 to-pink-50 rounded-3xl p-8 shadow-md hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 border-2 border-purple-100">
                <!-- Image Container -->
                <div class="relative mb-6">
                    <div class="aspect-3/4 rounded-2xl overflow-hidden bg-white shadow-lg">
                        <img src="https://via.placeholder.com/400x500/1e293b/ffffff?text=Bendahari" 
                             alt="Mohammad Shahidan Bin Mohd Jais" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <!-- Badge -->
                    <div class="absolute -bottom-4 left-1/2 transform -translate-x-1/2">
                        <div class="px-6 py-2 bg-linear-to-r from-purple-500 to-pink-600 text-white text-sm font-bold rounded-full shadow-lg">
                            <i class="fas fa-wallet mr-2"></i>
                            Bendahari
                        </div>
                    </div>
                </div>

                <!-- Content -->
                <div class="text-center mt-8">
                    <h3 class="text-2xl font-bold text-slate-900 mb-2">
                        Mohammad Shahidan Bin Mohd Jais
                    </h3>
                    <div class="flex items-center justify-center gap-2 text-slate-600 mb-4">
                        <i class="fas fa-phone text-purple-600"></i>
                        <a href="tel:0111378828" class="text-lg font-semibold hover:text-purple-600 transition-colors">
                            011-1378828
                        </a>
                    </div>
                    
                    <!-- Action Buttons -->
                    <div class="flex gap-3 mt-6">
                        <a href="tel:0111378828" class="flex-1 px-4 py-3 bg-purple-500 hover:bg-purple-600 text-white font-semibold rounded-xl transition-all duration-300 flex items-center justify-center gap-2 shadow-md hover:shadow-lg">
                            <i class="fas fa-phone"></i>
                            <span class="text-sm">Call</span>
                        </a>
                        <a href="https://wa.me/0111378828" class="flex-1 px-4 py-3 bg-green-500 hover:bg-green-600 text-white font-semibold rounded-xl transition-all duration-300 flex items-center justify-center gap-2 shadow-md hover:shadow-lg">
                            <i class="fab fa-whatsapp"></i>
                            <span class="text-sm">WhatsApp</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Committee Members (if any) -->
        <div class="mt-16">
            <h3 class="text-2xl font-bold text-slate-900 mb-8 text-center">Ahli Jawatankuasa Lain</h3>
            
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Committee Member Card Template -->
                <div class="bg-slate-50 rounded-2xl p-6 hover:shadow-lg transition-all duration-300 hover:-translate-y-1 border border-slate-200">
                    <div class="aspect-square rounded-xl overflow-hidden bg-slate-200 mb-4">
                        <img src="https://via.placeholder.com/300x300/64748b/ffffff?text=AJK" 
                             alt="Ahli Jawatankuasa" 
                             class="w-full h-full object-cover">
                    </div>
                    <div class="text-center">
                        <div class="inline-block px-3 py-1 bg-slate-200 text-slate-700 text-xs font-semibold rounded-full mb-2">
                            Ahli Jawatankuasa
                        </div>
                        <h4 class="font-bold text-slate-900 mb-1">Nama Ahli</h4>
                        <p class="text-sm text-slate-600">012-XXX XXXX</p>
                    </div>
                </div>

                <div class="bg-slate-50 rounded-2xl p-6 hover:shadow-lg transition-all duration-300 hover:-translate-y-1 border border-slate-200">
                    <div class="aspect-square rounded-xl overflow-hidden bg-slate-200 mb-4">
                        <img src="https://via.placeholder.com/300x300/64748b/ffffff?text=AJK" 
                             alt="Ahli Jawatankuasa" 
                             class="w-full h-full object-cover">
                    </div>
                    <div class="text-center">
                        <div class="inline-block px-3 py-1 bg-slate-200 text-slate-700 text-xs font-semibold rounded-full mb-2">
                            Ahli Jawatankuasa
                        </div>
                        <h4 class="font-bold text-slate-900 mb-1">Nama Ahli</h4>
                        <p class="text-sm text-slate-600">012-XXX XXXX</p>
                    </div>
                </div>

                <div class="bg-slate-50 rounded-2xl p-6 hover:shadow-lg transition-all duration-300 hover:-translate-y-1 border border-slate-200">
                    <div class="aspect-square rounded-xl overflow-hidden bg-slate-200 mb-4">
                        <img src="https://via.placeholder.com/300x300/64748b/ffffff?text=AJK" 
                             alt="Ahli Jawatankuasa" 
                             class="w-full h-full object-cover">
                    </div>
                    <div class="text-center">
                        <div class="inline-block px-3 py-1 bg-slate-200 text-slate-700 text-xs font-semibold rounded-full mb-2">
                            Ahli Jawatankuasa
                        </div>
                        <h4 class="font-bold text-slate-900 mb-1">Nama Ahli</h4>
                        <p class="text-sm text-slate-600">012-XXX XXXX</p>
                    </div>
                </div>

                <div class="bg-slate-50 rounded-2xl p-6 hover:shadow-lg transition-all duration-300 hover:-translate-y-1 border border-slate-200">
                    <div class="aspect-square rounded-xl overflow-hidden bg-slate-200 mb-4">
                        <img src="https://via.placeholder.com/300x300/64748b/ffffff?text=AJK" 
                             alt="Ahli Jawatankuasa" 
                             class="w-full h-full object-cover">
                    </div>
                    <div class="text-center">
                        <div class="inline-block px-3 py-1 bg-slate-200 text-slate-700 text-xs font-semibold rounded-full mb-2">
                            Ahli Jawatankuasa
                        </div>
                        <h4 class="font-bold text-slate-900 mb-1">Nama Ahli</h4>
                        <p class="text-sm text-slate-600">012-XXX XXXX</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="mt-16 p-8 bg-linear-to-r from-emerald-500 to-teal-600 rounded-3xl shadow-xl text-center">
            <div class="max-w-3xl mx-auto">
                <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-handshake text-white text-3xl"></i>
                </div>
                <h3 class="text-3xl font-bold text-white mb-4">
                    Ingin Berjumpa Dengan Kami?
                </h3>
                <p class="text-emerald-50 text-lg mb-8">
                    Kami sedia untuk berbincang dan membantu anda. Hubungi mana-mana ahli jawatankuasa untuk temujanji.
                </p>
                <div class="flex flex-wrap gap-4 justify-center">
                    <a href="#hubungi" class="px-8 py-4 bg-white text-emerald-600 font-semibold rounded-xl hover:bg-emerald-50 transition-all duration-300 shadow-lg hover:shadow-xl hover:scale-105 inline-flex items-center gap-2">
                        <i class="fas fa-calendar-alt"></i>
                        Buat Temujanji
                    </a>
                    <a href="tel:0116212202" class="px-8 py-4 bg-white/10 backdrop-blur-sm text-white font-semibold rounded-xl border-2 border-white/30 hover:bg-white/20 transition-all duration-300 inline-flex items-center gap-2">
                        <i class="fas fa-phone"></i>
                        Hubungi Sekarang
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection