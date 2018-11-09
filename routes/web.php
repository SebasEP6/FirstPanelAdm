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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/caja', 'CashBoxController@create')->name('cash-box');

Route::get('/caja/metodos-de-pago', 'CashBoxController@paymentMethod')->name('p-methods');

Route::get('/caja/retiros', 'CashBoxController@withdraw')->name('withdraw');

Route::get('/equipo/asistencia', 'AssistanceController@control')->name('take-assistance');