@extends('customer.layouts.news')
@section('title', "$post->title")

@section('content')
<div class="news">
    <div class="container leftside">
        <article class="post">
            @if ($post->image_url)
                <div class="post-image">
                    <img class="post-image" src="{{ $post->image_url }}" alt="{{ $post->title }}">
                </div>
            @endif
            <div class="post-item-body">
                <div class="padding-10">
                    <h1 class="post-title">{{ $post->title }}</h1>
                    <h3 class="post-subtitle">{{ $post->excerpt }}</h3>

                    <div class="post-meta">
                        <ul class="post-meta-group">
                            <li><i class="fas fa-user"><span class="post-author">{{ $post->author->name }}</span></i></li>
                            <li><i class="far fa-clock"><span class="post-date"><time>{{ $post->date }}</time></span></i></li>
                            <li><i class="fas fa-tags"><span class="post-date">Blog</span></i></li>
                        </ul>
                    </div>

                    <div class="post-body">
                        {!! $post->body_html !!}
                    </div>

                    <div class="backhome">
                        <a href="{{ url()->previous() }}" class="button-white">Back Home</a>
                    </div>
                </div>
            </div>
        </article>
        {{-- <article class="post-author padding-10">
                                <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                    <img alt="Author 1" src="img/author.jpg" class="media-object">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#">Masaru Edo</a></h4>
                                    <div class="post-author-count">
                                    <a href="#">
                                        <i class="fa fa-clone"></i>
                                        90 posts
                                    </a>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ad aut sunt cum, mollitia excepturi neque sint magnam minus aliquam, voluptatem, labore quis praesentium eum quae dolorum temporibus consequuntur! Non.</p>
                                </div>
                                </div>
        </article> --}}
                
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


