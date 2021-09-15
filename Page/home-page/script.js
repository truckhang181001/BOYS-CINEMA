$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    navText: [
        `<div class="nav-btn prev-slide"><img src="Prevbutton.png"></div>`,
        `<div class="nav-btn next-slide"><img src="Nextbutton.png"></div>`
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