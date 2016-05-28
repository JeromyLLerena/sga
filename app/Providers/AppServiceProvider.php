<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Validator;

class AppServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		Validator::extend('float_between', function($attribute, $value, $parameters, $validator) {
			$min = (float) $parameters[0];
			$max = (float) $parameters[1];

			return (float) $value >= $min && (float) $value <= $max; 
		});

		require app_path().'/constants.php';
	}

	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}
}
