<?php

namespace App\Models;

use App\Models\Pegawai;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;



class Unit extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function pegawais()
    {
        return $this->hasMany(Pegawai::class);
    }
}
