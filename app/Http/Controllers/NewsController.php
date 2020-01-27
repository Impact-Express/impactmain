<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('customer.news.index', compact('posts'));
    }
}
