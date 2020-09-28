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

Route::get('/', 'PostController@index')->name('front');
Route::get('/clip', 'PostController@index_clip')->name('clipIndex');
Route::get('/picture', 'PostController@index_picture')->name('pictureIndex');

Route::get('/vtuber', 'VtuberController@index')->name('vtuberData');
Route::get('/vtuber/show/{id}', 'VtuberController@show')->name('vtuberDetailObject');
Route::post('/vtuber_store', 'VtuberController@store')->name('vtuberStore');
Route::post('/vtuber_edit', 'VtuberController@update')->name('vtuberEdit');
Route::post('/vtuber_destroy', 'VtuberController@destroy')->name('vtuberDestroy');

Route::get('/p/{id}', 'PostController@singlepost')->name('postPage');
Route::get('/post/search', 'PostController@search')->name('postSearch');
Route::get('/post/show/{id}', 'PostController@show')->name('postDetailObject');
Route::post('/post_store', 'PostController@store')->name('postStore');
Route::post('/post_edit', 'PostController@update')->name('postEdit');
Route::post('/post_destroy', 'PostController@destroy')->name('postDestroy');

Route::get('/tag', 'TagController@index')->name('tagIndex');
Route::get('/tag/{tag}', 'PostController@searchtag')->name('postSearchTag');
Route::post('/tag_store', 'TagController@store')->name('tagStore');
Route::get('/tag_destroy/{id}', 'TagController@destroy')->name('tagDestroy');

Auth::routes();
