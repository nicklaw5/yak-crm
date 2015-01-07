<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MainController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('main.index', 
			[
				'title' => 'Dashboard'
			]);
	}

	public function test()
	{
		return view('main.test', 
			[
				'title' => 'Inline Test'
			]);
	}
}