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

Route::get('/add_ad', 'ProductController@show');
/* Создание нового объявления (сам запрос - insert) */

/* Создание нового объявления */



/* Создание нового объявления */

Route::post('/insert_ad', 'AdController@create');


//окно создания нового заказа покупателем
Route::get('/add_order', 'ProductController@showAd');

//добавление нового заказ (сам запрос - insert)
Route::post('/insert_order', 'OrderController@create');

//это смотрит продавец: вывод всех заказов, которые совпадают с сущетвующими объявлениями у продавца
Route::get('/select_order', 'OrderController@show');
//это делает продавец: создание нового бита (предложения) от продавца к покупателю
Route::post('/insert_bid', 'BidController@create');

//это смотрит покупатель: вывод bids (предложений) продавца к покупателю
Route::get('/customer_bids', 'BidController@show');

//это делает покупатель: принятие или отмена предложения продавца 
Route::post('/update_bid', 'BidController@update');
//это смотрит продавец: вывод своих bids (предложений) покупателям
Route::get('/seller_bids', 'BidController@showSellerBids');