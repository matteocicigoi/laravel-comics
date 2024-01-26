<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $data = [
        'linkHeader' => config('_headerLink'),
        'comics' => config('_comicsDb'),
        'shop' => config('_shop'),
        'linkFooter' => config('_menuFooter'),
        'bottomFooter' => config('_menuFooterBottom')
    ];

    return view('home', $data);
});
