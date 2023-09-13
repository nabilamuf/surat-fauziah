<?php

namespace App\Models;

use App\Models\Jabatan;
use App\Models\Golongan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategori extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function jabatans()
    {
        return $this->hasMany(Jabatan::class);
    }

    public function golongans()
    {
        return $this->hasMany(Golongan::class);
    }
}
