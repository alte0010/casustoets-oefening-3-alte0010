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

Route::get('/', 'HomeController@index');

Route::resource('posts', 'PostsController');
Route::resource('companies', 'CompanyController');
Route::resource('movies', 'MovieController');

/*Route::get('/companies/{companies}/create', 'CompanyController@create');*/

return view('welcome', compact('latestPosts'));
