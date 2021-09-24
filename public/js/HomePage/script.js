$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        loop: false,
        margin: 10,
        nav: true,
        navText: [
            `<i class="fas fa-chevron-left prev-btn"></i>`,
            `<i class="fas fa-chevron-right next-btn"></i>`
        ],
        dots: false,    
        responsive: {
            0:{
                items:2,
                slideBy: 2
            },
            600:{
                items:4,
                slideBy: 4
            },
            1000:{
                items:6,
                slideBy: 6
            }
        },
    })
});