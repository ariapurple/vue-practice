require('./bootstrap');

$(document).ready(function() {
    $('.nav-item a').click(function(e){
        e.preventDefault();
        let jump = $(this).attr('href');
        let height = $('.header').height();
        let new_position = $(jump).offset().top - height;
        $('html, body').stop().animate({ scrollTop: new_position }, 500);
    });

    $('.banners').slick({
        arrows: false,
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true
    });
})
