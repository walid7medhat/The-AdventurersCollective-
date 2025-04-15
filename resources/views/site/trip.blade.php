@extends('site.layouts.app')
@section('style')
<script src="https://cdn.tiny.cloud/1/mb2grkllwf518vk6697a0tmpvbu0pjrzppv4xif0r86kdwt9/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

@endsection
@section('content')


<main class="main-content">
        <!-- Start Banner-h -->
     {{--   <section class="banner-h banner-single">
            <div class="overlay-img">
                <!-- <video  src="{{url('/')}}/{{$trip->area?->video}}" loop muted playsinline autoplay id="myvideo"></video> -->
              <img src="{{url('/')}}/{{$trip->image()->media}}" />
            </div>
            <div class="container-fluid">
                <div class="row">
                    <!-- Col -->
                    <div class="col-md-12">
                        <div class="banner-text">
                            <h3>
                                {{$trip->area?->name}}
                            </h3>
                            <h1>
                            {{$trip->title}}
                            </h1>

                            <p>
                              {{$trip->desciption}}
                            </p>
                        </div>
                    </div>
                    <!-- /Col -->
                </div>
            </div>
        </section>--}}
        <!-- End Banner-h -->
              <!-- Start Intro-h -->
              <section class="intro-h">
            <div class="container">
                <div class="row">
                    <!-- Col -->
                    <div class="col-md-12">
                          
                        <div class="intro-inner">
                         
                           <h2>
                            {{$trip->title}}
                            </h2>
                        <div id="texto1" class="text-container">
                           
                                {!! $trip->description2 !!}
                        </div>

                        </div>
                    </div>
                    <!-- /Col -->
                </div>
            </div>
        </section>
        <!-- End Intro-h -->
        <section class="single-gallery">
            <div class="container">
                <div class="row">
                    <!-- Col -->
                    <div class="col-md-12">
                        <div class="single-title">
                            <h2>
                                See it to believe it
                            </h2>
                        </div>

                        <div class="single-inner-h">
                            <!-- Col -->
                            <div class="col-video">

                                <a href="{{$trip->link_video?$trip->link_video:$trip->video_Cover_imagev}}" class="{{$trip->link_video?'video-block':'gallery-img'}}" data-fancybox>
                                    <img src="{{url('/')}}/{{$trip->video_Cover_image}}" {{!$trip->link_video? 'data-fancybox="galleryPhoto"':''}} alt="#" />
                                     @if($trip->link_video)
                                    <h3>
                                        expedition film
                                    </h3>
                                    @endif
                                </a>
                            </div>
                            <!-- /Col -->

                            <!-- Col -->
                            <div class="col-md-imgs">
                                <div class="row">
                                    @foreach($trip->images->take(9) as $image)
                                    <!-- Col -->
                                    <div class="col-md-4">
                                        <a href="{{url('/')}}/{{$image->media}}" class="gallery-img"
                                            data-fancybox="galleryPhoto">
                                            <img src="{{url('/')}}/{{$image->media}}" alt="#" />
                                        </a>
                                    </div>
                                    <!-- /Col -->
                                     @endforeach

                                    
                                </div>
                            </div>
                            <!-- /Col -->
                        </div>
                    </div>
                    <!-- /Col -->
                </div>
            </div>
        </section>
</main>
@endsection