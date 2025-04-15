<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $guarded= [];
    
    public function branch(){
        return $this->belongsTo('App\Models\Branch','branch_id');
    }
    public function reason(){
        return $this->belongsTo('App\Models\Reason','reason_id');
    }
}
