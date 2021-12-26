<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.login',[
            'title' => 'Login'

        ]);
    }
}
