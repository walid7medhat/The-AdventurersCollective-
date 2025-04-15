@extends('admin.layouts.app')
@section('style')
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
                <h1>@lang('site.about_us')</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('/')}}/admin">@lang('site.dashboard')</a></li>
                  <li class="breadcrumb-item active"><a href="#">@lang('site.about_us')</a></li>
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
                                        <h3 class="card-title">@lang('site.update') <small>@lang('site.about_us')</small></h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <form id="quickForm" action="{{route('update_about')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="card-body">
                                            <div class="row">
                                               <div class="form-group col-6">
                                                  <label for="customFile">@lang('site.image')</label>
                                                    <div class="custom-file">
                                                      <input type="file" name="live_you_adventure_image" class="custom-file-input btn-primary" id="customFile">
                                                      <label class="custom-file-label" for="customFile">@lang('site.choose')</label>
                                                    </div>
                                                    @if($about->live_you_adventure_image)
                                                    <div class="row">
                                                            <div class="col-2 ">
                                                                    <img src="{{url('/')}}/{{$about->live_you_adventure_image}}" style="width:100%;height:100px"/>
                                                            </div>
                                                    </div>
                                                    @endif
                                                    @error('live_you_adventure_image')
                                                    <label class="alert alert-danger ">{{$message}}</label>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-6">
                                                    <label>LIVE YOUR ADVENTURE</label>
                                                    <textarea class="form-control summernote" name="live_you_adventure" id="form-control summernote">
                                                            <?php echo $about->live_you_adventure?>
                                                    </textarea>
                                                    @error('live_you_adventure')
                                                         <span class="alert alert-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                             
                                            </div>
                                            <div class="row">
                                               <div class="form-group col-6">
                                                  <label for="customFile">@lang('site.image')</label>
                                                    <div class="custom-file">
                                                      <input type="file" name="image" class="custom-file-input btn-primary" id="customFile">
                                                      <label class="custom-file-label" for="customFile">@lang('site.choose')</label>
                                                    </div>
                                                    @if($about->image)
                                                    <div class="row">
                                                            <div class="col-2 ">
                                                                    <img src="{{url('/')}}/{{$about->image}}" style="width:100%;height:100px"/>
                                                            </div>
                                                    </div>
                                                    @endif
                                                    @error('image')
                                                    <label class="alert alert-danger ">{{$message}}</label>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-6">
                                                    <label>Why we do what we do 1</label>
                                                    <textarea class="form-control summernote" name="message" id="form-control summernote">
                                                            <?php echo $about->message?>
                                                    </textarea>
                                                    @error('message')
                                                         <span class="alert alert-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                             
                                            </div>
                                            <div class="row">
                                            <div class="form-group col-6">
                                                  <label for="customFile">@lang('site.image') 2</label>
                                                    <div class="custom-file">
                                                      <input type="file" name="image2" class="custom-file-input btn-primary" id="customFile">
                                                      <label class="custom-file-label" for="customFile">@lang('site.choose')</label>
                                                    </div>
                                                  
                                                    @error('image2')
                                                    <label class="alert alert-danger ">{{$message}}</label>
                                                    @enderror
                                                    @if($about->image2)
                                                    <div class="row">
                                                            <div class="col-2 ">
                                                                    <img src="{{url('/')}}/{{$about->image2}}" style="width:100%;height:100px"/>
                                                            </div>
                                                    </div>
                                                    @endif
                                                </div>
                                                <div class="form-group col-6">
                                                    <label>Why we do what we do 2</label>
                                                    <textarea class="form-control summernote" name="vision" id="form-control summernote">
                                                            <?php echo $about->vision?>
                                                    </textarea>
                                                    @error('vision')
                                                         <span class="alert alert-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                               
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-6">
                                                  <label for="customFile">@lang('site.image')3</label>
                                                    <div class="custom-file">
                                                      <input type="file" name="image3" class="custom-file-input btn-primary" id="customFile">
                                                      <label class="custom-file-label" for="customFile">@lang('site.choose')</label>
                                                    </div>
                                                    @if($about->image3)
                                                    <div class="row">
                                                            <div class="col-2 ">
                                                                    <img src="{{url('/')}}/{{$about->image3}}" style="width:100%;height:100px"/>
                                                            </div>
                                                    </div>
                                                    @endif
                                                    @error('image3')
                                                    <label class="alert alert-danger ">{{$message}}</label>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-6">
                                                    <label>Why we do what we do 3</label>
                                                    <textarea class="form-control summernote" name="objective" id="form-control summernote">
                                                            <?php echo $about->objective?>
                                                    </textarea>
                                                    @error('objective')
                                                         <span class="alert alert-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                           
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-12">
                                                    <label>The Urge to Explore, Takes Us to the Farthest Reaches</label>
                                                    <textarea class="form-control summernote" name="description" id="form-control summernote">
                                                            <?php echo $about->description?>
                                                    </textarea>
                                                    @error('description')
                                                         <span class="alert alert-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                           
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-12">
                                                    <label>  Curate A Personal Expedition</label>
                                                    <textarea class="form-control summernote" name="expedition" id="form-control summernote">
                                                            <?php echo $about->expedition?>
                                                    </textarea>
                                                    @error('expedition')
                                                         <span class="alert alert-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                           
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

<!-- Summernote -->
<script src="{{url('/')}}/public/admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- Page specific script -->
<script>
  // $(function () {
  //   // Summernote
  //   $('.summernote').summernote()

  //   // CodeMirror
  //   CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
  //     mode: "htmlmixed",
  //     theme: "monokai"
  //   });
  // })
  tinymce.init({
  selector: '.summernote',
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