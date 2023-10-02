$(document).ready(function () {
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

    $('.menu_toggle').on('click', function(){
        $('.navbar_nav').slideToggle();
    })
});