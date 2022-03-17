require('./bootstrap');
import Alpine from 'alpinejs'

window.Alpine = Alpine;

Alpine.start();


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

    document.querySelector('#header-drop').addEventListener('click', function () {
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
        gridSection.style.display = 'flex';
        currectUrl.innerText = 'Shop Grid Default';
        currectUrlTitle.innerText = 'Shop Grid Default';
        listSection.style.display = 'none';
    });

};


$(document).ready(function () {
    $('#search').on('keyup', function () {
        var word = $(this).val();
        $('#found-container').removeClass('h-0');
        $('#loading').addClass('flex');
        $('#loading').removeClass('hidden');
        if (word !== '') {

            $.ajax({
                url: '/search',
                type: 'GET',
                data: {
                    word: word
                },
                success: function (data) {
                    $('#loading').addClass('hidden');
                    $('#loading').removeClass('flex');
                    if (data === null) {
                        $('#found').html('Nothing found');
                    } else {
                        $('#found').html(data);
                    }
                }
            });
        }
        else {
            $('#found').html('');
            $('#found-container').removeClass('h-0');
            $('#loading').addClass('hidden');
            $('#loading').removeClass('flex');
        }
    });
    $('#search').on('change', function () {
        if (!$(this).is(':focus')) {
            $('#found-container').removeClass('h-0');
            $('#found').html('');
        }
    });
});

//change from login to register
const login = document.getElementById('login');
const register = document.getElementById('register');

document.querySelector('#create-account').addEventListener('click', function (e) {
    e.preventDefault();
    login.style.display = 'none';
    register.style.display = 'flex';
});

document.querySelector('#signIn').addEventListener('click', function (e) {
    e.preventDefault();
    login.style.display = 'flex';
    register.style.display = 'none';
});


