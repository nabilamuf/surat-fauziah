<?php

namespace App\Models;

use App\Models\Jabatan;
use App\Models\Pegawai;
use App\Models\Golongan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategori extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function jabatan()
    {
        return $this->hasMany(Jabatan::class);
    }

    public function golongan()
    {
        return $this->hasMany(Golongan::class);
    }
    public function pegawai()
    {
        return $this->hasMany(Pegawai::class);
    }
}
