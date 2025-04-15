<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $appends=["slug"];
    public function parent(){
      return $this->belongsTo('App\Models\Area','parent_id');
    }

    public function child(){
        return $this->hasMany('App\Models\Area','parent_id');
    }

    public function images(){
      return $this->hasMany(AreaImages::class,'area_id');
    }

    public function getSlugAttribute(){
      return str_replace(' ', '-', $this->name);
   }

   public function trips(){
     return $this->hasMany(Post::class,'area_id');
   }
}
