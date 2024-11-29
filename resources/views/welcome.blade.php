@extends('include.layout')
@section('css')
<link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
@endsection
@section('content')
@include('include.navbar')
<div class="container welcome-container">
    <div class="left">
        <h1>Welcome to EVUTM</h1>
        <p>The EVUTM (Events Vendor UTM) system is an innovative platform designed to promote and showcase various events hosted at UTM. It serves as a dynamic hub where the university community and the public can seamlessly engage with upcoming events. Notably, EVUTM extends an invitation to prospective vendors, offering them the opportunity to participate and contribute to the vibrant tapestry of events hosted by UTM. By facilitating this connection between organizers and vendors, EVUTM fosters a collaborative atmosphere that enriches the event experience for all involved parties.</p>
    </div>
    <div class="right">
        <div class="welcome-images">
            <img src="{{ asset('images/gerbang-kelaur.jpg') }}" alt="">
            <img src="{{ asset('images/gerbang-kelaur.jpg') }}" alt="">
            <img src="{{ asset('images/gerbang-kelaur.jpg') }}" alt="">
            <img src="{{ asset('images/gerbang-kelaur.jpg') }}" alt="">
        </div>
    </div>
</div>
<div class="container step-join-container">
    <h1>how to join as vendor ?</h1>
    <div class="steps">
        <div class="step">
            <h2>Step 1</h2>
            <img src="{{ asset('images/gerbang-kelaur.jpg') }}" alt="">
            <h3>scroll</h3>
            <p>
                Find your favourite event that you want to join.
            </p>
        </div>
        <div class="step">
            <h2>Step 2</h2>
            <img src="{{ asset('images/gerbang-kelaur.jpg') }}" alt="">
            <h3>tap</h3>
            <p>
                Click the poster of event that you chose.
            </p>
        </div>
        <div class="step">
            <h2>Step 3</h2>
            <img src="{{ asset('images/gerbang-kelaur.jpg') }}" alt="">
            <h3>apply</h3>
            <p>
                Click the button to apply as a vendor. Then you need to fill in the form provided.
            </p>
        </div>
    </div>
</div>
@endsection