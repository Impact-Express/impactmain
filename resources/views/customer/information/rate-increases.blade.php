@extends('customer.services.layout.service')
@section('title', "Impact Express Rate Increase ".date('Y'))
@section('css')
<link href="{{ asset('css/forms.css') }}" rel="stylesheet">
<link href="{{ asset('css/services.css') }}" rel="stylesheet">
@endsection
<style>
    .services-image {
        height: 50%;
        background: url('/img/rate-increase-new.png') no-repeat;
        background-position: 50% 50%;
        background-size: cover;
    }
</style>
@section('service-image')

@endsection

@section('rate-increase-panel')
<div class="container">
    <h2 class="service-title">IMPACT EXPRESS RATE INCREASE</h2>
    <p class="service-text">
        Impact Express will update its prices, effective January 1st {{date('Y')}}, the increase will be by 4.0%.  
        This is to support the increases in all costs from suppliers and expansion of the business.
    </p>
    <p class="service-text">
        The increase in is place for all discounted rates and agreements. All customer pricing will be available online.
    </p>
    <br><br>
</div>
@endsection
@section('faq')
<div class="tab" style="height: 100px"></div>
@endsection
