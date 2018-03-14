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
route::get('/','PostController@index');
route::get('post/create','PostController@create');
route::get('/show/{post}','PostController@show');
route::post('/posts','PostController@store');