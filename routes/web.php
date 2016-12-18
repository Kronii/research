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
    return view('index');
});

Route::post('/iagree', 'AboutController@iagree');
Route::get('/about', 'AboutController@index');
Route::get('/ctrlone', 'ExperimentController@ctrlone');
Route::get('/expone', 'ExperimentController@expone');
Route::get('/poskus', 'ExperimentController@poskus');
Route::get('/random', 'ExperimentController@random');
Route::get('/ctrlonedivide', 'ExperimentController@ctrlonedivide');
Route::get('/exponedecisions', 'ExperimentController@exponedecisions');




//inserts
Route::get('/ctrlonedivideinsert', 'ExperimentController@ctrlonedivideinsert');
Route::get('/ctrloneinsert', 'ExperimentController@ctrloneinsert');
Route::post('/aboutinsert', 'AboutController@aboutinsert');
Route::get('/cwskrinsert', 'ExperimentController@cwskrinsert');



