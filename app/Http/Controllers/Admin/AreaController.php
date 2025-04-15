<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Area;
use App\Http\Requests\Admin\AreaRequest;
use App\Models\AreaImages;

class AreaController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:browse_areas', ['only' => ['index','show']]);
        $this->middleware('permission:create_areas', ['only' => ['create','store']]);
        $this->middleware('permission:update_areas', ['only' => ['update','edit']]);
        $this->middleware('permission:delete_areas', ['only' => ['destroy','delete_all']]);
        $this->middleware('permission:active_areas', ['only' => ['active']]);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areas=Area::where('parent_id',null)->get();
        if(request()->has('parent')){
            $areas=Area::find(request('parent'))->child;
        }
        $parent=request('parent')??null;
        return view('admin.areas.index',compact('areas','parent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parent=request('parent')??null;
       return view('admin.areas.create',compact('parent'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\AreaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AreaRequest $request)
    {

        $area=Area::create($request->except(['images','image','video']));
        if($request->hasFile('image')){
            $image=$this->upload_file($request['image'],'categories');
            $area->update(['image'=>$image]);
           }
           
           if($request->hasFile('video')){
            $this->remove_file($area->video);
            $video=$this->upload_file($request['video'],'areas');
            $area->update(['video'=>$video]);
           }


           if($request->hasFile('images')){
            foreach($request->images as $media){
                   AreaImages::create([
                                'area_id'=>$area->id,
                                'image'=>$this->upload_file($media,'areas')
                   ]);
            }
        }
        if($request['parent_id'] && $request['parent_id']!=null){
        return redirect('admin/areas/?parent='.$request['parent_id'])->with(["success"=>__('site.recored created successfully.')]);
        }else{
         return redirect('admin/areas')->with(["success"=>__('site.recored created successfully.')]);   
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
    public function edit(Area $area)
    {
        return view('admin.areas.update',compact('area'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\AreaRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AreaRequest $request, $id)
    {
        $area=Area::find($id);
        $area->update($request->except(['image','images','video']));
        if($request->hasFile('image')){
            $this->remove_file($area->image);
            $image=$this->upload_file($request['image'],'categories');
            $area->update(['image'=>$image]);
           }

           if($request->hasFile('video')){
            $this->remove_file($area->video);
            $video=$this->upload_file($request['video'],'areas');
            $area->update(['video'=>$video]);
           }


           if($request->hasFile('images')){
            foreach($request->images as $media){
                   AreaImages::create([
                                'area_id'=>$area->id,
                                'image'=>$this->upload_file($media,'areas')
                   ]);
            }
        }
          if($area->parent_id && $area->parent_id!=null){
        return redirect('admin/areas/?parent='.$area->parent_id)->with(["success"=>__('site.recored updated successfully.')]);
        }else{
         return redirect('admin/areas')->with(["success"=>__('site.recored updated successfully.')]);   
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $area=Area::find($id);
         $this->remove_file($area->image);
         $this->remove_file($area->video);

         foreach($area->images as $image){
            $image->image?$this->remove_file($image->image):'';
            
            $image->delete();
         }
         $area->delete();
         return "success";
    }

      //=========================delete all==================
      public function delete_all(Request $request){

        $areas=Area::whereIn('id',$request['ids'])->get();
        foreach($areas as $area){
            $this->remove_file($area->image);
            $this->remove_file($area->video);
            foreach($area->images as $image){
               $image->image?$this->remove_file($image->image):'';
               
               $image->delete();
            }
            $area->delete();
        }
        return "success";
    }

    //=======================get child ajax================
    public function child_ajax(Request $request){
            $child=Area::find($request['id'])->child->pluck('id','title')->toArray();
            return $child;
    }


    public function del_img($id)
    {       $area=AreaImages::find($id);
            $area->image?$this->remove_file($area->image):'';
            
            $area->delete();
            return "success";
    }
}
