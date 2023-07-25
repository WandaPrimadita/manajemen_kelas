<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\User;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    // public function getDosen(Dosen $dosen)
    // {
    //     $dataDosen = $dosen->get();
    //     return view('dosen', compact('dataDosen'));
    // }

    public function index () {
        return view ('dosen', [
            'dataDosen' => Dosen::all()
        ]);
    }
}