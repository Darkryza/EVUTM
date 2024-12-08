<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', [AuthController::class, 'getLogin']);
Route::get('/register', [AuthController::class, 'getRegister']);
Route::get('/home', function () {
    return view('home');
});
