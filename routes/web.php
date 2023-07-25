<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RuanganController;
use App\Models\Dosen;
use Illuminate\Support\Facades\Route;

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

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/dosen', [DosenController::class, 'index']);
Route::get('/matakuliah', [MatakuliahController::class, 'index']);
Route::get('/ruangan', [RuanganController::class, 'index']);


Route::post('/register', [RegisterController::class, 'register']);

// 