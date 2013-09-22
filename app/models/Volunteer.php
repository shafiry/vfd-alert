<?php

class Volunteer extends Eloquent {

	protected $fillable = array('name', 'phone', 'dispatcher_id');

        public function dispatcher()
        {
                return $this->belongsTo('Dispatcher');
        }

        public function incidents()
        {
                return $this->hasMany('Incident');
        }

	public static function add_volunteer($name, $phone){
		$volunteer = Volunteer::where('phone', $phone)->first();

		if (!$volunteer)
		{
			Volunteer::create(array('name' => $name, 'phone' => $phone, 'dispatcher_id' => Session::get('user')->id));
		}
	}
}

