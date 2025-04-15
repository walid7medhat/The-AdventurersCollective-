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
                <h1>@lang('site.update') {{$common_question->question}}</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('/')}}/admin">@lang('site.dashboard')</a></li>
                  <li class="breadcrumb-item "><a href="{{url('/')}}/admin/common_questions">@lang('site.common_question')</a></li>
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
             <form id="quickForm" class="col-12" action="{{url('/')}}/admin/common_questions/{{$common_question->id}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('Put')
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
                                                          <input type="text" name="question" value="{{$common_question->question}}" class="form-control" id="exampleInputquestionAr" placeholder="@lang('site.Enter') @lang('site.question')">
                                                          @error('question')
                                                          <label class="alert alert-danger ">{{$message}}</label>
                                                          @enderror
                                                      </div>
                                                  
                                                      <div class="form-group col-12">
                                                          <label for="exampleInputDescAr">@lang('site.answer')</label>
                                                          <textarea type="text" name="answer" value="{{$common_question->answer}}" class="form-control" id="exampleInputDescAr" placeholder="@lang('site.Enter') @lang('site.answer')">{{$common_question->answer}}</textarea>
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
                      url:"{{ url(app()->getLocale() . '/admin/common_questions/del/image') . '/' }}" + id,
                      type:'delete',
                      data:{ _token:"{{ csrf_token() }}" },
                      success:function(data){  
                        console.log(data);
                          Swal.fire({
                          position: 'center',
                          icon: 'success',
                          question: "@lang('site.recored deleted successfully.')",
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
                          question: "@lang('site.error')",
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
              question: '@lang("site.Are you sure?")',
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
                      url:"{{ url(app()->getLocale() . '/admin/common_questions/del/image') . '/' }}" + id,
                      type:'delete',
                      data:{ _token:"{{ csrf_token() }}" },
                      success:function(data){  
                        console.log(data);
                          Swal.fire({
                          position: 'center',
                          icon: 'success',
                          question: "@lang('site.recored deleted successfully.')",
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
                          question: "@lang('site.error')",
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