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



Route::get('/','PagesController@index');
Route::resource('posts','PostsController');
Route::PATCH("posts/update","PostsController@update")->name("update");
Route::get("posts/edit/{id}","PostsController@edit")->name("edit");
Route::get("posts/destroy/{id}","postsController@destroy")->name("destroy");

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
