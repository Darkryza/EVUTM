@extends('include.layout')
@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection
@section('content')
<div class="login-container">
    <div class="home-button">
        <a href="/">Home</a>
    </div>
    <div class="logo">
        <img src="{{ asset('images/UTM-LOGO-FULL.png') }}" alt="">
    </div>
    <div class="login-details">
        <div class="left">
            <h1>WELCOME TO E-VENDOR UTM SYSTEM</h1>
            <p>DBENTGHN MEKHBG T
                YHJUHIEUIOP[]DFGHYBJUKI
                FGHYJUKIOLP;[SEDRTYUIYHUJIO
                SDFGHYJUKISDWEFRGTYHUJKI
                SDFECRGTHYUJKIRTYUIO
                SDEFRTFYGUIO9P0[-WSERTYURHU
                TUYIOPGHYJKILTYUGFY
                FDVGTYHUIFDRGYH</p>
        </div>
        <div class="right">
            <form action="/login" method="POST">
                @if (session()->has('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <input type="text" name="username" placeholder="username">
                <input type="password" name="password" placeholder="password">
                <div class="buttons">
                    <button>Login</button>
                    <a href="/register">Sign Up</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection