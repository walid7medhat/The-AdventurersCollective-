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
                <h1>@lang('site.create') @lang('site.posts')</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('/')}}/admin">@lang('site.dashboard')</a></li>
                  <li class="breadcrumb-item "><a href="{{url('/')}}/admin/posts">@lang('site.posts')</a></li>
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
                    <form id="quickForm" class="col-12" action="{{url('/')}}/admin/posts" method="post" enctype="multipart/form-data">
                                        @csrf
                              <!-- left column -->
                          <div class="col-12">
                                  <!-- jquery validation -->
                                  <div class="card card-primary">
                                          <div class="card-header">
                                              <h3 class="card-title">@lang('site.main_info')</h3>
                                          </div>
                                          <!-- /.card-header -->
                                        <input type="hidden" name="user_id" value="{{auth()->user()->id}}"/>
                                              <div class="card-body">
                                                   
                                                      <div class="form-group col-12">
                                                          <label for="exampleInputTitleAr">@lang('site.title')</label>
                                                          <input type="text" name="title" value="{{old('title')}}" class="form-control" id="exampleInputTitleAr" placeholder="@lang('site.Enter') @lang('site.title')">
                                                          @error('title')
                                                          <label class="alert alert-danger ">{{$message}}</label>
                                                          @enderror
                                                      </div>
                                                     
                                                      <div class="form-group col-12">
                                                          <label for="exampleInputDescAr">@lang('site.short_description')</label>
                                                          <textarea type="text" name="description" value="{{old('description')}}" class="form-control" id="exampleInputDescAr" placeholder="@lang('site.Enter') @lang('site.description')">{{old('description')}}</textarea>
                                                          @error('description')
                                                          <label class="alert alert-danger ">{{$message}}</label>
                                                          @enderror
                                                      </div>
                                                      <!-- <div class="form-group col-12">
                                                        <label for="customFile">@lang('site.banner_video')</label>
                                                          <div class="custom-file">
                                                            <input type="file" name="videos[]"accept="video/*" max="1" multiple class="custom-file-input btn-primary" id="customFile">
                                                            <label class="custom-file-label" for="customFile">@lang('site.choose')</label>
                                                          </div>
                                                          @error('videos')
                                                          <label class="alert alert-danger ">{{$message}}</label>
                                                          @enderror
                                                          @error('videos.*')
                                                          <label class="alert alert-danger ">{{$message}}</label>
                                                          @enderror
                                                      </div>
                                                     -->

                                                    
                                                      <div class="form-group col-12">
                                                          <label for="categories">@lang('site.categories')</label>
                                                          <select name="category_id"  class="form-control" id="categories" placeholder="@lang('site.Enter') @lang('site.category_id')">
                                                                  <option disabled selected>@lang('site.choose')</option>
                                                                  @foreach($categories as $category)
                                                                  <option value="{{$category->id}}" value="{{old('category_id')==$category->id?'selected':''}}">{{$category->title}}</option>
                                                                  @endforeach
                                                          </select>
                                                          @error('category_id')
                                                          <label class="alert alert-danger ">{{$message}}</label>
                                                          @enderror
                                                      </div>
                                                      <div class="form-group col-12">
                                                          <label for="areas">@lang('site.areas')</label>
                                                          <select name="area_id"  class="form-control" id="areas" placeholder="@lang('site.Enter') @lang('site.area_id')">
                                                                  <option disabled selected>@lang('site.choose')</option>
                                                                  @foreach($areas as $area)
                                                                  <option value="{{$area->id}}" value="{{old('area_id')==$area->id?'selected':''}}">{{$area->title}}</option>
                                                                  @endforeach
                                                          </select>
                                                          @error('area_id')
                                                          <label class="alert alert-danger ">{{$message}}</label>
                                                          @enderror
                                                      </div>
                                                  
                                                    <!-- <div class="form-group col-12">
                                                          <label for="exampleInputTitle2">@lang('site.title')2</label>
                                                          <input type="text" name="title2" value="{{old('title2')}}" class="form-control" id="exampleInputTitle2" placeholder="@lang('site.Enter') @lang('site.title')2">
                                                          @error('title2')
                                                          <label class="alert alert-danger ">{{$message}}</label>
                                                          @enderror
                                                      </div>
                                                      -->
                                                      <div class="form-group col-12">
                                                          <label for="htmlEditor">Long Description</label>
                                                          <textarea  name="description2" value="{{old('description')}}" class="form-control" id="htmlEditor" placeholder="@lang('site.Enter') @lang('site.description')2">{{old('description2')}}</textarea>
                                                          @error('description2')
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
                                                      <div class="form-group">
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
<script>
tinymce.init({
  selector: '#htmlEditor',
  plugins: 'advlist autolink lists link image charmap preview anchor',
  toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
  menubar: true,
  height: 300,
  setup: function(editor) {
    editor.on('change', function() {
      // Get HTML content when editor changes
      console.log(editor.getContent());
    });
  }
});
</script>



@endsection