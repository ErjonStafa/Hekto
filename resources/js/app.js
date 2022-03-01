require('./bootstrap');


// language dropdown

$(document).ready(function(){
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

    // $('#grid').on('click', function(e){
    //     e.preventDefault();
    //     window.history.replaceState('', '', '/pages/shop-grid-default');
    //     $.ajax({
    //         type: 'GET',
    //         url: '/pages/shop-grid-default',
    //         success: function(data){
    //             document.write(data);
    //             history.pushState('','' , '/pages/shop-grid-default');
    //         }
    //     });
    // });

    // $('#list').on('click', function(e){
    //     e.preventDefault();

    //     window.history.replaceState('', '', '/pages/shop-list');
    //     $.ajax({
    //         type: 'GET',
    //         url: '/pages/shop-list',
    //         success: function(data){
    //             document.write(data);
    //             history.pushState('','' , '/pages/shop-list');
    //         }
    //     });
    // });
});



// swiper
var swiper = new Swiper(".swiper1", {
    pagination: {
        el: ".swiper-pagination1",
        clickable: true,
        draggable: true,
    },
    loop: true,
    loopedSlides: 50,

    slidesPerView: 'auto',

});

var swiper = new Swiper(".swiper2", {
    pagination: {
        el: ".swiper-pagination2",
        clickable: true,
        draggable: true,
    },
    loop: true,
    loopedSlides: 50,
    slidesPerView: 'auto',
});
