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

Route::get('/todo', 'TodoController@index');

Route::get('/hello', 'TrialController@index');

Route::get('/todo/{todoId}','TodoController@show');

Route::get('/newTodo','TodoController@new');

Route::post('/store-todo','TodoController@store');

Route::get('/todo/{todo}/edit','TodoController@edit');

Route::get('/todo/{todo}/delete','TodoController@delete');

Route::get('/todo/{todo}/complete','TodoController@complete');

Route::post('/todo/{todo}/update-todo','TodoController@update');