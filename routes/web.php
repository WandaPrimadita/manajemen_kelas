<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RuanganController;
use App\Models\Dosen;
use App\Models\Mahasiswa;
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
})->name('login');

Route::get('/register', function () {
    return view('register');
})->middleware('guest');

Route::get('/', function () {
    return view('home');
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/mahasiswa/tambahFormMahasiswa', function () {
    return view('tambahFormMahasiswa');
});
Route::post('/mahasiswa/tambah', [MahasiswaController::class, 'create']);
Route::delete('/mahasiswa/hapus/{mahasiswa}',[MahasiswaController::class, 'delete']);



Route::get('/dosen', [DosenController::class, 'index']);
Route::get('/dosen/tambahFormDosen', function () {
    return view('tambahFormDosen');
});
Route::post('/dosen/tambah', [DosenController::class, 'create']);
Route::delete('/dosen/hapus/{dosen}',[DosenController::class, 'delete']);


Route::get('/matakuliah', [MatakuliahController::class, 'index']);
Route::get('/matakuliah/tambahFormMatakuliah', function () {
    return view('tambahFormMatakuliah');
});
Route::post('/matakuliah/tambah', [MatakuliahController::class, 'create']);
Route::delete('/matakuliah/hapus/{matakuliah}',[MatakuliahController::class, 'delete']);


Route::get('/ruangan', [RuanganController::class, 'index']);
Route::get('/ruangan/tambahFormRuangan', function () {
    return view('tambahFormRuangan');
});
Route::post('/ruangan/tambah', [RuanganController::class, 'create']);
Route::delete('/ruangan/hapus/{ruangan}',[RuanganController::class, 'delete']);


Route::get('/matakuliah', [MatakuliahController::class, 'index']);

Route::get('/ruangan', [RuanganController::class, 'index']);

Route::post('/register', [RegisterController::class, 'register']);

Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

//