@extends('admin.layouts.app')
@section('style')
<!-- summernote -->
<link rel="stylesheet" href="{{url('/')}}/public/admin/plugins/summernote/summernote-bs4.css">
<style>
img{
    max-width:100%;
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
                <h1>@lang('site.site_info')</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('/')}}/admin">@lang('site.dashboard')</a></li>
                  <li class="breadcrumb-item active"><a href="#">@lang('site.site_info')</a></li>
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
                                        <h3 class="card-title">@lang('site.update') <small>@lang('site.site_info')</small></h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <form id="quickForm" action="{{route('update_info')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="card-body">
                                            <div class="row">
                                                    <div class="form-group col-12">
                                                        <label for="exampleInputNameAr">@lang('site.name')</label>
                                                        <input type="text" name="name" value="{{$info->name}}"  class="form-control" id="exampleInputNameAr" placeholder="@lang('site.Enter') @lang('site.name')">
                                                        @error('name')
                                                        <label class="alert alert-danger ">{{$message}}</label>
                                                        @enderror
                                                    </div>
                                              
                                                    <div class="form-group col-12">
                                                        <label for="exampleInputDescAr">@lang('site.description')</label>
                                                        <textarea name="description" class="form-control" id="exampleInputDescAr">{{$info->description}}</textarea>
                                                        @error('description')
                                                        <label class="alert alert-danger ">{{$message}}</label>
                                                        @enderror
                                                    </div>
                                                
                                            </div>
                                            <!--=======================address======================-->
                                            <div class="row">
                                               <div class="form-group col-12">
                                                    <label for="exampleInputAddressAr">@lang('site.address')</label>
                                                    <input type="text" name="address" value="{{$info->address}}"  class="form-control" id="exampleInputAddressAr" placeholder="@lang('site.Enter') @lang('site.address')">
                                                    @error('address')
                                                    <label class="alert alert-danger ">{{$message}}</label>
                                                    @enderror
                                                </div>
                                              
                                            </div>
                                            <hr>
                                            <div class="row">
                                                   <div class="form-group col-12">
                                                        <label for="exampleInputHint1Ar">@lang('site.hint1')</label>
                                                        <input type="text" name="hint1" value="{{$info->hint1}}"  class="form-control" id="exampleInputHint1Ar" placeholder="@lang('site.Enter') @lang('site.hint1')">
                                                        @error('hint1')
                                                        <label class="alert alert-danger ">{{$message}}</label>
                                                        @enderror
                                                    </div>
                                                   
                                                    <div class="form-group col-12">
                                                        <label for="exampleInputHint2Ar">@lang('site.hint2')</label>
                                                        <input type="text" name="hint2" value="{{$info->hint2}}"  class="form-control" id="exampleInputHint2Ar" placeholder="@lang('site.Enter') @lang('site.hint2')">
                                                        @error('hint2')
                                                        <label class="alert alert-danger ">{{$message}}</label>
                                                        @enderror
                                                    </div>
                                                  
                                                  
                                                    <div class="row">
                                                    <div class="form-group col-12">
                                                      <label for="customFile">@lang('site.video')</label>
                                                        <div class="custom-file">
                                                          <input type="file" name="video" accept="video/*" class="custom-file-input btn-primary" id="customFile">
                                                          <label class="custom-file-label" for="customFile">@lang('site.choose')</label>
                                                        </div>
                                                        @if($info->video)
                                                          <video src="{{url('/')}}/{{$info->video}}" width="200px" loop="" muted="" autoplay=""></video>
                                                        @endif
                                                        @error('video')
                                                        <label class="alert alert-danger ">{{$message}}</label>
                                                        @enderror
                                                    </div>
                                                </div>
                                                  
                                                  
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="form-group col-12">
                                                  <label for="customFile">@lang('site.logo')</label>
                                                    <div class="custom-file">
                                                      <input type="file" name="logo" class="custom-file-input btn-primary" id="customFile">
                                                      <label class="custom-file-label" for="customFile">@lang('site.choose')</label>
                                                    </div>
                                                    @if($info->logo)
                                                      <img src="{{url('/')}}/{{$info->logo}}"/>
                                                    @endif
                                                    @error('logo')
                                                    <label class="alert alert-danger ">{{$message}}</label>
                                                    @enderror
                                                </div>
                                            </div>
                                             <div class="row">
                                                <div class="form-group col-12">
                                                  <label for="customFile">@lang('site.logo_footer')</label>
                                                    <div class="custom-file">
                                                      <input type="file" name="logo_footer" class="custom-file-input btn-primary" id="customFile">
                                                      <label class="custom-file-label" for="customFile">@lang('site.choose')</label>
                                                    </div>
                                                    @if($info->logo_footer)
                                                      <img src="{{url('/')}}/{{$info->logo_footer}}"/>
                                                    @endif
                                                    @error('logo_footer')
                                                    <label class="alert alert-danger ">{{$message}}</label>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-12">
                                                  <label for="customFile">@lang('site.icon')</label>
                                                    <div class="custom-file">
                                                      <input type="file" name="icon" class="custom-file-input btn-primary" id="customFile">
                                                      <label class="custom-file-label" for="customFile">@lang('site.choose')</label>
                                                    </div>
                                                    @if($info->icon)
                                                      <img src="{{url('/')}}/{{$info->icon}}"/>
                                                    @endif
                                                    @error('icon')
                                                    <label class="alert alert-danger ">{{$message}}</label>
                                                    @enderror
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                    <div class="form-group col-12">
                                                            <label for="exampleInputEmail">@lang('site.email')</label>
                                                            <input type="text" name="email" value="{{$info->email}}"  class="form-control" id="exampleInputEmail" placeholder="@lang('site.Enter title')">
                                                            @error('email')
                                                            <label class="alert alert-danger ">{{$message}}</label>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-12">
                                                            <label for="exampleInputphone">@lang('site.phone')</label>
                                                            <input type="tel" name="phone" value="{{$info->phone}}"  class="form-control" id="exampleInputphone" placeholder="@lang('site.Enter') @lang('site.phone')">
                                                            @error('phone')
                                                            <label class="alert alert-danger ">{{$message}}</label>
                                                            @enderror
                                                    </div>
                                                    <div class="form-group col-12">
                                                            <label for="exampleInputwhatsapp_phone">@lang('site.whatsapp_phone')</label>
                                                            <input type="tel" name="whatsapp_phone" value="{{$info->whatsapp_phone}}"  class="form-control" id="exampleInputwhatsapp_phone" placeholder="@lang('site.Enter') @lang('site.whatsapp_phone')">
                                                            @error('whatsapp_phone')
                                                            <label class="alert alert-danger ">{{$message}}</label>
                                                            @enderror
                                                    </div>
                                                    <div class="form-group col-12">
                                                            <label for="exampleInputFB">@lang('site.fb')</label>
                                                            <input type="url" name="fb" value="{{$info->fb}}"  class="form-control" id="exampleInputFB" placeholder="@lang('site.Enter') @lang('site.fb')">
                                                            @error('fb')
                                                            <label class="alert alert-danger ">{{$message}}</label>
                                                            @enderror
                                                    </div>
                                                    <div class="form-group col-12">
                                                            <label for="exampleInputInst">@lang('site.inst')</label>
                                                            <input type="url" name="inst" value="{{$info->inst}}"  class="form-control" id="exampleInputInst" placeholder="@lang('site.Enter') @lang('site.inst')">
                                                            @error('inst')
                                                            <label class="alert alert-danger ">{{$message}}</label>
                                                            @enderror
                                                    </div>
                                                    <!-- <div class="form-group col-12">
                                                            <label for="exampleInputTw">@lang('site.tw')</label>
                                                            <input type="url" name="tw" value="{{$info->tw}}"  class="form-control" id="exampleInputTw" placeholder="@lang('site.Enter') @lang('site.tw')">
                                                            @error('tw')
                                                            <label class="alert alert-danger ">{{$message}}</label>
                                                            @enderror
                                                    </div> -->
                                                    <!-- <div class="form-group col-12">
                                                            <label for="exampleInputsnap">@lang('site.snapchat')</label>
                                                            <input type="url" name="snapchat" value="{{$info->snapchat}}"  class="form-control" id="exampleInputsnap" placeholder="@lang('site.Enter') @lang('site.snapchat')">
                                                            @error('snapchat')
                                                            <label class="alert alert-danger ">{{$message}}</label>
                                                            @enderror
                                                    </div> -->
                                                     <div class="form-group col-12">
                                                            <label for="exampleInputYoutube">@lang('site.youtube')</label>
                                                            <input type="url" name="youtube" value="{{$info->youtube}}"  class="form-control" id="exampleInputYoutube" placeholder="@lang('site.Enter') @lang('site.youtube')">
                                                            @error('youtube')
                                                            <label class="alert alert-danger ">{{$message}}</label>
                                                            @enderror
                                                    </div>
                                                  <!--  <div class="form-group col-12">
                                                            <label for="exampleInputlinkedin">@lang('site.linkedin')</label>
                                                            <input type="url" name="linkedin" value="{{$info->linkedin}}"  class="form-control" id="exampleInputlinkedin" placeholder="@lang('site.Enter') @lang('site.linkedin')">
                                                            @error('linkedin')
                                                            <label class="alert alert-danger ">{{$message}}</label>
                                                            @enderror
                                                    </div> -->
                                                  
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
@endsection