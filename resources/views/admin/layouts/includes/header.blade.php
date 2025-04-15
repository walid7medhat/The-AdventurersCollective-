<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{$info->name}}</title>
  <link rel="shortcut icon" type="image/png" href="{{url('/')}}/{{$info->icon}}" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="{{url('/')}}/public/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{url('/')}}/public/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('/')}}/public/admin/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="{{url('/')}}/public/admin/dist/css/style-h.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <script src="https://cdn.tiny.cloud/1/mb2grkllwf518vk6697a0tmpvbu0pjrzppv4xif0r86kdwt9/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

  @if(app()->getLocale()=='ar')
      <!-- arabic style -->
        <link rel="stylesheet" href="{{url('/')}}/public/admin/dist/css/style-h-ar.css">
  @endif
  @yield('style')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-primary">
 
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
      
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <?php $nots=Auth::user()->unreadNotifications->whereIn('type',['App\Notifications\bookNotification','App\Notifications\contactNotification']);?>
            @if( $nots->count()>0)
            <span class="badge badge-warning navbar-badge">{{$nots->count()}}</span>
            @endif
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">{{$nots->count()}} @lang('site.notifications')</span>
             @foreach($nots as $noti)
              
                @if($noti->type=='App\Notifications\contactNotification')
                            <div class="dropdown-divider"></div>
                            <a href="{{url('/')}}/admin/contact/{{$noti->data['id']}}/?not={{$noti->id}}" class="dropdown-item">
                                <i class="fas fa-envelope mr-2"></i>@lang('site.new contact') {{$noti->data['name']}}
                                <span class="float-right text-muted text-sm">{{$noti->created_at->diffForHumans()}}</span>
                            </a>
                @elseif($noti->type=='App\Notifications\bookNotification')
                            <div class="dropdown-divider"></div>
                            <a href="{{url('/')}}/admin/order/{{$noti->data['id']}}/?not={{$noti->id}}" class="dropdown-item">
                                <i class="fas fa-envelope mr-2"></i>@lang('site.new order') {{$noti->data['name']}}
                                <span class="float-right text-muted text-sm">{{$noti->created_at->diffForHumans()}}</span>
                            </a>
                
                @endif
             @endforeach
            <!-- <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div> -->
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
            <i class="fas fa-th-large"></i>
            </a>
        </li>
        </ul>
  </nav>
  <!-- /.navbar -->
