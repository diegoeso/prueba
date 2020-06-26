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
    return view('welcome');
});

Route::get('/prueba-1', function () {
    return view('prueba1');
});

Route::get('/prueba-2', function () {
    return view('prueba2');
});

Route::get('/prueba-5', function () {
    return view('prueba5');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('prueba1', 'PruebaController@prueba1')->name('prueba1');
Route::get('prueba2', 'PruebaController@prueba2')->name('prueba2');
Route::get('prueba3', 'PruebaController@prueba3')->name('prueba3');
Route::post('prueba5', 'PruebaController@prueba5')->name('prueba5');
Route::post('login', 'PruebaController@login')->name('login');
