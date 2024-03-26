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
            if (this.checked) {
                addInputToForm(checkbox.value);
            } else {
                removeInputFromForm(checkbox.value);
            }
        });
        updateDeleteButtonText();
    });

    individualCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            if (this.checked) {
                addInputToForm(this.value);
            } else {
                removeInputFromForm(this.value);
            }
            updateDeleteButtonText();
        });
    });

    function addInputToForm(value) {
        const input = document.createElement('input');
        input.type = 'hidden';
        input.name = 'delete[]';
        input.value = value;
        document.getElementById('deleteForm').appendChild(input);
    }

    function removeInputFromForm(value) {
        const input = document.querySelector(`input[value="${value}"]`);
        if (input) {
            input.remove();
        }
    }

    function updateDeleteButtonText() {
        const selectedCount = document.querySelectorAll('.individual-checkbox:checked').length;
        deleteButton.textContent = `Удалить (${selectedCount})`;
    }
});



$(document).ready(function() {
    $('.number').on('change', function() { // Добавляем обработчик события изменения значения поля
        var formData = $(this).closest('form').serialize(); // Получаем данные формы

        $.ajax({
            type: 'POST',
            url: $(this).closest('form').attr('action'), // Получаем URL из атрибута action формы
            data: formData, // Передаем данные формы
            success: function(response) {
                console.log(response); // Обработка успешного ответа
            },
            error: function(error) {
                console.log(error); // Обработка ошибки
            }
        });
    });
});

