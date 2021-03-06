<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();


Route::get('/p/create','PostsController@create');
Route::post('/p','PostsController@store');
Route::get('/p/{post}','PostsController@show')->name('post.show');

Route::patch('/profile/{user}', 'ProfileController@update')->name('profile.update');
Route::get('/profile/{user}/edit', 'ProfileController@edit')->name('profile.edit');
Route::get('/profile/{user}', 'ProfileController@index')->name('profile.show');