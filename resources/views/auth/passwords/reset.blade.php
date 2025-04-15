@extends('site.layouts.app')
@section('title')
<title>@lang('site.reset password')</title>
@endsection
@section('content')
<?php $login=\App\Models\Breadcrumb::where('page','login')->first();?>

<main class="main-content">
        <!-- Start Breadcrumb -->
        <section class="breadcrumb">
            <div class="img-overlay">
                <img src="{{url('/')}}/{{isset($login) && $login->image?$login->image:'public/site/assets/images/breadcrumb.png'}}" alt="@lang('site.Password Reset')" />
            </div>
            <div class="container">
                <div class="row">
                    <!-- Col -->
                    <div class="col-md-12">
                        <div class="text-bread">
                            <h3>@lang('site.Password Reset')</h3>
                            <ul>
                                <li>
                                    <a href="{{url('/')}}">@lang('site.Main')</a>
                                </li>
                                <li>
                                    <a href="{{route('login')}}">@lang('site.login')</a>
                                </li>
                                <li>
                                    <span>@lang('site.Password Reset')</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /Col -->
                </div>
            </div>
        </section>
        <!-- End Breadcrumb -->

        <!-- Start Login-page -->
        <section class="req-page login-page body-inner">
            <div class="container">
                <div class="row">
                    <!-- Col -->
                    <div class="col-md-12">
                        <div class="form-req">
                            <div class="form-inner">
                                <h3>@lang('site.Password Reset')</h3>

                                <form method="POST" action="{{ route('password.update') }}">
                                    @csrf
                                    <input type="hidden" name="token" value="{{ $token }}">
                                    <div class="form-group">
                                        <input type="email" placeholder="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus required />
                                        <i class="fa fa-lock"></i>
                                    </div>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <div class="form-group">
                                        <input  type="password" placeholder="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" />
                                        <i class="fa fa-lock"></i>
                                    </div>
                                    
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    <div class="form-group">
                                        <input type="password"  placeholder="password_confirmation" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"/>
                                        <i class="fa fa-lock"></i>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-form" type="submit">
                                            <span>@lang('site.sent')</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /Col -->
                </div>
            </div>
        </section>
        <!-- End Login-page -->
    </main>


@endsection
