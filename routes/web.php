<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/Home', function () {
    return view('home', [
        'title' => 'Home']);
});

Route::get('/About', function () {
    return view('About', [
        'title' => 'About']);
});

Route::get('/login', [LoginController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);


// Route::get('/pns', [RegisterController::class, 'pns']);
// Route::get('/kontrak', [RegisterController::class, 'kontrak']);
// Route::get('/p3k', [RegisterController::class, 'p3k']);


