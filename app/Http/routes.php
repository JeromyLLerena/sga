<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('login', ['as' => 'login', 'uses' => 'LoginController@getLogin']);
Route::post('login', ['as' => 'login', 'uses' => 'LoginController@postLogin']);

Route::get('create', ['as' => 'create', 'uses' => 'FiremanController@showCreate']);
Route::post('create', ['as' => 'create', 'uses' => 'FiremanController@create']);

Route::get('overview', ['as' => 'overview', 'uses' => 'FiremanController@showOverview']);