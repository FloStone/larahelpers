# larahelpers
Some custom helpers for laravel 5

Laravel functions and definitions:

controller()    Similar to Route::controller()
controllers()   Similar to Route::controllers()
input()         Similar to Input::get(), Input::all() (if no value is set)
user()          Similar to Auth::user()
login()         Similar to Aut::login()
logout()        Similar to Auth::logout()


New functions and definitions:

days_in_month()   Calculates days in a month, accepts parameter 1: month (int), parameter 2: year (int)
