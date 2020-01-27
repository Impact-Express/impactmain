@extends('customer.layouts.news')
@section('title', 'News & Events')

@section('content')
    <div class="news">
        <div class="container">
            @foreach ($posts as $post)
                @include('customer.news.post')
            @endforeach
        </div> 
    </div>
@endsection
@section('sidebar')
<div class="rightsite">

</div>
@endsection