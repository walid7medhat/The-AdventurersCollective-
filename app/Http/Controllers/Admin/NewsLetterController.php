<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\news_letter;
use App\Models\NewsLetter;
use App\Models\Rate;
use Auth;

class NewsLetterController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:browse_news_letter', ['only' => ['index','show']]);
        $this->middleware('permission:delete_news_letter', ['only' => ['destroy','delete_all']]);
        $this->middleware('permission:update_news_letter', ['only' => ['read']]);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news_letters=NewsLetter::get();
        return view('admin.news_letter.index',compact('news_letters'));
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
            
        $news_letter =NewsLetter::find($id);
        if($news_letter){
          return view ('admin.news_letter/show',compact('news_letter'));
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
    public function edit(NewsLetter $news_letter)
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
         $news_letter=NewsLetter::find($id)->delete();
         return "success";
    }

      //=========================delete all==================
      public function delete_all(Request $request){
        NewsLetter::whereIn('id',$request['ids'])->delete();
        return "success";
    }


}
