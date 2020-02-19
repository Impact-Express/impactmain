<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
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

    public function show (Post $post)
    {
        return view('customer.news.post', compact('post'));
    }
}
