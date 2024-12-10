@extends('include.layout')
@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection
@section('content')
<div class="register-container">
    <div class="home-button">
        <a href="/">Home</a>
    </div>
    <div class="logo">
        <img src="{{ asset('images/UTM-LOGO-FULL.png') }}" alt="">
    </div>
    <h1>E-VENDOR SYSTEM</h1>
    <form action="/register" method="POST">
        @csrf
        <input type="text" name="fullname" id="fullname" placeholder="fullname">
        <input type="text" name="username" id="username" placeholder="username">
        <input type="email" name="email" id="email" placeholder="email">
        <input type="password" name="password" id="password" placeholder="password">
        <button type="submit">Sign Up</button>
    </form>
</div>
@endsection