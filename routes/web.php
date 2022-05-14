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

Route::get('/', function () {
    return view('welcome');
});

// Route::resource('posts', 'PostController');
// Route::resource('first', 'PostFirstController');
Route::get('first', 'PostFirstController@index')->name('first.index');
Route::get('first_create', 'PostFirstController@create2');
Route::post('first', 'PostFirstController@store');
Route::get('first/{post}', 'PostFirstController@show')->name('first.show');
Route::get('first/{post}/edit', 'PostFirstController@edit');
Route::post('first_update/{post}', 'PostFirstController@update');
Route::post('first_delete/{post}', 'PostFirstController@destroy');
// if (env('APP_ENV') === 'local') {
//    URL::forceScheme('https');
// }

