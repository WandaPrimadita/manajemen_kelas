<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    // public function getMahasiswa(Mahasiswa $mahasiswa)
    // {
    //     $dataMahasiswa = $mahasiswa->get();
    //     return view('mahasiswa', compact('dataMahasiswa'));
    // }

    public function index () {
        return view ('mahasiswa', [
            'dataMahasiswa' => Mahasiswa::all()
        ]);
    }

    public function create (Mahasiswa $mahasiswa, Request $requestMahasiswa) {
        $data = $requestMahasiswa -> all();
        //- dd($data);
        $mahasiswa->create($data);
        return redirect('/mahasiswa');
    } 
}