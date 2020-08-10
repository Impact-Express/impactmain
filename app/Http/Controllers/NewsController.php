<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
use App\Category;
use App\Tag;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $posts = Post::with('author')->latestFirst()->published()->simplePaginate(4);
        return view('customer.news.index', compact('posts'));
    }

    public function category(Category $category)
    {
        $categoryName = $category->title;
        $posts = $category->posts()->with('author')->latestFirst()->published()->simplePaginate(4);
        return view('customer.news.index', compact('posts', 'categoryName'));
    }

    public function author(User $author)
    {
        $authorName = $author->name;
        $posts = $author->posts()->with('category')->latestFirst()->published()->simplePaginate(4);
        return view('customer.news.index', compact('posts', 'authorName'));
    }

    public function show (Post $post)
    {
        $post->increment('view_count', 1);
        return view('customer.news.post', compact('post'));
    }
}
