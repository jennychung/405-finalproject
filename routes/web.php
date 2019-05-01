<?php


Route::get('/', function () {
    return view('day');
});

Route::get('/day', 'DayController@index');

Route::get('/explore', 'ExploreController@index');
Route::get('/product/{id}', 'ExploreController@product');
// Route::get('/product/{id}/edit', ['as'=>'genres', 'uses'=>'ProductController@show']);
//
// Route::get('/products', 'ExploreController@index');
// Route::get('/products/new', 'ExploreController@create');
// Route::post('/products', 'ExploreController@store');

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@login');
Route::get('/logout', 'LoginController@logout');

Route::get('/quiz', 'QuizController@index');
Route::post('/quiz', 'QuizController@signup');
Route::get('/skin', 'ProfileController@index');
Route::post('/skin', 'ProfileController@fileUpload');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
