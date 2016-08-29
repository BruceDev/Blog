<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');


Route::get('/posts', 'PostsController@showPosts');
Route::get('/posts/{id}', 'PostsController@showPost')->where('id', '[0-9]+');

Route::get('/posts/create', 'PostsController@createPost');

Route::post('/submit', 'PostsController@submitPost');