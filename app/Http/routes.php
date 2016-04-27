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

	Route::group(['as' => '.main', 'prefix' => 'main', 'namespace' => 'Main'], function(){
		Route::get('dashboard', ['as' => '.dashboard', 'uses' => 'MainController@dashboard']);
		Route::get('basic_tables', ['as' => '.basic_tables', 'uses' => 'MainController@basicTables']);
		Route::get('form_component', ['as' => '.form_component', 'uses' => 'MainController@formComponent']);
		Route::get('gallery', ['as' => '.gallery', 'uses' => 'MainController@gallery']);
		Route::get('login', ['as' => '.login', 'uses' => 'MainController@login']);
	});
});