<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AuthenticationController extends Controller {

	/**
	 * Display a sign in page.
	 *
	 * @return Response
	 */
	public function signin()
	{
		return view('auth.signin', 
			[
				'title' => 'Sign In'
			]);
	}

	/**
	 * Display a sign up page.
	 *
	 * @return Response
	 */
	public function signup()
	{
		return view('auth.signup', 
			[
				'title' => 'Sign Up'
			]);
	}

}