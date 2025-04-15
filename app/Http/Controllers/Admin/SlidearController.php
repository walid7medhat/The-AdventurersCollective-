<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slidear;
use App\Models\Branch;
class SlidearController extends Controller
{
 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slidears=Slidear::get();
        return view('admin.slidear.index',compact('slidears'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.slidear.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    $request->validate([
                'image' => 'required|image',
                'title'=>'required|string|max:255',
                'description'=>'required|string|max:255',

            ]);
        if($request->hasFile('image')){
            $image=$this->upload_file($request['image'],'slidears');
        }
        $data=array_merge(["image"=>$image??$slidear->image,'title'=>$request->title,'description'=>$request->description]);
        $slidear=Slidear::create($data);
        return redirect('admin/setting/slidear')->with(["success"=>__('site.recored created successfully.')]);


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
    public function edit(Slidear $slidear)
    { 
        return view('admin.slidear.update',compact('slidear'));
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
            'image' => 'nullable|image',
            'title'=>'required|string|max:255',
            'description'=>'required|string|max:255',


        ]);
        
        $slidear=Slidear::find($id);
        if($request->hasFile('image')){
            $this->remove_file($slidear->image);
            $image=$this->upload_file($request['image'],'slidears');
        }
        $data=array_merge(["image"=>$image??$slidear->image,'title'=>$request->title,'description'=>$request->description]);
        $slidear->update($data);
        return redirect('admin/setting/slidear')->with(["success"=>__('site.recored updated successfully.')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $slidear=Slidear::find($id);
         $this->remove_file($slidear->image);
         $slidear->delete();
         return "success";
    }

      //=========================delete all==================
      public function delete_all(Request $request){
        $images=Slidear::whereIn('id',$request['ids'])->pluck('image');
        $this->remove_all($images);
        Slidear::whereIn('id',$request['ids'])->delete();
        return "success";
    }

}
