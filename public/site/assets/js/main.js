
// All Sliader
$(document).ready(function () {
    "use strict";

    // // programs-slider
    // $('.programs-slider').slick({
    //     slidesToShow: 3,
    //     slidesToScroll: 1,
    //     arrows: true,
    //     autoplay: false,
    //     infinite: true,
    //     centerMode: false,
    //     dots: false,
    //     focusOnSelect: true,
    //     responsive: [
    //         {
    //             breakpoint: 992,
    //             settings: {
    //                 slidesToShow: 3,
    //             }
    //         },
    //         {
    //             breakpoint: 767,
    //             settings: {
    //                 slidesToShow: 1,
    //             }
    //         },
    //         {
    //             breakpoint: 480,
    //             settings: {
    //                 slidesToShow: 1,
    //             }
    //         },
    //     ]
    // });


    //Header
    var lastScrollTop = 0;
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        
        if (scroll > lastScrollTop) {
            $('header').removeClass('active');
            $('header').addClass('scrolled');
        } else {
            $('header').addClass('active');
            $('header').removeClass('scrolled');
        }
        
        if (scroll === 0) {
            $('header').addClass('active');
            $('header').removeClass('scrolled');
        }
        
        lastScrollTop = scroll;
    });

    // Mobile Menu
    if ($('.mobile-menu').length) {

        $('.mobile-menu .menu-box');

        var mobileMenuContent = $('.main-header .nav-outer .main-menu').html();
        $('.mobile-menu .menu-box .menu-outer').append(mobileMenuContent);
        $('.sticky-header .main-menu').append(mobileMenuContent);

        //Menu Toggle Btn
        $('.mobile-nav-toggler').on('click', function () {
            $('body').toggleClass('mobile-menu-visible');
        });

        //Menu Toggle Btn
        $('.mobile-menu .menu-backdrop,.mobile-menu .close-btn, .btn-mobile .btn').on('click', function () {
            $('body').removeClass('mobile-menu-visible');
        });
        $('.mobile-menu .menu-backdrop,.mobile-menu .close-btn').on('click', function () {
            $('body').removeClass('mobile-menu-visible');
        });

    }

    $(".mobile-menu .sub-menu").hide();
    $(".mobile-menu .menu-item-has-children > a").click(function (e) {
        // Close all open windows
        $(".sub-menu").stop().slideUp(300);
        // Toggle this window open/close
        $(this).next(".sub-menu").stop().animate({
            height: "toggle"
        });
        e.stopPropagation();
        e.preventDefault();
    });


    // niceSelect
    $('select.niceSelect').niceSelect();

    // Upload File
    $('.file-upload').on('change', function (event) {
        var name = event.target.files[0].name;
        $('.file-name').text(name);
    })

});
