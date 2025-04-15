<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Info;
use App\Models\About;
use App\Models\Area;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Breadcrumb;
use App\Models\CommonQuestion;
use App\Models\NewsLetter;
use App\Models\Post;
use App\Models\Slidear;
use App\Models\Page;
class SiteController extends Controller
{
    
    public function index(){
        $info=Info::first();    
        $posts=Post::orderBy('created_at','desc')->where('active',1)->get()->take(3);
        $about=About::first();
        $slidears=Slidear::get();
        return view('site.index',compact('info','posts','about','slidears'));
    }

    public function services(){
        $info=Info::first();    
 
        $services=Category::orderBy('created_at','desc')->get();
     
        return view('site.services',compact('info','services'));
    }
    
  
    // -----------------contact----------------
  
  public function contact(){
      $info=Info::first();
      return view('site.contact',compact('info'));
  }
  public function faqs(){
    $faqs=CommonQuestion::get();
    return view('site.faqs',compact('faqs'));
}
  
  public function store_contact(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email'=>'required|email',
            'phone'=>'required',
            'message'=>'required',
            'budget'=>'required',
            'level_of_fitness'=>'required',
            'privacy_policy'=>'accepted',
            
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput()->with(["error"=>$validator->errors([0])->first()]);
        }
        $contact=Contact::create($request->except('privacy_policy'));
        $this->send_notii('contactNotification',$contact,'browse_contact',$request['name']);
        return redirect()->back()->with(["success"=>__('site.Your message sent successfully.')]);
  }


  public function signature(){
    $areas=Area::whereNull('parent_id')->get();
    $categories=Category::get();
    $info=Info::first();
    return view('site.signature',compact('areas','categories','info'));
  }

  public function countries_filter(Request $request){
    $countries=   Area::whereHas('trips',function($q)use($request){
            $q->when($request->type,function($query) use($request){
                $query->where('category_id',$request->type);
            })->when($request->country,function($query) use($request){
                $query->where('area_id',$request->country);
            })->where('active',1);
        })->get();
        return [
            'html'=> view('site.components.filter_signature_card',compact('countries'))->render(),
                  'count' => $countries->count()
    
                ];
        
  }

  public function trip($slug){
    $trip=Post::where('active',1)->where('title',str_replace('-',' ',$slug))->first();
    if($trip){
        return view('site.trip',compact('trip'));
    }
    return redirect()->route('site.index')->with(["error"=>"this trip not exist"]);
  }

  public function single_country($slug)
  {
    $country=Area::where('name',str_replace('-',' ',$slug))->first();
    $about=About::first();
    return view('site.single_country',compact('country','about'));
  } 
  
  //   ---------------about us----------------
  public function about(){
      $about=About::first();
      $info=Info::first();
      $b=Breadcrumb::where('page','about_us')->first();
      $b2=Breadcrumb::where('page','about_us2')->first();
      return view('site.about',compact('about','info','b','b2'));
  }
 
    //   ---------------about us----------------
    public function gallery(){
        $info=Info::first();
        $b=Breadcrumb::where('page','gallery')->first();
        $gallery=Slidear::orderBy('created_at','desc')->get();
        return view('site.gallery',compact('info','b','gallery'));
    }
       //   ---------------single page----------------
       public function single_page($id){
        $info=Info::first();
        $b=Breadcrumb::where('page','gallery')->first();
        $page=Page::find($id);
        return view('site.single_page',compact('info','b','page'));
    }
    

    // ---------------subscripe_news_letter--------
    public function subscripe_news_letter(Request $request){
        $validator = Validator::make($request->all(), [
            'email'=>'required|email',
      
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput()->with(["error"=>$validator->errors([0])->first()]);
        }
        $contact=NewsLetter::create($request->input());
        return redirect()->back()->with(["success"=>__('site.Your message sent successfully.')]);
    }

   

}
