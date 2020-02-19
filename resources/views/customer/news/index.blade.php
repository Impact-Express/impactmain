@extends('customer.layouts.news')
@section('title', 'News & Events')

@section('content')
    <div class="news">
        <div class="container leftside">
            @if (! $posts->count())
                <div class="alert info-alert">
                    <p>No Posts Found..</p>
                </div>
            @else
            @if (isset($categoryName))
                <div class="alert info-alert">
                    <p>Category: <strong>{{ $categoryName }}</strong><p>
                </div>
            @endif
            @foreach ($posts as $post)
                @include('customer.news.partials.post')
            @endforeach
            {{ $posts->links() }}
            @endif
        </div>
        <aside class="rightside">
            @include('customer.news.partials.sidebar')
        </aside>
    </div>
@endsection