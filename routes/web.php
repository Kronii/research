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

Route::get('/ctrlone', 'ExperimentController@ctrlone');
Route::get('/expone', 'ExperimentController@expone');
Route::get('/ctrlonedivide', 'ExperimentController@ctrlonedivide');
Route::get('/exponedecisions', 'ExperimentController@exponedecisions');

Route::get('/exptwo', 'ExperimentController@ctrltwo');
Route::get('/ctrltwodivide', 'ExperimentController@ctrltwodivide');

Route::get('/ctrlthree', 'ExperimentController@ctrlthree');
Route::get('/expthree', 'ExperimentController@expthree');
Route::get('/ctrlthreedivide', 'ExperimentController@ctrlthreedivide');
Route::get('/expthreedecisions', 'ExperimentController@expthreedecisions');

Route::get('/ctrlfour', 'ExperimentController@ctrlfour');
Route::get('/expfour', 'ExperimentController@expfour');
Route::get('/ctrlfourdivide', 'ExperimentController@ctrlfourdivide');
Route::get('/expfourdecisions', 'ExperimentController@expfourdecisions');
Route::get('/noncute', 'ExperimentController@noncute');

Route::get('/ctrlfive', 'ExperimentController@ctrlfive');
Route::get('/expfive', 'ExperimentController@expfive');
Route::get('/ctrlfivedivide', 'ExperimentController@ctrlfivedivide');
Route::get('/expfivedecisions', 'ExperimentController@expfivedecisions');
Route::get('/whimsicallycute', 'ExperimentController@whimsicallycute');

Route::get('/ctrlsix', 'ExperimentController@ctrlsix');
Route::get('/expsix', 'ExperimentController@expsix');
Route::get('/ctrlsixdivide', 'ExperimentController@ctrlsixdivide');
Route::get('/expsixdecisions', 'ExperimentController@expsixdecisions');
Route::get('/kindschemacute', 'ExperimentController@kindschemacute');

Route::get('/ctrlseven', 'ExperimentController@ctrlseven');
Route::get('/expseven', 'ExperimentController@expseven');
Route::get('/ctrlsevendivide', 'ExperimentController@ctrlsevendivide');
Route::get('/expsevendecisions', 'ExperimentController@expsevendecisions');
Route::get('/brandone', 'ExperimentController@brandone');

Route::get('/ctrleight', 'ExperimentController@ctrleight');
Route::get('/expeight', 'ExperimentController@expeight');
Route::get('/ctrleightdivide', 'ExperimentController@ctrleightdivide');
Route::get('/expeightdecisions', 'ExperimentController@expeightdecisions');
Route::get('/brandtwo', 'ExperimentController@brandtwo');

Route::get('/ctrlnine', 'ExperimentController@ctrlnine');
Route::get('/expnine', 'ExperimentController@expnine');
Route::get('/ctrlninedivide', 'ExperimentController@ctrlninedivide');
Route::get('/expninedecisions', 'ExperimentController@expninedecisions');
Route::get('/brandthree', 'ExperimentController@brandthree');




Route::post('/aboutinsert', 'AboutController@aboutinsert');
Route::get('/cwskrinsert', 'ExperimentController@cwskrinsert');

//inserts for group one
Route::get('/ctrlonedivideinsert', 'ExperimentController@ctrlonedivideinsert');
Route::get('/ctrloneinsert', 'ExperimentController@ctrloneinsert');

Route::get('/ctrltwoinsert', 'ExperimentController@ctrltwoinsert');
Route::post('ctrltwodivideinsert', 'ExperimentController@ctrltwodivideinsert');

Route::get('/ctrlthreeinsert', 'ExperimentController@ctrlthreeinsert');
Route::post('ctrlthreedivideinsert', 'ExperimentController@ctrlthreedivideinsert');

//inserts for group two
Route::get('ctrlfourdivideinsert', 'ExperimentController@ctrlfourdivideinsert');
Route::get('/ctrlfourinsert', 'ExperimentController@ctrlfourinsert');

Route::get('ctrlfivedivideinsert', 'ExperimentController@ctrlfivedivideinsert');
Route::get('/ctrlfiveinsert', 'ExperimentController@ctrlfiveinsert');

Route::get('ctrlsixdivideinsert', 'ExperimentController@ctrlsixdivideinsert');
Route::get('/ctrlsixinsert', 'ExperimentController@ctrlsixinsert');

//inserts for group three
Route::get('ctrlsevendivideinsert', 'ExperimentController@ctrlsevendivideinsert');
Route::get('/ctrlseveninsert', 'ExperimentController@ctrlseveninsert');

Route::get('ctrleightdivideinsert', 'ExperimentController@ctrleightdivideinsert');
Route::get('/ctrleightinsert', 'ExperimentController@ctrleightinsert');

Route::get('ctrlninedivideinsert', 'ExperimentController@ctrlninedivideinsert');
Route::get('/ctrlnineinsert', 'ExperimentController@ctrlnineinsert');




