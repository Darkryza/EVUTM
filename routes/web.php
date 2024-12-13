<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', [AuthController::class, 'getLogin'])->name('login');
Route::get('/register', [AuthController::class, 'getRegister']);
Route::post('/register', [AuthController::class, 'postRegister']);
Route::post('/login', [AuthController::class, 'postLogin']);
Route::get('/home', [UserController::class, 'dashboard'])->middleware('auth');
Route::get('/logout', [AuthController::class, 'logout']);
