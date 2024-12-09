<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
    public function postRegister(Request $request)
    {
        $request->validate([
            'fullname' => 'required|string',
            'username' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|confirmed'
        ]);

        $user = new User();
        $user->fullname = $request->fullname;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = 'user';
        $user->save();

        return redirect('/login')->with('success', 'Register successful');
    }
    public function postLogin() {}
}
