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

/*Main navigation menu*/

/*Route::get('/', 'PagesController@index');*/
Route::get('/', 'PagesController@index');
Route::get('/services', 'PagesController@services');
Route::get('/agents', 'PagesController@agents');
Route::get('/portfolio', 'PagesController@portfolio');
Route::get('/consultation', 'PagesController@consultation');
//Route::get('/contactus', 'PagesController@contactus');
Auth::routes('/users', 'PagesController@users');
Auth::routes('/admin', 'PagesController@admin');
Auth::routes('/email', 'PagesController@email');
Route::get('contact-us', 'ContactUSController@contact-us');
Route::post('contact-us', ['as'=>'contact-us.store','uses'=>'ContactUSController@contactUSPost']);
/*Route::get('/home', 'HomeController@index')->name('home');*/
