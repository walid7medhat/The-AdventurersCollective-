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
                <h1>@lang('site.update') @lang('site.pages')</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('/')}}/admin">@lang('site.dashboard')</a></li>
                  <li class="breadcrumb-item "><a href="{{url('/')}}/admin/pages">@lang('site.pages')</a></li>
                  <li class="breadcrumb-item active">@lang('site.update')</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                     <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">@lang('site.update') <small>@lang('site.service') {{$page->title}}</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" action="{{url('/')}}/admin/setting/pages/{{$page->id}}" method="post" enctype="multipart/form-data">
                  @csrf
                  @method('Put')
                  <input type="hidden" name="service_id" value="{{$page->id}}"/>
                  <div class="card-body">
                         <div class="form-group col-12">
                            <label for="exampleInputImage">@lang('site.image')</label>
                            <input type="file" name="image" value="{{old('image')}}"  class="form-control" id="exampleInputImage" placeholder="@lang('site.choose') @lang('site.image')">
                            @if($page->image)
                                 <img src="{{url('/')}}/{{$page->image}}"/>
                            @endif
                            @error('image')
                            <label class="alert alert-danger ">{{$message}}</label>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">@lang('site.title_ar')</label>
                            <input type="text" name="title_ar" value="{{$page->title_ar}}"  class="form-control" id="exampleInputtitle_ar" placeholder="@lang('site.Enter title_ar')">
                            @error('title_ar')
                            <label class="alert alert-danger ">{{$message}}</label>
                            @enderror
                        </div>
                      
                        <div class="form-group">
                            <label for="exampleInputEmail">@lang('site.title_en')</label>
                            <input type="title_en" name="title_en" value="{{$page->title_en??$page->title_ar}}"  class="form-control" id="exampleInputtitle_en" placeholder="@lang('site.Enter title_en')">
                            @error('title_en')
                            <label class="alert alert-danger ">{{$message}}</label>
                            @enderror
                        </div>
                        <div class="row">
                          <div class="form-group col-12">
                              <label>@lang('site.page_ar')</label>
                              <textarea class="summernote" name="page_ar" id="summernote"> {{$page->page_ar}} </textarea>
                              @error('page_ar')
                                  <span class="alert alert-danger">{{$message}}</span>
                              @enderror
                          </div>
                          <div class="form-group col-12">
                              <label>@lang('site.page_en')</label>
                              <textarea class="summernote" name="page_en" id="summernote">{{$page->page_en}}</textarea>
                              @error('page_en')
                                  <span class="alert alert-danger">{{$message}}</span>
                              @enderror
                          </div>
                        </div>
                      
                                              
                  </div> <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">@lang('site.Submit')</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('script')
<!-- jquery-validation -->
<script src="{{url('/')}}/public/admin/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="{{url('/')}}/public/admin/plugins/jquery-validation/additional-methods.min.js"></script>
<!-- jquery-validation -->
<script src="{{url('/')}}/public/admin/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="{{url('/')}}/public/admin/plugins/jquery-validation/additional-methods.min.js"></script>
<!-- Summernote -->
<script src="{{url('/')}}/public/admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    // Summernote
    $('.summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>
<script>
$(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      alert( "Form successful submitted!" );
    }
  });
  $('#quickForm').validate({
    rules: {
      name: {
        required: true,
      },
    },
    messages: {
      name: {
        required: "@lang('site.please') @lang('site.Enter Name')",
      },
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
@endsection