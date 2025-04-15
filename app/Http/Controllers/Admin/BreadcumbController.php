<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Breadcrumb;
class BreadcumbController extends Controller
{
 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $breadcrumbs=Breadcrumb::get();
        return view('admin.breadcrumb.index',compact('breadcrumbs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pages=[
            'index','index2','posts','contact_us','about_us','about_us2','gallery'
        ];
       return view('admin.breadcrumb.create',compact('pages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image',
            'page'=>'required'
        ]);
        if($request->hasFile('image')){
            $image=$this->upload_file($request['image'],'breadcrumb');
        }
        $data=array_merge(["image"=>$image??$breadcrumb->image,'page'=>$request['page']]);
        $breadcrumb=Breadcrumb::create($data);
        return redirect('admin/setting/breadcrumb')->with(["success"=>__('site.recored created successfully.')]);


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
    public function edit(Breadcrumb $breadcrumb)
    {
        return view('admin.breadcrumb.update',compact('breadcrumb'));
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
        $request->validate([
            'image' => 'required|image',
        ]);
        $breadcrumb=Breadcrumb::find($id);
        if($request->hasFile('image')){
            $this->remove_file($breadcrumb->image);
            $image=$this->upload_file($request['image'],'breadcrumb');
        }
        $data=array_merge(["image"=>$image??$breadcrumb->image,'page'=>$breadcrumb->page]);
        $breadcrumb->update($data);
        return redirect('admin/setting/breadcrumb')->with(["success"=>__('site.recored updated successfully.')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $breadcrumb=Breadcrumb::find($id);
         $this->remove_file($breadcrumb->image);
         $breadcrumb->delete();
         return "success";
    }

      //=========================delete all==================
      public function delete_all(Request $request){
        $images=Breadcrumb::whereIn('id',$request['ids'])->pluck('image');
        $this->remove_all($images);
        Breadcrumb::whereIn('id',$request['ids'])->delete();
        return "success";
    }

}
