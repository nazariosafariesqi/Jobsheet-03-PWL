<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Contracts\Container\BindingResolutionException;

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
    return view('index', ['name' => '']);
    });

    Route::get('/account.blade.php', function () {
    return view('account', ['name' => '']);
    });

    Route::get('/blog-archive.blade.php', function () {
    return view('blog-archive', ['name' => '']);
    });

    Route::get('/blog-archive-2.blade.php', function () {
    return view('blog-archive-2', ['name' => '']);
    });

    Route::get('/blog-single.blade.php', function () {
    return view('blog-single', ['name' => '']);
    });

    Route::get('/product.blade.php', function () {
    return view('product', ['name' => '']);
    });

    Route::get('/product-detail.blade.php', function () {
    return view('product-detail', ['name' => '']);
    });

    Route::get('/contact.blade.php', function () {
    return view('contact', ['name' => '']);
    });

    Route::get('/404.blade.php', function () {
    return view('404', ['name' => '']);
    });

    Route::get('/cart.blade.php', function () {
    return view('cart', ['name' => '']);
    });

    Route::get('/wishlist.blade.php', function () {
    return view('wishlist', ['name' => '']);
    });

    Route::get('/home.blade.php', function () {
    return view('home', ['name' => '']);
    });

    Route::get('/index.blade.php', function () {
    return view('index', ['name' => '']);
    });

    Route::get('/checkout.blade.php', function () {
    return view('checkout', ['name' => '']);
    });
