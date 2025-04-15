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
                <h1>{{$post->title}}</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('/')}}/admin">@lang('site.dashboard')</a></li>
                  <li class="breadcrumb-item "><a href="{{url('/')}}/admin/posts">@lang('site.post')</a></li>
                  <li class="breadcrumb-item active">{{$post->title}}</li>
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
                                              <h3 class="card-title">@lang('site.main_info')</h3>
                                          </div>
                                          <!-- /.card-header -->
                                        
                                             <div class="card-body">
                                                  
                                                      <div class="form-group col-12">
                                                          <label for="exampleInputTitleAr">@lang('site.title')</label>
                                                          <input disabled type="text" name="title" value="{{$post->title}}" class="form-control" id="exampleInputTitleAr" placeholder="@lang('site.Enter') @lang('site.title')">
                                                          @error('title')
                                                          <label class="alert alert-danger ">{{$message}}</label>
                                                          @enderror
                                                      </div>
                                                      
                                                      <div class="form-group col-12">
                                                          <label for="exampleInputDescAr">@lang('site.description')</label>
                                                          <textarea disabled type="text" name="description" value="{{$post->description}}" class="form-control" id="exampleInputDescAr" placeholder="@lang('site.Enter') @lang('site.description')">{{$post->description}}</textarea>
                                                          @error('description')
                                                          <label class="alert alert-danger ">{{$message}}</label>
                                                          @enderror
                                                      </div>
                                                     
                                                   
                                                     
                                                      
                                                      <div class="form-group col-12">
                                                          <label for="categories">@lang('site.categories')</label>
                                                          <select name="category_id"  readonly disabled class="form-control" id="categories" placeholder="@lang('site.Enter') @lang('site.category_id')">
                                                                  <option disabled >@lang('site.choose')</option>
                                                                  @foreach($categories as $category)
                                                                  <option value="{{$category->id}}" value="{{$post->category_id==$category->id?'selected':''}}">{{$category->title}}</option>
                                                                  @endforeach
                                                          </select>
                                                          @error('category_id')
                                                          <label class="alert alert-danger ">{{$message}}</label>
                                                          @enderror
                                                      </div>
                                                      <div class="form-group col-12">
                                                          <label for="areas">@lang('site.areas')</label>
                                                          <select name="area_id" readonly disabled class="form-control" id="areas" placeholder="@lang('site.Enter') @lang('site.area_id')">
                                                                  <option disabled >@lang('site.choose')</option>
                                                                  @foreach($areas as $area)
                                                                  <option value="{{$area->id}}" value="{{$post->area_id==$area->id?'selected':''}}">{{$area->title}}</option>
                                                                  @endforeach
                                                          </select>
                                                          @error('area_id')
                                                          <label class="alert alert-danger ">{{$message}}</label>
                                                          @enderror
                                                      </div>
                                                      <div class="form-group col-12">
                                                          <label for="htmlEditor">Long Description</label>
                                                          <?php echo $post->description2; ?>
                                                      </div>
                                                      <div class="form-group col-12">
                                                        <label for="customFile2">image</label>
                                                          <div class="custom-file">
                                                            <input type="file"  name="image"accept="image/*"  class="custom-file-input btn-primary" id="customFile2">
                                                            <label class="custom-file-label" for="customFile2">@lang('site.choose')</label>
                                                          </div>
                                                          @if($post->image)
                                                           <img src="{{url('/')}}/{{$post->image}}" style="width:100%;height:100px"/>

                                                          @endif
                                                          @error('image')
                                                          <label class="alert alert-danger ">{{$message}}</label>
                                                          @enderror
                                                      
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputlink_video">@lang('site.link_video')</label>
                                                    <input type="url" name="link_video" value="{{$post->link_video}}"  class="form-control" id="exampleInputlink_video" placeholder="@lang('site.Enter') @lang('site.link_video')">
                                              
                                                     @error('link_video')
                                                    <label class="alert alert-danger ">{{$message}}</label>
                                                    @enderror
                                                </div>
                                                
                                            
                                                   
                                                      <div class="form-group col-12">
                                                        <label for="customFile">@lang('site.images')</label>
                                                        
                                                          <div class="row">
                                                            @foreach($post->images as $img)
                                                                <div class="col-2 delete-img{{$img->id}}">
                                                                        <img src="{{url('/')}}/{{$img->media}}" style="width:100%;height:100px"/>
                                                                </div>
                                                            @endforeach
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
  menubar: false,
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