<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\MediaBrowser as Media;
use App\Post;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\HasMedia;

class MediaController extends BackendController
{
    public function __construct()
    {
        parent::__construct();
        $this->uploadPath = public_path(config('upload'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Media $media)
    {
        $uploads = $media->nameUrl;
        return view('admin.dashboard.media', compact('media', 'uploads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $media = new Media;
        $media->name = $request->name->store('upload');
        $media->addMediaFromRequest('name')->toMediaCollection('uploads', 'upload');
        $media->save();
        // dd($media);

        return redirect()->back();
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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

       if ($request->hasFile('name')) 
       {
          $name = $request->file('name');
          $fileName = $name->getClientOriginalName();
          $destination = $this->uploadPath;

          $name->move($destination, $fileName);
          $data['name'] = $fileName;

          return $data;
       }
    }
}
