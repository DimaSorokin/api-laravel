<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/tasks', 'TaskController@index');
Route::post('/tasks', 'TaskController@store');
Route::patch('/tasks/{id}', 'TaskController@update');
Route::patch('/tasksCheckAll', 'TaskController@updateAll');
Route::delete('/tasks/{task}', 'TaskController@destroy');
Route::delete('/tasksDeleteCompleted', 'TaskController@destroyCompleted');



