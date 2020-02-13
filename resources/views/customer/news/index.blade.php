@extends('customer.layouts.news')
@section('title', 'News & Events')

@section('content')
    <div class="news">
        <div class="container leftside">
            @foreach ($posts as $post)
                @include('customer.news.partials.post')
            @endforeach
            {{ $posts->links() }}
        </div>
        <aside class="rightside">
            @include('customer.news.partials.sidebar')
        </aside>
    </div>
@endsection