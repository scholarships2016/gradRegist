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

Route::get('/profile', 'ProfileController@getProfile');

Route::get('/year', 'ProfileController@getYear');

//Route::get('/{id}/name', 'ProfileController@getName');

Route::get('/profile/name', 'ProfileController@getFirtname');
Route::get('/profile/surname', 'ProfileController@getSurname');
Route::get('/profile/age', 'ProfileController@getAge');
