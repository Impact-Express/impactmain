<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Post;
use App\Page;

class HomeController extends BackendController
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.dashboard.index');
    }
    public function media()
    {
        return view('admin.dashboard.media');
    }
    public function posts()
    {
        $posts = Post::latest()->paginate(8);
        return view('admin.dashboard.posts', compact('posts'));
    }
    public function pages()
    {
        $pages = Page::latest()->paginate(8);
        return view('admin.dashboard.pages', compact('pages'));
    }
    public function settings()
    {
        return view('admin.dashboard.settings');
    }
}
