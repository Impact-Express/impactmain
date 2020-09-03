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

    <x-mobilenav />

@endsection
