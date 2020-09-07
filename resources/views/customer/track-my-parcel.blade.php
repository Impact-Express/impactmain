@extends('customer.layouts.master')

@section('title', 'Send My Parcel')
@section('css')
    <link href="{{asset('css/forms.css')}}" rel="stylesheet">
    <link href="{{asset('css/sendmyparcel.css')}}" rel="stylesheet">
@endsection

@section('content')
    <section class="quote-login" style="height: 770px; background-color: #fff">
        <div class="container">
            <iframe src="http://impact-wp.couriernavigator-secure.com/" width="1500" height="750" frameborder="0"></iframe>
            
        </div>
    </section>
@endsection
