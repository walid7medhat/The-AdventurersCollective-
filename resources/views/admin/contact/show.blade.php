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
                <h1>{{$contact->name}}</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('/')}}/admin">@lang('site.dashboard')</a></li>
                  <li class="breadcrumb-item "><a href="{{url('/')}}/admin/contact">@lang('site.contact_us')</a></li>
                  <li class="breadcrumb-item active">{{$contact->name}}</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
   <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
        <div class="row">
          
          <!-- /.col -->
        <div class="col-md-9">
          <div class="card card-primary card-outline">
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="mailbox-read-info">
                <h5>@lang('site.from'):{{$contact->email}}</h5>
        
                <h6>
                  <span class="mailbox-read-time float-right">{{$contact->created_at}}</span></h6>
              </div>
             
              <!-- /.mailbox-controls -->
              <div class="mailbox-read-message">
              <p><span>@lang('site.level_of_fitness'):</span> {{$contact->level_of_fitness}}</p>
              <p><span>@lang('site.budget'):</span> {{$contact->budget}} $</p>
              <p>{{$contact->message}}</p>

                <p>{{$contact->message}}</p>
                 <p>@lang('site.name'),<br>{{$contact->name}}</p>
              </div>
              <!-- /.mailbox-read-message -->
            </div>
            <!-- /.card-body -->
           
            
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection
@section('script')

@endsection