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
            $post = new Post;
                $post->title         = $request->title;
                $post->slug          = $request->slug;
                $post->excerpt       = $request->excerpt;
                $post->body          = $request->body;
                $post->published_at  = $request->published_at;
                $post->category_id   = $request->category_id;
                $post->author_id     = $userid;

                $post->addMediaFromRequest('image')->toMediaCollection('postImages', 'upload');
                $post->image = $request->image->store('img');
                // dd($post);

                $post->tags()->attach($request->tag_slug);
                $post->save();

        } else {
            $post = new Post;
            $post->title         = $request->title;
            $post->slug          = $request->slug;
            $post->excerpt       = $request->excerpt;
            $post->body          = $request->body;
            $post->published_at  = $request->published_at;
            $post->category_id   = $request->category_id;
            $post->author_id     = $userid;

            $post->tags()->attach($request->tag_slug);
            $post->save();  
        }
        
        session()->flash('success', 'Post Created Successfully!');
        return redirect(route('admin-posts'));
        
    }
        /**
     * Handle an ImageRequest for uploading images to a post.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    private function handleRequest($request)
    {
       $data = $request->all();

       if ($request->hasFile('image')) 
       {
          $image = $request->file('image');
          $fileName = $image->getClientOriginalName();
          $destination = $this->uploadPath;

          $image->move($destination, $fileName);
          $data['image'] = $fileName;

          return $data;
       }
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