<?php

namespace App\Models;

use App\Models\Pegawai;
use App\Models\Kategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jabatan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];


    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function pegawais()
    {
        return $this->hasMany(Pegawai::class);
    }
}
