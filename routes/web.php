<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('Home');

Route::get('pages/shop-grid-default', function () {
    return view('components.grid-default');
})->name('Home.Pages.Shop Grid Default');

Route::get('pages/shop-list', function () {
    return view('components.shop-list');
})->name('Home.Pages.Shop List');

Route::get('pages/order-completed', function () {
    return view('components.order-complete');
})->name('Home.Pages.Order Completed'); 

Route::get('pages/about-us', function () {
    return view('components.about-us');
})->name('Home.Pages.About Us');

Route::get('pages/contact-us', function () {
    return view('components.contact-us');
})->name('Home.Pages.Contact Us');
