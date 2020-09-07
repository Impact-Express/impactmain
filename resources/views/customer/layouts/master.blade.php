@extends('customer.layouts.main')

@section('master')

    <div class="top-strip">
        <img class="top-strip-img" src="/img/dhl-strip-img.png" alt="DHL Authorised Service Partner">
    </div>

    <x-navigation />

    <main>
        @yield('content')
    </main>

    <x-footer />

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
