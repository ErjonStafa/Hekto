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
var swiper = new Swiper(".swiper1", {
    pagination: {
        el: ".swiper-pagination1",
    },
    loop: true,
    loopedSlides: 50,
    clickable: true,
    draggable: true,
    slidesPerView: 'auto',

});

// var product = {
//     0:{'link':'Images/Featured/image 1168.png', 'name' : 'Cantilever chair', 'code' : 'Y523201', 'price': '$42.00'},
//     1:{'link':'Images/Featured/image 1.png', 'name' : 'Cantilever chair', 'code' : 'Y523201', 'price': '$42.00'},
//     2:{'link':'Images/Featured/image 1169.png', 'name' : 'Cantilever chair', 'code' : 'Y523201', 'price': '$42.00'},
//     3:{'link':'Images/Featured/image 3.png', 'name' : 'Cantilever chair', 'code' : 'Y523201', 'price': '$42.00'},
//     4:{'link':'Images/Featured/image 1168.png', 'name' : 'Cantilever chair', 'code' : 'Y523201', 'price': '$42.00'},
//     5:{'link':'Images/Featured/image 1.png', 'name' : 'Cantilever chair', 'code' : 'Y523201', 'price': '$42.00'},
//     6:{'link':'Images/Featured/image 1169.png', 'name' : 'Cantilever chair', 'code' : 'Y523201', 'price': '$42.00'},
//     7:{'link':'Images/Featured/image 3.png', 'name' : 'Cantilever chair', 'code' : 'Y523201', 'price': '$42.00'},
//     8:{'link':'Images/Featured/image 1168.png', 'name' : 'Cantilever chair', 'code' : 'Y523201', 'price': '$42.00'},
//     9:{'link':'Images/Featured/image 1.png', 'name' : 'Cantilever chair', 'code' : 'Y523201', 'price': '$42.00'},
//     10:{'link':'Images/Featured/image 1169.png', 'name' : 'Cantilever chair', 'code' : 'Y523201', 'price': '$42.00'},
//     11:{'link':'Images/Featured/image 3.png', 'name' : 'Cantilever chair', 'code' : 'Y523201', 'price': '$42.00'},
// };

var swiper = new Swiper(".swiper2", {
    pagination: {
        el: ".swiper-pagination2",
    },
    loop: true,
    loopedSlides: 50,
    clickable: true,
    draggable: true,
    slidesPerView: 'auto',
 });
// for (let i = 0; i < product.length; i++) {
//     var hi = swiper.appendSlide([
//         '<div class="swiper-slide flex flex-wrap justify-center items-center mx-auto">'+
//             '<x-home-components.body-components.featured-card :link="'+product[i]['link']+'" :name="'+product[$i]['name']+'" :code="'+product[i]['code']+'" :price="'+product[i]['price']+'"/>'+
//             '<x-home-components.body-components.featured-card :link="'+product[i+1]['link']+'" :name="'+product[$i+1]['name']+'" :code="'+product[i+1]['code']+'" :price="'+product[i+1]['price']+'"/>'+
//             '<x-home-components.body-components.featured-card :link="'+product[i+2]['link']+'" :name="'+product[$i+2]['name']+'" :code="'+product[i+2]['code']+'" :price="'+product[i+2]['price']+'"/>'+
//             '<x-home-components.body-components.featured-card :link="'+product[i+3]['link']+'" :name="'+product[$i+3]['name']+'" :code="'+product[i+3]['code']+'" :price="'+product[i+3]['price']+'"/>'+
//         '</div>'
//     ]);
// }
