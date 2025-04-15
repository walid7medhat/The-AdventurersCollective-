<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CommonQuestion;
use App\Http\Requests\Admin\CommonQuestionsRequest;
class CommonQuestionController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:browse_common_questions', ['only' => ['index','show']]);
        $this->middleware('permission:create_common_questions', ['only' => ['create','store']]);
        $this->middleware('permission:update_common_questions', ['only' => ['update','edit']]);
        $this->middleware('permission:delete_common_questions', ['only' => ['destroy','delete_all']]);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $searchQuery = trim(request()->query('search'));
        $common_questions=CommonQuestion::when($searchQuery && $searchQuery!='', function($query)use($searchQuery) {
            $query->where('question','like',  '%' . $searchQuery .'%' )->orWhere('answer','like',  '%' . $searchQuery .'%' );
              })->when(request()->query('from_date'), function($query) {
                $query->where('created_at', '>=', request()->query('from_date'));
            })->when(request()->query('to_date'), function($query) {
                $query->where('created_at', '<=', request()->query('to_date'));
            })
            ->orderBy('id', 'desc')
            ->paginate(30);
        return view('admin.common_questions.index',compact('common_questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $common_question=new CommonQuestion();
       return view('admin.common_questions.create',compact('common_question'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CommonQuestionsRequest $request)
    {
        $aqar=CommonQuestion::create($request->input());
        return redirect('admin/common_questions')->with('success',trans('site.recored created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(CommonQuestion $common_question)
    {
        //
        return view('admin.common_questions.show',compact('common_question'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(CommonQuestion $common_question)
    {
        return view('admin.common_questions.update',compact('common_question'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CommonQuestionsRequest $request,CommonQuestion $common_question)
    {
        $common_question->update($request->input());
        return redirect('admin/common_questions')->with('success',trans('site.recored updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CommonQuestion $common_question)
    {
         $common_question->delete();
         return 'success';
        }

      //=========================delete all==================
      public function delete_all(Request $request){
        $ids = $request->ids;
        CommonQuestion::whereIn('id',$ids)->delete();
        return 'success';
    }

}
