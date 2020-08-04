@extends('admin.app')
@section('title', 'Dashboard')

@section('content')
    <h3 class="cms-title">Dashboard</h3>
    <div id="Dashboard" style="height: 600px;">
        <div class="card-body card-dashboard">
            <h1>Impact Express CMS Dashboard</h1>
            <h3>Logged in as: {{ Auth::user()->name }}</h3>
            <br>
            <h2>Hello, Welcome to the Admin Panel.</h2>

            <div class="dashboard-get-started">
                <h4>Get Started</h4>
                <br>
                <a type="button" class="button-main" href=" {{ route('posts.create') }} ">Write a Blog Post</a>
            </div>
        </div>
        <div class="card-body card-dashboard">
            <h2>Recent Posts</h2>
            <ul>
                @foreach ($recentPosts as $post)
                <li style="list-style-type: none;">
                    <div class="post-body">
                        <h4><a href="{{ route('news-post', $post->slug) }}">{{ $post->title }}</a></h4>
                        <h5>{{ $post->author->name }}</h5>
                        <div class="post-meta">
                            <span> {{ $post->date }} </span>
                        </div>
                    </div>
                </li>
                <br>
                @endforeach
            </ul>
            <a type="button" class="button-main" href="{{ route('admin-posts') }}">View All Posts</a>
        </div>
    </div>
@endsection