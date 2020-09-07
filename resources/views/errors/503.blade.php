@extends('customer.layouts.master')

@section('title', '503 - Service Unavailable')

@section('css')
    <link href="{{asset('css/errorpages.css')}}" rel="stylesheet">
    <link href="{{asset('css/forms.css')}}" rel="stylesheet">
@endsection

@section('content')
    <section class="err">
        <div class="container">
            <div class="errcontainer">
                <h3 class="errornumber">503</h3>
                <h3 class="title">Service Unavailable</h3>
                <h3 class="desc">This service is currently unavailable</h3>
            </div>
        </div>
    </section>
@endsection