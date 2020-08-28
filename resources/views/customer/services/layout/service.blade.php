@extends('customer.layouts.master')

@section('content')
    <div class="services-image">
        @yield('service-image')
    </div>
    
    @if (Request::is('information/service-level-agreement-and-surcharges'))
    <div class="service-information">
        @yield('sla-surcharges-panel')
    </div>
    @endif

    @if (Request::is('information/*'))
    <div class="service-information">
        <div class="main-text">
            @yield('maintext')
        </div>
        <div class="main-text">
            @yield('maintext-right')
        </div>
    </div>
    @endif

    @if (Request::is('services/*'))
    <div class="service-information">
        <div class="main-text">
            @yield('maintext')
        </div>
        <div class="main-text">
            @yield('maintext-right')
        </div>
    </div>
    @endif

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