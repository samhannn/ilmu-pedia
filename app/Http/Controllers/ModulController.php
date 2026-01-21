<?php

namespace App\Http\Controllers;

use App\Models\Modul;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ModulController extends Controller
{
    // 1. Tampilkan Form Tambah
    public function create()
    {
        return view('admin.modul.create');
    }

    // 2. Proses Simpan Modul
    public function store(Request $request)
    {
        // Validasi Input
        $request->validate([
            'judul' => 'required|max:255',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048', // Wajib gambar, max 2MB
        ]);

        // Upload Gambar
        $imagePath = null;
        if ($request->hasFile('gambar')) {
            // Simpan ke folder 'public/storage/moduls'
            $imagePath = $request->file('gambar')->store('moduls', 'public');
        }

        // Simpan ke Database
        $modul = Modul::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul) . '-' . Str::random(5), // Slug unik
            'deskripsi' => $request->deskripsi,
            'gambar' => $imagePath,
            'fakta_unik' => null, // Nanti diisi di halaman edit
        ]);

        // Redirect ke halaman Edit (Supaya bisa langsung tambah materi)
        return redirect()->route('modul.edit', $modul->id)->with('success', 'Modul berhasil dibuat! Silakan tambah materi.');
    }

    // ... method create dan store yang sudah ada ...

    // 3. Tampilkan Daftar Modul (Halaman Index)
    public function index()
    {
        // Ambil semua modul, urutkan dari yang terbaru
        $moduls = Modul::latest()->get();
        
        return view('admin.modul.index', compact('moduls'));
    }

    // 4. Method Hapus (Tambahan penting untuk Admin)
    public function destroy($id)
    {
        $modul = Modul::findOrFail($id);
        
        // Hapus gambar dari storage jika ada
        if ($modul->gambar) {
            Storage::disk('public')->delete($modul->gambar);
        }
        
        $modul->delete(); // Hapus data dari DB
        
        return redirect()->back()->with('success', 'Modul berhasil dihapus!');
    }

    // ... method edit yang sudah ada ...x

    // 3. Tampilkan Halaman Edit (Pusat Kontrol Modul)
    public function edit($id)
    {
        $modul = Modul::findOrFail($id);
        
        // Kita kirim data modul ke view edit
        return view('admin.modul.edit', compact('modul'));
    }
}

