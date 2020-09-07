<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Requests\Pages\PageRequest;
use App\Http\Requests\Pages\UpdatePageRequest;
use App\Http\Requests;
use App\Page;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;

class PagesController extends BackendController
{    
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
    public function create(Page $page)
    {
        return view('admin.dashboard.pagePages.create', compact('page'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PageRequest $request)
    {
        // dd($request);

        $userid = (!Auth::guest()) ? Auth::user()->id : null ;
        
        if ($request->hasFile('image')) 
        {
            $image = $request->image->store('img');

           Page::create([
                'title'         => $request->title,
                'slug'          => $request->slug,
                'body'          => $request->body,
                'published_at'  => $request->published_at,
                'author_id'     => $userid,
                'image'         => $image
            ]);
        }
        
        Page::create([
            'title'         => $request->title,
            'slug'          => $request->slug,
            'body'          => $request->body,
            'published_at'  => $request->published_at,
            'author_id'     => $userid,
        ]);            
        session()->flash('success', 'Page Created Successfully!');
        return redirect(route('admin-pages'));
        
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
    public function edit(Page $page)
    {
        return view('admin.dashboard.pagePages.create', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePageRequest $request, Page $page)
    {
        $data = $request->only(['title', 'slug', 'body', 'category_id', 'tag_slug', 'updated_at']);

        if ($request->hasFile('image')) 
        {
            $image = $request->image->store('img');

            $page->deleteImage();

            $data['image'] = $image;
        }
        $page->tags()->attach($request->tag_slug);
        $page->update($data);

        session()->flash('success', 'Post Updated Successfully!');
        return redirect(route('admin-pages'));
    }

    /**
     * Remove the specified resource from Public Access.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        $page->delete();
        session()->flash('success', 'Post Trashed Successfully!');
        return redirect(route('admin-pages'));
    }
}