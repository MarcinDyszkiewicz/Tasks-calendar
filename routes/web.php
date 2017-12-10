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

use Illuminate\Support\Facades\Route;

Route::get('/', 'TaskController@index')->name('index');

//task crud
Route::post('/tasks', 'TaskController@taskStore');

Route::get('/tasks/{task_id}', 'TaskController@taskShow');

Route::put('tasks/{task_id}', 'TaskController@taskUpdate');

Route::delete('tasks/{task_id}', 'TaskController@taskDestroy');