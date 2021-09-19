$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    navText: [
        `<i class="fas fa-chevron-left prev-btn"></i>`,
        `<i class="fas fa-chevron-right next-btn"></i>`
    ],
    dots: false,
    lazyLoad: true,
    responsive:{
        0:{
            items:4
        },
        600:{
            items:4
        },
        1000:{
            items:4
        }
    }
})