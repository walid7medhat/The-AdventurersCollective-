@extends('admin.layouts.app')
@section('style')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{url('/')}}/public/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{url('/')}}/public/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{url('/')}}/public/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{url('/')}}/public/admin/plugins/summernote/summernote-bs4.css">
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
                <h1>@lang('site.update') {{$post->title}}</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('/')}}/admin">@lang('site.dashboard')</a></li>
                  <li class="breadcrumb-item "><a href="{{url('/')}}/admin/posts">@lang('site.post')</a></li>
                  <li class="breadcrumb-item active">@lang('site.update')</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
             <!-- form start -->
             <form id="quickForm" class="col-12" action="{{url('/')}}/admin/posts/{{$post->id}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('Put')
                                        <input type="hidden" name="post_id" value="{{$post->id}}">
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
                                                          <input type="text" name="title" value="{{$post->title}}" class="form-control" id="exampleInputTitleAr" placeholder="@lang('site.Enter') @lang('site.title')">
                                                          @error('title')
                                                          <label class="alert alert-danger ">{{$message}}</label>
                                                          @enderror
                                                      </div>
                                                      
                                                      <div class="form-group col-12">
                                                          <label for="exampleInputDescAr">@lang('site.description')</label>
                                                          <textarea type="text" name="description" value="{{$post->description}}" class="form-control" id="exampleInputDescAr" placeholder="@lang('site.Enter') @lang('site.description')">{{$post->description}}</textarea>
                                                          @error('description')
                                                          <label class="alert alert-danger ">{{$message}}</label>
                                                          @enderror
                                                      </div>
                                                     
                                                      <div class="form-group col-12">
                                                          <label for="categories">@lang('site.categories')</label>
                                                          <select name="category_id"  class="form-control" id="categories" placeholder="@lang('site.Enter') @lang('site.category_id')">
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
                                                          <select name="area_id"  class="form-control" id="areas" placeholder="@lang('site.Enter') @lang('site.area_id')">
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
                                                          <textarea  name="description2" value="{{old('description2')}}" class="form-control" id="htmlEditor" placeholder="@lang('site.Enter') @lang('site.description')2">{!! $post->description2 !!}</textarea>
                                                          @error('description2')
                                                          <label class="alert alert-danger ">{{$message}}</label>
                                                          @enderror
                                                      </div>
                                                     
                                                    
                                                     
                                                      <div class="form-group col-12">
                                                        <label for="customFile2">image</label>
                                                          <div class="custom-file">
                                                            <input type="file"  name="image"accept="image/*"  class="custom-file-input btn-primary" id="customFile2">
                                                            <label class="custom-file-label" for="customFile2">@lang('site.choose')</label>
                                                          </div>
                                                          @if($post->video_Cover_image)
                                                           <img src="{{url('/')}}/{{$post->video_Cover_image}}" style="width:100%;height:100px"/>

                                                          @endif
                                                          @error('image')
                                                          <label class="alert alert-danger ">{{$message}}</label>
                                                          @enderror
                                                      
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputlink_video">@lang('site.link_video')</label>
                                                    <input type="url" name="link_video" value="{{$area->link_video}}"  class="form-control" id="exampleInputlink_video" placeholder="@lang('site.Enter') @lang('site.link_video')">
                                              
                                                     @error('link_video')
                                                    <label class="alert alert-danger ">{{$message}}</label>
                                                    @enderror
                                                </div>
                                                
                                                <div class="form-group col-12">
                                                        <label for="customFile">@lang('site.images')</label>
                                                          <div class="custom-file">
                                                            <input type="file" name="images[]"accept="image/*" multiple class="custom-file-input btn-primary" id="customFile">
                                                            <label class="custom-file-label" for="customFile">@lang('site.choose')</label>
                                                          </div>
                                                          <div class="row">
                                                            @foreach($post->images as $img)
                                                                <div class="col-2 delete-img{{$img->id}}">
                                                                        <label class="del-image" data-id="{{$img->id}}"><i class="fas fa-times"></i></label>
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
                          
                          <button type="submit" class="btn btn-primary">@lang('site.Submit')</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('script')


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
    var id=$(this).attr('data-id');
                      $.ajax({
                      url:"{{ url('/admin/posts/del/image') . '/' }}" + id,
                      type:'delete',
                      data:{ _token:"{{ csrf_token() }}" },
                      success:function(data){  
                        console.log(data);
                          Swal.fire({
                          position: 'center',
                          icon: 'success',
                          title: "@lang('site.recored deleted successfully.')",
                          showConfirmButton: false,
                          timer: 1500,
                          })
                          $(this).closest('.row').remove();
                      },
                      error:function(data){
                        console.log(data);
                          Swal.fire({
                          position: 'center',
                          icon: 'error',
                          title: "@lang('site.error')",
                          showConfirmButton: false,
                          timer: 1500,
                          })
                      
                      }
                  });
  });
</script>
<script>
$('.del-image').on('click',function(){
            
            var id = $(this).attr('data-id');
            console.log(id);
            Swal.fire({
              title: '@lang("site.Are you sure?")',
              text: '@lang("site.You will not be able to revert this!")',
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: '@lang("site.yes,delete it!")',
              cancelButtonText:'@lang("site.No, cancel!")',
              }).then((result) => {
                  if (result.isConfirmed) {
                      $.ajax({
                      url:"{{ url('/admin/posts/del/image') . '/' }}" + id,
                      type:'delete',
                      data:{ _token:"{{ csrf_token() }}" },
                      success:function(data){  
                        console.log(data);
                          Swal.fire({
                          position: 'center',
                          icon: 'success',
                          title: "@lang('site.recored deleted successfully.')",
                          showConfirmButton: false,
                          timer: 1500,
                          })
                          $(".delete-img"+id).remove();
                      },
                      error:function(data){
                        console.log(data);
                          Swal.fire({
                          position: 'center',
                          icon: 'error',
                          title: "@lang('site.error')",
                          showConfirmButton: false,
                          timer: 1500,
                          })
                      
                      }
                  });
              }
            });
    });
</script>
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