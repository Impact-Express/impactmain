@extends('layouts.app')

@section('master')

    <div class="top-strip"></div>
    <nav class="main-nav">

        <a class="navbar-logo" href="#"><img class="nav-logo-img" src="img/navbar-logo.png" alt="Impact Express Logo"></a>
        <div class="hamburger-container">
            <button class="hamburger button-square" type="button">
                <span class="hamburger-icon"><i class="fas fa-bars"></i></span>
            </button>
        </div>
        <ul class="nav-items">
            <li class="nav-item"><a class="nav-link" href="#">Navigation Tab 1</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Navigation Tab 2</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Navigation Tab 3</a></li>
            <li class="nav-item"><a class="nav-link button-main" href="#">Log in</a></li>
        </ul>
    </nav>
    <main>
        @yield('content')
    </main>
    <footer>
        
    </footer>

<div class="mobile-nav">
    <ul class="mobile-nav-items">
        <li class="mobile-nav-item"></li>
        <li class="mobile-nav-item">Track My Parcel</li>
        <li class="mobile-nav-item">Shipping</li>
        <li class="mobile-nav-item">Services</li>
        <li class="mobile-nav-item">Shipping Destinations</li>
        <li class="mobile-nav-item">News & Events</li>
        <li class="mobile-nav-item">Contact Us</li>
    </ul>
</div>

@endsection
