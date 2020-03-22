<?php

Route::get('/404', function(){
    return view('inc.error')->with('title','Page Not Found');
});


Route::get('/about','InitialController@about');
//Products
Route::get('/', 'ProductController@index');
Route::get('/products/{brand}','ProductController@show');


//Image Upload
Route::get('/product-images','ImageController@index');
Route::get('/product-images/create', 'ImageController@create');
Route::post('/product-images','ImageController@store');

// Route::get('/home', 'InitialController@index')->name('home');
Auth::routes();

Route::delete('/logout','HomeController@destroy');

Route::get('/dashboard','InitialController@index')->middleware('auth');

//Customer
Route::get('/customers','CustomerController@index');
Route::get('/customers/create','CustomerController@create');
Route::post('/customers','CustomerController@store');
Route::get('/customers/{user}/edit','CustomerController@edit');
Route::put('customers/{user}','CustomerController@update');
Route::delete('/customers/{user}','CustomerController@destroy');
Route::put('customers/{user}/approve','CustomerController@approve');
Route::put('customers/{user}/deny', 'CustomerController@deny');

//Brands
Route::get('/brands','BrandController@index');
Route::get('/brands/create', 'BrandController@create');
Route::post('/brands','BrandController@store');
Route::get('/brands/{brand}','BrandController@show');
Route::get('/brands/{brand}/edit','BrandController@edit');
Route::put('brands/{brand}','BrandController@update');
Route::delete('brands/{brand}','BrandController@destroy');
//Watch Models
Route::get('/models', 'WatchController@index');
Route::get('/models/create', 'WatchController@create');
Route::post('/models','WatchController@store');
Route::get('/models/{watch}/edit', 'WatchController@edit');
Route::put('/models/{watch}','WatchController@update');
Route::delete('/models/{watch}','WatchController@destroy');


// Route::get('/home', 'HomeController@index')->name('home');
