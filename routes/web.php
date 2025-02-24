<?php

use Illuminate\Support\Facades\Route;

Route::get('/customers/new', 'App\Http\Controllers\CustomerController@new');
Route::post('/customers/create', 'App\Http\Controllers\CustomerController@create')->name('customers.create');
Route::get('/customers/edit/{id}', 'App\Http\Controllers\CustomerController@edit');
Route::post('/customers/update', 'App\Http\Controllers\CustomerController@update');

Route::get('/', function () {
    return view('welcome');
});
