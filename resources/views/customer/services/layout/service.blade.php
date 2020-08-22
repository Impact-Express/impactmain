@extends('customer.layouts.master')

@section('content')
    <div class="services-image">
        @yield('service-image')
    </div>
    <div class="service-information">
        <div class="main-text">
            @yield('maintext')
        </div>
        <div class="main-text">
            @yield('maintext-right')
        </div>
    </div>
    <div class="service-faq">
        @yield('faq')
    </div>
    <div class="other-destinations">
        <h4 class="destinations-title">Popular Shipping Destinations</h4>
        <div class="destinations">
            <div class="box">
                <a href="/destinations/USA">
                    <div class="destination destination1"> </div>
                </a>
            </div>
            <div class="box">
                <a href="/destinations/germany">
                    <div class="destination destination2"> </div>
                </a>
            </div>
            <div class="box">
                <a href="/destinations/france">
                    <div class="destination destination3"> </div>
                </a>
            </div>
            <div class="box">
                <a href="/destinations/canada">
                    <div class="destination destination4"> </div>
                </a>
            </div>
        </div>
    </div>

    @include('customer.services.partials.consultation-pane')
@endsection