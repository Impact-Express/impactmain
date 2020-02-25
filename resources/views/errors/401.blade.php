@extends('customer.layouts.master')

@section('title', '401 - Unauthorized')

@section('css')
    <link href="{{asset('css/errorpages.css')}}" rel="stylesheet">
@endsection

@section('content')
    <section class="err">
        <div class="container">
            <div class="errcontainer">
                <h3 class="errornumber">401</h3>
                <h3 class="title">Unauthorized</h3>
                <h3 class="desc">Please log in before accessing this resource</h3>
            </div>
        </div>
    </section>
@endsection