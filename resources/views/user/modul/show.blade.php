@extends('layouts.main')

@section('content')
<div class="max-w-4xl mx-auto px-6 py-10 text-center">
    <h1 class="text-4xl font-bold mb-4">{{ $modul->judul }}</h1>
    
    @if($modul->gambar)
        <img src="{{ asset('storage/' . $modul->gambar) }}" class="w-full h-auto rounded-xl mb-8 shadow-sm">
    @endif

    <p class="text-gray-600 mb-8">{{ $modul->deskripsi }}</p>

    @if($firstPage)
        <a href="{{ route('user.modul.read', ['slug' => $modul->slug, 'page' => $firstPage->urutan]) }}" 
           class="bg-blue-500 text-white px-8 py-3 rounded-full font-bold hover:bg-blue-600 transition">
            Mulai Baca Materi
        </a>
    @else
        <div class="bg-yellow-100 text-yellow-800 p-4 rounded-lg">
            Materi belum tersedia untuk modul ini.
        </div>
    @endif
</div>
@endsection