@extends('customer.services.layout.service')
@section('title', "Opening Hours")
@section('css')
<link href="{{ asset('css/forms.css') }}" rel="stylesheet">
<link href="{{ asset('css/services.css') }}" rel="stylesheet">
@endsection
<style>
    .services-image {
        height: 50%;
        background: url('/img/opening-new.png') no-repeat;
        background-position: 50% 50%;
        background-size: cover;
    }
</style>
@section('service-image')

@endsection

@section('opening-hours-panel')
<div class="container">
    <h2 class="service-title">OPENING HOURS:</h2>
    <p class="service-text">
        Customer services:  10:00 am-18:00 pm  Monday – Friday
    </p>
    <p class="service-text">
        Operations: 10:00 am-20:00 pm  Monday – Friday
    </p>

    <h2 class="service-title">CHRISTMAS OPENING HOURS:</h2>
    <p class="service-text">
        23rd – 24th – 25th – 26th / December: Closed
    </p>
    <p class="service-text">
        27th – 28th – 29th / December:           12:00-17:00pm
    </p>
    <p class="service-text">
        30th – 31st Dec – 1st January:            Closed
    </p>
    <p class="service-text">
        2nd January                                     10:00am -20:00pm
    </p>

    <h2 class="service-title">CLOSE OUT TIMES @ LHR</h2>
    <p class="service-text">
        USA Next Day:               15:15pm Monday – Thursday (Friday 19:30pm)
    </p>
    <p class="service-text">
        Canada, S.America:     15:15pm Monday – Thursday (Friday 19:30pm)
    </p>
    <p class="service-text">
        Europe, UK, R.O.W:    19:30pm Monday – Friday
    </p>

    <h2 class="service-title">SATURDAY / SUNDAY CLOSED</h2>
    <br><br>
</div>
@endsection
@section('faq')
<div class="tab" style="height: 100px"></div>
@endsection