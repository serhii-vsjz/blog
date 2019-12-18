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
Route::get('/post/show/{postId}', 'PostController@show');
Route::get('/post/create', 'PostController@create');
Route::post('/post/create', 'PostController@store');
Route::get('/category/create', 'CategoryController@create');
Route::post('/category/create', 'CategoryController@store');

Route::get('/categories', 'CategoryController@index');

Route::get('/category/edit/{id}', 'CategoryController@edit')->name('category_edit');
Route::post('/category/edit/{id}', 'CategoryController@update')->name('update');

Route::get('/category/delete/{id}', 'CategoryController@destroy')->name('category_delete');

Auth::routes();
