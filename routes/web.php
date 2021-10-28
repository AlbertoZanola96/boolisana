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
    return view('home');
})->name('pagina-home');

Route::get('/products', function () {
    $array_paste = config('pasta');
    $data = [
        'paste' => $array_paste
    ];

    return view('products', $data);
})->name('pagina-prodotti');

Route::get('/product-detail/{id}', function ($id) {
    $array_paste = config('pasta');
    $data = [
        'pasta' => $array_paste[$id]
    ];
    return view('dettagli', $data);
    
})->name('pagina-dettaglio');

Route::get('/about', function () {
    return view('about');
})->name('pagina-about');

Route::get('/contacts', function () {
    return view('contacts');
})->name('pagina-contatti');
