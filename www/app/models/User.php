<?php

class User extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

  	public function issues()
	{
		return $this->hasMany('Issue');
	}
}
