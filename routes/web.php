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

Route::get('/', 'ControllerCategory@index') -> name('cat.index');

Route::get('/category/{id}', 'ControllerCategory@show') -> name('cat.show');
Route::get('/post/{id}', 'ControllerPost@show') -> name('post.show');
Route::get('/admin/post/edit/{id}', 'ControllerPost@edit') -> name('post.edit');
Route::post('/post/{id}', 'ControllerPost@update') -> name('post.update');

Route::get('/admin/post/create', 'ControllerPost@create') -> name('post.create');
Route::post('/', 'ControllerPost@store') -> name('post.store');
Route::get('/delete/{id}', 'ControllerPost@destroy') -> name('post.destroy');

Route::get('/tag/{id}', 'ControllerTag@show') -> name('tag.show');
Route::get('/tagList', 'ControllerTag@index') -> name('tag.index');
