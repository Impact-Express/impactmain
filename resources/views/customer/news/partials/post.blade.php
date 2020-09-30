<div class="post">
    @if ($post->imageUrl)
        <img class="post-image" src="{{ $post->imageUrl}}">
    @endif
        <a href="{{ route('news-post', $post->slug) }}">
            <h1 class="post-title">{!! $post->title !!}</h1>
        </a>
        <div class="post-subtitle">{!! $post->excerpt_html !!}</div>
        <div class="post-meta">
            <div class="float-left">
                <ul class="post-meta-group">
                    <li><i class="fas fa-user"><span class="post-author"><a href="{{ route('author', $post->author->slug) }}">{{ $post->author->name }}</a></span></i></li>
                    <li><i class="far fa-clock"><span class="post-date"><time>{{ $post->date }}</time></span></i></li>
                    <li><i class="fas fa-tags">
                        @foreach ($post->tags as $tag)
                            <span class="post-tag"><a href="{{ route('tag', $tag->slug) }}">{!! $tag->title !!}</a></span>
                        @endforeach
                    </i></li>
                </ul>
            </div>
            <div class="float-right">
                <a href="{{ route('news-post', $post->slug) }}">Continue Reading »</a>
            </div>
        </div>
</div>
