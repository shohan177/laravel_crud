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

Route::get('/','CrudController@showCreate') -> name('create');
Route::get('table','CrudController@showTable') -> name('table');
Route::post('add_student','CrudController@insertStudent') -> name('insert');
Route::get('single_view/{id}','CrudController@showSingle') -> name('singleView');
Route::get('delete_student/{id}','CrudController@deleteStudent') -> name('deleteStudent');
Route::get('edit_student/{id}','CrudController@editStudent') -> name('editStudentData');
Route::post('update_student/{id}','CrudController@upadateStudent') -> name('updateStudent');
