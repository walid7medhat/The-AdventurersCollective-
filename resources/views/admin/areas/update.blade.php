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
                <h1>@lang('site.update') @lang('site.area')</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('/')}}/admin">@lang('site.dashboard')</a></li>
                  <li class="breadcrumb-item "><a href="{{url('/')}}/admin/areas">@lang('site.areas')</a></li>
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
                <h3 class="card-title">@lang('site.update') <small>@lang('site.area') {{$area->title}}</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" action="{{url('/')}}/admin/areas/{{$area->id}}" method="post" enctype="multipart/form-data">
                  @csrf
                  @method('Put')
                  <input type="hidden" name="parent_id" value="{{$area->parent_id}}"/>
                  <div class="card-body">
                      <div class="form-group">
                            <label for="exampleInputName">@lang('site.name')</label>
                            <input type="text" name="name" value="{{$area->name}}"  class="form-control" id="exampleInputName" placeholder="@lang('site.Enter') @lang('site.name')">
                            @error('name')
                            <label class="alert alert-danger ">{{$message}}</label>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="title">@lang('site.title')</label>
                            <input type="text" name="title" value="{{$area->title}}"  class="form-control" id="title" placeholder="@lang('site.Enter title')">
                            @error('title')
                            <label class="alert alert-danger ">{{$message}}</label>
                            @enderror
                        </div>
                        <div class="form-group col-12">
                          <label for="exampleInputDescAr">@lang('site.description')</label>
                          <textarea type="text" name="description" value="{{old('description')}}" class="form-control" id="exampleInputDescAr" placeholder="@lang('site.Enter') @lang('site.description')">{{$area->description}}</textarea>
                          @error('description')
                          <label class="alert alert-danger ">{{$message}}</label>
                          @enderror
                      </div>
                      <div class="form-group">
                            <label for="title22">@lang('site.title')2</label>
                            <input type="text" name="title2" value="{{$area->title2}}"  class="form-control" id="title22" placeholder="@lang('site.Enter') @lang('site.description')2">
                            @error('title2')
                            <label class="alert alert-danger ">{{$message}}</label>
                            @enderror
                        </div>
                        <div class="form-group col-12">
                          <label for="exampleInputDescAr2">@lang('site.description')2</label>
                          <textarea type="text" name="description2" value="{{old('description2')}}" class="form-control" id="exampleInputDescAr2" placeholder="@lang('site.Enter') @lang('site.description2')">{{$area->description2}}</textarea>
                          @error('description2')
                          <label class="alert alert-danger ">{{$message}}</label>
                          @enderror
                      </div>
                                              
                      
                
                    <div class="form-group col-12">
                                      <label for="customFile">@lang('site.video')</label>
                                        <div class="custom-file">
                                          <input type="file"  name="video"accept="video/*"  class="custom-file-input btn-primary" id="customFile">
                                          <label class="custom-file-label" for="customFile">@lang('site.choose')</label>
                                        </div>
                                        <video width="640" height="360" controls>
                                          <source src="{{url('/')}}/{{$area->video}}" type="video/mp4">
                                          <source src="{{url('/')}}/{{$area->video}}" type="video/webm">
                                          Your browser does not support the video tag.
                                        </video>
                                        @error('video')
                                        <label class="alert alert-danger ">{{$message}}</label>
                                        @enderror
                                    
                              </div>
                                                <div class="form-group col-12">
                                                        <label for="customFile2">image</label>
                                                          <div class="custom-file">
                                                            <input type="file"  name="image"accept="image/*"  class="custom-file-input btn-primary" id="customFile2">
                                                            <label class="custom-file-label" for="customFile2">@lang('site.choose')</label>
                                                          </div>
                                                          @if($area->image)
                                                           <img src="{{url('/')}}/{{$area->image}}" style="width:100%;height:100px"/>

                                                          @endif
                                                          @error('image')
                                                          <label class="alert alert-danger ">{{$message}}</label>
                                                          @enderror
                                                      
                                                </div>
                                          <!--       <div class="form-group">
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
                                                            @foreach($area->images as $img)
                                                                <div class="col-2 delete-img{{$img->id}}">
                                                                        <label class="del-image" data-id="{{$img->id}}"><i class="fas fa-times"></i></label>
                                                                        <img src="{{url('/')}}/{{$img->image}}" style="width:100%;height:100px"/>
                                                                </div>
                                                            @endforeach
                                                          </div>
                                                          @error('images')
                                                          <label class="alert alert-danger ">{{$message}}</label>
                                                          @enderror
                                                          @error('images.*')
                                                          <label class="alert alert-danger ">{{$message}}</label>
                                                          @enderror
                                                      </div> -->



                                              
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
                      url:"{{ url('/admin/areas/del/image') . '/' }}" + id,
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
@endsection