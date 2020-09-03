@extends('errors::minimal')

@section('title', __('Too Many Requests'))
@section('code', '429')
@section('message', __('Too Many Requests'))

@extends('customer.layouts.master')

@section('title', '429 - Too Many Requests')

@section('css')
    <link href="{{asset('css/errorpages.css')}}" rel="stylesheet">
    <link href="{{asset('css/forms.css')}}" rel="stylesheet">
@endsection

@section('content')
    <section class="err">
        <div class="container">
            <div class="errcontainer">
                <h3 class="errornumber">429</h3>
                <h3 class="title">Too Many Requests</h3>
                <h3 class="desc">Please wait a few moments, and try again later</h3>
            </div>
        </div>
    </section>
@endsection