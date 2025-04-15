@extends('site.layouts.app')
@section('content')


<main class="main-content">
        <!-- Start Banner-h -->
        <section class="banner-h banner-single">
            <div class="overlay-img">
                <video  src="{{url('/')}}/{{$country->video}}" loop muted playsinline autoplay id="myvideo"></video>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <!-- Col -->
                    <div class="col-md-12">
                        <div class="banner-text">
                            <h3>
                                {{$country->name}}
                            </h3>
                            <h1>
                            {{$country->title}}
                            </h1>

                            <p>
                              {{$country->desciption}}
                            </p>
                        </div>
                    </div>
                    <!-- /Col -->
                </div>
            </div>
        </section>
        <!-- End Banner-h -->

        <!-- Start See-h -->
        <section class="see-h">
            <div class="container">
                <div class="row">
                    <!-- Col -->
                    <div class="col-md-12">
                        <div class="see-text">
                            <div class="title title-white">
                                <h3>
                                  {{$country->title2}}
                                </h3>
                                <p>
                                   {{$country->description2}}
                                </p>
                                <!-- <div class="btns-flex">
                                    <a href="#">
                                        DATES AND PRICES
                                        <i class="fa fa-arrow-right"></i>
                                    </a>
                                    <a href="#">
                                        SEE IT TO BELIEVE IT
                                        <i class="fa fa-arrow-right"></i>
                                    </a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <!-- /Col -->
                </div>
            </div>
        </section>
        <!-- End See-h -->

      

      
        <!-- Start Single-program -->
        <section class="single-program">
            <div class="container">
                <div class="row">
                    <!-- Col -->
                    <div class="col-md-12">
                        <div class="title title-white">
                            <!-- <h2>
                                Expedition Program
                            </h2> -->
                        </div>

                        <div class="all-programs">
                        <!-- programs-slider  -->
                            <div class="programs-slider row">

                               @foreach($country->trips->where('active',1) as $trip)
                                    <div class="slick-list  col-md-4">
                                        <div class="slick-track " >
                                            <!-- Item -->
                                            <div class="item ">
                                                <div class="program-block position-relative">
                                                    <a href="{{route('trip',$trip->slug)}}" class="link-block"></a>
                                                    <div class="img">
                                                        <img src="{{url('/')}}/{{$trip->image()?->media}}" alt="#" />
                                                    </div>
                                                    <div class="details">
                                                        <h4>

                                                        </h4>
                                                        <div class="text-bottom">
                                                            <h3>
                                                            {{$trip->title}}
                                                            </h3>
                                                            <a href="{{route('trip',$trip->slug)}}" class="readMore">
                                                                MORE DETAILS
                                                                <i class="fa fa-arrow-right"></i>
                                                            </a>
                                                            <div class="text-more">
                                                                <div class="day-h">
                                                                    <span>
                                                                    
                                                                    </span>
                                                                    <h4>
                                                                        <u>
                                                                            
                                                                        </u>
                                                                    </h4>
                                                                    <div class="kn-h">
                                                                        <span>
                                                                            <!-- - 280Km
                                                                        </span>
                                                                        <span>
                                                                            - 7Hrs
                                                                        </span>
                                                                        <span>
                                                                            - Tarmac & Dirt Roads
                                                                        </span> -->
                                                                    </div>
                                                                </div>
                                                                <div class="stay-in">
                                                                    <!-- <h5>
                                                                        Stay :
                                                                    </h5>
                                                                    <h4>
                                                                        DECEPTION VALLEY LODGE OR SIMILAR
                                                                    </h4> -->
                                                                    <p>
                                                                        {{$trip->description}}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Item -->
                                        </div>
                                        </div>

                                @endforeach

                               
                              
                            </div>
                        </div>
                    </div>
                    <!-- /Col -->
                </div>
            </div>
        </section>
        <!-- End Single-program -->

      
  <!-- Start Single-gallery -->
{{-- <section class="single-gallery">
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

                                <a href="{{$country->link_video?$country->link_video:$country->img}}" class="{{$country->link_video?'video-block':'gallery-img'}}" data-fancybox>
                                    <img src="{{url('/')}}/{{$country->image}}" {{!$country->link_video? 'data-fancybox="galleryPhoto"':''}} alt="#" />
                                     @if($country->link_video)
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
                                    @foreach($country->images as $image)
                                    <!-- Col -->
                                    <div class="col-md-4">
                                        <a href="{{url('/')}}/{{$image->image}}" class="gallery-img"
                                            data-fancybox="galleryPhoto">
                                            <img src="{{url('/')}}/{{$image->image}}" alt="#" />
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
        </section>--}}
        <!-- End Single-gallery -->

        <!-- Start Single-banner2 -->
       {{-- <section class="single-banner2">
            <div class="overlay-img">
                <img src="{{url('/')}}/{{$about->image3}}" alt="#" />
            </div>
            <div class="container">
                <div class="row">
                    <!-- Col -->
                    <div class="col-md-12">
                        <div class="single-text">
                            
                        <?php echo $about->objective;?>
                        </div>
                    </div>
                    <!-- /Col -->
                </div>
            </div>
        </section>--}}
   
    </main>


@endsection

@section('scripts')
<script>
        $(document).ready(function () {
            // FancyBox
            $('[data-fancybox="galleryPhoto"], [data-fancybox]').fancybox();

            // $(".readMore").click(function (e) {
            //     e.preventDefault(); 
            //     var programBlock = $(this).closest(".program-block");

            //     programBlock.toggleClass("active");

            //     if (programBlock.hasClass("active")) {
            //         $(this).html("LESS DETAILS <i class='fa fa-arrow-left'></i>");
            //     } else {
            //         $(this).html("MORE DETAILS <i class='fa fa-arrow-right'></i>");
            //     }
            // });
        });
    </script>
@endsection