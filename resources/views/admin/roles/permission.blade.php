@extends('admin.layouts.app')
@section('style')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{url('/')}}/public/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{url('/')}}/public/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{url('/')}}/public/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{url('/')}}/public/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  @endsection

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
       <!-- Content Header (Page header) -->
       <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>@lang('site.Permissions')</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('/')}}">@lang('site.dashboard')</a></li>
                  <li class="breadcrumb-item "><a href="{{url('/')}}/admin/roles">@lang('site.roles')</a></li>
                  <li class="breadcrumb-item "><a href="{{url('/')}}/admin/roles/{{$role->id}}/edit">{{$role->name}}</a></li>
                  <li class="breadcrumb-item active">@lang('site.Permissions')</li>
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
                                        <h3 class="card-title">@lang('site.Permissions') <small>{{$role->name}}</small></h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <form id="quickForm" action="{{url('/')}}/admin/roles/{{$role->id}}/permissions" method="post" enctype="multipart\form-date">
                                        @csrf
                                        <div class="card-body">
                                        @foreach($permissions as $i=>$permission)
                                         <div class="form-group">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" name="permission[]" {{$role->permissions->contains($permission)?'checked':''}} value="{{$permission->id}}" id="exampleInputPermission{{$i}}">
                                                <label for="exampleInputPermission{{$i}}">{{$permission->display_name}}</label>
                                            </div>
                                          </div>
                                        @endforeach
                                        
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
@endsection