<?php


Route::get('/', function () {
    return view('day');
});
Route::get('/day', 'DayController@index');
Route::get('/explore', 'ExploreController@index');
Route::get('/login', 'LoginController@index');
Route::get('/product', 'ProductController@index');
Route::get('/quiz', 'QuizController@index');
Route::get('/skin', 'ProfileController@index');
