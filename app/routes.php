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

Route::get('/', function()
{
	return View::make('layout');
});


Route::get('/register', 

	array(
        'before' => 'guest',
        function() {
            return View::make('register');
        }
    )	
);

Route::post('/register', 
array(
        'before' => 'csrf', 
        function() {
	 $user = new User;
 	
	$user->email= Input::get('email');
	 $user->username= Input::get('username');
	 $user->password= Hash::make(Input::get('password'));
	 
	 //Add the user
	 try {
                $user->save();
            }
            # Fail
            catch (Exception $e) {
                return Redirect::to('/register')->with('flash_message', 'Sign up failed; please try again.')->withInput();
            }
          # Log the user in
            Auth::login($user);

            return Redirect::to('/layout')->with('flash_message', 'Welcome to chebosi!');

        }

	 
	
	)
	
	
);

Route::get('/login', 
array(
        'before' => 'guest',
        function() {
            return View::make('login');
        }
    )
);

Route::post('/login',

	/*$credentials=Input::only('username','password');
	if(Auth::attempt($credentials)){
		return Redirect::intended('/');
	}
 return Redirect::to('login');*/
 array(
        'before' => 'csrf', 
        function() {

            $credentials = Input::only('username', 'password');

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
