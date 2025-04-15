<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table="posts";
    protected $guarded = [];
    
    

    public function Category(){
        return $this->belongsTo('App\Models\Category','category_id');
    }
    public function SubjectCategory(){
        return $this->belongsTo('App\Models\SubjectCategory','subject_category_id');
    }
    public function SubjectType(){
        return $this->belongsTo('App\Models\SubjectType','subject_type_id');
    }
    public function images(){
        return $this->hasMany('App\Models\PostMedia','post_id')->where('type',0);
    }
    public function image(){
        return $this->images()->first();
    }
    public function videos(){
        return $this->hasMany('App\Models\PostMedia','post_id')->where('type',1);
    }

    public function getFinalPriceAttribute(){
        return $this->discount>0?$this->price-($this->price*($this->discount/100)):$this->price;
    }
     
    public function details(){
        return $this->hasMany(PostDetail::class,'post_id');
    }
    public function getSlugAttribute(){
        return str_replace(' ', '-', $this->title);
     }
  
}
