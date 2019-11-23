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

//окно создания нового заказа
Route::get('/add_order', function(){
	  return view('add_order');
});

//добавление нового заказ
Route::post('/insert_order', 'OrderController@create');
