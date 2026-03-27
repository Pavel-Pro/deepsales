    (function($) {

        'use strict';

        $('.burger, .menu__link').on('click', function() {
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

            function resize768() {
            
            if ( $(window).width() <= 768 ) {
                let langWrap = $('.header-lan').html();
                $('.header-lan').appendTo('.menu');
                $('.menu').find('div').replaceWith(`<li class="header-lan">${langWrap}</li>`);
            }
            
        }

        resize768();

        $(window).on('resize', function() {
            resize768();
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


        $('.faq__question').on('click', function() {

            $(this).next().toggleClass('faq__answer_show');
            $(this).toggleClass('rotate');
            $(this).parent().siblings().children('.faq__answer').removeClass('faq__answer_show');
            $(this).parent().siblings().children('.faq__question').removeClass('rotate');
           
        });


        function showToTop() {
            ($(window).scrollTop() > 500) ? $('.totop').css('opacity', '1') : $('.totop').css('opacity', '0'); 
        }

        $('.totop').on('click', function() {
            $(window).scrollTop(0).animate(500);
        });

        $(window).scroll( function(){ showToTop(); } );
        showToTop();


        $('.go__package').on('click', function(){
            $("html, body").animate({
                scrollTop: $('#package').offset().top
            }, 800);
        });


        function getCookie(name) {
            let matches = document.cookie.match(new RegExp(
                "(?:^|; )" + name.replace(/([.$?*|{}()[]\\\/+^])/g, '\\$1') + "=([^;]*)"
            ));
            return matches ? decodeURIComponent(matches[1]) : undefined;
        }


        console.log(document.cookie.indexOf('chosenRu'));
        if (getCookie('chosenRu') == undefined) {
                $('.change-lang').addClass('block');
        
            } else {

                $('.change-lang').removeClass('block');
        }

        $('.switch-lang__btn_no, a[hreflang="ru-RU"]').on('click', function() {

            document.cookie = "chosenRu=true; path=/; max-age=2592000";
            $('.change-lang').removeClass('block');

        });

        const currentLang = $('link[rel="alternate"]');

        if(currentLang.attr('hreflang') === 'uk') {

            let currentLang = $('link[rel="alternate"]').attr('href');

            $('.switch-lang__btn_yes').attr('href', currentLang);

        }


        $('.order-form__btn').on('click', function() {
            $('.order-form').show();
            $('.body').css('overflow', 'hidden');

            let packageTitle =  $(this).siblings('.package__name').html();
            let packagePrice = $(this).siblings('.package__price').html();

            $('.order-form__title').html(`Замовлення курсу <span>"${packageTitle}"</span> ${packagePrice}`);


        });

        $('.form__close, .form__background').on('click', function() {
            $('.order-form').hide();
            $('.body').css('overflow', 'visible');
        });

    }(jQuery));