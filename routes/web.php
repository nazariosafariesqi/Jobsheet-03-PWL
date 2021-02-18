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
    echo "Selamat Datang";
});

Route::get('/about', function () {
    echo "1941720233 , Nazario Safariesqi Tyo Widjaya , TI2A";
});

Route::get('/articles/{$id}', function ($id) {
    return "Halaman Artikel dengan ID ".$id;
});

Route::get('/', 'HomeController@index');
Route::get('/about', 'AboutController@about');
Route::get('/articles', 'ArticlesController@articles');

