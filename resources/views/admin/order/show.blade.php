@extends('admin.layouts.app')
@section('style')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{url('/')}}/public/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{url('/')}}/public/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{url('/')}}/public/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- summernote -->
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
                <h1>{{$order->name}}</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('/')}}/admin">@lang('site.dashboard')</a></li>
                  <li class="breadcrumb-item "><a href="{{url('/')}}/admin/order">@lang('site.orders')</a></li>
                  <li class="breadcrumb-item active">{{$order->name}}</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
             <!-- form start -->
             <form id="quickForm" class="col-12" >
                                  
                              <!-- left column -->
                          <div class="col-12">
                                  <!-- jquery validation -->
                                  <div class="card card-primary">
                                          <div class="card-header">
                                              <h3 class="card-title">@lang('site.main_info')</h3>
                                          </div>
                                          <!-- /.card-header -->
                                        
                                             <div class="card-body">
                                                      <div class="form-group col-12">
                                                          <label for="name">@lang('site.name')</label>
                                                          <input disabled type="text" name="name" value="{{$order->name}}" class="form-control" id="name" placeholder="@lang('site.Enter') @lang('site.name')">
                                                        
                                                      </div>
                                                      <div class="form-group col-12">
                                                          <label for="email">@lang('site.email')</label>
                                                          <input disabled type="text" name="email" value="{{$order->email}}" class="form-control" id="email" placeholder="@lang('site.Enter') @lang('site.email')">
                                                        
                                                      </div>
                                                      <div class="form-group col-12">
                                                          <label for="phone">@lang('site.phone')</label>
                                                          <input disabled type="text" name="phone" value="{{$order->phone}}" class="form-control" id="phone" placeholder="@lang('site.Enter') @lang('site.phone')">
                                                        
                                                      </div>
                                                      <div class="form-group col-12">
                                                          <label for="birth_date">@lang('site.birth_date')</label>
                                                          <input disabled type="date" name="birth_date" value="{{$order->birth_date}}" class="form-control" id="birth_date" placeholder="@lang('site.Enter') @lang('site.birth_date')">
                                                        
                                                      </div>
                                                      <div class="form-group col-12">
                                                          <label for="passport_number">@lang('site.passport_number')</label>
                                                          <input disabled type="text" name="passport_number" value="{{$order->passport_number}}" class="form-control" id="passport_number" placeholder="@lang('site.Enter') @lang('site.passport_number')">
                                                        
                                                      </div>
                                                      <div class="form-group col-12">
                                                          <label for="passport_expire_date">@lang('site.passport_expire_date')</label>
                                                          <input disabled type="date" name="passport_expire_date" value="{{$order->passport_expire_date}}" class="form-control" id="passport_expire_date" placeholder="@lang('site.Enter') @lang('site.passport_expire_date')">
                                                        
                                                      </div>
                                                      <div class="form-group col-12">
                                                          <label for="country">@lang('site.country')</label>
                                                          <input disabled type="text" name="country" value="{{$order->country}}" class="form-control" id="country" placeholder="@lang('site.Enter') @lang('site.country')">
                                                        
                                                      </div>
                                                      <div class="form-group col-12">
                                                          <label for="city">@lang('site.city')</label>
                                                          <input disabled type="text" name="city" value="{{$order->city}}" class="form-control" id="city" placeholder="@lang('site.Enter') @lang('site.city')">
                                                        
                                                      </div>
                                                      <div class="form-group col-12">
                                                          <label for="pay_on_arrive">@lang('site.pay_on_arrive')</label>
                                                          <input disabled type="text" name="pay_on_arrive" value="{{$order->pay_on_arrive==1?__('site.yes'):__('site.no')}}" class="form-control" id="pay_on_arrive" placeholder="@lang('site.Enter') @lang('site.pay_on_arrive')">
                                                        
                                                      </div>

                                                                         
                                              </div>
                                              <!-- /.card-body -->
                                      
                                        
                                  </div>
                          </div>
                          
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('script')



@endsection