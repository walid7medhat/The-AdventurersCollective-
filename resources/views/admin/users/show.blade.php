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
                <h1>{{$user->name}}</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('/')}}/admin">@lang('site.dashboard')</a></li>
                  <li class="breadcrumb-item "><a href="{{url('/')}}/admin/users">@lang('site.users')</a></li>
                  <li class="breadcrumb-item active">{{$user->name}}</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">

                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                          <div class="card-body box-profile">
                            <div class="text-center">
                              <img class="profile-user-img img-fluid img-circle"
                                  src="{{url('/')}}/{{Auth::user()->avatar?Auth::user()->avatar:'public/site/assets/images/user.png'}}"
                                  alt="{{$user->name}}">
                            </div>

                            <h3 class="profile-username text-center">{{$user->name}}</h3>

                            <p class="text-muted text-center">{{$user->roles->count()>0?$user->roles->first()->name:''}}</p>

                            <ul class="list-group list-group-unbordered mb-3">
                             
                             
                              @if($user->address)
                              <li class="list-group-item">
                                <b>@lang('site.address')</b> <a class="float-right">{{$user->address}}</a>
                              </li>
                              @endif
                             
                           
                            
                            
                              
                            </ul>
                          </div>
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                    </div>
                    <!-- /.col -->
                    <div class="col-md-8">
                      <div class="card">

                        <div class="card-body">
                            <div class="tab-pane active" id="settings">
                                          <form class="form-horizontal">
                                            <div class="form-group row">
                                              <label for="inputName" class="col-sm-4 col-form-label">@lang('site.name')</label>
                                              <div class="col-sm-10">
                                                <input type="name" class="form-control" id="inputName" placeholder="Name" disabled value="{{$user->name}}">
                                              </div>
                                            </div>
                                            <div class="form-group row">
                                              <label for="inputEmail" class="col-sm-4 col-form-label">@lang('site.email')</label>
                                              <div class="col-sm-10">
                                                <input type="email" class="form-control" id="inputEmail" placeholder="Email" disabled value="{{$user->email}}">
                                              </div>
                                            </div>
                                            <div class="form-group row">
                                              <label for="inputName2" class="col-sm-4 col-form-label">@lang('site.phone')</label>
                                              <div class="col-sm-10">
                                                <input type="text" class="form-control phone" id="inputName2" placeholder="phone" disabled value="{{$user->phone}}">
                                              </div>
                                            </div>
                                            
                                          
                                           
                                           
                                          
                                            
                                        
                                          </form>
                            </div>
                        </div><!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
            </div>
    </section>
</div>
@endsection
@section('script')

@endsection