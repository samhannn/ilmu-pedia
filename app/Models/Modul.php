<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Modul extends Model
{
    protected $guarded = [];

    // Relasi: Satu Modul punya banyak Halaman Materi
    public function materi_pages(): HasMany {
        return $this->hasMany(MateriPage::class);
    }
}