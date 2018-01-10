<?php

Route::get('/','PostController@index')->name('home');

Route::get('/posts/create','PostController@create');

Route::get('/posts/{post}','PostController@show');

Route::post('/posts','PostController@store');

Route::post('/posts/{post}/comment','CommentController@store');

Route::get('/post/tags/{tag}','TagController@index');



Route::get('/register','RegistrationController@create');

Route::post('/register','RegistrationController@store');

Route::post('/login','SessionsController@store');

Route::get('/login','SessionsController@create');

Route::get('/logout','SessionsController@destroy');



Route::get('/about', function () {
	
    return view('about');
});

Route::get('/user','UserController@getView');

Route::get('/user/{info}','UserController@getViewById');


