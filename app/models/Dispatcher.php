class Dispatcher extends Eloquent {

	public function incidents()
	{
        	return $this->hasMany('Incident');
	}

	public function volunteers()
        {
                return $this->hasMany('Volunteer');
        }

}

