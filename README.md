# larahelpers
Some custom helpers for laravel 5

Register Service Provider in app.php:

'Flo5581\Larahelpers\BladeExtensions'

Laravel functions and definitions:

`controller()`      ->  Similar to `Route::controller()`<br>
`controllers()`     ->  Similar to `Route::controllers()`<br>
`get\_routes()`	  ->  Register multiple GET routes in an array,<br>
example: `get_routes(['/' => function(){return view('index');}, 'test' => 'TestController@index']);`

`post\_routes()`	  ->  Same as `get_routes()` but with POST requests instead
`group()`           ->  Similar to `Route::group()`<br>
`input()`           ->  Similar to `Input::get()`, `Input::all()` (if no value is set)<br>
`user()`            ->  Similar to `Auth::user()`<br>
`login()`           ->  Similar to `Auth::login()` or `Auth::loginUsingId()` if a User Model or ID is given, example: login($user), login(1)<br>
`logout()`          ->  Similar to `Auth::logout()`<br>
`check()`			  ->  Similar to `Auth::check()`<br>


New functions and definitions:

`days\_in_month($month, $year)` -> Calculates days in a month, accepts parameter 1: month (int), parameter 2: year (int)<br>
`num\_to_word($number)`		 -> Converts a number into words<br>

Blade extensions:

`@use(path)`    		->  similar to phps use, no semicolon needed, example: `@use(App\Models\User)`<br>
`@define(code)`       ->  define variables inside blade, example: `@define($i = 1)`<br>
`@echo(string)`		->	echo out stuff, example `@echo('hi')`<br>
`@print(var)`			->	print out stuff, example `@print($array)`<br>
`@dd(var)`		->	similar to `dd()`, example: `@dd($user)`<br>
`@php, @endphp`		->	basically open and close php tags, example: `@php echo 'hi'; @endphp`<br>
