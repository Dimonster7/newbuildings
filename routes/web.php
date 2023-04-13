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

Route::post('/', 'BuildingsController@submit')->name('filtr-form');
Route::get('/', 'BuildingsController@all')->name('main');
// Route::get('/all', function() {
//   $builder = DB::table('builder')->get();
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/help', 'BuildingsController@help')->name('help');
