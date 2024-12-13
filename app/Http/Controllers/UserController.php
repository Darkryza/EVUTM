<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('home');
    }
    public function profile()
    {
        return view('profile');
    }
    public function event()
    {
        return view('event');
    }
}
