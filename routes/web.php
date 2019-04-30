<?php


Route::get('/', function () {
    return view('day');
});

Route::get('/day', 'DayController@index');

Route::get('/explore', 'ExploreController@index');
// Route::post('/explore', 'ExploreController@filter');
// Route::post('/product/{id}', 'ExploreController@search');
// Route::get('/product/{id}', 'ExploreController@search');
  // Route::post('/product/{id}', 'ExploreController@search');



Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@login');
Route::get('/logout', 'LoginController@logout');
// Route::get('/product', 'ProductController@index');
Route::get('/quiz', 'QuizController@index');
Route::get('/skin', 'ProfileController@index');
Route::post('/skin', 'ProfileController@fileUpload');
