<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\JCuti;
use App\Models\Pegawai;

class Cuti extends Model
{
    use HasFactory;

    public function jcuti()
    {
        return $this->belongsTo(JCuti::class);
    }

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }
    // public function surat()
    // {
    //     return $this->
    // }
}
