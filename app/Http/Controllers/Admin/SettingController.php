<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Info;
use App\Models\About;
use App\Http\Requests\Admin\InfoRequest;
use App\Http\Requests\Admin\AboutRequest;
class SettingController extends Controller
{
  
    //========================================site main info======================
    
    public function info(){
      $info=Info::first();
      return view('admin.setting.info',compact('info'));
    }

    public function update_info(InfoRequest $request){
      $info=Info::first();
      if($request->hasFile('logo')){
        $this->remove_file($info->logo);
        $logo=$this->upload_file($request['logo'],'infos');
       }
       if($request->hasFile('logo_footer')){
        $this->remove_file($info->logo_footer);
        $logo_footer=$this->upload_file($request['logo_footer'],'infos');
       }
       if($request->hasFile('icon')){
        $this->remove_file($info->icon);
        $icon=$this->upload_file($request['icon'],'infos');
       }
       if($request->hasFile('video')){
        $this->remove_file($info->video);
        $video=$this->upload_file($request['video'],'infos');
       }
       $data=array_merge($request->input(),["logo"=>$logo??$info->logo,"logo_footer"=>$logo_footer??$info->logo_footer,"icon"=>$icon??$info->icon,"video"=>$video??$info->video]);
       $info->update($data);
       return redirect('admin/setting/info')->with(["success"=>__('site.recored updated successfully.')]);
   
    }
    public function about(){
      $about=About::first();
     return view('admin.setting.about',compact('about'));
}

public function update_about(AboutRequest $request){
       $about=About::first();
      if($request->hasFile('image')){
        $this->remove_file($about->image);
        $image=$this->upload_file($request['image'],'abouts');
       }
       if($request->hasFile('image2')){
        $this->remove_file($about->image2);
        $image2=$this->upload_file($request['image2'],'abouts');
       }
       if($request->hasFile('image3')){
        $this->remove_file($about->image3);
        $image3=$this->upload_file($request['image3'],'abouts');
       }
       if($request->hasFile('video')){
        $this->remove_file($about->video_image);
        $video=$this->upload_file($request['video'],'abouts');
       }
       if($request->hasFile('live_you_adventure_image')){
        $this->remove_file($about->live_you_adventure_image);
        $live_you_adventure_image=$this->upload_file($request['live_you_adventure_image'],'abouts');
       }
       
       $data=array_merge($request->input(),["image"=>$image??$about->image,"image2"=>$image2??$about->image2,"image3"=>$image3??$about->image3,"live_you_adventure_image"=>$live_you_adventure_image??$about->live_you_adventure_image]);
       $about->update($data);
       return redirect('admin/setting/about')->with(["success"=>__('site.recored updated successfully.')]);
}
}
