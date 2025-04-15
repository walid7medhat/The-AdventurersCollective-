@extends('admin.layouts.app')
@section('style')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{url('/')}}/public/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{url('/')}}/public/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{url('/')}}/public/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endsection

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
       <!-- Content Header (Page header) -->
       <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>@lang('site.create') @lang('site.gallery')</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('/')}}/admin">@lang('site.dashboard')</a></li>
                  <li class="breadcrumb-item "><a href="{{url('/')}}/admin/slidear">@lang('site.gallery')</a></li>
                  <li class="breadcrumb-item active">@lang('site.create')</li>
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
                                        <h3 class="card-title">@lang('site.create new') <small>@lang('site.gallery')</small></h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <form id="quickForm" action="{{url('/')}}/admin/setting/slidear" method="post" enctype="multipart/form-data">
                                        @csrf
                                        
                                        <div class="card-body">
                                               <div class="form-group col-12">
                                                          <label for="exampleInputTitleAr">@lang('site.title')</label>
                                                          <input type="text" max="255" required name="title" value="{{old('title')}}" class="form-control" id="exampleInputTitleAr" placeholder="@lang('site.Enter') @lang('site.title')">
                                                          @error('title')
                                                          <label class="alert alert-danger ">{{$message}}</label>
                                                          @enderror
                                                </div>
                                                <div class="form-group col-12">
                                                          <label for="exampleInputdescriptionAr">@lang('site.description')</label>
                                                          <input type="text" max="255" required name="description" value="{{old('description')}}" class="form-control" id="exampleInputdescriptionAr" placeholder="@lang('site.Enter') @lang('site.description')">
                                                          @error('description')
                                                          <label class="alert alert-danger ">{{$message}}</label>
                                                          @enderror
                                                </div>
                                                <div class="form-group">
                                                  <label for="customFile">@lang('site.image')</label>
                                                    <div class="custom-file">
                                                      <input type="file" name="image" class="custom-file-input btn-primary" id="customFile">
                                                      <label class="custom-file-label" for="customFile">@lang('site.choose')</label>
                                                    </div>
                                                    @error('image')
                                                    <label class="alert alert-danger ">{{$message}}</label>
                                                    @enderror
                                                </div>
                                              
                                        </div>
                                        <!-- /.card-body -->
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
<script>
$(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      alert( "Form successful submitted!" );
    }
  });
  $('#quickForm').validate({
    rules: {
      title: {
        required: true,
      },
      icon: {
        required: true,
        extension:'jpg'
      },
    },
    messages: {
      title: {
        required: "@lang('site.title required')",
      },
      title: {
        required: "@lang('site.image required')",
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