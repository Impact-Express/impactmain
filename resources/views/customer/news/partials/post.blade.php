<div class="post">
        @if ($post->image_url)
        <img class="post-image" src="{{ $post->image_url }}">
        @endif
        <a href="{{ route('news-post', $post->slug) }}">
            <h1 class="post-title">{{ $post->title }}</h1>
        </a>
        <div class="post-subtitle">{!! $post->excerpt_html !!}</div>
        <div class="post-meta">
            <div class="float-left">
                <ul class="post-meta-group">
                    <li><i class="fas fa-user"><span class="post-author">{{ $post->author->name }}</span></i></li>
                    <li><i class="far fa-clock"><span class="post-date"><time>{{ $post->date }}</time></span></i></li>
                    <li><i class="fas fa-tags"><span class="post-date">News</span></i></li>
                </ul>
            </div>
            <div class="float-right">
                <a href="{{ route('news-post', $post->slug) }}">Continue Reading »</a>
            </div>
        </div>
</div>
