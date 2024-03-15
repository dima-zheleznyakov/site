$('.owl-carousel.owl-carousel-header').owlCarousel({
    loop:true,
    autoplay: true,
    autoplayTimeout: 5000,
    margin:10,
    nav:true,
    dots:true,
    responsive:{
        0:{
            items:1
        },
    }
});

$('.owl-carousel.owl-carousel-banner').owlCarousel({
    loop:true,
    autoplay: true,
    autoplayTimeout: 6000,
    margin:10,
    nav:false,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        }
    }
});


$('.owl-carousel.owl-carouser-store').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots:false,
    responsive:{
        0:{
            items:3
        },
    }
});

$('.owl-carousel.owl-carousel-header-cards').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:true,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:1
        }
    }
});


document.addEventListener('DOMContentLoaded', function() {
    var button = document.querySelector('.button-catalog');
    var menuWrapper = document.querySelector('.menu_wrapper');

    button.addEventListener('click', function() {
        if (menuWrapper.classList.contains('active')) {
            menuWrapper.classList.remove('active');
        } else {
            menuWrapper.classList.add('active');
        }
    });
});