<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

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
        $posts = Post::all();
        return view('admin.dashboard.posts', compact('posts'));
    }
    public function pages()
    {
        return view('admin.dashboard.pages');
    }
    public function settings()
    {
        return view('admin.dashboard.settings');
    }
}
