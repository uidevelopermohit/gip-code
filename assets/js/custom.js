$(document).ready(function () {
    $('.banner_section .last_slide').parents('.owl-item').addClass('removeOverlayColor');
    $('.banner_slider').owlCarousel({
        items: 1,
        margin: 25,
        loop: true,
        nav: true,
        dots: false,
        autoHeight: true,
        navText: ["<i class='icon-left-arrow'></i>", "<i class='icon-right-arrow'></i>"],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    $('.events_slider').owlCarousel({
        items: 4,
        margin: 20,
        loop: true,
        nav: true,
        dots: false,
        autoHeight: true,
        navText: ["<i class='icon-left-arrow'></i>", "<i class='icon-right-arrow'></i>"],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 4
            }
        }
    });

    $('.menu_toggle').on('click', function () {
        // $('.navbar_nav').slideToggle();
        $('.navbar_nav').toggleClass('open_navigation');
    })

    $('.navbar_nav li.sub_menu>a').on('click', function () {
        $(this).siblings('ul').toggleClass('submenu_open');
    })
});

$(window).scroll(function () {
    var sticky = $('header'),
        scroll = $(window).scrollTop();

    if (scroll >= 100) sticky.addClass('header_fixed');
    else sticky.removeClass('header_fixed');
});



//sidebar fixed
var fixmeTop = $('.fixme').offset().top;       // get initial position of the element

$(window).scroll(function () {                  // assign scroll event listener

    var currentScroll = $(window).scrollTop(); // get current position

    if (currentScroll >= fixmeTop) {           // apply position: fixed if you
        $('.fixme').css({                      // scroll to that element or below it
            position: 'fixed',
            top: '0',
            overflow: 'hidden'
        });
    } else {                                   // apply position: static
        $('.fixme').css({                      // if you scroll above it
            position: 'static'
        });
    }

});