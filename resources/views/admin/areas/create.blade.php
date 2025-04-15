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
                <h1>@lang('site.create') @lang('site.area')</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('/')}}/admin">@lang('site.dashboard')</a></li>
                  <li class="breadcrumb-item "><a href="{{url('/')}}/admin/areas">@lang('site.areas')</a></li>
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
                                        <h3 class="card-title">@lang('site.create') <small>@lang('site.area') @lang('site.new')</small></h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <form id="quickForm" action="{{url('/')}}/admin/areas" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="parent_id" value="{{$parent}}"/>
                                        <div class="card-body">
                                                 <div class="form-group">
                                                    <label for="exampleInputName">@lang('site.name')</label>
                                                    <input type="text" name="name" value="{{old('name')}}"  class="form-control" id="exampleInputName" placeholder="@lang('site.Enter') @lang('site.name')">
                                                    @error('name')
                                                    <label class="alert alert-danger ">{{$message}}</label>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputtitle">@lang('site.title')</label>
                                                    <input type="text" name="title" value="{{old('title')}}"  class="form-control" id="exampleInputtitle" placeholder="@lang('site.Enter') @lang('site.title')">
                                                    @error('title')
                                                    <label class="alert alert-danger ">{{$message}}</label>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-12">
                                                    <label for="exampleInputDescAr">@lang('site.description')</label>
                                                    <textarea type="text" name="description" value="{{old('description')}}" class="form-control" id="exampleInputDescAr" placeholder="@lang('site.Enter') @lang('site.description')">{{old('description')}}</textarea>
                                                    @error('description')
                                                    <label class="alert alert-danger ">{{$message}}</label>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputtitle2">@lang('site.title')2</label>
                                                    <input type="text" name="title2" value="{{old('title2')}}"  class="form-control" id="exampleInputtitle2" placeholder="@lang('site.Enter') @lang('site.title2')">
                                                    @error('title2')
                                                    <label class="alert alert-danger ">{{$message}}</label>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-12">
                                                    <label for="exampleInputDescAr2">@lang('site.description')2</label>
                                                    <textarea type="text" name="description2" value="{{old('description2')}}" class="form-control" id="exampleInputDescAr2" placeholder="@lang('site.Enter') @lang('site.description')2">{{old('description2')}}</textarea>
                                                    @error('description2')
                                                    <label class="alert alert-danger ">{{$message}}</label>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-12">
                                                        <label for="customFile">@lang('site.video')</label>
                                                          <div class="custom-file">
                                                            <input type="file" required name="video"accept="video/*"  class="custom-file-input btn-primary" id="customFile">
                                                            <label class="custom-file-label" for="customFile">@lang('site.choose')</label>
                                                          </div>
                                                          @error('video')
                                                          <label class="alert alert-danger ">{{$message}}</label>
                                                          @enderror
                                                      
                                                </div>
                                               <div class="form-group col-12">
                                                        <label for="customFile">image</label>
                                                          <div class="custom-file">
                                                            <input type="file"  name="image"accept="image/*"  class="custom-file-input btn-primary" id="customFile">
                                                            <label class="custom-file-label" for="customFile">@lang('site.choose')</label>
                                                          </div>
                                                          @error('image')
                                                          <label class="alert alert-danger ">{{$message}}</label>
                                                          @enderror
                                                      
                                                </div>
                                               <!--   <div class="form-group">
                                                    <label for="exampleInputlink_video">@lang('site.link_video')</label>
                                                    <input type="url" name="link_video" value="{{old('link_video')}}"  class="form-control" id="exampleInputlink_video" placeholder="@lang('site.Enter') @lang('site.link_video')">
                                                    @error('link_video')
                                                    <label class="alert alert-danger ">{{$message}}</label>
                                                    @enderror
                                                </div>

                                                <div class="form-group col-12">
                                                        <label for="customFile">@lang('site.images')</label>
                                                          <div class="custom-file">
                                                            <input type="file" name="images[]"accept="image/*" max="1" multiple class="custom-file-input btn-primary" id="customFile">
                                                            <label class="custom-file-label" for="customFile">@lang('site.choose')</label>
                                                          </div>
                                                          @error('images')
                                                          <label class="alert alert-danger ">{{$message}}</label>
                                                          @enderror
                                                          @error('images.*')
                                                          <label class="alert alert-danger ">{{$message}}</label>
                                                          @enderror
                                                      </div> -->
                                            
                                              
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