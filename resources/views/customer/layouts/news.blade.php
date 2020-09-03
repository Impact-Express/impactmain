@extends('customer.layouts.main')

@section('css')
    <link href="{{asset('css/forms.css')}}" rel="stylesheet">
    <link href="{{asset('css/news.css')}}" rel="stylesheet">
@endsection

@section('master')

    <div class="top-strip">
        <img class="top-strip-img" src="/img/dhl-strip-img.png" alt="DHL Authorised Service Partner">
    </div>

    <x-navigation />

    <main style="background: #F2ECEC;">
        @yield('content')
    </main>

    <x-footer />

    <x-mobilenav />

@endsection
