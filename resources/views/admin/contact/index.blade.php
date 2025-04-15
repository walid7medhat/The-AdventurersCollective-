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
                <h1>@lang('site.contact_us')</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('/')}}/admin">@lang('site.dashboard')</a></li>
                  <li class="breadcrumb-item active">@lang('site.contact_us')</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6">
                    @permission('delete_contact')
                      <a  class="btn btn-danger text-white float-left delete_all_btn">@lang('site.Delete All')</a>
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
                    <th>@lang('site.name')</th>
                    <th>@lang('site.email')</th>
                    <th>@lang('site.phone')</th>
                    <th>@lang('site.level_of_fitness')</th>
                    <th>@lang('site.budget')</th>
                    <!-- <th>@lang('site.stars')</th> -->
                    <th>@lang('site.created_at')</th>
                    <th>@lang('site.actions')</th>
                  </tr>
                  </thead>
                  <tbody>
                      @foreach($contacts as $i=>$contact)
                             <tr class="delete{{$contact->id}}">
                                 <td><input type="checkbox" value="{{$contact->id}}" name="delete[]"/></td>
                                 <td>{{$contact->name}}</td>
                                 <td>{{$contact->email}}</td>
                                 <td>{{$contact->phone}}</td>
                                 <!-- <td>{{$contact->star}}</td> -->
                                 <td>{{$contact->level_of_fitness}}</td>
                                 <td>{{$contact->budget}} $</td>

                                 <td>{{$contact->created_at->year}}-{{$contact->created_at->month}}-{{$contact->created_at->day}}</td>
                                 <td>
                                 @permission('delete_contact')
                                   <a class="btn btn-danger delete" data-id="{{$contact->id}}"><i class="fa fa-trash text-white"></i></a>
                                 @endpermission
                                 @permission('browse_contact')
                                 <a href="{{url('/')}}/admin/contact/{{$contact->id}}" class="btn btn-info info" data-id="{{$contact->id}}"><i class="fa fa-info text-white"></i></a> 
                                 @endpermission
                                 @permission('update_contact')
                                 @if($contact->read==0)
                                 <a href="{{url('/')}}/admin/contact/{{$contact->id}}/read" class="btn btn-primary " data-id="{{$contact->id}}"><i class="fa fa-eye text-white"></i></a>
                                 @endif
                                 @if($contact->active==0)
                                 <!-- <a href="{{url('/')}}/admin/contact/{{$contact->id}}/active" class="btn btn-success show" data-id="{{$contact->id}}">@lang('site.show as site rate')</a> -->
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
                  url:"{{ url( '/admin/contact/delete_all')}}",
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
                      url:"{{ url('/admin/contact') . '/' }}" + id,
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