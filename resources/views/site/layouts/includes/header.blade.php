<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta name="description" content="{{$info->description}}">
    <!-- <meta name="keywords" content=""> -->
     
    <meta charset="utf-8">
    <meta name="author" content="Arboon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#0D3558">

    <title>Home Page - {{$info->name}}</title>
    @yield('title')
    <link rel="shortcut icon" type="image/x-icon" href="{{url('/')}}/{{$info->icon}}" />
    <link href="{{url('/')}}/public/site/assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="{{url('/')}}/public/site/assets/css/mobile.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.min.css" />
</head>

<body class="{{Route::currentRouteName()=='contact' || Route::currentRouteName()=='faqs'?'home-header':''}}">
    <!-- Start Mobile-menu -->
    <div class="menu-backdrop"></div>
    <div class="mobile-menu">
        <!-- <div class="close-btn" cursor-class="movedH"><span class="icon fal fa-times"></span></div> -->
        <nav class="menu-box">
            <div class="menu-outer">
                <div class="navbar-collapse" id="navbarSupportedContent">
                    <ul class="navigation">
                        <li>
                            <a href="{{route('signature')}}">
                                Signature expeditions
                            </a>
                        </li>
                        <li>
                            <a href="{{route('contact')}}">
                                Contact
                            </a>
                        </li>
                        <li>
                            <a href="{{route('faqs')}}">
                                Faq
                            </a>
                        </li>
                    </ul>
                    <div class="links-bottom">
                        <ul>
                            <li>
                                <a href="{{route('signature')}}">
                                    Signature expeditions
                                </a>
                            </li>
                            <li>
                                <a href="{{route('contact')}}">
                                    Contact
                                </a>
                            </li>
                            <li>
                                <a href="{{route('faqs')}}">
                                    Faq
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- End Mobile-menu -->

    <!-- Start Header -->
    <header class="sticky">
        <!-- Start Header-med -->
        <div class="header-med">
            <div class="container">
                <div class="row">
                    <!-- Col -->
                    <div class="col-md-12">
                        <div class="head-inner">
                            <div class="logo-h">
                    <a href="{{url('/')}}" class="logo-text">
                       {{$info->name}}
                    </a>



                            </div>
                            <div class="menu-left">
                                <div class="item res-menu">
                                    <div class="mobile-nav-toggler">
                                        <svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            x="0px" y="0px" viewBox="0 0 170.6 128" style="enable-background:new 0 0 170.6 128;" xml:space="preserve">
                                            <style type="text/css">
                                                .st0 {
                                                    fill: #FFFFFF;
                                                }
                                            </style>
                                            <path class="st0" d="M0,0h170.7v21.3H0V0z M0,53.3h170.7v21.3H0V53.3z M0,106.7h170.7V128H0V106.7z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Col -->
                </div>
            </div>
        </div>
        <!-- End Header-Med -->
    </header>