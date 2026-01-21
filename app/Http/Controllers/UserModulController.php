<?php

namespace App\Http\Controllers;

use App\Models\Modul;
use Illuminate\Http\Request;

class UserModulController extends Controller
{
    public function show($slug)
    {
        // Cari modul berdasarkan slug
        $modul = Modul::where('slug', $slug)->firstOrFail();
        
        // Ambil halaman pertama untuk link 'Mulai Belajar'
        // Asumsi relasi 'materi_pages' sudah dibuat di model Modul
        $firstPage = $modul->materi_pages()->orderBy('urutan', 'asc')->first();

        return view('user.modul.show', compact('modul', 'firstPage'));
    }

    public function read($slug, $pageUrutan = 1)
    {
        $modul = Modul::where('slug', $slug)->firstOrFail();
        $currentPage = $modul->materi_pages()->where('urutan', $pageUrutan)->firstOrFail();
        
        // Cek halaman selanjutnya
        $nextPage = $modul->materi_pages()->where('urutan', $pageUrutan + 1)->first();
        
        // Hitung progress
        $totalPage = $modul->materi_pages()->count();
        $progress = $totalPage > 0 ? ($pageUrutan / $totalPage) * 100 : 0;

        return view('user.modul.read', compact('modul', 'currentPage', 'nextPage', 'progress'));
    }
}