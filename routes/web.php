<?php

use App\Http\Controllers\MahasiswaController;
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

Route::get('/mahasiswa', function () {
    return view('mahasiswa');
});

Route::get('/dosen', function () {
    return view('dosen');
});

Route::get('/matakuliah', function () {
    return view('matakuliah');
});

Route::get('/ruangan', function () {
    return view('ruangan');
});

Route::controller(MahasiswaController::class)->name('user.')->group(function () {
    Route::get('/view/home', 'getUser')->name('getUser');
});

Route::controller(JabatanController::class)->name('jabatan.')->group(function () {
    Route::get('/jabatan/view', 'getJabatan')->name('getJabatan');
    Route::get('/jabatan/tambah', 'tambah')->name('tambah');
    Route::get('/jabatan/edit/{jabatan}', 'edit')->name('edit');
    Route::post('/jabatan/simpan', 'saveJabatan')->name('saveJabatan');
    Route::patch('/jabatan/update/{jabatan}', 'updateJabatan')->name('updateJabatan');
    Route::delete('/jabatan/hapus/{jabatan}', 'deleteJabatan')->name('deleteJabatan');
});

Route::controller(KehadiranController::class)->name('kehadiran.')->group(function () {
    Route::get('/kehadiran/view', 'getKehadiran')->name('getKehadiran');
    Route::get('/kehadiran/tambah', 'tambah')->name('tambah');
    Route::get('/kehadiran/edit/{kehadiran}', 'edit')->name('edit');
    Route::post('/kehadiran/simpan', 'saveKehadiran')->name('saveKehadiran');
    Route::patch('/kehadiran/update/{kehadiran}', 'updateKehadiran')->name('updateKehadiran');
    Route::delete('/kehadiran/hapus/{kehadiran}', 'deleteKehadiran')->name('deleteKehadiran');
});