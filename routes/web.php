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

Route::get('/posts/category/{categoryId}', 'PostController@index');
Route::get('/category/create', 'PostController@create');
Route::post('/category/create', 'PostController@store');

Auth::routes();
