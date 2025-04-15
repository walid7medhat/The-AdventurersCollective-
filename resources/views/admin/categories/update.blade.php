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
                <h1>@lang('site.update') @lang('site.categories')</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('/')}}/admin">@lang('site.dashboard')</a></li>
                  <li class="breadcrumb-item "><a href="{{url('/')}}/admin/categories">@lang('site.categories')</a></li>
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
                                        <h3 class="card-title">@lang('site.update') <small>{{$category->title}}</small></h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <form id="quickForm" action="{{url('/')}}/admin/categories/{{$category->id}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                        <div class="card-body">
                                                <div class="form-group">
                                                    <label for="exampleInputName">@lang('site.title')</label>
                                                    <input type="text" name="title" value="{{$category->title}}"  class="form-control" id="exampleInputtitle" placeholder="@lang('site.Enter title')">
                                                    @error('title')
                                                    <label class="alert alert-danger ">{{$message}}</label>
                                                    @enderror
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
<!-- jquery-validation -->
<script src="{{url('/')}}/public/admin/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="{{url('/')}}/public/admin/plugins/jquery-validation/additional-methods.min.js"></script>

@endsection