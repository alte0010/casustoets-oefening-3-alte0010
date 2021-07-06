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


Route::get('errors/500', 'HomeController@index');

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::resource('/users', 'UsersController', ['except' => ['show', 'create', 'store']]);
});
/*Route::get('/companies/{companies}/create', 'CompanyController@create');*/

//return view('welcome', compact('latestPosts'));

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/welcome', 'HomeController@index')->name('welcome');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index');
    Route::resource('posts', 'PostsController');
    Route::resource('companies', 'CompanyController');
    Route::resource('movies', 'MovieController');

});

Route::get('error/{error}', function($error) {
    abort($error);
});

