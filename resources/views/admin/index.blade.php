@extends('admin.layouts.app')
@section('style')
@endsection

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
       <!-- Content Header (Page header) -->
       <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>@lang('site.dashboard')</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">@lang('site.dashboard')</a></li>
                  <li class="breadcrumb-item active">@lang('site.Main')</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>


        <section class="content">
            <div class="container-fluid">
                <div class="row">
                      <!-- ./col -->
                        <div class="col-lg-3 col-6">
                          <!-- small card -->
                          <div class="small-box bg-white">
                            <div class="inner">
                              <h3>{{$users}}</h3>

                              <p>@lang('site.users')</p>
                            </div>
                            <div class="icon">
                              <i class="fas fa-user-check"></i>
                            </div>
                            <a href="{{url('/')}}/admin/users" class="small-box-footer">
                              @lang('site.more') <i class="fas fa-arrow-circle-right"></i>
                            </a>
                          </div>
                        </div>

                 

                         <!-- ./col -->
                      <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-white">
                          <div class="inner">
                            <h3>{{$visitors}}</h3>

                            <p>@lang('site.visitors')</p>
                          </div>
                          <div class="icon">
                            <i class="fas fa-user-plus"></i>
                          </div>
                          <a href="{{url('/')}}/admin/visitors" class="small-box-footer">
                            @lang('site.more') <i class="fas fa-arrow-circle-right"></i>
                          </a>
                        </div>
                      </div>
                      <!-- ./col -->
                       <!-- ./col -->
                       <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-white">
                          <div class="inner">
                            <h3>{{$contacts}}</h3>

                            <p>@lang('site.contact_us')</p>
                          </div>
                          <div class="icon">
                            <i class="fas fa-phone"></i>
                          </div>
                          <a href="{{url('/')}}/admin/contact" class="small-box-footer">
                            @lang('site.more') <i class="fas fa-arrow-circle-right"></i>
                          </a>
                        </div>
                      </div>
                      <!-- ./col -->
                     
                    
                      <!-- ./col -->
                      <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-white">
                          <div class="inner">
                            <h3>{{$categories}}</h3>

                            <p>@lang('site.categories')</p>
                          </div>
                          <div class="icon">
                            <i class="fas fa-layer-group"></i>
                          </div>
                          <a href="{{url('/')}}/admin/categories" class="small-box-footer">
                            @lang('site.more') <i class="fas fa-arrow-circle-right"></i>
                          </a>
                        </div>
                      </div>
                      <!-- ./col -->
                      <!-- ./col -->
                      <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-white">
                          <div class="inner">
                            <h3>{{$posts}}</h3>

                            <p>@lang('site.posts')</p>
                          </div>
                          <div class="icon">
                            <i class="fas fa-paste"></i>
                          </div>
                          <a href="{{url('/')}}/admin/posts" class="small-box-footer">
                            @lang('site.more') <i class="fas fa-arrow-circle-right"></i>
                          </a>
                        </div>
                      </div>
                      <!-- ./col -->
                      
                      
                    

                </div>
               
            </div>
        </section>
  </div>
  <!-- /.content-wrapper -->

 @endsection


 @section('script')
 @endsection
