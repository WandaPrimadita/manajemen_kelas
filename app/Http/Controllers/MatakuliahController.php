<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use App\Models\User;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    public function index () {
        return view ('matakuliah', [
            'dataMataKuliah' => Matakuliah::all()
        ]);
    }
}