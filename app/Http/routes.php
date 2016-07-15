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


Route::get('modal/{id}', function($id){
	return view('alert.modal', ['id' => $id]);
});

Route::get('login', ['as' => 'login', 'uses' => 'Auth\AuthController@getLogin']);
Route::post('login', ['as' => 'login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@logout', 'middleware' => 'verify.permissions']);

Route::group(['as' => 'app', 'namespace' => 'App', 'middleware' => 'verify.permissions'], function(){
	Route::get('main', ['as' => '.main', 'prefix' => 'main', 'uses' => 'Main\MainController@dashboard']);
	Route::group(['as' => '.firemans', 'prefix' => 'firemans', 'namespace' => 'Firemans'], function(){
		Route::get('create', ['as' => '.create', 'uses' => 'FiremanController@showCreate']);
		Route::post('create', ['as' => '.create', 'uses' => 'FiremanController@create']);

		Route::get('index', ['as' => '.index', 'uses' => 'FiremanController@index']);
	});

	Route::group(['as' => '.alerts', 'prefix' => 'alerts', 'namespace' => 'Alert'], function(){
		Route::get('dashboard', ['as' => '.dashboard', 'uses' => 'AlertController@dashboard']);
		Route::get('index', ['as' => '.index', 'uses' => 'AlertController@index']);
		Route::get('form_component', ['as' => '.form_component', 'uses' => 'AlertController@formComponent']);
		Route::get('gallery', ['as' => '.gallery', 'uses' => 'AlertController@gallery']);
	});

	Route::get('map/{alert_id}', ['as' => '.map', 'uses' => 'Alert\AlertController@showMap']);
});

Route::group(['as' => 'api', 'namespace' => 'Api', 'prefix' => 'api'], function(){
	Route::group(['as' => '.alerts', 'prefix' => 'alerts', 'namespace' => 'Alert'], function(){
		Route::post('/', ['as' => 'send', 'uses' => 'AlertController@create']);
	});
});