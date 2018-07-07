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

Route::get('/', 'PostsController@index');

Route::get('/post/create', 'PostsController@create');
Route::POST('/store/post', 'PostsController@store');
Route::get('/post/{post}', 'PostsController@show');

Route::POST('post/{post}/comments', 'commentsController@store');

Route::get('/register', 'RegistrationsController@create');
Route::POST('/register', 'RegistrationsController@store');

Route::get('/login', 'SessionsController@create');
Route::get('/logout', 'SessionsController@destroy');
Route::post('login', [ 'as' => 'login', 'uses' => 'SessionsController@login']);
