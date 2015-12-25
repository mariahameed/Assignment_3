<?php namespace App\Http\Controllers;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
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
	public function index()
	{
		$name = "Laravel";

		//For passing single value
		//return view('welcome')->with('name',$name);

		/*for passing multiple values
		return view('welcome')->with([

				'first'=> "Tom",
				'second'=>"Jerry"
			]);
*/
		/*second approach for passing multiple values
		$values=[];
		$values['first'] = 'Tom';
		$values['second'] = 'Jerry';
		return view('welcome',$values);
*/

		//third approach
		$first = 'Tom';
		$second = 'Jerry';
		return view('welcome',compact('first','second'));		


	}
	public function contact()
	{
		$fruits = ['apple', 'mango', 'banana', 'grapes', 'strawberry'];
		return view('contact', compact('fruits'));
	}

}
