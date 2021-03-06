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

  public function is_tracked_by_user()
  {
    $tracked = DB::table('tracks')
                  ->where('user_id', '=', Auth::user()->id)
                  ->where('issue_id', '=', $this->id)
                  ->get();
    if (count($tracked) == 0) return false;
    else return true;
  }

  public function get_tracking_count() 
  {
    return DB::table('tracks')
      ->where('issue_id', '=', $this->id)
      ->count();
  }

  public static function openCount()
  {
    return Issue::where('status', '<>', 'closed')->count();
  } 

  public static function closedCount()
  {
    return Issue::where('status', '=', 'closed')->count();
  } 
}

