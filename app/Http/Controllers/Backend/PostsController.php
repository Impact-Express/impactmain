<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Requests\Posts\PostRequest;
use App\Http\Requests;
use App\Post;
use App\Category;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class PostsController extends BackendController implements HasMedia
{
    use InteractsWithMedia;
    
    public function __construct()
    {
        parent::__construct();
        $this->uploadPath = public_path(config('cms.image.directory'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd("index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Post $post, Category $category)
    {
        return view('admin.dashboard.postPages.create', compact('post', 'category'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $directory = config('cms.image.directory');
        $image = $request->image->store('img');
        $userid = (!Auth::guest()) ? Auth::user()->id : null ;
        
        Post::create([
                'title'         => $request->title,
                'slug'          => $request->slug,
                'excerpt'       => $request->excerpt,
                'body'          => $request->body,
                'published_at'  => $request->published_at,
                'category_id'   => $request->category_id,
                'author_id'     => $userid,
                'image'         => $image
            ]);
        
        session()->flash('success', 'Post Created Successfully!');
        return redirect(route('admin-posts'));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.dashboard.postPages.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from Public Access.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        session()->flash('success', 'Post Trashed Successfully!');
        return redirect(route('admin-posts'));
    }
}