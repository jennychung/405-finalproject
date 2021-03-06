<?php


Route::get('/', function () {
    return view('/explore');
});

Route::middleware(['authenticated'])->group(function () {
    Route::get('/day', 'DayController@index');

    Route::get('/skin', 'ProfileController@index');
    Route::post('/skin', 'ProfileController@fileUpload');


    Route::get('/product/{id}', 'ExploreController@product');
    Route::get('/explore/new', 'ProductController@create');
    Route::post('/explore', 'ProductController@store');

    Route::get('/products/favorites', 'ExploreController@productindex')->name('product.fav');
    Route::get('/products/{product}', 'ExploreController@show')->name('product.show');
    Route::post('/products/{product}/favorites', 'ExploreController@store')->name('product.fav.store');
    Route::delete('/products/{product}/favorites', 'ExploreController@destroy')->name('product.fav.destroy');
});
Route::get('/explore', 'ExploreController@index');

Route::get('/login', 'LogInController@index');
Route::post('/login', 'LogInController@login');
Route::get('/logout', 'LogInController@logout');

Route::get('/quiz', 'QuizController@index');
Route::post('/quiz', 'QuizController@signup');

Route::get('/', 'ExploreController@index');




Auth::routes();
