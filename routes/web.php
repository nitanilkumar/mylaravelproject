<?php

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

Route::get('/', 'IndexController@index')->name('index');
Route::get('/authors', 'IndexController@authors')->name('authors');

Route::get('/contact', 'IndexController@getcontact')->name('contact');
Route::post('/submit-contact', 'IndexController@submitcontact')->name('contact_submit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/post-quote', 'HomeController@postQuote')->name('post_quote');
