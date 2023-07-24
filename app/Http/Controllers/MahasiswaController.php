<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function getUser(User $user)
    {
        $dataUser = $user->get();
        return view('home', compact('dataUser'));
    }
}
