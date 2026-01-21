<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;

    // PENTING:
    // Ini berfungsi agar kita bisa mengisi semua kolom (judul, konten, dll) 
    // tanpa terkena error "Mass Assignment" yang merah tadi.
    protected $guarded = [];
}