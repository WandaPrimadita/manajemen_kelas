<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use App\Models\User;
use Illuminate\Http\Request;

class RuanganController extends Controller
{
    public function index () {
        return view ('ruangan', [
            'dataRuangan' => Ruangan::all()
        ]);
    } 
}