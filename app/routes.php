<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

# test database
Route::get('mysql-test', function() {

    # Print environment
    echo 'Environment: '.App::environment().'<br>';

    # Use the DB component to select all the databases
    $results = DB::select('SHOW DATABASES;');

    # If the "Pre" package is not installed, you should output using print_r instead
    echo print_r($results);

});

Route::get('/', function()
{
	return View::make('layout');
});

Route::get('/facility', function()
{
	return View::make('facility');
});
Route::get('/staff', function()
{
	return View::make('staff');
});

Route::get('/signup',
    array(
        'before' => 'guest',
        function() {
            return View::make('signup');
        }
    )
);

# post the signup
Route::post('/signup', 
    array(
        'before' => 'csrf', 
        function() {

            $user = new User;
            $user->email    = Input::get('email');
            $user->password = Hash::make(Input::get('password'));

            # Try to add the user 
            try {
                $user->save();
            }
            # Fail
            catch (Exception $e) {
                return Redirect::to('/signup')->with('flash_message', 'Sign up failed; please try again.')->withInput();
            }

            # Log the user in
            Auth::login($user);

            return View::make('/layout')->with('flash_message', 'Welcome to chebosi!');

        }
    )
);

#login
Route::get('/login',
    array(
        'before' => 'guest',
        function() {
            return View::make('login');
        }
    )
);

# post login
Route::post('/login', 
    array(
        'before' => 'csrf', 
        function() {

            $credentials = Input::only('email', 'password');

            if (Auth::attempt($credentials, $remember = true)) {
                return Redirect::intended('/')->with('flash_message', 'Welcome Back!');
            }
            else {
                return Redirect::to('/login')->with('flash_message', 'Log in failed; please try again.');
            }

            return Redirect::to('login');
        }
    )
);


Route::get('/logout', function()
{
	
	Auth::logout();
return View::make('logout');	
});

Route::get('/alumni', array(
'before'=>'auth',
function(){

	return View::make('alumni');	
}));

# register alumni

Route::get('regalumni', function()
{
	return View::make('regalumni');
});

# Save alumni info in the database

Route::post('/regalumni', 
    array(
        'before' => 'csrf', 
        function() {

            $alumni = new Alumni;
            $alumni->firstname = Input::get('firstname');
			$alumni->lastname = Input::get('lastname');
			$alumni->graduation_year= Input::get('graduation_year');
			$alumni->contact_email = Input::get('contact_email');
			
            # add alumni in the alumni table 
            try {
                $alumni->save();
            }
            # Fail
            catch (Exception $e) {
                return Redirect::to('/regalumni')->with('flash_message', 'Registration failed; please try again.')->withInput();
            }


            return View::make('/alumni')->with('flash_message', 'Welcome to alumni page!');

        }
    )
);



