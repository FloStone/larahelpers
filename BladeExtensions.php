<?php namespace Flo5581\Larahelpers;

use Illuminate\Support\ServiceProvider;
use Blade;

class BladeExtenderServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		Blade::extend(function($view){
			return preg_replace('/\@use\((.+)\)/', '<?php use ${1}; ?>', $view);
		});
		Blade::extend(function($view){
			return preg_replace('/\@php\((.+)\)/', '<?php ${1} ?>', $view);
		});
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

}