<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getRegister()
    {
        return view('register');
    }
    public function getLogin()
    {
        return view('login');
    }
    public function postRegister() {}
    public function postLogin() {}
}
