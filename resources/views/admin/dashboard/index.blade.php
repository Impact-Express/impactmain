@extends('admin.app')
@section('title', 'Dashboard')

@section('content')
<div class="grid">
    <div id="drawer">
        <div class="drawer-content">
            <h3 class="cms-title">Dashboard</h3>
            <div id="Dashboard">
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
        </div>
    </div>
</div>
<script>
     $("#drawer").kendoDrawer({
        template: "<ul>\
            <li data-role='drawer-separator'></li> \
            <a style='overflow: hidden;' href='{{ route('admin') }}'><li data-role='drawer-item' style='height: 18px;' class='k-state-selected'><i style='height: 18px;' class='fas fa-tachometer-alt'></i><span class='k-item-text' style='padding-left: 16px;'>Dashboard</span></li></a> \
            <li data-role='drawer-separator'></li> \
            <a style='overflow: hidden;' href='{{ route('admin-media') }}'><li data-role='drawer-item' style='height: 18px;'><i style='height: 18px;' class='fas fa-images'></i><span class='k-item-text' style='padding-left: 16px;'>Media</span></li></a> \
            <a style='overflow: hidden;' href='{{ route('admin-posts') }}'><li data-role='drawer-item' style='height: 18px;'><i style='height: 18px; padding-left: 3px; padding-right: 2px;' class='fas fa-thumbtack'></i><span class='k-item-text' style='padding-left: 16px;'>Posts</span></li></a> \
            <a style='overflow: hidden;' href='{{ route('admin-pages') }}'><li data-role='drawer-item' style='height: 18px;'><i style='height: 18px; padding-left: 3px;' class='fas fa-copy'></i><span class='k-item-text' style='padding-left: 16px;'>Pages</span></li></a> \
            <li data-role='drawer-separator'></li> \
            <a href='{{ route('admin-settings') }}'><li data-role='drawer-item' style='height: 18px;'><i style='height: 18px; padding-left: 3px;' class='fas fa-cog'></i><span class='k-item-text' style='padding-left: 16px;'>Settings</span></li></a> \
            <li data-role='drawer-separator'></li> \
            <a href='{{ route('home') }}'><li style='padding: 12px 16px; color: inherit; line-height: 1.5; display: flex; flex-direction: row; flex-wrap: nowrap; height: 18px;'><i style='height: 18px; padding-left: 3px;' class='fas fa-external-link-alt'></i><span class='k-item-text' style='padding-left: 16px; font-size: 12px; overflow: hidden;'>Back to the Main Site</span></li></a> \
            <li  style='padding: 12px 16px; color: inherit; line-height: 1.5; display: flex; flex-direction: row; flex-wrap: nowrap; height: 18px;'><i style='height: 18px; padding-left: 3px;' class='fas fa-info-circle'></i><span class='k-item-text' style='padding-left: 16px; font-size: 12px; overflow: hidden;'>Impact Express CMS System - v0.1</span></li> \
      </ul>",
        mode: "push",
        mini: true,
        position: 'left',
        minHeight: 915,
    });
</script>
@endsection