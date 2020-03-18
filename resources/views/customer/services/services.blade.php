@extends('customer.layouts.master')

@section('title', 'Services')
@section('css')
<link href="{{ asset('css/services.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container-fluid">
    <section class="express-delivery">
        <a href="services/express">
            <img src="{{ asset('img/express-delivery-new.png') }}" alt="">
        </a>
    </section>
    <section class="economy-delivery">
        
    </section>
</div>
    @include('customer.services.partials.consultation-pane');
@endsection