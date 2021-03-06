<?php

class TracksController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tracks = Auth::user()->tracks;
    return View::make('tracks.index', array("tracks" => $tracks));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
    return View::make('tracks.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$track = new Track();
		$track->user_id = Auth::user()->id;
		$track->issue_id = Input::get("issue_id");
		$track->notify = false;
		$track->save();

		return Redirect::to('issues/' . $track->issue_id)->with("flash_success", "You're now endorsing this issue!");
		// $redirect = Redirect::route('tracks', $track->id);
		// die("Receiving post");
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
				$track = Track::find($id);
        return View::make('tracks.show', array("track" => $track));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
      return View::make('issues.edit');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
			$issue_id = Track::find($id)->issue->id;
	    Track::destroy($id);

	    return Redirect::to('issues/'.$issue_id)->with("flash_success", "You're no longer endorsing this issue... :[");;
	}

}
