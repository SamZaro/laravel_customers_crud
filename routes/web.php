<?php

/*
*/



Route::view('/', 'home');

Route::get('contact', 'ContactFormController@create')->name('contact.create');
Route::post('contact', 'ContactFormController@store')->name('contact.store');

Route::view('about', 'about');

Route::get('customers', 'CustomersController@index')->name('customers.index');
Route::get('customers/create', 'CustomersController@create')->name('customers.create');
Route::post('customers', 'CustomersController@store')->name('customers.store');
Route::get('customers/{customer}', 'CustomersController@show')->name('customers.show')->middleware('can:view,customer');
Route::get('customers/{customer}/edit', 'CustomersController@edit')->name('customers.edit');
Route::patch('customers/{customer}', 'CustomersController@update')->name('customers.update');
Route::delete('customers/{customer}', 'CustomersController@destroy')->name('customers.destroy');




//Route::resource('customers', 'CustomersController');

Auth::routes();

Route::get('/home', 'HomeController@index');
