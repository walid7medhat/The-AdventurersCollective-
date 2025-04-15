@extends('site.layouts.app')
@section('title')
<title>@lang('site.register')</title>
@endsection
@section('content')

<main class="main-content">
        <!-- Start Breadcrumb -->
        <section class="breadcrumb">
            <div class="img-overlay">
                <img src="{{url('/')}}/{{isset($register) && $register->image?$register->image:'public/site/assets/images/breadcrumb.png'}}" alt="@lang('site.register')" />
            </div>
            <div class="container">
                <div class="row">
                    <!-- Col -->
                    <div class="col-md-12">
                        <div class="text-bread">
                            <h3>@lang('site.register')</h3>
                            <ul>
                                <li>
                                    <a href="{{url('/')}}">@lang('site.Main')</a>
                                </li>
                                <li>
                                    <span>@lang('site.register')</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /Col -->
                </div>
            </div>
        </section>
        <!-- End Breadcrumb -->

        <!-- Start Req-page -->
        <section class="req-page body-inner">
            <div class="container">
                <div class="row">
                    <!-- Col -->
                    <div class="col-md-12">
                        <div class="form-req">
                            <div class="form-inner">
                                <h3>@lang('site.register')</h3>

                                <form action="{{route('register')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label>@lang('site.name')</label>
                                        <input type="text" name="name" value="{{old('name')}}"  placeholder="@lang('site.name')" class="form-control" required />
                                        @error('name')
                                                <label class="alert alert-danger">{{$message}}</label>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>@lang('site.phone')</label>
                                        <input type="tel" name="phone" value="{{old('phone')}}"  placeholder="@lang('site.phone')" class="form-control phone" required />
                                        @error('phone')
                                                <label class="alert alert-danger">{{$message}}</label>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>@lang('site.email')</label>
                                        <input type="email" name="email" pattern="[^@\s]+@[^@\s]+\.[^@\s]+"  value="{{old('email')}}" placeholder="@lang('site.email')" class="form-control" required />
                                        @error('email')
                                                <label class="alert alert-danger">{{$message}}</label>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>@lang('site.password')</label>
                                        <input type="password" name="password" placeholder="*****************" class="form-control" required />
                                        <span>@lang('site.Password must contain')<span>A,a,1</span></span>
                                        @error('password')
                                                <label class="alert alert-danger">{{$message}}</label>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>@lang('site.password_confirmation')</label>
                                        <input type="password" name="password_confirmation" placeholder="*****************" class="form-control" required />
                                    </div>
                                    <div class="form-group">
                                        <div class="agree-h">
                                            <input type="checkbox" name="agree"/>
                                            <span> @lang('site.I read all') <a href="{{url('/')}}/footer/pages/1">{{$term->title}}</a></span>
                                        </div>
                                        @error('agree')
                                                <label class="alert alert-danger">{{$message}}</label>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-form" type="submit">
                                            <span>@lang('site.register')</span>
                                        </button>
                                        <a href="{{route('login')}}" class="aready-account">@lang('site.You already have an account')</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /Col -->
                </div>
            </div>
        </section>
        <!-- End Req-page -->
    </main>


@endsection
