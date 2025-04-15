@include('site.components.contact_card')
 <!-- Start Footer -->
 <footer>
        <!-- Start Footer-top -->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-1"></div>
                    <!-- Col -->
                    <div class="col-md-5">
                        <a href="{{url('/')}}" class="logo-f">
                            <!-- <img src="assets/images/logo-f.svg" alt="#" /> -->
                           {{$info->name}}
                        </a>

                        <a href="emailto:{{$info->email}}" class="contact-info">
                           {{$info->email}}
                        </a>
                        <a href="tel:{{$info->phone}}" class="contact-info">
                        {{preg_replace('/^\+971(\d{2})(\d{3})(\d{4})$/', '+971 $1 $2 $3', $info->phone)}}
                        </a>
                       
                    <div class="s-h">
                        <a href="{{$info->inst}}" target="_blank" rel="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="{{$info->youtube}}" target="_blank" rel="#">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <!-- <a href="#" target="_blank" rel="#">
                            <i class="fab fa-tiktok"></i>
                        </a> -->
                        <a href="{{$info->fb}}" target="_blank" rel="#">
                            <i class="fab fa-facebook"></i> <!-- Meta uses Facebook icon -->
                        </a>
                         <a href="#" target="_blank" rel="#">
                            <i class="fa-brands fa-meetup"></i>
                        </a> 
                    </div>
                        
                  
                    </div>
                    <!-- /Col -->
     <div class="col-md-1"></div>
                    <!-- Col -->
                    <div class="col-md-5">
                        <div class="foot-block">
                            <div class="links-f">
                                <ul>
                              <li>
                            <a href="{{route('faqs')}}">
                                    FAQ
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    In The Press
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Work With Us
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Privacy Policy
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    BookIng Conditions
                                </a>
                            </li>

                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /Col -->
                    
                    <!-- Col -->
                    <!--<div class="col-md-2">-->
                    <!--    <div class="foot-block">-->
                    <!--        <div class="links-f">-->
                    <!--            <ul>-->
                    <!--                 <li>-->
                    <!--                    <a href="{{route('faqs')}}">-->
                    <!--                    Faqs-->
                    <!--                    </a>-->
                    <!--                </li>-->
                    <!--                <li>-->
                    <!--                    <a href="{{route('contact')}}">-->
                    <!--                    Contact Us-->
                    <!--                    </a>-->
                    <!--                </li>-->
                    <!--            </ul>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!-- /Col -->
                    
                </div>
            </div>
             
        </div>
          
        <!-- End Footer-top -->

        <!-- Start Footer-bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-1"></div>
                    <!-- Col -->
                    <div class="col-md-5">
                       
                                       <div class="text-bottom">
                            <span>License Number - PV00304721</span>
                            <p>
                            The Adventurers Collective (PVT) LTD <i class="fas fa-registered"></i>

                            </p>
                            <p>Incorporated under provisions of Companies act No.7 of 2007 of Sri Lanka</p>
                        </div>
                        <div class="copyRight">
                
                            <p>
                                © 2024 {{$info->name}}. All rights reserved.
                            </p>
                        </div>
                    </div>
                    <!-- /Col -->

                    <!-- Col -->
                    <!--<div class="col-md-5">-->
                    <!--    <div class="foot-links-bottom">-->
                    <!--        <a href="#">-->
                    <!--            Privacy Policy-->
                    <!--        </a>-->
                    <!--        <a href="#">-->
                    <!--            Booking Conditions-->
                    <!--        </a>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!-- /Col -->
                    <!--<div class="col-md-1"></div>-->
                </div>
            </div>
        </div>
        <!-- End Footer-bottom -->
    </footer>
    <!-- End Footer -->


    <script src="{{url('/')}}/public/site/assets/vendor/jquery/jquery.min.js"></script>
    <script src="{{url('/')}}/public/site/assets/vendor/bootstrap/bootstrap.min.js"></script>
    <script src="{{url('/')}}/public/site/assets/vendor/slick/slick.min.js"></script>
    <script src="{{url('/')}}/public/site/assets/vendor/niceSelect/jquery.nice-select.min.js"></script>
    <script src="{{url('/')}}/public/site/assets/vendor/gsap/gsap.min.js"></script>
    <script src="{{url('/')}}/public/site/assets/vendor/gsap/ScrollTrigger.min.js"></script>
    <script src="{{url('/')}}/public/site/assets/vendor/fancyBox/jquery.fancybox.js"></script>

    <script src="{{url('/')}}/public/site/assets/js/main.js"></script>
    @yield('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>
<script>
     $(document).ready(function() {
        toastr.options.timeOut = 10000;
        @if (Session::has('error'))
            toastr.error('{{ Session::get('error') }}');
        @endif
        @if (Session::has('success'))
            toastr.success('{{ Session::get('success') }}');
        @endif
            });
</script>

 
 <script>
//     const video = document.getElementById('myvideo');
//     let userInteracted = false;
  
//     // Enable unmuted audio after first user interaction (scroll, touch, click)
//     const enableSound = () => {
//       userInteracted = true;
//       video.muted = false;
//       video.play().catch(e => {
//         console.warn("Couldn't play video:", e);
//       });
//     };
//     // Listen for first interaction only once
//     ['click', 'touchstart', 'scroll'].forEach(event =>
//       window.addEventListener(event, enableSound, { once: true })
//     );
    
//     $(document).ready(function(event){
//       window.addEventListener(event, enableSound, { once: true })

//     });
  
//     // Scroll observer
//     const observer = new IntersectionObserver(entries => {
//       entries.forEach(entry => {
//         if (entry.isIntersecting) {
//           if (userInteracted) {
//             video.muted = false;
//             video.play().catch(e => {
//               console.warn("Couldn't play video:", e);
//             });
//           }
//         } else {
//           video.muted = true;
//         }
//       });
//     }, {
//       threshold: 0.6
//     });
  
//     observer.observe(video);
//      // Simulate scroll on ready (won't help bypass autoplay policy, but can trigger logic)
//   window.addEventListener('DOMContentLoaded', () => {
//     window.dispatchEvent(new Event('scroll'));
//   });
  </script>
 <script>
    function adjustTextForEmptyBackground() {
  document.querySelectorAll('headerr .logo-text').forEach(el => {
    const bgColor = window.getComputedStyle(el).backgroundColor;
    const parentBgColor = window.getComputedStyle(el.parentElement).backgroundColor;
    
    // Check if element or parent has no background
    const hasNoBackground = 
      bgColor === 'rgba(0, 0, 0, 0)' || 
      bgColor === 'transparent' ||
      parentBgColor === 'rgba(0, 0, 0, 0)';
    
    if (hasNoBackground) {
      // Option 1: Change text color (e.g., to black)
      el.style.color = '#000 !important';
      
      // Option 2: Add a semi-transparent background
      el.style.backgroundColor = 'rgba(255, 255, 255, 0.8)';
      
      // Option 3: Disable blend-mode if needed
      el.style.mixBlendMode = 'normal';
    }
  });
}

// Run on load and when dynamic content changes
window.addEventListener('load', adjustTextForEmptyBackground);
window.addEventListener('resize', adjustTextForEmptyBackground); // Optional
 </script>
</body>

</html>