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
                <h1>@lang('site.posts')</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('/')}}/admin">@lang('site.dashboard')</a></li>
                  <li class="breadcrumb-item active">@lang('site.posts')</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6">
                    @permission('delete_posts')
                      <a  class="btn btn-danger text-white float-left delete_all_btn">@lang('site.Delete All')</a>
                    @endpermission
                  </div>
                  <div class="col-md-6">
                    @permission('create_posts')
                      <a href="{{url('/')}}/admin/posts/create" class="btn btn-info text-white float-right">@lang('site.create new')</a>
                    @endpermission
                  </div>    
                </div>
                <div class="row">
                     <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped table-hover">
                  <thead class="alert alert-primary">
                  <tr>
                    <th><input type="checkbox"  class="delete_all"/></th>
                    <th>#</th>
                    <th>@lang('site.title')</th>
                   
                    @permission('active_posts')
                      <th>@lang('site.active')</th>
                    @endpermission
                    <th>@lang('site.created_at')</th>
                    <th>@lang('site.actions')</th>
                  </tr>
                  </thead>
                  <tbody>
                      @foreach($posts as $i=>$post)
                             <tr class="delete{{$post->id}}">
                                 <td class="delete_input"><input type="checkbox" value="{{$post->id}}" name="delete[]"/></td>
                                 <td>{{$post->id}}</td>
                                 <td>{{$post->title}}</td>
                            
                                 @permission('active_posts')
                                  <td>
                                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                      <input type="checkbox" value="{{$post->active}}" class="custom-control-input active" data-id="{{$post->id}}" id="customSwitch{{$i}}" {{$post->active==1?'checked':''}}>
                                      <label class="custom-control-label" for="customSwitch{{$i}}"></label>
                                    </div>
                                  </td>
                                 @endpermission
                                 <td>{{$post->created_at->year}}-{{$post->created_at->month}}-{{$post->created_at->day}}</td>
                                 <td>
                                 @permission('delete_posts')
                                  <a class="btn btn-danger delete" data-id="{{$post->id}}"><i class="fa fa-trash text-white"></i></a>
                                 @endpermission
                                 @permission('update_posts')
                                 <a href="{{url('/')}}/admin/posts/{{$post->id}}/edit" class="btn btn-primary update" data-id="{{$post->id}}"><i class="fa fa-pen text-white"></i></a> 
                                 @endpermission
                                 @permission('browse_posts')
                                 <a href="{{url('/')}}/admin/posts/{{$post->id}}" class="btn btn-info info" data-id="{{$post->id}}"><i class="fa fa-info text-white"></i></a> 
                                 <!-- <iframe src="https://www.facebook.com/plugins/like.php?href={{url('/')}}/admin/posts/{{ $post->id }}&width=450&layout=standard&action=like&size=large&share=true&height=35&appId=1234811234" width="450" height="35" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe> -->

                                 @endpermission
                                </td>
                            </tr>
                      @endforeach
                  </tbody>
                  
                </table>
              </div>
                </div>
            </div>
        </section>
  </div>
  @foreach($posts as $i=>$post)
      <div class="modal fade" id="reason{{$post->id}}">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">@lang('site.reason for un active')</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <input type="text" name="reason{{$post->id}}" class="form-control" placehoder="@lang('site.Enter') @lang('site.reason for un active')"/>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">@lang('site.cancel')</button>
                  <button type="button" class="btn btn-primary saveReason" data-id="{{$post->id}}">@lang('site.save')</button>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
   @endforeach
@endsection
@section('script')

<!-- DataTables  & Plugins -->
<script src="{{url('/')}}/public/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{url('/')}}/public/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{url('/')}}/public/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{url('/')}}/public/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{url('/')}}/public/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{url('/')}}/public/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{url('/')}}/public/admin/plugins/jszip/jszip.min.js"></script>
<script src="{{url('/')}}/public/admin/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{url('/')}}/public/admin/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{url('/')}}/public/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{url('/')}}/public/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{url('/')}}/public/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons":{
            dom: {
            button: {
                className: 'btn btn-outline-primary mr-2' //Primary class for all buttons
            }
        },
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
      },
      
      stateSave: true,
        stateSaveCallback: function(settings,data) {
            localStorage.setItem( 'DataTables_' + settings.sInstance, JSON.stringify(data) )
        },
        stateLoadCallback: function(settings) {
            return JSON.parse( localStorage.getItem( 'DataTables_' + settings.sInstance ) )
        }
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
   
  });
</script>
<!-- ===============================delete All====================== -->
<script>
  $(".delete_all").on('change',function(){
    if ($(this).is(':checked')) {
        $('.delete_input input').attr('checked', true);
    } else {
        $('.delete_input input').attr('checked', false);
    }
  });

  $(".delete_all_btn").on('click',function(){
    var searchIDs = $("td input:checkbox:checked").map(function(){
        return $(this).val();
        }).get();
        if(searchIDs.length >0){
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
                  url:"{{ url( '/admin/posts/delete_all')}}",
                  type:'post',
                  data:{ _token:"{{ csrf_token() }}",'ids':searchIDs},
                  success:function(data){  
                      Swal.fire({
                      position: 'center',
                      icon: 'success',
                      title: "@lang('site.recored deleted successfully.')",
                      showConfirmButton: false,
                      timer: 1500,
                      })
                      for(var i=0;i<searchIDs.length;i++){
                        $(".delete"+searchIDs[i]).remove();
                         };
                      
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
        }
            else{
                Swal.fire({
            icon: 'error',
            title: '@lang("site.no records selected !")',
            text: '@lang("site.select record to delete it")',
            })
        }
        });
</script>

<!-- =================================delete =========================== -->

<script>

    $('.delete').on('click',function(){
            
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
                      url:"{{ url( '/admin/posts') . '/' }}" + id,
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
                          $(".delete"+id).remove();
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
<!-- ================================active====================== -->

<script>
   $('.active').on('click',function(){
            
            var id = $(this).attr('data-id');
            if($(this).prop('checked')==false)
            {
              $('#reason'+id).modal();
            }else{
                active(id);
            }
         
    });
    $(".saveReason").on('click',function(){
        var id = $(this).attr('data-id');
        active(id);
        $('#reason'+id).modal('hide');
    });
  
   function active(id){
    var reason=$("input[name='reason"+id+"']").val();
    console.log(reason);
            $.ajax({
                      url:"{{ url( '/admin/posts/active') . '/' }}" + id,
                      type:'get',
                      data:{ _token:"{{ csrf_token() }}",'reason':reason },
                      success:function(data){ 
                          console.log(data);
                          Swal.fire({
                          position: 'center',
                          icon: 'success',
                          title: "@lang('site.recored updated successfully.')",
                          showConfirmButton: false,
                          timer: 1500,
                          })
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

</script>

@endsection