$('.testimonial.owl-carousel').owlCarousel({
    items: 2,
    margin: 10,
    lazyLoad: false,
    nav: true,
    dots: false,
    autoPlay: false,
    loop: false,
    smartSpeed: 600,
    responsive: {
        0: {
            items: 1,
            nav: true,
        },
        600: {
            items: 2,
            nav: true,
        },
        1000: {
            items: 2, //3//
            nav: true,
        },
        1200: {
            items: 2,
            nav: true,
        }
    }
});