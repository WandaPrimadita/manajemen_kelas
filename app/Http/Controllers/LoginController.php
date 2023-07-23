<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function getLogin(Login $login)
    {
        $loginUser = $login->get();

        return view('views.')
    }
}
