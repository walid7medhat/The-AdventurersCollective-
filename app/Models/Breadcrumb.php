<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Breadcrumb extends Model
{
    use HasFactory;
    protected $fillable = ['image','page'];
}
