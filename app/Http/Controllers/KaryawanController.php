<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function kategori(Kategori $kategori)
    {
        return view('dashboard.karyawan', [
            "title" => $kategori->nama,
            "pegawais" => $kategori->pegawai,
            'active' => "karyawan"
        ]);
    }

    public function detail(Pegawai $pegawai)
    {
        return view('dashboard.detail', [
            "active" => "karyawan",
            'title' => "data pegawai",
            "pegawai" => $pegawai,

        ]);
    }

    // public function print(Pegawai $pegawai)
    // {

    //     return view('surat.rekomendasi', [
    //         'title' => "data pegawai",
    //         "pegawai" => $pegawai,

    //     ]);
    // }

    // public function cuti(Pegawai $pegawai)
    // {

    //     return view('surat.cuti', [
    //         'title' => "data pegawai",
    //         "pegawai" => $pegawai,

    //     ]);
    // }
}
