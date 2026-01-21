<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Modul;
use App\Http\Controllers\ModulController;
use App\Http\Controllers\UserModulController; // <--- WAJIB DITAMBAHKAN!

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

// --- DASHBOARD (PENGALIHAN ADMIN VS USER) ---
Route::get('/dashboard', function () {
    $user = auth()->user();

    // 1. Jika Admin -> Ke Dashboard Admin
    if ($user->role === 'admin') {
        return view('admin.dashboard'); 
    } 
    
    // 2. Jika Siswa -> Ambil Data & Ke Dashboard Siswa
    $moduls = Modul::all(); 
    return view('user.dashboard', compact('moduls')); 

})->middleware(['auth', 'verified'])->name('dashboard');


// --- ROUTE KHUSUS ADMIN ---
Route::middleware(['auth', 'verified'])->group(function () {
    
    // 1. Tambah Modul
    Route::get('/admin/tambah-modul', [ModulController::class, 'create'])->name('modul.create');
    Route::post('/admin/simpan-modul', [ModulController::class, 'store'])->name('modul.store');

    // 2. Daftar & Hapus Modul
    Route::get('/admin/daftar-modul', [ModulController::class, 'index'])->name('modul.index');
    Route::delete('/admin/modul/{id}', [ModulController::class, 'destroy'])->name('modul.destroy');

    // 3. Edit Modul (Halaman Detail Admin)
    Route::get('/admin/modul/{id}/edit', [ModulController::class, 'edit'])->name('modul.edit');
});


// --- ROUTE KHUSUS SISWA (USER) ---
Route::middleware(['auth', 'verified'])->group(function () {
    
    // 1. Halaman Cover Modul
    Route::get('/modul/{slug}', [UserModulController::class, 'show'])->name('user.modul.show');
    
    // 2. Halaman Baca Materi (Per Halaman)
    Route::get('/modul/{slug}/baca/{page?}', [UserModulController::class, 'read'])->name('user.modul.read');
});


// --- PROFILE ROUTES (Bawaan Breeze) ---
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';