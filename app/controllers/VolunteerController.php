<?php

class VolunteerController extends BaseController {

	public function create()
	{
		$name = Input::get('name');
		$phone = Input::get('phone');

		if (Dispatcher::is_logged_in()) {
			Volunteer::add_volunteer($name, $phone);
			return Redirect::to('dashboard');
		} else {
			App::abort(401, 'You are not authorized.');
		}
	}

}

