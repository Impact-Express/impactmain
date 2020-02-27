@extends('customer.layouts.master')

@section('title', '500 - Server Error')

@section('css')
    <link href="{{asset('css/errorpages.css')}}" rel="stylesheet">
@endsection

@section('content')
    <section class="err">
        <div class="container">
            <div class="errcontainer">
                <h3 class="errornumber">500</h3>
                <h3 class="title">Internal Server Error</h3>
                <h3 class="desc">An Error Occured on the Server, please try again later</h3>
            </div>
        </div>
    </section>
@endsection