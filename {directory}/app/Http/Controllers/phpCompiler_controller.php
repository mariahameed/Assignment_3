<?php namespace App\Http\Controllers;

class phpCompiler_controller extends Controller {

	/*
	|--------------------------------------------------------------------------
	| php compiler Controller
	|--------------------------------------------------------------------------
	|
	| 
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function compile_php()
	{
		return view('php_compiler');
	}

}