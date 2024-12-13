@extends('include.layout')
@section('css')
<link rel="stylesheet" href="{{ asset('css/event.css') }}">
@endsection
@section('content')
<div class="home-container">
    <div class="nav-container">
        <a href="/home">about</a>
        <a href="/profile">profile</a>
        <a href="/event" class="active">event</a>
        <a href="/logout">LOGOUT</a>
    </div>
    <div class="line"></div>
    <div class="content-container">
        <h1>EVENT</h1>
    </div>
    <div class="home-button">
        <a href="/home">HOME</a>
    </div>
</div>
@endsection