@extends('customer.layouts.news')
@section('title', 'News & Events')

@section('content')
    <div class="news">
        <div class="container">
            @include('customer.news.post')
        </div>
    </div>
@endsection
@section('sidebar')
<div class="rightsite">

</div>
@endsection