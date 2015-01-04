<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class EmailsController extends Controller {

	/**
	 * Display a listing of all received emails.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('emails.index', 
			[
				'title' => 'Inbox',
				'pageHeader' => 'Inbox'
			]);
	}

	/**
	 * Show the form for creating a new email.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('emails.create', 
			[
				'title' => 'New Email',
				'pageHeader' => 'New Email'
			]);
	}

	/**
	 * Send a newly created email to it's recipients.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified email and its thread.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Update the specified emails state (eg. unread, read, etc.).
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

	/**
	 * Display sent emails.
	 *
	 * @return jSON
	 */
	public function sent()
	{
		return view('emails.sent', 
			[
				'title' => 'Outbox',
				'pageHeader' => 'Outbox'
			]);
	}

	/**
	 * Displayed trashed emails.
	 * 
	 * @return jSON
	 */
	public function drafts()
	{
		return view('emails.drafts', 
			[
				'title' => 'Drafts',
				'pageHeader' => 'Drafts'
			]);
	}

	/**
	 * Displayed trashed emails.
	 * 
	 * @return jSON
	 */
	public function trash()
	{
		return view('emails.trash', 
			[
				'title' => 'Trash',
				'pageHeader' => 'Trash'
			]);	
	}
}
