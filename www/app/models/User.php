<?php

class User extends Eloquent {
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
      return $this->hasManyThrough('Issue', 'Track');
  }

}
