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

    }(jQuery));