<?php

class Volunteer extends Eloquent {

        public function dispatcher()
        {
                return $this->belongsTo('Dispatcher');
        }

        public function incidents()
        {
                return $this->hasMany('Incident');
        }

}

