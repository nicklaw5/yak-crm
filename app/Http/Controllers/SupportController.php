<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SupportController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('support.index');
	}

	/**
	 * Show the form for creating a new support ticket.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created support ticket.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified support ticket.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified suport ticket.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified support ticket.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * ...
	 *
	 * @return Response
	 */
	public function myTickets()
	{
		return 'Staff can manage the tickets they own here.';
	}

	/**
	 * ...
	 *
	 * @return Response
	 */
	public function tickets()
	{
		return 'All open/unclaimed support ticket will live here.';
	}
}
