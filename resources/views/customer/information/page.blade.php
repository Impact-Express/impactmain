@foreach ($pages as $page)
@extends('customer.services.layout.service')
@section('title', $page->title)
@section('css')
<link href="{{ asset('css/forms.css') }}" rel="stylesheet">
<link href="{{ asset('css/services.css') }}" rel="stylesheet">
@endsection
<style>
    .services-image {
        height: 50%;
        background: url({{ $page->image_url }}) no-repeat;
        background-position: 50% 50%;
        background-size: cover;
    }
</style>
@section('service-image')

@endsection

@section('maintext')
<div class="container">
    <h2 class="service-title">{{ $page->title }}</h2>
    <p class="service-text">
        {{ $page->body }}
    </p>

    <br><br>
</div>
@endsection
@section('faq')
<div class="tab" style="height: 100px"></div>
@endsection
@section('maintext-right')
<div class="container">

    <br><br>
</div>
@endsection
@endforeach