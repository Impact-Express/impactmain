@extends('customer.layouts.news')
@section('title', "$post->title")

@section('content')
<div class="news">
    <div class="container leftside">
        <article class="post">
            @if ($images)
                <div class="post-image">
                    <img class="post-image" src="{{ $images }}">
                </div>
            @endif
            <div class="post-item-body">
                <div class="padding-10">
                    <h1 class="post-title">{{ $post->title }}</h1>
                    <div class="post-subtitle">{!! $post->excerpt_html !!}</div>
                    <div class="post-meta">
                        <ul class="post-meta-group">
                            <li><i class="fas fa-user"><span class="post-author"><a href="{{ route('author', $post->author->slug) }}">{{ $post->author->name }}</a></span></i></li>
                            <li><i class="far fa-clock"><span class="post-date"><time>{{ $post->date }}</time></span></i></li>
                            <li><i class="fas fa-tags">
                                @foreach ($post->tags as $tag)
                                    <span class="post-tag"><a href="{{ route('tag', $tag->slug) }}">{{ $tag->title }}</a></span>
                                @endforeach
                            </i></li>
 
                        </ul>
                    </div>

                    <div class="post-body">
                        {!! $post->body_html !!}
                    </div>

                    <div class="backhome">
                        <a href="{{ route('news') }}" class="button-white">Back Home</a>
                    </div>
                </div>
            </div>
        </article>

        <article class="post-author padding-10">
            <div class="media">
                <div class="media-left">
                    <a href="{{ route('author', $post->author->slug) }}">
                        <img alt="{{ $post->author->name }}" width="150" height="150" src="{{ $post->author->gravatar() }}" class="media-object">
                    </a>
                </div>
            <div class="media-body">
                <h4 class="media-heading"><a href="{{ route('author', $post->author->slug) }}">{{ $post->author->name }}</a></h4>
                    <div class="post-author-count">
                        <a href="{{ route('author', $post->author->slug) }}">
                            <i class="fa fa-clone"></i>
                            <?php $postCount = $post->author->posts()->published()->count(); ?>
                            {{ $postCount }} {{ Str::plural('post', $postCount) }}
                        </a>
                    </div>
                    {!! $post->author->bio_html !!}
                </div>
            </div>
        </article>
                
        {{-- <article class="post-comments">
                                <h3><i class="fa fa-comments"></i> 5 Comments</h3>
                
                                <div class="comment-body padding-10">
                                    <ul class="comments-list">
                                        <li class="comment-item">
                                            <div class="comment-heading clearfix">
                                                <div class="comment-author-meta">
                                                    <h4>John Doe <small>January 14, 2016</small></h4>
                                                </div>
                                            </div>
                                            <div class="comment-content">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio nesciunt nulla est, atque ratione nostrum cumque ducimus maxime, amet enim tempore ipsam. Id ea, veniam ipsam perspiciatis assumenda magnam doloribus!</p>
                                                <p>Quibusdam iusto culpa, necessitatibus, libero sequi quae commodi ea ab non facilis enim vitae inventore laborum hic unde esse debitis. Adipisci nostrum reprehenderit explicabo, non molestias aliquid quibusdam tempore. Vel.</p>
                                            </div>
                                        </li>
                
                                        <li class="comment-item">
                                            <div class="comment-heading clearfix">
                                                <div class="comment-author-meta">
                                                    <h4>John Doe <small>January 14, 2016</small></h4>
                                                </div>
                                            </div>
                                            <div class="comment-content">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio nesciunt nulla est, atque ratione nostrum cumque ducimus maxime, amet enim tempore ipsam. Id ea, veniam ipsam perspiciatis assumenda magnam doloribus!</p>
                                                <p>Quibusdam iusto culpa, necessitatibus, libero sequi quae commodi ea ab non facilis enim vitae inventore laborum hic unde esse debitis. Adipisci nostrum reprehenderit explicabo, non molestias aliquid quibusdam tempore. Vel.</p>
                
                                                <ul class="comments-list-children">
                                                    <li class="comment-item">
                                                        <div class="comment-heading clearfix">
                                                            <div class="comment-author-meta">
                                                                <h4>John Doe <small>January 14, 2016</small></h4>
                                                            </div>
                                                        </div>
                                                        <div class="comment-content">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio nesciunt nulla est, atque ratione nostrum cumque ducimus maxime, amet enim tempore ipsam. Id ea, veniam ipsam perspiciatis assumenda magnam doloribus!</p>
                                                            <p>Quibusdam iusto culpa, necessitatibus, libero sequi quae commodi ea ab non facilis enim vitae inventore laborum hic unde esse debitis. Adipisci nostrum reprehenderit explicabo, non molestias aliquid quibusdam tempore. Vel.</p>
                                                        </div>
                                                    </li>
                
                                                    <li class="comment-item">
                                                        <div class="comment-heading clearfix">
                                                            <div class="comment-author-meta">
                                                                <h4>John Doe <small>January 14, 2016</small></h4>
                                                            </div>
                                                        </div>
                                                        <div class="comment-content">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio nesciunt nulla est, atque ratione nostrum cumque ducimus maxime, amet enim tempore ipsam. Id ea, veniam ipsam perspiciatis assumenda magnam doloribus!</p>
                                                            <p>Quibusdam iusto culpa, necessitatibus, libero sequi quae commodi ea ab non facilis enim vitae inventore laborum hic unde esse debitis. Adipisci nostrum reprehenderit explicabo, non molestias aliquid quibusdam tempore. Vel.</p>
                
                                                            <ul class="comments-list-children">
                                                                <li class="comment-item">
                                                                    <div class="comment-heading clearfix">
                                                                        <div class="comment-author-meta">
                                                                            <h4>John Doe <small>January 14, 2016</small></h4>
                                                                        </div>
                                                                    </div>
                                                                    <div class="comment-content">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio nesciunt nulla est, atque ratione nostrum cumque ducimus maxime, amet enim tempore ipsam. Id ea, veniam ipsam perspiciatis assumenda magnam doloribus!</p>
                                                                        <p>Quibusdam iusto culpa, necessitatibus, libero sequi quae commodi ea ab non facilis enim vitae inventore laborum hic unde esse debitis. Adipisci nostrum reprehenderit explicabo, non molestias aliquid quibusdam tempore. Vel.</p>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                
                                </div>
                
                                <div class="comment-footer padding-10">
                                    <h3>Leave a comment</h3>
                                    <form>
                                        <div class="form-group required">
                                            <label for="name">Name</label>
                                            <input type="text" name="name" id="name" class="form-control">
                                        </div>
                                        <div class="form-group required">
                                            <label for="email">Email</label>
                                            <input type="text" name="email" id="email" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="website">Website</label>
                                            <input type="text" name="website" id="website" class="form-control">
                                        </div>
                                        <div class="form-group required">
                                            <label for="comment">Comment</label>
                                            <textarea name="comment" id="comment" rows="6" class="form-control"></textarea>
                                        </div>
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <button type="submit" class="btn btn-lg btn-success">Submit</button>
                                            </div>
                                            <div class="pull-right">
                                                <p class="text-muted">
                                                    <span class="required">*</span>
                                                    <em>Indicates required fields</em>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                
        </article> --}}
    </div>
    <aside class="rightside">
        @include('customer.news.partials.sidebar')
    </aside>
</div>
@endsection


