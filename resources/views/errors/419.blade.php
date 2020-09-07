@extends('customer.layouts.master')

@section('title', '419 - Page Expired')

@section('css')
    <link href="{{asset('css/errorpages.css')}}" rel="stylesheet">
    <link href="{{asset('css/forms.css')}}" rel="stylesheet">
@endsection

@section('content')
    <section class="err">
        <div class="container">
            <div class="errcontainer">
                <h3 class="errornumber">419</h3>
                <h3 class="title">Page Expired</h3>
                <h3 class="desc">Sorry, the session/page has expired</h3>
            </div>
        </div>
    </section>
@endsection