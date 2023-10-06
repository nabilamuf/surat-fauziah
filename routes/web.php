<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KaryawanController;

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

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

// Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/karyawan/{kategori:slug}', [KaryawanController::class, 'kategori']);


//buat detail data pegawai
Route::get('/karyawan/pns/{pegawai:nik}', [KaryawanController::class, 'detail']);
Route::get('/karyawan/p3k/{pegawai:nik}', [KaryawanController::class, 'detail']);

// Route::get('/karyawan/pns/{pegawai:nik', [KaryawanController::class, 'detail']);
//print
Route::get('/pegawai/rekom/print/{pegawai:nik}', [DashboardController::class, 'print']);
Route::get('/pegawai/cuti/print/{pegawai:nik}', [DashboardController::class, 'cuti']);


// Route::get('/pns', [RegisterController::class, 'pns']);
// Route::get('/kontrak', [RegisterController::class, 'kontrak']);
// Route::get('/p3k', [RegisterController::class, 'p3k']);
