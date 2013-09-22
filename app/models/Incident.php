<?php

class Incident extends Eloquent {

		protected $fillable = array('title', 'description', 'dispatcher_id', 'coordinates');

		public function dispatcher()
		{
			return $this->belongsTo('Dispatcher');
		}

		public function volunteers()
		{
			return $this->hasMany('Volunteer');
		}

		public static function add_incident($title, $description, $coordinates){
			$incident = Incident::create(array('title' => $title, 'description' => $description, 'dispatcher_id' => Session::get('user')->id, 'coordinates' => $coordinates));
			
			$volunteers = array();
		
			foreach($incident->dispatcher->volunteers as $volunteer)
			{
				$volunteers[$volunteer->phone] = $volunteer->name;
			}
		
			$AccountSid = "AC26eaf500ebb246cefb61e96834aba585";
			$AuthToken = "37529e67f84db998192627ca8a7eb219";

			$client = new Services_Twilio($AccountSid, $AuthToken);
			foreach ($volunteers as $phone => $name) {

			$sms = $client->account->sms_messages->create(
				"702-728-3363", // From this number
				$phone, // To this number
				$title . ' - ' . $description
			);
		}		
	}
}

