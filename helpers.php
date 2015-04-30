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

if ( ! function_exists('input'))
{
	/**
	 * Add multiple controllers to routes
	 *
	 * @param array $controllers
	 * @return void
	 */
	function input($name)
	{
		return \Input::get($name);
	}
}