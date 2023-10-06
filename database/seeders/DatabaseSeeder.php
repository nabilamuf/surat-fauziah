<?php

namespace Database\Seeders;

use App\Models\Fungsional;
use App\Models\Golongan;
use App\Models\Jabatan;
use App\Models\Kategori;
use App\Models\Pegawai;
use App\Models\Unit;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Kategori::create([
            'nama' => 'PNS',
            'slug' => 'pns'
        ]);

        Kategori::create([
            'nama' => 'P3K',
            'slug' => 'p3k'
        ]);


        Jabatan::create([
            'nama' => 'Manager',
            'slug' => 'manager',
            'kategori_id' => 1
        ]);
        Jabatan::create([
            'nama' => 'Staff',
            'slug' => 'staf',
            'kategori_id' => 1
        ]);


        Golongan::create([
            'nama' => 'VI',
            'slug' => 'vi',
            'kategori_id' => 1
        ]);
        Golongan::create([
            'nama' => 'V',
            'slug' => 'v',
            'kategori_id' => 1
        ]);

        Unit::create([
            'nama' => 'Unit 19',
            'slug' => 'unit-19'
        ]);
        Unit::create([
            'nama' => 'Unit 18',
            'slug' => 'unit-18'
        ]);

        Fungsional::create([
            'nama' => 'Fungsional',
            'slug' => 'fungsional'
        ]);
        Fungsional::create([
            'nama' => 'Non Fungsional',
            'slug' => 'non-fungsional'
        ]);

        Pegawai::factory(10)->create();
    }
}
