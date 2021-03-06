<?php

class UsersController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('users.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('users.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$pwd = Input::get("password");
		if( strcmp($pwd, Input::get("reenter-password")) != 0) {
			return Redirect::back()->with('flash_error', "Passwords do not match")->withInput();
		}

		$user = new User();	
		$user->name = Input::get("name");
		$user->email = Input::get("email");
		$user->password = Hash::make($pwd);

		$user->save();

		Auth::loginUsingId($user->id);

		return Redirect::to('/issues');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        return View::make('users.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        return View::make('users.edit');
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

	public function login()
	{
		$user = array(
			'email' => Input::get('email'),
			'password' => Input::get('password')
		);   
		if (Auth::attempt($user)) {
			if (Session::has('returnUrl'))
			{
				$intendedDestination = Session::get('returnUrl');
				Session::forget('returnUrl');
			    return Redirect::to($intendedDestination)
		    	->with('flash_success', 'You are successfully logged in.');
			}
        	return Redirect::to('/issues')->with('flash_success', 'You are successfully logged in!');
        }
        return Redirect::to('/')->with('flash_error', 'There was an error logging you in. Please try again.');
	}

	public function logout() {
	    Auth::logout();

	    return Redirect::to('/')
	        ->with('flash_success', 'You are successfully logged out.');
	}

}
