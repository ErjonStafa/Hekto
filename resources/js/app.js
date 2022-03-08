require('./bootstrap');

window.onload = () => {

    // show and hide languages

    const currentSelectedLanguage = document.getElementById('current-select-language');
    const otherSelectLanguage = document.getElementById('other-select-language');

    currentSelectedLanguage.onclick = () => {
        otherSelectLanguage.classList.toggle('hidden');
    };

    //change language to english
    const englishLang = document.getElementById('English');
    const currentSelectedLanguageText = document.getElementById('current-select-language-text');
    englishLang.onclick = () => {
        currentSelectedLanguageText.innerHTML = englishLang.innerText;
        otherSelectLanguage.classList.toggle('hidden');
    };

    //change language to Albanian

    const albanianLang = document.getElementById('Albanian');

    albanianLang.onclick = () => {
        currentSelectedLanguageText.innerHTML = albanianLang.innerText;
        otherSelectLanguage.classList.toggle('hidden');
    };


    // show and hide currency

    const currentSelectedCurrency = document.getElementById('current-select-currency');
    const otherSelectCurrency = document.getElementById('other-select-currency');

    currentSelectedCurrency.onclick = () => {
        otherSelectCurrency.classList.toggle('hidden');
    };

    //change currency to USD
    const USD = document.getElementById('USD');
    const currentSelectedCurrencyText = document.getElementById('current-select-currency-text');
    USD.onclick = () => {
        currentSelectedCurrencyText.innerHTML = USD.innerText;
        otherSelectCurrency.classList.toggle('hidden');
    };

    //change currency to EUR
    const EUR = document.getElementById('EUR');

    EUR.onclick = () => {
        currentSelectedCurrencyText.innerHTML = EUR.innerText;
        otherSelectCurrency.classList.toggle('hidden');
    };

    //toggle mobile dropdown in header

    document.querySelector('#header-drop').addEventListener('click', function(){
        document.querySelector('#header-items').classList.toggle('hidden');
    });

    //change from grid to list

    const gridSection = document.getElementById('grid-section');
    const listSection = document.getElementById('list-section');
    const currectUrlTitle = document.getElementById('current-location-title');
    const currectUrl = document.getElementById('current-location');

    document.querySelector('#list').addEventListener('click', function (e) {
        e.preventDefault();
        gridSection.style.display = 'none';
        currectUrl.innerText = 'Shop List';
        currectUrlTitle.innerText = 'Shop List';
        listSection.style.display = 'block';
    });


    


};


//change from login to register
const login = document.getElementById('login');
const register = document.getElementById('register');

document.querySelector('#create-account').addEventListener('click', function (e) {
    e.preventDefault();
    login.style.display = 'none';
    register.style.display = 'flex';
});

document.querySelector('#sign-in').addEventListener('click', function (e) {
    e.preventDefault();
    login.style.display = 'flex';
    register.style.display = 'none';
});
// first swiper
var swiper = new Swiper(".swiper1", {
    pagination: {
        el: ".swiper-pagination1",
        clickable: true,
        draggable: true,
    },
    mousewheel: true,
    loop: true,
    loopedSlides: 50,

    slidesPerView: 'auto',

});
//second swiper
var swiper = new Swiper(".swiper2", {
    pagination: {
        el: ".swiper-pagination2",
        clickable: true,
        draggable: true,
        dynamicBullets: true,
        dynamicMainBullets: 4,
    },
    slidesPerView: 4,
    spaceBetween: 40,
    mousewheel: true,
    breakpoints: {
        320: {
         slidesPerView: 1,
        },
        640: {
            slidesPerView: 2,
        },
        816: {
            slidesPerView: 3,
        },
        1088: {
            slidesPerView: 4,
        },
    },
    loop: true,
});

//third swiper
var swiper = new Swiper(".swiper3", {
    pagination: {
        el: ".swiper-pagination3",
        clickable: true,
        draggable: true,
        dynamicBullets: true,
        dynamicMainBullets: 3,
    },
    mousewheel: true,
    slidesPerView: 4,
    spaceBetween: 40,
    breakpoints: {
        320: {
         slidesPerView: 1,
        },
        552: {
            slidesPerView: 2,
        },
        828: {
            slidesPerView: 3,
        },
        1104: {
            slidesPerView: 4,
        },
    },
    loop: true,
    loopedSlides: 50,
    slidesPerView: 'auto',
});
