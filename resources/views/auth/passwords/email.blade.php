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
                <img src="{{url('/')}}/{{isset($login) && $login->image?$login->image:'public/site/assets/images/breadcrumb.png'}}" alt="@lang('site.reset password')" />
            </div>
            <div class="container">
                <div class="row">
                    <!-- Col -->
                    <div class="col-md-12">
                        <div class="text-bread">
                            <h3>@lang('site.reset password')</h3>
                            <ul>
                                <li>
                                    <a href="{{url('/')}}">@lang('site.Main')</a>
                                </li>
                                <li>
                                    <a href="{{route('login')}}">@lang('site.login')</a>
                                </li>
                                <li>
                                    <span>@lang('site.reset password')</span>
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
                                <h3>@lang('site.reset password')</h3>
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <form method="POST" action="{{ route('password.email') }}">
                                     @csrf
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="@lang('site.email')" class="form-control" required />
                                        <i class="fa fa-envelope"></i>
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
