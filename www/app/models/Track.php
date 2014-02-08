<?php

class Track extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function user()
	{
	    return $this->belongsTo('User');
	}

	public function issue()
	{
	    return $this->belongsTo('Issue');
	}

}
