<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    // 1. Tabel User (Tetap)
    Schema::create('users', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('email')->unique();
        $table->string('password');
        $table->string('telp')->nullable();
        $table->enum('role', ['admin', 'user'])->default('user');
        $table->string('avatar')->nullable();
        $table->timestamps();
    });

    // 2. Tabel MODUL (Induk) - Sesuai 'tambah modul.pdf'
    Schema::create('moduls', function (Blueprint $table) {
        $table->id();
        $table->string('judul'); // "Asal Mula Semesta"
        $table->string('slug')->unique();
        $table->text('deskripsi'); // "Deskripsi Modul..."
        $table->string('gambar')->nullable(); // Cover Modul
        $table->text('fakta_unik')->nullable(); // Fakta Unik
        $table->timestamps();
    });

    // 3. Tabel HALAMAN MATERI (Anak) - Sesuai 'tambah modul-materi.pdf'
    Schema::create('materi_pages', function (Blueprint $table) {
        $table->id();
        $table->foreignId('modul_id')->constrained('moduls')->onDelete('cascade');
        $table->string('sub_judul'); // "Tata Surya"
        $table->longText('konten'); // Isi materi
        $table->string('gambar')->nullable(); // Gambar ilustrasi per halaman
        $table->integer('urutan')->default(1); // Halaman 1, 2, dst
        $table->timestamps();
    });

    // 4. Tabel QUIZ (Soal) - Sesuai 'tambah quiz.pdf'
    Schema::create('quizzes', function (Blueprint $table) {
        $table->id();
        $table->foreignId('modul_id')->constrained('moduls')->onDelete('cascade');
        $table->text('soal');
        $table->string('gambar')->nullable();
        $table->string('opsi_a');
        $table->string('opsi_b');
        $table->string('opsi_c');
        $table->string('opsi_d');
        $table->string('jawaban_benar'); // a, b, c, atau d
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('structure_tables');
    }
};
