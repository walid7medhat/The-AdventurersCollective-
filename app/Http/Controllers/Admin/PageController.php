<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Http\Requests\Admin\PageRequest;
class PageController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages=Page::get();
        return view('admin.pages.index',compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PageRequest $request)
    {   
        if($request->hasFile('image')){
            $image=$this->upload_file($request['image'],'services');
        }
        $data=array_merge($request->input(),["breadcrumb_logo"=>$image??null]);
        $page=Page::create($data);
        return redirect('admin/setting/pages')->with(["success"=>__('site.recored created successfully.')]);


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
        return view('admin.pages.update',compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PageRequest $request, $id)
    {
        $page=Page::find($id);
        if($request->hasFile('image')){
            $this->remove_file($page->image);
            $image=$this->upload_file($request['image'],'services');
        }
        $data=array_merge($request->input(),["breadcrumb_logo"=>$image??$page->breadcrumb_logo]);
        $page->update($data);
        return redirect('admin/setting/pages')->with(["success"=>__('site.recored updated successfully.')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $page=Page::find($id)->delete();
         return "success";
    }

      //=========================delete all==================
      public function delete_all(Request $request){
        Page::whereIn('id',$request['ids'])->delete();
        return "success";
    }

}
