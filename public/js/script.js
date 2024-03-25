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


document.addEventListener('DOMContentLoaded', function () {
    const selectAllCheckbox = document.getElementById('selectAllCheckbox');
    const individualCheckboxes = document.querySelectorAll('.individual-checkbox');
    const deleteButton = document.getElementById('deleteButton');

    selectAllCheckbox.addEventListener('change', function() {
        individualCheckboxes.forEach(checkbox => {
            checkbox.checked = this.checked;
        });
        updateDeleteButtonText();
    });

    individualCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            if (!this.checked) {
                selectAllCheckbox.checked = false;
            } else if ([...individualCheckboxes].every(checkbox => checkbox.checked)) {
                selectAllCheckbox.checked = true;
            }
            updateDeleteButtonText();
        });
    });

    function updateDeleteButtonText() {
        const selectedCount = [...individualCheckboxes].filter(checkbox => checkbox.checked).length;
        deleteButton.textContent = `Удалить (${selectedCount})`;
    }
});




