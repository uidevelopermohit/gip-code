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

    $('.events_slider_inner').owlCarousel({
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
                items: 3
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

var $affectedElements = $("p, h1, h2, h3, h4, h5, h6, .navbar_nav, .header_topbar, a"); // Can be extended, ex. $("div, p, span.someClass")

// Storing the original size in a data attribute so size can be reset
$affectedElements.each(function () {
    var $this = $(this);
    $this.data("orig-size", $this.css("font-size"));
});

$("#btn-increase").click(function () {
    changeFontSize(1);
})

$("#btn-decrease").click(function () {
    changeFontSize(-1);
})

$("#btn-orig").click(function () {
    $affectedElements.each(function () {
        var $this = $(this);
        $this.css("font-size", $this.data("orig-size"));
    });
})

function changeFontSize(direction) {
    $affectedElements.each(function () {
        var $this = $(this);
        $this.css("font-size", parseInt($this.css("font-size")) + direction);
    });
}



// Header fixed
$(window).scroll(function () {
    var sticky = $('header'),
        scroll = $(window).scrollTop();

    if (scroll >= 100) sticky.addClass('header_fixed');
    else sticky.removeClass('header_fixed');
});


$('.vertical_tabs').find('a').click(function () {
    var $href = $(this).attr('href');
    var $anchor = $($href).offset();
    $('.vertical_tabs a').removeClass('active');
    $(this).addClass('active')
    window.scrollTo($anchor.left, $anchor.top - 240);
    return false;
});


// Show the first tab and hide the rest
$('.tabs button:first-child').addClass('active');
$('.tab-content').hide();
$('.tab-content:first').show();

// Click function
$('.tabbs li').click(function () {
    $('.tabbs li').removeClass('active');
    $(this).addClass('active');
    $('.tab-content').hide();

    var activeTab = $(this).find('a').attr('href');
    $(activeTab).fadeIn();
    return false;
});


//sidebar fixed
/* var fixmeTop = $('.fixme').offset().top;       // get initial position of the element

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

}); */


