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
                <a href="/"><img width="60" height="60" style="width: 60px;" src="/img/icons/favicon-196x196.png" alt=""></a>
            </li>
            <li class="mobile-nav-item-top"><a href="{{ route('quote.index') }}">Get a Quote</a></li>
            <li class="closemenu mobile-nav-item-top "><i class="fas fa-times"></i></li>
            <li class="mobile-nav-img"></li>
            <li class="mobile-nav-img"></li>
            <li class="mobile-nav-img"></li>
            {{-- <li class="mobile-nav-item">Track My Parcel</li> --}}
            <li class="mobile-nav-item mobile-accordion"><a href="javascript:void(0);">Shipping</a></li>
            <li class="mobile-nav-item"><a href="{{ route('services-index') }}">Services</a></li>
            <li class="mobile-nav-item">Shipping Destinations</li>
            <li class="mobile-nav-item mobile-accordion">News & Events</li>
            <li class="mobile-nav-item">Contact Us</li>
        </ul>
    </div>

@endsection
