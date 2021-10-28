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

Route::get('/', 'HomeController@home')->name('pagina-home');

Route::get('/products', 'ProductController@listProducts')->name('pagina-prodotti');

Route::get('/product-detail/{id}', 'ProductController@productDetail')->name('pagina-dettaglio');

Route::get('/about', 'HomeController@about')->name('pagina-about');

Route::get('/contacts', 'HomeController@contacts')->name('pagina-contatti');
