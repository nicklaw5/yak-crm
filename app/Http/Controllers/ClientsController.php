<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ClientsController extends Controller {

	/**
	 * Display a listing of all clients.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('clients.index',
			[	
				'title' => 'Clients',
				'pageHeader' => 'All Clients'
			]);
	}

	/**
	 * Show the form for creating a new client.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('clients.create',
			[
				'title' => 'New Client',
				'pageHeader' => 'Create New Client'
			]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
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
