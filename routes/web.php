<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name('home');

Route::get('locale/{locale}', 'LocalizationController@setLocale')->name('setLocale');

Route::get('/country/{country}/{city_name}', 'CountryController@show')->name('country.show');

Route::get('/search', 'SearchController@search')->name('search');
