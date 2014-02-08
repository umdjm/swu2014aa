<?php

class IssuesController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('issues.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('issues.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$issue = new Issue();
		$issue->name = Input::get("name");
		$issue->desc = Input::get("desc");
		$issue->status = "new";
		$issue->user_id = Auth::user()->id;


		if (Input::hasFile('photo'))
		{
		    //process file input
		    //TODO: Validate that this is an image
		    $newName = Uploader::processInputFilename(Input::file('photo')->getClientOriginalName());
		    try {
		        Input::file('photo')->move(public_path() . '/imgs', $newName);
		    } catch (FileException $e) {
		        return Redirect::back()->with('flash_error', "Your file could not be uploaded. Please try again")->withInput();
		    }
		    $issue->photo = '/imgs/' . $newName;
		}

		$issue->save();
		die("Receiving post");
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
				$issue = Issue::find($id);
        return View::make('issues.show', array("issue" => $issue));
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
		//
	}

}

class Uploader {
    public static function processInputFilename($filename) {
        return time() . '-' . preg_replace('/\s+/', '-', $filename);
    }
}