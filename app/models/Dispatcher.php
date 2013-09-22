<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Dispatcher extends Eloquent implements UserInterface, RemindableInterface {

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

	public function incidents()
	{
        	return $this->hasMany('Incident');
	}

	public function volunteers()
	{
		return $this->hasMany('Volunteer');
	}

	public static function attempt($email, $password)
	{
		$user = Dispatcher::where('email', $email)->where('password', $password)->first();
		if ($user)
		{
			return $user;
		}

		return false;
	}

	public static function is_logged_in()
	{
		if (Session::get('user')->id)
		{
			return true;
		}

		return false;
	}

}

