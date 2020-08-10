<?php
    namespace App\Views\Composers;

    use Illuminate\View\View;
    use App\Category;
    use App\Post;
use App\Tag;

class NavigationComposer
    {
        public function compose(View $view)
        {
            $this->composeCategories($view);
            $this->composeTags($view);
            $this->composePopularPosts($view);
        }

        //? Categories Composer
        public function composeCategories (View $view)
        {
            $categories = Category::with(['posts' => function ($query) {
                $query->published();
            }])->orderBy('title', 'asc')->get();
            $view->with('categories', $categories);
        }

        //? Tags Composer
        public function composeTags (View $view)
        {
            $tags = Tag::pluck('slug');
            $view->with('tags', $tags);
        }

        //? Popular Posts Composer
        public function composePopularPosts (View $view)
        {
            $popularPosts = Post::published()->popular()->take(3)->get();
            $view->with('popularPosts', $popularPosts);
        }
    }