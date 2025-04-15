@extends('site.layouts.app')
@section('content')

<main class="main-content">
        <!-- Start Banner-h -->
        <section class="banner-h">
            <div class="overlay-img">
<!--                 <video src="https://cdn.prod.website-files.com/658f0b32249143862b8a1c51%2F677cf3cef85053ed48e06fcb_MAIN%20HEADEAR%20REV%2004th%20Jan-transcode.mp4" loop muted autoplay></video>
 -->              
  <video src="{{url('/')}}/{{$info->video}}" loop muted playsinline autoplay id="myvideo"></video>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <!-- Col -->
                    <div class="col-md-12">
                        <div class="banner-text">
                            <h1>
                            {{$info->hint1}}
                              
                            </h1>
                            
                            <p>
                            {{$info->description}}
                            </p>
                        </div>
                    </div>
                    <!-- /Col -->
                </div>
            </div>
        </section>
        <!-- End Banner-h -->

        <!-- Start Camera-h -->
        <section class="main camera-h">
            <div class="horizontal-scroll">
                <h2 style="color: #FFFFFF;">
                    {{$info->hint2}}
                </h2>
                <div class="scroll-wrapper">
                    @foreach($slidears as $slidear)
                    <div class="slide">
                        <img src="{{url('/')}}/{{$slidear->image}}" alt="#" />
                    </div>
                    @endforeach
                  
                </div>
                <style>
                    .heading_you{
                        color: #ffffff;
                    }
                </style>
                <div class="container_heading_you">
                    <div class="wrapper_heading_you">
                    @foreach($slidears as $slidear)
                        <h2 class="heading_you">{{$slidear->title}}</h2>
                    @endforeach
                      
                    </div>
                    
                    <div class="wrapper_des_you">
                    @foreach($slidears as $slidear)
                        <p class="des_you">{{$slidear->description}}</p>
                    @endforeach
                       
                    </div>
                </div>
            </div>
        </section>
        <!-- End Camera-h -->

        <!-- Start Intro-h -->
        <section class="intro-h">
            <div class="container">
                <div class="row">
                    <!-- Col -->
                    <div class="col-md-12">
                        <div class="intro-inner">
                            <h2> THE DRIVE TO EXPLORE PUSHES US TO THE MOST REMOTE AND UNCHARTED PLACES</h2>

                        <div id="texto1" class="text-container">
                           
                                <?php echo $about->description;?>
                        </div>

                        </div>
                    </div>
                    <!-- /Col -->
                </div>
            </div>
        </section>
        <!-- End Intro-h -->

        <!-- Start Moving-h  -->
        <section class="moving-h ">
            <div class="overlay-img">
                <img src="{{url('/')}}/{{$about->live_you_adventure_image}}" alt="#" />
            </div>
            <h3 class="moving-text">
            <?php echo $about->live_you_adventure;?>
            </h3>
        </section>
        <!-- End Moving-h  -->

        <!-- Start Personal-h -->
        <section class="personal-h">
            <div class="container">
                <div class="row">
                    <!-- Col -->
                    <div class="col-md-12">
                        <div class="personal-text">
                            
                        
                           <?php echo $about->expedition;?>
                           
                        </div>
                    </div>
                    <!-- /Col -->
                </div>
            </div>
        </section>
        <!-- End Personal-h -->

        <!-- Start Why-h -->
        <section class="why-h">
            <!-- Why-item -->
            <div class="why-item">
                <div class="overlay-img">
                    <img class="zoom-img" src="{{url('/')}}/{{$about->image}}" alt="#" />
                </div>
                <div class="container">
                    <div class="row">
                        <!-- Col -->
                        <div class="col-md-12">
                            <div class="tilte tilte-white">
                                <h3>
                                    WHY WE Do WHAT WE DO
                                </h3>
                            </div>
                            <div class="why-text">
                             
                                 <?php echo $about->message;?>
                            </div>
                        </div>
                        <!-- /Col -->
                    </div>
                </div>
            </div>
            <!-- /Why-item -->
             
            <!-- Why-item -->
            <div class="why-item">
                <div class="overlay-img">
                    <img class="move-img" src="{{url('/')}}/{{$about->image2}}" alt="#" />
                </div>
                <div class="container">
                    <div class="row">
                        <!-- Col -->
                        <div class="col-md-12">
                            <div class="why-text">
                              
                              <?php echo $about->vision;?>

                            </div>
                        </div>
                        <!-- /Col -->
                    </div>
                </div>
            </div>
            <!-- /Why-item -->
             
            <!-- Why-item -->
            <div class="why-item">
                <div class="overlay-img">
                    <img class="move-img2" src="{{url('/')}}/{{$about->image3}}" alt="#" />
                </div>
                <div class="container">
                    <div class="row">
                        <!-- Col -->
                        <div class="col-md-12">
                        
                           <div class="why-text">
                          
                            <?php echo $about->objective;?>
                            </div>
                        </div>
                        <!-- /Col -->
                    </div>
                </div>
            </div>
            <!-- /Why-item -->
        </section>
        <!-- End Why-h -->
  

    </main>


    @endsection
    @section('scripts')

    <script>
        gsap.registerPlugin(ScrollTrigger);

        let slides = gsap.utils.toArray(".slide");
        let headings = gsap.utils.toArray(".heading_you");
        let des = gsap.utils.toArray(".des_you");

        gsap.to(slides, {
            xPercent: -100 * (slides.length - 1),
            ease: "none",
            scrollTrigger: {
                trigger: ".horizontal-scroll",
                pin: true, 
                scrub: 1,
                end: "+=3000",
                onUpdate: (self) => {
                    let progress = self.progress;
                   let activeIndex = Math.floor(progress * (slides.length - .5));
                    
                    gsap.to(headings, {
                        yPercent: -100 * activeIndex,
                        opacity: 1,
                        duration: 0.5,
                        ease: "power2.out",
                    });
                    gsap.to(des, {
                        yPercent: -100 * activeIndex,
                        opacity: 1,
                        duration: 0.5,
                        ease: "power2.out",
                    });
                },
            },
        });


        function wrapWordsInSpans(element) {
            element.querySelectorAll("p").forEach(p => {
                let words = p.innerHTML.split(" "); 
                p.innerHTML = words.map(word => `<span>${word} </span>`).join(""); 
            });
        }

        wrapWordsInSpans(document.getElementById("texto1"));

        gsap.to("#texto1 p span", {
            opacity: 1,
            duration: 2,  
            ease: "none",
            stagger: 0.4, 
            scrollTrigger: {
                trigger: "#texto1",
                start: "top 30%", 
                end: "bottom 10%",
                scrub: 2
            }
        });

        gsap.set(".moving-text", { x: "100vw", opacity: 1 });

        gsap.to(".moving-text", {
            x: "-90vw",
            opacity: 1,
            duration: 3,
            scrollTrigger: {
                trigger: ".moving-h", 
                start: "top 20%", 
                end: "bottom top",
                scrub: 2,
            }
        });

        
      gsap.to(".zoom-img", {
        ease: "power2.out",
        scrollTrigger: {
            trigger: ".zoom-img",
            start: "top 80%", 
            end: "top 20%", 
            scrub: 3, 
        }
    });

        gsap.to(".move-img", {
            y: 40,
            ease: "power2.out",
            scrollTrigger: {
                trigger: ".move-img",
                start: "top 80%",
                end: "top 20%",
                scrub: 2,
            }
        });

        gsap.to(".move-img2", {
            y: -20,
            scale: 1,
            ease: "power2.out",
            scrollTrigger: {
                trigger: ".move-img2",
                start: "top 80%",
                end: "top 20%",
                scrub: 3,
            }
        });
    </script>
    @endsection