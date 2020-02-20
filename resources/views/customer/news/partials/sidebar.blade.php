<div class="search-widget">
    <form class="search-form" action="" method="post">
        @csrf
        <input type="text" class="form-text" id="form-search-box" placeholder="Search for...">
            <button class="form-search-btn" type="submit">
                <i class="fa fa-search"></i>
            </button>
    </form>
</div>

<div class="widget">
    <div class="widget-heading">
        <h4>Categories</h4>
    </div>
    <div class="widget-body">
        <ul class="categories">
            @foreach ($categories as $category)
            <a href="{{ route('category', $category->slug) }}">
                <li class="category">
                    <i class="fa fa-angle-right"></i> {{ $category->title }}
                    <span class="badge pull-right">{{ $category->posts->count() }}</span>
                </li>
            </a>
            @endforeach
        </ul>
    </div>
</div>

{{-- <div class="widget">
    <div class="widget-heading">
        <h4>Popular Posts</h4>
    </div>
    <div class="widget-body">
        <ul class="popular-posts">
            <li>
                <div class="post-image">
                    <a href="#">
                        <img class="post-item-image" src="/img/Post_Image_5_thumb.jpg" />
                    </a>
                </div>
                <div class="post-body">
                    <h6><a href="#">Blog Post #5</a></h6>
                    <div class="post-meta">
                        <span>36 minutes ago</span>
                    </div>
                </div>
            </li>
            <li>
                <div class="post-image">
                    <a href="#">
                        <img class="post-item-image" src="/img/Post_Image_5_thumb.jpg" />
                    </a>
                </div>
                <div class="post-body">
                    <h6><a href="#">Blog Post #4</a></h6>
                    <div class="post-meta">
                        <span>36 minutes ago</span>
                    </div>
                </div>
            </li>
            <li>
                <div class="post-image">
                    <a href="#">
                        <img class="post-item-image" src="/img/Post_Image_5_thumb.jpg" />
                    </a>
                </div>
                <div class="post-body">
                    <h6><a href="#">Blog Post #3</a></h6>
                    <div class="post-meta">
                        <span>36 minutes ago</span>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div> --}}

<div class="widget">
    <div class="widget-heading">
        <h4>Tags</h4>
    </div>
    <div class="widget-body">
        <ul class="tags">
            <a href="#">
                <li class="tag"><i class="fa fa-angle-right"></i>PHP</li>
            </a>
            <a href="#">
                <li class="tag"><i class="fa fa-angle-right"></i>Codeigniter</li>
            </a>
            <a href="#">
                <li class="tag"><i class="fa fa-angle-right"></i>Yii</li>
            </a>
            <a href="#">
                <li class="tag"><i class="fa fa-angle-right"></i>Laravel</li>
            </a>
            <a href="#">
                <li class="tag"><i class="fa fa-angle-right"></i>Ruby on Rails</li>
            </a>
            <a href="#">
                <li class="tag"><i class="fa fa-angle-right"></i>jQuery</li>
            </a>
            <a href="#">
                <li class="tag"><i class="fa fa-angle-right"></i>Vue Js</li>
            </a>
            <a href="#">
                <li class="tag"><i class="fa fa-angle-right"></i>React Js</li>
            </a>
        </ul>
    </div>
</div>