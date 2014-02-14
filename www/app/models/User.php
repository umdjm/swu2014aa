<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {
	protected $guarded = array();

	public static $rules = array();

  public function issues()
	{
		return $this->hasMany('Issue');
	}

  public function tracks()
	{
		return $this->hasMany('Track');
	}

  public function tracked_issues()
  {
  		$tracks = $this->tracks;
  		$trackedIssues = array();
  		foreach($tracks as $track){
  			if($track->issue->status != 'closed'){
  				array_push($trackedIssues, $track->issue);
  			}
  		}
  		return $trackedIssues;
  }

	/* Required for Laravel Auth */
	protected $hidden = array('password');

	public function getAuthIdentifier()
	{
	    return $this->getKey();
	}
	public function getAuthPassword()
	{
	    return $this->password;
	}
	public function getReminderEmail()
    {
        return $this->email;
    }
	
	public function canEdit($issue) {
		return $this->role == 'admin' || $this->user_id == $this->id;
	}    

	public function isAdmin()
	{
		 return ($this->role == "admin");
	}
}
