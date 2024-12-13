@extends('include.layout')
@section('css')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection
@section('content')
<div class="home-container">
    <div class="nav-container">
        <a href="/home">about</a>
        <a href="/profile" class="active">profile</a>
        <a href="/event">event</a>
        <a href="/logout">LOGOUT</a>
    </div>
    <div class="line"></div>
    <div class="content-container">
        <h1>PROFILE</h1>
    </div>
    <div class="home-button">
        <a href="/home">HOME</a>
    </div>
</div>
@endsection