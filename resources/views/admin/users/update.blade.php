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
                <h1>@lang('site.update') @lang('site.user')</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('/')}}/admin">@lang('site.dashboard')</a></li>
                  <li class="breadcrumb-item "><a href="{{url('/')}}/admin/users">@lang('site.users')</a></li>
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
                <h3 class="card-title">@lang('site.update') <small>@lang('site.user') {{$user->name}}</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" action="{{url('/')}}/admin/users/{{$user->id}}" method="post" enctype="multipart/form-data">
                  @csrf
                  @method('Put')
                  <input type="hidden" name="user_id" value="{{$user->id}}"/>
                  <div class="card-body">
                                                <div class="form-group">
                                                    <label for="exampleInputName">@lang('site.name')</label>
                                                    <input type="text" name="name" value="{{$user->name}}" class="form-control" id="exampleInputName" placeholder="@lang('site.Enter Name')">
                                                    @error('name')
                                                    <label class="alert alert-danger ">{{$message}}</label>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                  <label for="customFile">@lang('site.image')</label>
                                                    <div class="custom-file">
                                                      <input type="file" name="avatar" class="custom-file-input btn-primary" id="customFile">
                                                      <label class="custom-file-label" for="customFile">@lang('site.choose')</label>
                                                    </div>
                                                    @if($user->avatar)
                                                         <img src="{{url('/')}}/{{$user->avatar}}" style="max-width:100px"/>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail">@lang('site.email')</label>
                                                    <input type="email" name="email" value="{{$user->email}}" class="form-control" id="exampleInputEmail" placeholder="@lang('site.Enter Email')">
                                                    @error('email')
                                                    <label class="alert alert-danger ">{{$message}}</label>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputphone">@lang('site.phone')</label>
                                                    <input type="text" name="phone" value="{{$user->phone}}" class="form-control phone" id="exampleInputphone" placeholder="@lang('site.Enter Phone')">
                                                    @error('phone')
                                                    <label class="alert alert-danger ">{{$message}}</label>
                                                    @enderror                                       
                                                </div>
                                             
                                                <div class="form-group">
                                                    <label for="exampleInputRole">@lang('site.role')</label>
                                                    <select name="role" class="form-control" {{$user->id==1?'disabled':''}}>
                                                      <option selected disabled >@lang('site.choose role')</option>
                                                      @foreach($roles as $role)
                                                       <option value="{{$role->id}}" {{$user->hasRole($role->name)?'selected':''}}>{{$role->name}}</option>
                                                      @endforeach
                                                    </select>
                                                    @error('role')
                                                    <label class="alert alert-danger ">{{$message}}</label>
                                                    @enderror
                                                </div>
                                                @if(auth()->user()->id==$user->id)
                                                <div class="form-group">
                                                    <label for="exampleInputPassword">@lang('site.password')</label>
                                                    <input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="@lang('site.Enter Password')">
                                                    @error('password')
                                                    <label class="alert alert-danger ">{{$message}}</label>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword">@lang('site.confirm password')</label>
                                                    <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword" placeholder="@lang('site.Enter Password')">
                                                </div>
                                                @endif
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