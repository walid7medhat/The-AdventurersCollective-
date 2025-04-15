<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Http\Requests\Admin\UserRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;
use App\Notifications\ActiveUserNotification;
class UserController extends Controller
{   
    public function __construct()
    { 
        $this->middleware('permission:browse_users', ['only' => ['index','show']]);
        $this->middleware('permission:create_users', ['only' => ['create','store']]);
        $this->middleware('permission:update_users', ['only' => ['update','edit']]);
        $this->middleware('permission:delete_users', ['only' => ['destroy','delete_all']]);
        $this->middleware('permission:active_users', ['only' => ['active']]);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::get();
        return view('admin.users.index',compact('users'));     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {        
            if($request->hasFile('avatar')){
                $avatar=$this->upload_file($request['avatar'],'users');
            }
            $password=Hash::make($request['password']);
            $data=array_merge($request->input(),["password"=>$password,"avatar"=>$avatar??null]);
            $user=User::create($data);
            return redirect('admin/users')->with(["success"=>__('site.recored created successfully.')]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        if(request()->has('not')){
            $not=Auth::user()->unreadNotifications->where('id',request('not'))->first();
            if($not){
                $not->markAsRead();
            }
        }
        return view('admin.users.show',compact('user'));     
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles=Role::get();
        return view('admin.users.update',compact('user','roles'));     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, User $user)
    {   
        if($request->hasFile('avatar')){
            $user->avatar?$this->remove_file($user->avatar):'';
            $avatar=$this->upload_file($request['avatar'],'users');
        }
        $password=$request['password']?Hash::make($request['password']):$user->password;
                
        $data=array_merge($request->except(['role','password_confirmation']),["password"=>$password,"avatar"=>$avatar??$user->avatar]);
        $user->update($data);
        if($user->id !=1){
            $user->detachRoles($user->roles);
            $role=Role::find($request['role']);
            $role?$user->attachRole($role):'';
         }
        return redirect('admin/users')->with(["success"=>__('site.recored updated successfully.')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {       $user=User::find($id);
           $user->avatar?$this->remove_file($user->avatar):'';
           $user->delete();
           return $id;

    }

    //=========================delete all==================
    public function delete_all(Request $request){
        $icons=User::whereIn('id',$request['ids'])->pluck('avatar');
        $this->remove_all($icons);
        User::whereIn('id',$request['ids'])->delete();
        return "success";
        }

    //========================active=========================
    public function active($id){
        $user=User::find($id);
        if($user->active==0){
           $user->active=1;
           $user->reason_unactivate=null;
        }
        else{
           $user->active=0;
           $user->reason_unactivate=request('reason')??null;
        }
        $user->save();
        $user->notify(new ActiveUserNotification($user->active));
        return "success";
    }
}
