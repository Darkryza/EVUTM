@extends('include.layout')
@section('css')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection
@section('content')
<div class="home-container">
    <div class="nav-container">
        <a href="#">about</a>
        <a href="#">profile</a>
        <a href="#">event</a>
        <a href="#">XX</a>
        <a href="#">XX</a>
    </div>
    <div class="line"></div>
    <div class="content-container">
        <h1>WELCOME TO E-VENDOR UTM SYSTEM</h1>
    </div>
    <div class="home-button">
        <a href="/home">Home</a>
    </div>
</div>
@endsection