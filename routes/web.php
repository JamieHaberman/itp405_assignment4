<?php


Route::get('/', 'TweetsController@index');
Route::get('/tweets/{id}/destroy', 'TweetsController@destroy');
Route::post('/', 'TweetsController@store');
Route::get('/tweets/{id}', 'TweetsController@view');
