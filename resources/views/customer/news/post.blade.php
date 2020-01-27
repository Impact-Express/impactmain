<div class="post">
        @if ($post->image_url)
        <img src="{{ $post->image_url }}">
        @endif
        <a href="#">
        <h1 class="post-title">{{ $post->title }}</h1>
        </a>
        <h4 class="post-subtitle">{{ $post->excerpt }}</h4>
        <div class="post-meta">
            <div class="float-left">
                <ul class="post-meta-group">
                    <li><i class="fas fa-user"><span class="post-author">{{ $post->author }}</span></i></li>
                    <li><i class="far fa-clock"><span class="post-date">{{ $post->date }}</span></i></li>
                    <li><i class="fas fa-tags"><span class="post-date">News</span></i></li>
                </ul>
            </div>
            <div class="float-right">
                <a href="#">Continue Reading »</a>
            </div>
        </div>
</div>