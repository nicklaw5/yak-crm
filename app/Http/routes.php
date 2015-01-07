<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//$router->group(['middleware' => 'auth'], function($router) {

    /* DEFAULT ROUTES */
	get('/', 'MainController@index');
	get('test', 'MainController@test');
	//get('home', 'HomeController@index');

	/* EMAIL ROUTES */
	get('emails/sent', 'EmailsController@sent');
	get('emails/drafts', 'EmailsController@drafts');
	get('emails/trash', 'EmailsController@trash');

	/* SUPPORT ROUTES */
	get('support/my-tickets', 'SupportController@myTickets');
	get('support/tickets', 'SupportController@tickets');

	/* DOMAIN ROUTES */
	get('domains/dns', 'DomainsController@dns');

	/* AUTHENTICATION ROUTES */
	get('auth/signin', 'AuthenticationController@signin');
	get('auth/signup', 'AuthenticationController@signup');

	/* ROUTE RESOURCES */
	$router->resource('auth', 'AuthenticationController');
	$router->resource('projects', 'ProjectsController');
	$router->resource('users', 'UsersController');
	$router->resource('clients', 'ClientsController');
	$router->resource('domains', 'DomainsController');
	$router->resource('notifications', 'NotificationsController');
	$router->resource('themes', 'ThemesController');
	$router->resource('kb', 'KnowledgeBaseController');
	$router->resource('documents', 'DocumentsController');
	$router->resource('leads', 'LeadsController');
	$router->resource('contacts', 'ContactsController');
	$router->resource('support', 'SupportController', ['except' => ['destroy'] ]);
	$router->resource('emails', 'EmailsController', ['except' => ['edit'] ]);

//});


/* CONTROLLER ROUTES */
$router->controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
