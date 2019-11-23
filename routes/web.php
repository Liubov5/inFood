<?php

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
});
/* Окно создания нового объявления продавцом */
Route::get('/add_ad', function () {
    return view('add_ad');
});
/* Создание нового объявления */
Route::post('/insert_ad', 'AdController@create');