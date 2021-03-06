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

Route::group(['middleware' => 'auth'], function () {
  // Route::get('', [
  //   'as' => 'index',
  //   'uses' => 'ContactController@index'
  // ]);
  Route::get('/', 'ContactController@index')->name('index');
  Route::resource('contacts', 'ContactController');
  Route::post('contacts/upload_image', 'ContactController@upload_image')->name('contacts.upload_image');
  Route::resource('statuses', 'StatusController');
  // Route::post('statuses/delete/{contact}/{status}', 'StatusController@destroy')->name('statuses.destroy');
  // Route::post('statuses', 'StatusController@store')->name('statuses.store');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
