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
       }


}

