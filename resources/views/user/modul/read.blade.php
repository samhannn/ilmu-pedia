@extends('layouts.main')
@section('title', $currentPage->sub_judul . ' - ' . $modul->judul)

@section('content')
<div class="max-w-3xl mx-auto px-6 py-8 pb-24">
    
    <div class="mb-6 font-bold text-gray-500 text-sm">
        <a href="{{ route('dashboard') }}" class="text-blue-500 hover:underline">Daftar Modul</a> 
        <span class="mx-2">></span>
        <span class="text-blue-500">{{ $modul->judul }}</span>
    </div>

    <h1 class="text-3xl font-extrabold text-black mb-6">
        {{ $currentPage->urutan }}. {{ $currentPage->sub_judul }}
    </h1>

    @if($currentPage->gambar)
    <div class="w-full aspect-video bg-black rounded-2xl overflow-hidden shadow-lg mb-8">
        <img src="{{ asset('storage/' . $currentPage->gambar) }}" alt="Ilustrasi" class="w-full h-full object-contain">
    </div>
    @endif

    <div class="prose max-w-none text-gray-800 leading-relaxed text-lg mb-12">
        {!! $currentPage->konten !!} 
        {{-- Tanda seru {!! !!} agar HTML terbaca (paragraf, bold, dll) --}}
    </div>

    <div class="flex justify-center mb-10">
        @if($nextPage)
            <a href="{{ route('user.modul.read', ['slug' => $modul->slug, 'page' => $nextPage->urutan]) }}" 
               class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-10 rounded-full shadow-lg transition transform hover:scale-105">
                Lanjutkan
            </a>
        @else
            <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-3 px-10 rounded-full shadow-lg cursor-not-allowed opacity-80">
                Selesai / Lanjut Quiz
            </button>
        @endif
    </div>

    <div class="fixed bottom-0 left-0 w-full bg-white border-t border-gray-200 py-4 px-6 z-50">
        <div class="max-w-3xl mx-auto">
            <div class="w-full bg-gray-200 rounded-full h-2.5 mb-2">
                <div class="bg-blue-500 h-2.5 rounded-full transition-all duration-500" style="width: {{ $progress }}%"></div>
            </div>
            <div class="text-center font-extrabold text-black text-sm">
                {{ round($progress) }}% Progres
            </div>
        </div>
    </div>

</div>
@endsection