<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\File;
use App\Models\User;
use App\Notifications\contactNotification;
use App\Notifications\bookNotification;


use Illuminate\Routing\Controller as BaseController;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function upload_file($file,$model){
			$extension = $file->getClientOriginalExtension();
			$filename = $file->getClientOriginalName().time() . '.' . $extension;
			$file->move('public/storage/'.$model.'/', $filename);
			$path = 'public/storage/'.$model.'/' . $filename;
			return $path;
    }

    public function remove_file($file){
        if($file && $file!=null){
        $f=base_path().'/'.$file;
        if(File::exists($f)) {
            unlink($f);
          }
        }
    }

    public function remove_all($files){
        $avatars = array_map(function ($file) {
            $this->remove_file($file);
      }, $files->toArray());
    }


    public function send_notii($notiModel,$model,$permission,$name){
        $admins=User::whereHas('roles', function($q) use($permission){
            $q->whereHas('permissions', function($q1) use($permission) {
              $q1->where('name', '=', $permission);
            });
          })->get();
         
          foreach($admins as $admin){
             if($notiModel=='contactNotification'){
                    $admin->notify(new contactNotification($name,$model));
              }elseif($notiModel=='bookNotification'){
                $admin->notify(new bookNotification($name,$model));
               }
         }  
    }

    
}
