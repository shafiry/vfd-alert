class Incident extends Eloquent {

        public function dispatcher()
        {
                return $this->belongsTo('Dispatcher');
        }

        public function volunteers()
        {
                return $this->hasMany('Volunteer');
        }

}

