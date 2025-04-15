<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Permission;
use Auth;
class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:access_roles_permissions');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $roles=Role::get();
        return view('admin.roles.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|unique:roles|max:255',
        ]);
        
        $role=Role::create($request->input());
        return redirect('admin/roles')->with(["success"=>__('site.recored created successfully.')]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        return view('admin.roles.update',compact('role'));     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => 'required|unique:roles,name,'.$role->id.'|max:255',
        ]);
        
        $role->update($request->input());
        return redirect('admin/roles')->with(["success"=>__('site.recored updated successfully.')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        //
           $role->delete();
           return "success";

    }

    //=========================delete all==================
    public function delete_all(Request $request){
        Role::whereIn('id',$request['ids'])->delete();
        return "success";
    }

    //=======================permission====================
    public function permission($id){
           $permissions=Permission::get();
           $role=Role::find($id);
           return view('admin.roles.permission',compact('role','permissions'));
    }

    public function attach_permissions(Request $request,$id){
          $role=Role::find($id);
          $allPermission=Permission::get()->toArray();
          $role->detachPermissions($allPermission);
          if(!empty($request->permission) && count($request->permission)>0){
            $permission=Permission::whereIn('id',$request->permission)->get()->toArray();
            $role->attachPermissions($permission);
          }
          return redirect()->back()->with(["success"=>__('site.recored updated successfully.')]);
    }
}
