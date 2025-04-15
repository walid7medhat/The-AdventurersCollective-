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
                <h1>@lang('site.areas')</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('/')}}/admin">@lang('site.dashboard')</a></li>
                  <li class="breadcrumb-item active">@lang('site.areas')</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6">
                    @permission('delete_areas')
                      <a  class="btn btn-danger text-white float-left delete_all_btn">@lang('site.Delete All')</a>
                    @endpermission
                  </div>
                  <div class="col-md-6">
                    @permission('create_areas')
                       <a href="{{url('/')}}/admin/areas/create" class="btn btn-info text-white float-right">@lang('site.create new')</a>
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
                    <!-- <th>@lang('site.image')</th> -->
                    <th>@lang('site.title')</th>
                    <th>@lang('site.description')</th>
                    <th>@lang('site.created_at')</th>
                    <th>@lang('site.actions')</th>
                  </tr>
                  </thead>
                  <tbody>
                      @foreach($areas as $i=>$area)
                             <tr class="delete{{$area->id}}">
                                 <td><input type="checkbox" value="{{$area->id}}" name="delete[]"/></td>
                                 <!-- <td><img src="{{url('/'.$area->image)}}" /></td> -->
                                 <td>{{$area->title}}</td>
                                 <td>{{$area->description}}</td>
                                 <td>{{$area->created_at->year}}-{{$area->created_at->month}}-{{$area->created_at->day}}</td>
                                 <td>
                                 @permission('delete_areas')
                                   <a class="btn btn-danger delete" data-id="{{$area->id}}"><i class="fa fa-trash text-white"></i></a>
                                 @endpermission
                                 @permission('update_areas')
                                 <a href="{{url('/')}}/admin/areas/{{$area->id}}/edit" class="btn btn-primary update" data-id="{{$area->id}}"><i class="fa fa-pen text-white"></i></a> 
                                 @endpermission
                                 @permission('browse_areas')
                                  @if($parent==null)
                                   <!-- <a href="{{url('/')}}/admin/areas/?parent={{$area->id}}" class="btn btn-primary show" data-id="{{$area->id}}">@lang('site.cities')</a>  -->
                                  @endif
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
        $('td input').attr('checked', true);
    } else {
        $('td input').attr('checked', false);
    }
  });

  $(".delete_all_btn").on('click',function(){
    var searchIDs = $("td input:checkbox:checked").map(function(){
        return $(this).val();
        }).get();
        console.log(searchIDs);
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
                  url:"{{ url('/admin/areas/delete_all')}}",
                  type:'post',
                  data:{ _token:"{{ csrf_token() }}",'ids':searchIDs},
                  success:function(data){  
                    console.log(data);
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
                      url:"{{ url( '/admin/areas') . '/' }}" + id,
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


@endsection