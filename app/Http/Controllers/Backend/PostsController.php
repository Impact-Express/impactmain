<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Requests\Posts\PostRequest;
use App\Http\Requests\Posts\UpdatePostRequest;
use App\Http\Requests;
use App\Post;
use App\Category;
use App\Tag;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;

class PostsController extends BackendController
{    
    public function __construct()
    {
        parent::__construct();
        $this->uploadPath = public_path(config('cms.image.directory'));
        $this->middleware('verifyCategoriesCount')->only(['create', 'store']);
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
    public function create(Post $post, Category $category, Tag $tag)
    {
        return view('admin.dashboard.postPages.create', compact('post', 'category', 'tag'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        // dd($request);

        $userid = (!Auth::guest()) ? Auth::user()->id : null ;
        
        if ($request->hasFile('image')) 
        {
            $image = $request->image->store('img');

           $post = Post::create([
                'title'         => $request->title,
                'slug'          => $request->slug,
                'excerpt'       => $request->excerpt,
                'body'          => $request->body,
                'published_at'  => $request->published_at,
                'category_id'   => $request->category_id,
                'author_id'     => $userid,
                'image'         => $image
            ]);
            $post->tags()->attach($request->tag_slug);
        }
        
        $post = Post::create([
            'title'         => $request->title,
            'slug'          => $request->slug,
            'excerpt'       => $request->excerpt,
            'body'          => $request->body,
            'published_at'  => $request->published_at,
            'author_id'     => $userid,
            'category_id'   => $request->category_id,
        ]);            
        $post->tags()->attach($request->tag_slug);
            

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
    public function edit(Post $post, Tag $tag)
    {
        return view('admin.dashboard.postPages.edit', compact('post'))->withPosts($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request ,Post $post)
    {
        $data = $request->only(['title', 'slug', 'body', 'category_id', 'tag_slug', 'updated_at']);

        if ($request->hasFile('image')) 
        {
            $image = $request->image->store('img');

            $post->deleteImage();

            $data['image'] = $image;
        }
        $post->tags()->attach($request->tag_slug);
        $post->update($data);

        session()->flash('success', 'Post Updated Successfully!');
        return redirect(route('admin-posts'));
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