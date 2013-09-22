<?php

Class IncidentController extends BaseController {


        public function create()
        {
                $title = Input::get('title');
                $description = Input::get('description');
		$coordinates = Input::get('coordinates');

                if (Dispatcher::is_logged_in()) {
                        Incident::add_incident($title, $description, $coordinates);
                } else {
                        App::abort(401, 'You are not authorized.');
                }
        }
}

