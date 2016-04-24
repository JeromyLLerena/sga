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



Route::group(['as' => 'app', 'namespace' => 'App'], function(){
	Route::group(['as' => '.firemans', 'prefix' => 'firemans', 'namespace' => 'Firemans'], function(){
		Route::get('create', ['as' => '.create', 'uses' => 'FiremanController@showCreate']);
		Route::post('create', ['as' => '.create', 'uses' => 'FiremanController@create']);

		Route::get('overview', ['as' => '.overview', 'uses' => 'FiremanController@showOverview']);
	});
});