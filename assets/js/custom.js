$(document).ready(function () {
    $('.product-slider').owlCarousel({
        items: 1,
        margin: 25,
        loop: true,
        nav: false,
        dots: false,
        autoHeight: true,
        // navText: ["<i class='icon-left-arrow'></i>", "<i class='icon-right-arrow'></i>"],
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 5,
                nav: false
            }
        }
    });

    $('.virtual-properties-slider').owlCarousel({
        items: 1,
        margin: 10,
        loop: true,
        nav: true,
        dots: false,
        autoHeight: true,
        navText: ["<i class='icon-arrow-left2'></i>", "<i class='icon-arrow-right2'></i>"],
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 1,
                nav: true
            },
            1000: {
                items: 1,
                nav: true
            }
        }
    });

    $('.menu_toggle').on('click', function () {
        $('.navbar_nav').addClass('open_sidebar');
        $('.overlay').fadeIn();
    })
    $('.close_menu_sidebar').on('click', function () {
        $('.navbar_nav').removeClass('open_sidebar');
        $('.overlay').fadeOut();
    })

    $('ul.navbar_nav').find('a').click(function () {
        var $href = $(this).attr('href');
        var $anchor = $($href).offset();
        window.scrollTo($anchor.left, $anchor.top);
        return false;
    });


    // add all to same gallery
    $(".image_gallery a, .video_play_wrapper a").attr("data-fancybox", "mygallery");
    // assign captions and title from alt-attributes of images:
    $(".image_gallery a, .video_play_wrapper a").each(function () {
        $(this).attr("data-caption", $(this).find("img").attr("alt"));
        $(this).attr("title", $(this).find("img").attr("alt"));
    });
    // start fancybox:
    $(".image_gallery a, .video_play_wrapper a").fancybox();



    $(".project_demo").click(function () {
        $(".popup").fadeIn(500);
        $(".popup_overlay").fadeIn(500);
    });
    $(".close").click(function () {
        $(".popup").fadeOut(500);
        $(".popup_overlay").fadeOut(500);
    });


    $("video").prop('muted', false);

    $("#mute-video").click(function () {
        if ($("video").prop('muted')) {
            $("video").prop('muted', false);
            $(this).removeClass('mute_button');
        } else {
            $("video").prop('muted', true);
            $(this).addClass('mute_button');
        }
    });
});