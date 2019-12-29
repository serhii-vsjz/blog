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
Route::patch('/post/comment/{postId}', 'CommentController@create')->name('add_comment');
Route::get('/post/comment/{commentId}', 'CommentController@destroy')->name('delete_comment');

Route::get('/welcome', function (){
    return view('welcome');
});
Route::get('/', 'HomeController@index')->name('home');

Route::get('/posts', 'PostController@index');
Route::get('/post/create', 'PostController@create');
Route::post('/post/create', 'PostController@store');

Route::get('/post/{postId}', 'PostController@show')->name('show_post');
Route::put('/post/{postId}', 'PostController@edit')->name('edit_post');
Route::patch('/post/{postId}', 'PostController@update')->name('update_post');
Route::delete('/post/{postId}', 'PostController@destroy')->name('delete_post');





Route::get('/categories', 'CategoryController@index');
Route::get('/category/create', 'CategoryController@create');
Route::post('/category/create', 'CategoryController@store');
Route::get('/category/{categoryId}', 'CategoryController@show')->name('show_category');
Route::put('/category/edit/{categoryId}', 'CategoryController@edit')->name('edit_category');
Route::delete('/category/{categoryId}', 'CategoryController@destroy')->name('delete_category');

Auth::routes();
