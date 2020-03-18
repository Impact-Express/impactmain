@extends('customer.layouts.master')

@section('content')
    <div class="quote-box">
        @yield('quotebox')
    </div>
    <div class="service-information">
        <div class="main-text">
            @yield('maintext')
        </div>
        <div class="service-infogfx">
            @yield('infographic')
        </div>
    </div>
    <div class="service-faq">
        @yield('faq')
    </div>
    <div class="other-destinations">
        <h4 class="destinations-title">Popular Shipping Destinations</h4>
        <div class="destinations">
            @yield('destinations-boxes')
        </div>
    </div>

    @include('customer.services.partials.consultation-pane')
@endsection