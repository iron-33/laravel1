<?php
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/pogoda', 'HomeController@pogoda')->name('pogoda');
Route::get('/feedback', 'HomeController@feedback')->name('feedback');
Route::post('/addfeed', 'HomeController@addfeed')->name('addfeed');
