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

Route::get('todos','TodoController@index');

Route::get('todos/{todo}','TodoController@show');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('createtodos','TodoController@create');

Route::post('storetodos','TodoController@store');

//Route::get('/edit','TodoController@edit');

Route::get('/edit/{todosid}','TodoController@edit');

Route::post('updatetodos/{todosid}','TodoController@update');

Route::get('delete/{todosid}','TodoController@delete');