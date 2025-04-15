<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Post;
use App\Models\Branch;
use App\Http\Requests\Admin\PostRequest;
use App\Models\Area;
use App\Models\Category;
use App\Models\PostDetail;
use App\Models\PostMedia;

class PostController extends Controller
{   
    public function __construct()
    {
        $this->middleware('permission:browse_posts', ['only' => ['index','show']]);
        $this->middleware('permission:create_posts', ['only' => ['create','store']]);
        $this->middleware('permission:update_posts', ['only' => ['update','edit']]);
        $this->middleware('permission:delete_posts', ['only' => ['destroy','delete_all']]);
        $this->middleware('permission:active_posts', ['only' => ['active']]);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::orderBy('created_at','desc')->get();
        return view('admin.posts.index',compact('posts'));     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        
        $categories=Category::get();
        $areas=Area::get();
        return view('admin.posts.create',compact('categories','areas'));     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {        
            $post=Post::create($request->except(['images','videos','image']));
            if($request->hasFile('images')){
                foreach($request->images as $media){
                      $this->upload_media($media,0,$post->id);
                }
            }
            if($request->hasFile('image')){
              $video_cover=  $this->upload_file($request->image,'posts');
              $post->update([
                'video_cover_image'=>$video_cover,
              ]);
                
            }
            
            // if($request->has('videos')){
            //     foreach($request->videos as $media){
            //       $this->upload_media($media,1,$post->id);
            //     }
            // }
          
            return redirect('admin/posts')->with(["success"=>__('site.recored created successfully.')]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {   
        $categories=Category::get();
        $areas=Area::get();
        return view('admin.posts.show',compact('post','categories','areas'));     
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {  
        
        $categories=Category::get();
        $areas=Area::get();
        return view('admin.posts.update',compact('post','categories','areas'));     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post)
    {  $post->update($request->except(['images','post_id','image']));
        // dd($request);
        if($request->hasFile('images')){
            foreach($request->images as $media){
               $this->upload_media($media,0,$post->id);
            }
        }
       
        if($request->hasFile('image')){
            $this->remove_file($post->video_cover_image);
            $video_cover=  $this->upload_file($request->image,'posts');
            $post->update([
              'video_cover_image'=>$video_cover,
            ]);
              
          }
        return redirect('admin/posts')->with(["success"=>__('site.recored updated successfully.')]);
    }


    public function upload_media($media,$type,$id){
            if($type != 1)
              $avatar=$this->upload_file($media,'posts');
            else
             $avatar=$media;
            $PostMedia=PostMedia::create([
                'post_id'=>$id,
                'media'=>$avatar,
                'type'=>$type
            ]);
            
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {       $Post=Post::find($id)->delete();
            return $id;
    }

    //=========================delete all==================
    public function delete_all(Request $request){
        $icons=Post::whereIn('id',$request['ids'])->delete();
        return "success";
        }

    //========================active=========================
    public function active($id){
        $Post=Post::find($id);
        if($Post->active==0){
           $Post->active=1;
           $Post->reason_unactivate=null;
        }
        else{
           $Post->active=0;
           $Post->reason_unactivate=request('reason')??null;
        }
        $Post->save();
        return "success";
    }

    public function del_img($id)
    {       $Post=PostMedia::find($id);
            if($Post->type==1){
              $Post->media?$this->remove_file($Post->media):'';
             }
            $Post->delete();
            return "success";
    }
    public function del_all_img($request)
    {   $icons=PostMedia::whereIn('id',$request['ids'])->pluck('media');
        $this->remove_all($icons);
        PostMedia::whereIn('id',$request['ids'])->delete();
        return "success";
    }
}
