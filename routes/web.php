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

Route::get('/about', function() {
    return view('about');
});

Route::get('/saberi/{broj1}/{broj2?}', 'MyController@saberi');

Route::get('/proizvodi/{mode}/{show}', 'MyController@sviProizvodi');

Route::get('/proizvod/{id}', 'MyController@proizvod');
