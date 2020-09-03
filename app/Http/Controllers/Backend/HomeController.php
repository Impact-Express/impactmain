<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;
use App\Category;
use App\Page;
use App\Tag;

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
        $posts = Post::with('category', 'author', 'tags')->latest()->paginate($this->pagelimit);
        $postCount = Post::count();
        return view('admin.dashboard.posts', compact('posts', 'postCount'));
    }
    public function pages()
    {
        $pages = Page::all();
        $pageCount = Page::count();
        return view('admin.dashboard.pages', compact('pages','pageCount'));
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
        $post = Post::withTrashed()->where('id', $id)->first();
        $post->deleteImage();
        $post->forceDelete();
        session()->flash('success', 'Post Deleted Successfully!');
        return redirect(route('admin-trash'));
    }

    /**
     * Restore the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore ($id) 
    {
        $post = Post::withTrashed()->where('id', $id)->first();
        $post->restore();
        session()->flash('success', 'Post Restored Successfully!');
        return redirect(route('admin-trash'));
    }
}
