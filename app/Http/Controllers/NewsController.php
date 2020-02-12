<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $posts = Post::with('author')->latestFirst()->published()->simplePaginate(4);
        return view('customer.news.index', compact('posts'));
    }

    public function show (Post $post)
    {
        return view('customer.news.post', compact('post'));
    }
}
