<?php

\Blade::extend(function($view){
	$pattern = \Blade::createMatcher('php');

	return preg_replace($pattern, "<?php $1 ?>", $view);
});