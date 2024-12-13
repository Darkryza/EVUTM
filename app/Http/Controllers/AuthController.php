<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

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
            'fullname' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required'
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
    public function postLogin()
    {
        validator(request()->all(), [
            'username' => 'required',
            'password' => 'required'
        ])->validate();

        if (Auth::attempt(request()->only('username', 'password'))) {
            return redirect('/home');
        }

        return back()->with('error', 'Login failed');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('success', 'Logged out successfully');
    }
}
