<?php

if ( ! function_exists('controller'))
{
 	/**
 	 * Add a controller to routes
 	 *
 	 * @param string $uri
 	 * @param string $controller
 	 * @param array $names
 	 * @return void
 	 */   
 	function controller($uri, $controller, $names = [])
 	{
 		return app('router')->controller($uri, $controller, $names);
 	}
 }

 if ( ! function_exists('controllers'))
 {
	/**
	 * Add multiple controllers to routes
	 *
	 * @param array $controllers
	 * @return void
	 */
	function controllers(array $controllers)
	{
		return app('router')->controllers($controllers);
	}
}

if ( ! function_exists('group'))
{
	/**
	 * Create a route group
	 *
	 * @param array $attributes
	 * @param Closure $callback
	 */
	function group($attributes, $callback)
	{
		return app('router')->group($attributes, $callback);
	}
}

if ( ! function_exists('input'))
{
	/**
	 * Retreive the input of a form
	 *
	 * @param string $name
	 * @return void
	 */
	function input($name = null)
	{
		if (is_null($name))
		{
			return app('request')->all();
		}
		else
		{
			return app('request')->get($name);
		}
	}
}

if ( ! function_exists('user'))
{
	/**
	 * Get the current logged in user
	 *
	 * @return void
	 */
	function user()
	{
		return app('auth')->user();
	}
}

if ( ! function_exists('login'))
{
	/**
	 * Attempt to login a user
	 * Attempt with input array or model
	 *
	 * @param array $creadentials
	 * @return void
	 */
	function login($credentials)
	{
		if ($credentials instanceof Illuminate\Database\Eloquent\Model)
			return app('auth')->loginUsingId( $credentials->id )
		else
			return app('auth')->attempt($credentials);
	}
}

if ( ! function_exists('logout'))
{
	/**
	 * Logout the current user
	 *
	 * @return void
	 */
	function logout()
	{
		return app('auth')->logout();
	}
}