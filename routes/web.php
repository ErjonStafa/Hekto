<?php

use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;
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
    return view('components.home');
})->name('Home');

Route::get('/pages/shop', function () {
    return view('components.grid-default');
})->name('Home.Pages.Shop Grid Default');

Route::get('pages/order-completed', function () {
    return view('components.order-complete');
})->name('Home.Pages.Order Completed'); 

Route::get('pages/about-us', function () {
    return view('components.about-us');
})->name('Home.Pages.About Us');

Route::get('pages/contact-us', function () {
    return view('components.contact-us');
})->name('Home.Pages.Contact Us');


if (session()->has('role')) {
    Route::get('pages/my-account', function () {
        return view('errors.404');
    })->name('Home.Pages.My Account');
} else {
    Route::get('pages/my-account', function () {
        return view('components.my_account');
    })->name('Home.Pages.My Account');
}

Route::get('/search', [SearchController::class, 'search']);


Route::get('/pages/my-account/log-out',[UserController::class, 'logout']);
Route::post('pages/my-account/login', [UserController::class, 'login']);
Route::post('pages/my-account/register', [UserController::class, 'register']);
