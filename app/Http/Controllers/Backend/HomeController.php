<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
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
    public function categories()
    {
        $categories = Category::all();
        $categoryCount = Category::count();
        return view('admin.dashboard.categories', compact('categories', 'categoryCount'));
    }    
    public function settings()
    {
        return view('admin.dashboard.settings');
    }

    /**
     * Display all SoftDeleted (Trashed) Posts in the Database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function trash()
    {
        $trashed = Post::onlyTrashed()->get();
        $postCount = Post::onlyTrashed()->count();
        return view('admin.dashboard.trash', compact('postCount'))->withPosts($trashed);
    }

        /**
     * Eradicate the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::withTrashed()->where('id', $id)->firstOrFail();
        $post->forceDelete();

        $postCount = Post::onlyTrashed()->count();
        
        session()->flash('success', 'Post Deleted Successfully!');
        return redirect(view('admin.dashboard.trash', compact('postCount'))->withPosts($trashed));
    }
}
