@extends('layouts.app')

@section('master')

    <div class="top-strip">
        <img class="top-strip-img" src="img/dhl-strip-img.png" alt="DHL Authorised Service Partner">
    </div>
    <nav class="main-nav">
        <a class="navbar-logo" href="<?= route('home'); ?>">
            <img class="nav-logo-img" src="img/navbar-logo.png" alt="Impact Express Logo">
        </a>
        <div class="hamburger-container">
            <button class="hamburger button-square" type="button">
                <span class="hamburger-icon"><i class="fas fa-bars"></i></span>
            </button>
        </div>
        <ul class="nav-items">
            <li class="nav-item"><a class="nav-link" href="<?= route('business-quote'); ?>">Track My Parcel</a></li>
            <li class="nav-item"><a class="nav-link" href="">Shipping</a></li>
            <li class="nav-item"><a class="nav-link" href="#">News & Events</a></li>
            <li class="nav-item"><a class="nav-link" href="<?= route('contact'); ?>">Contact Us</a></li>
            <li class="nav-item"><a class="nav-link button-main" href="<?= route('business-quote'); ?>">Get a Quote</a></li>
            <li class="nav-item"><a class="nav-link button-main" href="<?= route('login'); ?>">Log in</a></li>
        </ul>
    </nav>
    <main>
        @yield('content')
    </main>
    <footer>
        
    </footer>

<div class="mobile-nav">
    <ul class="mobile-nav-items">
        <li class="mobile-nav-img">
            <a href=""><img src="" alt=""></a>
        </li>
        <li class="mobile-nav-item-top">Get a Quote</li>
        <li class="mobile-nav-item-top">Login</li>
        <li class="mobile-nav-img"></li>
        <li class="mobile-nav-img"></li>
        <li class="mobile-nav-img"></li>
        <li class="mobile-nav-item">Track My Parcel</li>
        <li class="mobile-nav-item mobile-accordion">Shipping</li>
        <li class="mobile-nav-item">Services</li>
        <li class="mobile-nav-item">Shipping Destinations</li>
        <li class="mobile-nav-item mobile-accordion">News & Events</li>
        <li class="mobile-nav-item">Contact Us</li>
    </ul>
</div>

@endsection
