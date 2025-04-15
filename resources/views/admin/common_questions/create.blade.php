@extends('admin.layouts.app')
@section('style')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{url('/')}}/public/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{url('/')}}/public/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{url('/')}}/public/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{url('/')}}/public/admin/plugins/summernote/summernote-bs4.css">
@endsection

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
       <!-- Content Header (Page header) -->
       <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>@lang('site.create') @lang('site.common_questions')</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('/')}}/admin">@lang('site.dashboard')</a></li>
                  <li class="breadcrumb-item "><a href="{{url('/')}}/admin/common_questions">@lang('site.common_questions')</a></li>
                  <li class="breadcrumb-item active">@lang('site.create')</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- form start -->
                    <form id="quickForm" class="col-12" action="{{url('/')}}/admin/common_questions" method="post" enctype="multipart/form-data">
                                        @csrf
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
                                                          <input type="text" name="question" value="{{old('question')}}" class="form-control" id="exampleInputquestionAr" placeholder="@lang('site.Enter') @lang('site.question')">
                                                          @error('question')
                                                          <label class="alert alert-danger ">{{$message}}</label>
                                                          @enderror
                                                      </div>
                                                   
                                                      <div class="form-group col-12">
                                                          <label for="exampleInputDescAr">@lang('site.answer')</label>
                                                          <textarea type="text" name="answer" value="{{old('answer')}}" class="form-control" id="exampleInputDescAr" placeholder="@lang('site.Enter') @lang('site.answer')">{{old('answer')}}</textarea>
                                                          @error('answer')
                                                          <label class="alert alert-danger ">{{$message}}</label>
                                                          @enderror
                                                      </div>
                                                     
                                                     
                                                     
                                                    
                                                   
                                                     
                                                
                                              </div>
                                              <!-- /.card-body -->
                                      
                                        
                                  </div>
                          </div>
                        
                          <button type="submit" class="btn btn-primary">@lang('site.Submit')</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('script')

<!-- Summernote -->
<script>
  $(".add-video").on('click',function(){
    $(".videos").append(`<div class="row mt-1">
                              <div class="col-10">
                                <input type="text" name="videos[]"  class="form-control" id="exampleInputVideos" placeholder="@lang('site.Enter') @lang('site.video_link')">
                              </div>
                              <div class="col-2">
                                <button type="button" class="btn btn-danger del-video float-right"><i class="fas fa-minus"></i></button>
                              </div>
                          </div>`);
  });
  $(document).on('click','.videos .del-video',function(){
    $(this).closest('.row').remove();
  });
</script>



@endsection