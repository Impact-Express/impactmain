@extends('customer.layouts.master')

@section('title', '404 - Page Not Found')

@section('css')
    <link href="{{asset('css/errorpages.css')}}" rel="stylesheet">
    <link href="{{asset('css/forms.css')}}" rel="stylesheet">
@endsection

@section('content')
    <section class="err">
        <div class="container">
            <div class="errcontainer">
                <h3 class="errornumber">404</h3>
                <h3 class="title">Page Not Found</h3>
                <h3 class="desc">Sorry, the page you are looking for could not be found or has not been created</h3>
            </div>
        </div>
    </section>
@endsection