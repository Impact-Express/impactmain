<?php
    namespace App\Views\Composers;

    use Illuminate\View\View;
    use App\Category;
    use App\Post;

    class RecentPostsComposer
    {
        public function compose(View $view)
        {
            $this->composeRecentPosts($view);
        }

        //? Recent Posts Composer
        public function composeRecentPosts (View $view)
        {
            $recentPosts = Post::published()->latestFirst()->take(3)->get();
            $view->with('recentPosts', $recentPosts);
        }
    }