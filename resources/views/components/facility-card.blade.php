@props(['place' => '', 'desc' => '', 'moreLink' => '/', 'icon' => '', 'colorFrom' => 'from-emerald-500', 'colorTo'=>'to-teal-600'])
@php
    $data = explode("-", $colorFrom);
    $newColor = (int)$data[2] + 100;
    $newLink = 'text-'.$data[1].'-'.$newColor;
@endphp
<div class="group bg-white rounded-2xl p-8 shadow-md hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
    <div class="w-16 h-16 bg-linear-to-br {!! $colorFrom !!} {!! $colorTo !!} rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
        <i class="fas {!! $icon !!} text-white text-2xl"></i>
    </div>
    <h3 class="text-xl font-bold text-slate-900 mb-3">{{ $place }}</h3>
    <p class="text-slate-600 leading-relaxed mb-4">
        {{ $desc }}
    </p>
    <a href="{!! $moreLink !!}" class="inline-flex items-center gap-2 {!! $newLink !!} font-semibold hover:gap-3 transition-all">
        Ketahui Lebih
        <i class="fas fa-arrow-right text-sm"></i>
    </a>
</div>