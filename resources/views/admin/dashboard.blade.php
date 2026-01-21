@extends('layouts.main')
@section('title', 'Dashboard Admin')

@section('content')
    <!-- HEADER BIRU MELENGKUNG -->
    <div class="bg-[#67c3f3] rounded-b-[40px] pt-10 pb-20 px-6 text-center">
        <h1 class="text-3xl md:text-4xl font-extrabold text-white leading-snug drop-shadow-sm">
            Selamat Datang di<br>Dashboard Admin
        </h1>
    </div>

    <!-- MENU GRID -->
    <div class="max-w-4xl mx-auto px-6 -mt-10 mb-20">
        <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
            
            <!-- 1. TOMBOL TAMBAH MODUL -->
            <a href="{{ route('modul.create') }}" class="group bg-gray-200 hover:bg-white border-2 border-transparent hover:border-blue-300 rounded-xl p-6 flex flex-col items-center justify-center shadow-sm hover:shadow-lg transition cursor-pointer aspect-square">
                <div class="w-14 h-14 bg-black rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition">
                    <!-- Icon Plus Putih -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" /></svg>
                </div>
                <span class="font-bold text-gray-800 text-sm md:text-base">Tambah Modul</span>
            </a>

            <!-- 2. TOMBOL DAFTAR MODUL -->
            <a href="{{ route('modul.index') }}" class="group bg-gray-200 hover:bg-white border-2 border-transparent hover:border-blue-300 rounded-xl p-6 flex flex-col items-center justify-center shadow-sm hover:shadow-lg transition cursor-pointer aspect-square">
                <div class="w-14 h-14 bg-white rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition border border-gray-300">
                    <!-- Icon List Hitam -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" /></svg>
                </div>
                <span class="font-bold text-gray-800 text-sm md:text-base">Daftar Modul</span>
            </a>

            <!-- 3. MANAJEMEN QUIZ -->
            <a href="#" class="group bg-gray-200 hover:bg-white border-2 border-transparent hover:border-blue-300 rounded-xl p-6 flex flex-col items-center justify-center shadow-sm hover:shadow-lg transition cursor-pointer aspect-square">
                <div class="w-14 h-14 bg-white rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition border border-gray-300">
                    <!-- Icon Quiz/Piala Hitam -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" /></svg>
                </div>
                <span class="font-bold text-gray-800 text-sm md:text-base">Manajemen Quiz</span>
            </a>

        </div>
    </div>
@endsection