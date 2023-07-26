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

    public function create (Matakuliah $matakuliah, Request $requestMatakuliah) {
        $data = $requestMatakuliah -> all();
        // dd($data);
        $matakuliah->create($data);
        return redirect('/matakuliah');
    } 

    public function delete(Matakuliah $matakuliah){
        $matakuliah->delete();
        return back();
    }
}