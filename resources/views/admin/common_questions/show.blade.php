@extends('admin.layouts.app')
@section('style')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{url('/')}}/public/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{url('/')}}/public/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{url('/')}}/public/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- summernote -->
  <style>
     .del-image{
       cursor:pointer;
     }
  </style>
@endsection

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
       <!-- Content Header (Page header) -->
       <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>{{$common_question->question}}</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('/')}}/admin">@lang('site.dashboard')</a></li>
                  <li class="breadcrumb-item "><a href="{{url('/')}}/admin/common_questions">@lang('site.common_question')</a></li>
                  <li class="breadcrumb-item active">{{$common_question->question}}</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
             <!-- form start -->
             <form id="quickForm" class="col-12" >
                                  
                              <!-- left column -->
                          <div class="col-12">
                                  <!-- jquery validation -->
                                  <div class="card card-primary">
                                          <div class="card-header">
                                              <h3 class="card-question">@lang('site.main_info')</h3>
                                          </div>
                                          <!-- /.card-header -->
                                        
                                             <div class="card-body">
                                                  
                                                      <div class="form-group col-12">
                                                          <label for="exampleInputquestionAr">@lang('site.question')</label>
                                                          <input disabled type="text" name="question" value="{{$common_question->question}}" class="form-control" id="exampleInputquestionAr" placeholder="@lang('site.Enter') @lang('site.question')">
                                                          @error('question')
                                                          <label class="alert alert-danger ">{{$message}}</label>
                                                          @enderror
                                                      </div>
                                                     
                                                      <div class="form-group col-12">
                                                          <label for="exampleInputDescAr">@lang('site.answer')</label>
                                                          <textarea disabled type="text" name="answer" value="{{$common_question->answer}}" class="form-control" id="exampleInputDescAr" placeholder="@lang('site.Enter') @lang('site.answer')">{{$common_question->answer}}</textarea>
                                                          @error('answer')
                                                          <label class="alert alert-danger ">{{$message}}</label>
                                                          @enderror
                                                      </div>
                                                   
                                                    
                                                   
                                                     
                                                      
                                                      
                                                   
                                                   
                                                 
                                                
                                              </div>
                                              <!-- /.card-body -->
                                      
                                        
                                  </div>
                          </div>
                          
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('script')



@endsection