<?php

class Issue extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function user()
	{
		return $this->belongsTo('User');
	}

  public function tracks()
  {
      return $this->hasMany('Track');
  }

  public function trackers()
  {
      return $this->hasManyThrough('User', 'Track');
  }
}

