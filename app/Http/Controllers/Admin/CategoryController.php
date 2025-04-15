<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\Admin\CategoryRequest;

class CategoryController extends Controller
{
    public function __construct()
    {  
        $this->middleware('permission:browse_categories', ['only' => ['index','show']]);
        $this->middleware('permission:create_categories', ['only' => ['create','store']]);
        $this->middleware('permission:update_categories', ['only' => ['update','edit']]);
        $this->middleware('permission:delete_categories', ['only' => ['destroy','delete_all']]);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::get();
        return view('admin.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $category=Category::create($request->except('image'));
        if($request->hasFile('image')){
            $image=$this->upload_file($request['image'],'categories');
            $category->update(['image'=>$image]);
           }
        return redirect('admin/categories')->with(["success"=>__('site.recored created successfully.')]);
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
        return view('admin.categories.update',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        $category=Category::find($id);
        $category->update($request->except('image'));
        if($request->hasFile('image')){
            $this->remove_file($category->image);
            $image=$this->upload_file($request['image'],'categories');
            $category->update(['image'=>$image]);
           }
        return redirect('admin/categories')->with(["success"=>__('site.recored updated successfully.')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $category=Category::find($id)->delete();
         return "success";
    }

      //=========================delete all==================
    public function delete_all(Request $request){
        Category::whereIn('id',$request['ids'])->delete();
        return "success";
    }

}
