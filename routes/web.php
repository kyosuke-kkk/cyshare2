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
    //return view('welcome');
    // return view('top');
// });


Auth::routes();

Route::get('/posts/create', 'PostController@create')->name('posts.create')->middleware('auth');
Route::get('/', 'PostController@index')->name('posts.index');
Route::get('record', 'UserController@record')->name('users.record');

Route::resource('posts','PostController', ['except' => ['index','create']]);
Route::resource('users','UserController');
Route::resource('users','UserController');