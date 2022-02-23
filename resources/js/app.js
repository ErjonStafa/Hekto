require('./bootstrap');


// language dropdown
$("#current-select-language").on('click', function () {
    $("#other-select-language").toggleClass('hidden');
});
$("#English").on('click', function () {
    $('#current-select-language-text').html($(this).text());
    $("#other-select-language").toggleClass('hidden');
});
$("#Albanian").on('click', function () {
    $('#current-select-language-text').html($(this).text());
    $("#other-select-language").toggleClass('hidden');
});

// currency dropdown
$("#current-select-currency").on('click', function () {
    $("#other-select-currency").toggleClass('hidden');
});
$("#USD").on('click', function () {
    $('#current-select-currency-text').html($(this).text());
    $("#other-select-currency").toggleClass('hidden');
});
$("#EUR").on('click', function () {
    $('#current-select-currency-text').html($(this).text());
    $("#other-select-currency").toggleClass('hidden');
});

// swiper
var swiper = new Swiper(".mySwiper", {
    pagination: {
        el: ".swiper-pagination",
    },
    clickable: true,
    draggable: true,
    slidesPerView:'auto',
    renderBullet: function (index, className) {
        return '<span class="' + className + '">' + (index + 1) + '</span>';
    },
});