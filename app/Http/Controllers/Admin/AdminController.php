<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Visitor;
use App\Models\Role;
use Auth;
use App\Models\Category;
use App\Models\Branch;
use App\Models\Reason;
use App\Models\Contact;
use App\Models\Post;
use App\Models\Order;

class AdminController extends Controller
{
    //

    public function index(){
        $users =User::get()->count();
        $visitors=Visitor::get()->count();
        $categories=Category::get()->count();
        $contacts=Contact::get()->count();
        $posts=Post::get()->count();
    
        return view('admin.index',compact('users','visitors','contacts','categories','posts'));
    }

    public function visitor(){
        $visitors=Visitor::get();
        return view('admin.visitors',compact('visitors'));
    }
}
