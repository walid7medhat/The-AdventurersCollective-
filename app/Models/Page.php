<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $fillable = ['title_ar','title_en','breadcrumb_logo','page_ar','page_en'];

    public function getTitleAttribute(){
        if(app()->getLocale()=='en')
           return $this->title_en??$this->title_ar;
        else
           return $this->title_ar;
    }
    public function getPageAttribute(){
        if(app()->getLocale()=='en')
           return $this->page_en??$this->page_ar;
        else
           return $this->page_ar;
    }
}
