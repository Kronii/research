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
Route::get('/poskus', 'ExperimentController@poskus');
Route::get('/random', 'ExperimentController@random');

Route::get('/ctrl', 'ExperimentController@ctrl');
Route::get('/exp', 'ExperimentController@exp');

Route::get('/ctrldivide', 'ExperimentController@ctrldivide');

Route::get('/noncute', 'ExperimentController@noncute');
Route::get('/whimsicallycute', 'ExperimentController@whimsicallycute');
Route::get('/kindschemacute', 'ExperimentController@kindschemacute');

Route::get('/brandone', 'ExperimentController@brandone');
Route::get('/brandtwo', 'ExperimentController@brandtwo');
Route::get('/brandthree', 'ExperimentController@brandthree');


Route::post('/aboutinsert', 'AboutController@aboutinsert');
Route::get('/cwskrinsert', 'ExperimentController@cwskrinsert');

//inserts
Route::post('/ctrldivideinsert', 'ExperimentController@ctrldivideinsert');
Route::get('/ctrlinsert', 'ExperimentController@ctrlinsert');




