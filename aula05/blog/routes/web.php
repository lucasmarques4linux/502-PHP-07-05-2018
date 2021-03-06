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

// Route::get('/', function () {
//     return view('welcome',['name' => 'Lucas']);
// });


// Route::get('/hello', function () {
//     return view('hello',['name' => 'Lucas']);
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/users', 'UsersController@index');
// Route::post('/users', 'UsersController@store');
// Route::get('/users/{user}', 'UsersController@show');
// Route::put('/users/{user}', 'UsersController@update');
// Route::delete('/users/{user}', 'UsersController@destroy');

Route::get('/', 'PostsController@list');

Route::get('/users/{user}/posts', 'UsersController@posts');
Route::resource('users', 'UsersController');
Route::resource('posts', 'PostsController');
