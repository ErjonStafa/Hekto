require('./bootstrap');

window.onload = () => {
    // show and hide languages

    const currentSelectedLanguage = document.getElementById('current-select-language');
    const otherSelectLanguage = document.getElementById('other-select-language');

    currentSelectedLanguage.onclick = () => {
        otherSelectLanguage.classList.toggle('hidden');
    }

    //change language to english
    const englishLang = document.getElementById('English');
    const currentSelectedLanguageText = document.getElementById('current-select-language-text');
    englishLang.onclick = () => {
        currentSelectedLanguageText.innerHTML = englishLang.innerText;
        otherSelectLanguage.classList.toggle('hidden');
    }

    //change language to Albanian

    const albanianLang = document.getElementById('Albanian');

    albanianLang.onclick = () => {
        currentSelectedLanguageText.innerHTML = albanianLang.innerText;
        otherSelectLanguage.classList.toggle('hidden');
    }


    // show and hide currency

    const currentSelectedCurrency = document.getElementById('current-select-currency');
    const otherSelectCurrency = document.getElementById('other-select-currency');

    currentSelectedCurrency.onclick = () => {
        otherSelectCurrency.classList.toggle('hidden');
    }

    //change currency to USD
    const USD = document.getElementById('USD');
    const currentSelectedCurrencyText = document.getElementById('current-select-currency-text');
    USD.onclick = () => {
        currentSelectedCurrencyText.innerHTML = USD.innerText;
        otherSelectCurrency.classList.toggle('hidden');
    }

    //change currency to EUR
    const EUR = document.getElementById('EUR');

    EUR.onclick = () => {
        currentSelectedCurrencyText.innerHTML = EUR.innerText;
        otherSelectCurrency.classList.toggle('hidden');
    }

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

    document.querySelector('#grid').addEventListener('click', function (e) {
        e.preventDefault();
        gridSection.style.display = 'block';
        currectUrl.innerText = 'Shop Grid Default';
        currectUrlTitle.innerText = 'Shop Grid Default';
        listSection.style.display = 'none';
    });
};
// first swiper
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
//second swiper
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
