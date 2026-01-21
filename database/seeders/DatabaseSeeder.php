<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Materi;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Admin
        User::create([
            'name' => 'Admin Ganteng',
            'email' => 'admin@ilmu.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        // 2. Siswa
        User::create([
            'name' => 'Siswa Rajin',
            'email' => 'siswa@ilmu.com',
            'password' => Hash::make('password'),
            'role' => 'user',
        ]);

        // 3. Materi Dummy (Sesuai Gambar UI Anda)
        // Materi::create([
        //     'judul' => 'Dinosaurus Telah Pupus?',
        //     'slug' => 'dinosaurus-telah-pupus',
        //     'kategori' => 'Sejarah',
        //     'deskripsi_singkat' => 'Pelajari kenapa hewan raksasa ini hilang dari muka bumi.',
        //     'konten' => '<h1>Dinosaurus</h1><p>Dinosaurus punah karena asteroid...</p>',
        //     'gambar' => 'img/dino.jpg' // Nanti kita siapkan gambarnya
        // ]);
        
        // Materi::create([
        //     'judul' => 'Sang Pengelana Angkasa',
        //     'slug' => 'sang-pengelana-angkasa',
        //     'kategori' => 'Astronomi',
        //     'deskripsi_singkat' => 'Menjelajahi bintang dan galaksi yang jauh di sana.',
        //     'konten' => '<h1>Luar Angkasa</h1><p>Isinya gelap dan luas...</p>',
        //     'gambar' => 'img/space.jpg'
        // ]);
    }
}   