<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reason extends Model
{
    use HasFactory;
    protected $table="reasons";
    protected $fillable = ['title_ar','title_en'];

    public function getTitleAttribute(){
        if(app()->getLocale()=='en')
        return $this->title_en??$this->title_ar;
     else
        return $this->title_ar;
    }
}
