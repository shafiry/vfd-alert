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
			Session::put('user', $user);

			// // set your AccountSid and AuthToken from www.twilio.com/user/account
			// $AccountSid = "AC26eaf500ebb246cefb61e96834aba585";
			// $AuthToken = "37529e67f84db998192627ca8a7eb219";
			 
			// $client = new Services_Twilio($AccountSid, $AuthToken);
			 
			// $sms = $client->account->sms_messages->create(
			//     "702-728-3363", // From this number
			//     "347-418-6759", // To this number
			//     "Test message!"
			// );
			 
			// // Display a confirmation message on the screen
			// //echo "Sent message {$sms->sid}";*/
		} else {
			App::abort(401, 'You are not authorized.');
		}
	}

}
