@extends('layouts.main')

@section('title', 'Dashboard Siswa')

@section('content')

    <div class="bg-[#67c3f3] rounded-b-[40px] md:rounded-b-[60px] pt-8 pb-12 px-6 relative overflow-hidden z-20">
        <div class="max-w-7xl mx-auto relative z-10 flex flex-col md:flex-row items-start justify-between">
            
            <div class="w-full md:w-1/2 text-left mt-4 md:mt-10 md:pl-4 z-20 relative">
                <h2 class="text-[28px] md:text-5xl font-extrabold text-white leading-tight drop-shadow-sm">
                    Belajar asik, berbekal<br>
                    fakta unik!
                </h2>
                <p class="text-white mt-4 text-sm md:text-lg font-medium opacity-90 leading-relaxed max-w-md">
                    Jelajahi modul interaktif, temukan fakta unik, dan uji pengetahuanmu.
                </p>
                <button class="mt-8 bg-[#38bdf8] hover:bg-[#0ea5e9] text-white text-sm md:text-lg font-bold py-3 px-8 rounded-full shadow-lg transition transform hover:scale-105 border border-white/20">
                    Mulai Belajar
                </button>
            </div>

            <div class="absolute -right-6 top-6 md:static md:w-1/2 flex md:justify-end pointer-events-none z-10">
                <img src="{{ asset('img/planet.png') }}" alt="Background Planet" class="w-[180px] md:w-[360px] h-auto object-contain opacity-90 md:opacity-100 transform rotate-12">
            </div>
        </div>
    </div>

    <main class="flex-grow bg-gray-200 mt-[-40px] pt-[60px] pb-20 z-10 relative">
        
        <div class="max-w-5xl mx-auto px-6 md:px-8">
            <h3 class="font-bold text-sm md:text-xl text-black uppercase mb-6 tracking-wide">
                MODUL PILIHAN ANDA
            </h3>

            <div class="grid grid-cols-2 md:grid-cols-3 gap-4 md:gap-8 lg:gap-12">
                @forelse($moduls as $modul)
                    {{-- Pastikan Link menggunakan a href --}}
                    <a href="{{ route('user.modul.show', $modul->slug) }}" class="flex flex-col group cursor-pointer relative z-30">
                        <h4 class="font-bold text-[12px] md:text-lg text-black mb-2 md:mb-3 truncate group-hover:text-blue-600 transition">
                            {{ $modul->judul }}
                        </h4>
                        
                        <div class="w-full aspect-video bg-white rounded-xl shadow-sm border border-gray-100 group-hover:shadow-md transition overflow-hidden relative">
                            @if($modul->gambar)
                                <img src="{{ asset('storage/' . $modul->gambar) }}" alt="{{ $modul->judul }}" class="w-full h-full object-cover">
                            @else
                                <div class="w-full h-full flex items-center justify-center bg-gray-100 text-gray-400 text-xs font-bold">No Image</div>
                            @endif
                            <span class="absolute top-2 right-2 bg-blue-100 text-blue-600 text-[10px] px-2 py-0.5 rounded-full font-bold shadow-sm">Modul</span>
                        </div>
                    </a>
                @empty
                    <div class="col-span-full text-center py-20 text-gray-500">Belum ada modul tersedia.</div>
                @endforelse
            </div>
        </div>
    </main>

@endsection