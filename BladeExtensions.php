<?php namespace Flo5581\Larahelpers;

use Illuminate\Support\ServiceProvider;
use Blade;

class BladeExtensions extends ServiceProvider {

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
			return preg_replace('/\@define\((.+)\)/', '<?php ${1}; ?>', $view);
		});
		Blade::extend(function($view){
			return preg_replace('/\@echo\((.+)\)/', '<?php echo ${1}; ?>', $view);
		});
		Blade::extend(function($view){
			return preg_replace('/\@print\((.+)\)/', '<?php print_r( ${1} ); ?>', $view);
		});
		Blade::extend(function($view){
			return preg_replace('/\@dd\((.+)\)/', '<?php dd( ${1} ); ?>', $view);
		});
		Blade::extend(function($view){
			return preg_replace('/\@php/', '<?php', $view);
		});
		Blade::extend(function($view){
			return preg_replace('/\@endphp/', '?>', $view);
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