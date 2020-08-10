<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Categories\CategoryRequest;
use App\Http\Requests\Categories\EditCategoriesRequest;
use App\Category;

class CategoriesController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::paginate(8);
        $categoryCount = DB::table('categories')->count();
        return view('admin.dashboard.categories', ['categories' => $categories, 'categoryCount' => $categoryCount]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dashboard.categoriesPages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        Category::create([
            'title' => $request->title,
            'slug' => $request->slug
        ]);

        session()->flash('success', 'Category Created Successfully!');
        return redirect(route('admin-categories'));
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
    public function edit(Category $category)
    {
        return view('admin.dashboard.categoriesPages.create')->with('category', $category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditCategoriesRequest $request, Category $category)
    {
        $category->update(        [
            'title' => $request->title,
            'slug' => $request->slug
        ]);

        $category->save();

        session()->flash('success', 'The Category was Updated Successfully!');

        return redirect(route('admin-categories'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if ($category->posts->count() > 0)
        {
            session()->flash('warning', 'Category cannot be deleted as it has posts categorized under it.');
            return redirect()->back();
        }

        $category->delete();

        session()->flash('success', 'The Category was Deleted Successfully!');
        
        return redirect(route('admin-categories'));
    }
}
