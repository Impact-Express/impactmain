<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Post;
use App\Page;

class HomeController extends BackendController
{
    protected $pagelimit = 9;
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
        $posts = Post::with('category', 'author')->latest()->paginate($this->pagelimit);
        $postCount = Post::count();
        return view('admin.dashboard.posts', compact('posts', 'postCount'));
    }
    public function settings()
    {
        return view('admin.dashboard.settings');
    }
}
