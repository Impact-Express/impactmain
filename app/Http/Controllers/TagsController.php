<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    public function index (Tag $tag)
    {
        $tagName = $tag->title;
        $posts = $tag->posts()->latestFirst()->published()->simplePaginate(4);
        return view('customer.news.index', compact('posts', 'tagName'));
    }
}
