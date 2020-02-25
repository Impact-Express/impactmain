@extends('customer.layouts.master')

@section('title', '403 - Forbidden')

@section('css')
    <link href="{{asset('css/errorpages.css')}}" rel="stylesheet">
@endsection

@section('content')
    <section class="err">
        <div class="container">
            <div class="errcontainer">
                <h3 class="errornumber">403</h3>
                <h3 class="title">Forbidden</h3>
                <h3 class="desc">Sorry, you do not have access to this resource</h3>
            </div>
        </div>
    </section>
@endsection