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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/ajax/author/modal/{partial}/{id?}', 'AuthorController@getModal');
Route::post('/ajax/author/add-author', 'AuthorController@store');
Route::post('/ajax/author/update-author/{id}', 'AuthorController@update');
Route::post('/ajax/author/delete-author/{id}', 'AuthorController@destroy');

Route::get('/ajax/book/modal/{partial}/{id?}', 'BookController@getModal');
Route::post('/ajax/book/add-book', 'BookController@store');
Route::post('/ajax/book/update-book/{id}', 'BookController@update');
Route::post('/ajax/book/delete-book/{id}', 'BookController@destroy');