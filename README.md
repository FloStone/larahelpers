# larahelpers
Some custom helpers for laravel 5

Register Service Provider in app.php:

'Flo5581\Larahelpers\BladeExtensions'

Laravel functions and definitions:

<span>controller()</span>      ->  Similar to Route::controller()<br>
<span>controllers()</span>     ->  Similar to Route::controllers()<br>
<span>get\_routes()</span>	  ->  Register multiple GET routes in an array, exmaple: get_routes(['/' => function(){return view('index');}, 'test' => 'TestController@index'])
<span>post\_routes()</span>	  ->  Same as get_routes() but with POST requests instead
<span>group()</span>           ->  Similar to Route::group()<br>
<span>input()</span>           ->  Similar to Input::get(), Input::all() (if no value is set)<br>
<span>user()</span>            ->  Similar to Auth::user()<br>
<span>login()</span>           ->  Similar to Auth::login() or Auth::loginUsingId if a User Model or ID is given, example: login($user), login(1)<br>
<span>logout()</span>          ->  Similar to Auth::logout()<br>
<span>check()</span>			  ->  Similar to Auth::check()<br>


New functions and definitions:

days\_in_month($month, $year) -> Calculates days in a month, accepts parameter 1: month (int), parameter 2: year (int)
num\_to_word($number)		 -> Converts a number into words

Blade extensions:

@use(path)    		->  similar to phps use, no semicolon needed, example: @use(App\Models\User)<br>
@define(code)       ->  define variables inside blade, example: @define($i = 1)
@echo(string)		->	echo out stuff, example @echo('hi')
@print(var)			->	print out stuff, example @print($array)
@dd(var)			->	similar to dd(), example: @dd($user)
@php, @endphp		->	basically open and close php tags, example: @php echo 'hi'; @endphp

<style>
	span {
		width:200px;
	}
</style>