<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		return View::make('pages.index');
	}

	public function login()
	{
		$email = Input::get('email');
		$password = Input::get('password');

		$user = Dispatcher::attempt($email, $password);

		if ($user) {
			echo "You logged in correctly";
			Session::put('user', $user);
		} else {
			App::abort(401, 'You are not authorized.');
		}
	}

}
