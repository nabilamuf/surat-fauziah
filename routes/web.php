<?php

use App\Http\Controllers\CutiController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KaryawanController;

use App\Http\Controllers\JabatanController;
use App\Http\Controllers\GolonganController;
use App\Http\Controllers\FungsionalController;
use App\Http\Controllers\UnitkerjaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\SuratController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your appmaillication. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/home', function () {
//     return view('home', [
//         'title' => 'Home'
//     ]);
// });

// Route::get('/about', function () {
//     return view('about', [
//         'title' => 'About'
//     ]);
// });

Route::get('/', [LoginController::class, 'index'])->middleware('guest');
Route::post('/', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

// route list surat 
Route::get('/surat', [SuratController::class, 'index']);
Route::get('/cuti', [CutiController::class, 'index']);

// route make surat Cuti
Route::get('/cuti/karyawan/{kategori:slug}', [CutiController::class, 'karyawan']);


// Route::get('/surat/pns/{pegawai:nik}/cuti', [SuratController::class, 'cuti']);
// Route::get('/surat/pns/{pegawai:nik}/rekomendasi', [SuratController::class, 'rekom']);
// Route::get('/surat/p3k/{pegawai:nik}/rekomendasi', [SuratController::class, 'rekom']);

Route::get('/karyawan/{kategori:slug}', [KaryawanController::class, 'kategori']);


//buat detail data pegawai
Route::get('/karyawan/pns/{pegawai:id}', [KaryawanController::class, 'detail']);
Route::get('/karyawan/p3k/{pegawai:id}', [KaryawanController::class, 'detail']);


//print cuti
Route::get('/karyawan/print/{cuti:id}', [KaryawanController::class, 'print']);

// print surat lain 

// Route::get('/print', [KaryawanController::class, 'print']);


Route::get('/jabatan/checkSlug', [JabatanController::class, 'checkSlug']);
Route::get('/golongan/checkSlug', [GolonganController::class, 'checkSlug']);
Route::get('/fungsional/checkSlug', [FungsionalController::class, 'checkSlug']);
Route::get('/unitkerja/checkSlug', [UnitkerjaController::class, 'checkSlug']);
Route::get('/kategori/checkSlug', [KategoriController::class, 'checkSlug']);

Route::resource('/jabatan', JabatanController::class);
Route::resource('/golongan', GolonganController::class);
Route::resource('/fungsional', FungsionalController::class);
Route::resource('/unitkerja', UnitkerjaController::class);
Route::resource('/kategori', KategoriController::class);









// Route::get('/pns', [RegisterController::class, 'pns']);
// Route::get('/kontrak', [RegisterController::class, 'kontrak']);
// Route::get('/p3k', [RegisterController::class, 'p3k']);
