<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php $info=\App\Models\Info::first();?>
  <title>{{$info->name}}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('/')}}/public/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{url('/')}}/public/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('/')}}/public/admin/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
  <div class="card-header text-center">
      <a  class="h1">{{$info->name}}</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">@lang('site.login')</p>

      <form action="{{route('login')}}" method="post">
        @csrf
        <div class="input-group mb-3">
        <input type="email" name="email" value="{{old('email')}}"class="form-control @error('email') is-invalid @enderror" placeholder="@lang('site.email')">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
         @enderror
        </div>
        <div class="input-group mb-3">
        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="@lang('site.password')">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
         @enderror
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
            <input type="checkbox" class="d-none" id="remember"  name="remember" {{ old("remember") ? 'checked' : '' }}>
              <label for="remember">
              @lang('site.remember me')
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">@lang('site.go')</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      
      <!-- /.social-auth-links -->

      <p class="mb-1">
       <a href="{{ route('password.request') }}">@lang('site.reset password')</a>
      </p>
      <p class="mb-0">
        <!-- <a href="register.html" class="text-center">Register a new membership</a> -->
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{url('/')}}/public/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{url('/')}}/public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{url('/')}}/public/admin/dist/js/adminlte.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(\Session::has('success'))
<script>
  Swal.fire({
  position: 'center',
  icon: 'success',
  title: '{{session()->get('success')}}',
  showConfirmButton: false,
  timer: 1500
})

</script>
@endif
@if(\Session::has('error'))
<script>
  Swal.fire({
  position: 'center',
  icon: 'error',
  title: '{{session()->get('error')}}',
  showConfirmButton: false,
  timer: 1500
})

</script>
@endif
</body>
</html>
