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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@index');

Route::get('/load-latest-messages', 'MessagesController@getLoadLatestMessages');

Route::post('/send', 'MessagesController@postSendMessage');

Route::get('/fetch-old-messages', 'MessagesController@getOldMessages');

Route::get('/testingqueries', 'SampleController@testingQueries');

Route::get('/testingUpdates', 'SampleController@testingUpdateQueries');

Route::get('/retrieve', 'SampleController@retrieve');

Route::get('/another_destroy/{id}/test', 'SampleController@another_destroy');

Route::resource('sample_form', 'MyFormController');

Route::view('/userview', 'userview');

Route::view('/index','MyformController@index');

Route::view('/UserController', 'UserController@formSubmit');

Auth::routes();
