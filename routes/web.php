<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', function () {
    return view('admin.dashboard.main');
});
Route::get('/list/category', function () {
    return view('admin.category.list');
});
Route::get('/add/category', function () {
    return view('admin.category.add');
});
Route::get('/edit/category', function () {
    return view('admin.category.edit');
});
Route::get('/login', ['as' => 'getLogin','uses' => 'LoginController@getLogin']);
Route::post('/login', ['as' => 'getLogin','uses' => 'LoginController@postLogin']);

