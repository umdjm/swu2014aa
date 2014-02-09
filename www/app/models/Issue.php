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

  public function comments()
  {
      return $this->hasMany('Comment');
  }

  public function priority_string()
  {
    if ($this->priority == 1 ) return "High";
    elseif ($this->priority == 2 ) return "Medium";
    else return "Low";
  }
}

