@extends('layouts.master')

@section('content')
    <div class="quote-box">
        @yield('quotebox')
    </div>
    <div class="main-text">
        @yield('maintext')
    </div>
    <div class="service-infogfx">
        @yield('infographic')
    </div>

    <div class="tab">
        <div class="container">
            <a href="javascript:void(0)" onclick="openCity(event, 'FAQs');">
                <div class="third tablink bottombar hover-light-grey">FAQ's</div>
            </a>
            <a href="javascript:void(0)" onclick="openCity(event, 'Guides');">
                <div class="third tablink bottombar hover-light-grey">Guides</div>
            </a>

            <div id="London" class="city">
                <h2>London</h2>
                <p>London is the capital of England.</p>
            </div>

            <div id="Paris" class="city" style="display:none">
                <h2>Paris</h2>
                <p>Paris is the capital of France.</p>
            </div>
        </div>
    </div>
@endsection