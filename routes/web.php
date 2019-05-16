<?php

Route::domain('xyz.com')->group(function () {
  Route::get('/', function () {
    return view('welcome');
  });
  Route::any('{any}', function () {
    abort(404);
  })->where('any', '.*');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index');
