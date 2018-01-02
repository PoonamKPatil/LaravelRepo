<?php

Route::get('/','PostController@index');

Route::get('/posts/create','PostController@create');

Route::get('/posts/{post}','PostController@show');

Route::post('/posts','PostController@store');





Route::get('/about', function () {
	
    return view('about');
});

Route::get('/user','UserController@getView');

Route::get('/user/{info}','UserController@getViewById');


