<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Rate;
use Auth;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:browse_contact', ['only' => ['index','show']]);
        $this->middleware('permission:delete_contact', ['only' => ['destroy','delete_all']]);
        $this->middleware('permission:update_contact', ['only' => ['read']]);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts=Contact::get();
        return view('admin.contact.index',compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {      
        if(request()->has('not')){
            $not=Auth::user()->unreadNotifications->where('id',request('not'))->first();
            if($not){
                $not->markAsRead();
            }
        }
            
        $contact =Contact::find($id);
        if($contact){
          return view ('admin.contact/show',compact('contact'));
        }else{
            return redirect()->back()->with(["error"=>__('site.not found.')]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $Contact)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $Contact=Contact::find($id)->delete();
         return "success";
    }

      //=========================delete all==================
      public function delete_all(Request $request){
        Contact::whereIn('id',$request['ids'])->delete();
        return "success";
    }

    //=========================read====================
    public function read($id){
        $contact=Contact::find($id);
        $contact->update(['read'=>1]);
        return redirect()->back()->with(["success"=>__('site.recored updated successfully.')]);
    }
    public function active($id){
        $contact=Contact::find($id);
        $contact->update(['active'=>1]);
        $rate=Rate::create([
            'name'=>$contact->name,
            'notes'=>$contact->message,
            'star'=>$contact->star,
            ]);
        return redirect()->back()->with(["success"=>__('site.recored updated successfully.')]);
    }

}
