<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Tags\TagRequest;
use App\Http\Requests\Tags\EditTagsRequest;
use App\Tag;

class TagsController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::paginate(8);
        $tagCount = DB::table('tags')->count();
        return view('admin.dashboard.tags', ['tags' => $tags, 'tagCount' => $tagCount]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dashboard.tagsPages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagRequest $request)
    {
        Tag::create([
            'title' => $request->title,
            'slug' => $request->slug
        ]);
        
        session()->flash('success', 'Tag Created Successfully!');
        return redirect(route('admin-tags'));
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
    public function edit(Tag $tag)
    {
        return view('admin.dashboard.tagsPages.create')->with('tag', $tag);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditTagsRequest $request, Tag $tag)
    {
        $tag->update(        [
            'title' => $request->title,
            'slug' => $request->slug
        ]);

        $tag->save();

        session()->flash('success', 'The Tag was Updated Successfully!');

        return redirect(route('admin-tags'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        if ($tag->posts->count() > 0)
        {
            session()->flash('warning', 'Tag cannot be deleted as it has posts associated under it.');
            return redirect()->back();
        }

        $tag->delete();

        session()->flash('success', 'The Tag was Deleted Successfully!');
        
        return redirect(route('admin-tags'));
    }
}
