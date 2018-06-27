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


Route::get('movies/add', function(){ return view('movies.add');});
Route::post('movies/add', 'MovieController@store');

Route::get('actors/{id}', 'ActorController@show')->middleware(['auth', 'test']);

Route::resource('genres', 'GenreController');
Route::get('genres/test', 'GenreController@test');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
