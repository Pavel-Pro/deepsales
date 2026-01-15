    (function($) {

        'use strict';

        $('.burger').on('click', function() {
            $('.burger__item:first-child').toggleClass('burger__item_top');
            $('.burger__item:nth-child(2n)').toggleClass('burger__item_middle');
            $('.burger__item:last-child').toggleClass('burger__item_bottom');
            $('.menu').toggleClass('menu-active');
            $('.menu__item, .menu__link, .phone-wrap').toggleClass('show');
        })


        function resize1024() {
            if ( $(window).width() <= 1024 ) {
                let contPhone = $('.phone-wrap').html();
                $('.phone-wrap').appendTo('.menu');
                $('.menu').find('div').replaceWith(`<li class="phone-wrap">${contPhone}</li>`);
            }
            
        }

        resize1024();

        $(window).on('resize', function() {
            resize1024();
        });

        const swiperTestimonials = new Swiper('.testimonials__slider', {
            slidesPerView: 1,
            spaceBetween: 20,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                820: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30
                },
                1300: {
                    slidesPerView: 3,
                    spaceBetween: 40
                }
            } 
        });


        $('.callform').on('click', function() {
            $('.callback-form').show();
            $('.body').css('overflow', 'hidden');
        });

        $('.form__close, .form__background').on('click', function() {
            $('.callback-form').hide();
            $('.body').css('overflow', 'visible');
        });


        $('.button__cookie:first-child').on('click', function() {

        $('.cookie').remove();
        document.cookie = "cookieAgree=true; path=/; max-age=31536000";

        });

        $('.button__cookie:last-child').on('click', function() {

            $('.cookie').remove();

        });


    }(jQuery));