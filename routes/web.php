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

Route::get('/', function() {
    return view('welcome');
});

Route::get('/short', function () {
    return view('url.geturl');
});

Route::post('/short', 'UrlsController@short'); //this is the base layout file

Route::get('/short/{id}', 'UrlsController@show');