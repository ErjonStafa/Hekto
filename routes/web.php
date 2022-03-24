<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostsController;
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

Route::get('/pages/shop', [CategoryController::class, 'indexByName'])->name('Home.Pages.Shop Grid Default');
Route::get('/pages/shop/category/{id}', [CategoryController::class, 'showByName'])->name('Home.Pages.Shop Grid Default')->where('id', '[0-9]+');

Route::get('/pages/shop/order-by-price', [CategoryController::class, 'indexByPrice'])->name('Home.Pages.Shop Grid Default');
Route::get('/pages/shop/category/{id}/order-by-price', [CategoryController::class, 'showByPrice'])->name('Home.Pages.Shop Grid Default')->where('id', '[0-9]+');

Route::get('/pages/my-account/log-out',[UserController::class, 'logout']);
Route::post('pages/my-account/login', [UserController::class, 'login']);
Route::post('pages/my-account/register', [UserController::class, 'register']);

Route::get('pages/blogs', [PostsController::class, 'index'])->name('Home.Pages.Blog page');
Route::get('pages/blogs/{blog}', [PostsController::class, 'show'])->name('Home.Pages.Single blog')->where('blog', '[0-9]+');
Route::get('/pages/blogs/tag/{id}', [PostsController::class, 'searchByTag'])->name('Home.Pages.Blog page');
Route::post('/create-comment',[PostsController::class, 'createComment']);
Route::post('/create-post',[PostsController::class, 'createPost']);
