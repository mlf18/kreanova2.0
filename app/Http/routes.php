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
Route::auth();
Route::get('/', 'HomeController@index');
Route::get('/artikel', 'HomeController@artikel');
Route::get('/panduan', 'HomeController@panduan');
Route::get('/direktori', 'HomeController@direktori');
Route::get('/polling', 'HomeController@polling');
Route::get('/rekap', 'HomeController@rekap');
Route::get('/daftar-pemenang', 'HomeController@daftarpemenang');

Route::group([
	'middleware'=>['auth']] ,function(){

	Route::get('users', function() {
        if($this->user->role('superadmin'))
            return redirect('/users');
        if($this->user->isManager())
            return redirect('/dashboard/manager');

        return redirect('/home');
     });

	// Route::get('/', function()
	// {
	// 	return View::make('home');
	// });

	Route::get('/charts', function()
	{
		return View::make('mcharts');
	});

	Route::get('/tables', function()
	{
		return View::make('table');
	});

	Route::get('/forms', function()
	{
		return View::make('form');
	});

	Route::get('/grid', function()
	{
		return View::make('grid');
	});

	Route::get('/buttons', function()
	{
		return View::make('buttons');
	});


	Route::get('/icons', function()
	{
		return View::make('icons');
	});

	Route::get('/panels', function()
	{
		return View::make('panel');
	});

	Route::get('/typography', function()
	{
		return View::make('typography');
	});

	Route::get('/notifications', function()
	{
		return View::make('notifications');
	});

	Route::get('/blank', function()
	{
		return View::make('blank');
	});

	// Route::get('/login', function()
	// {
	// 	return View::make('login');
	// });

	Route::get('/documentation', function()
	{
		return View::make('documentation');
	});

	

	

	Route::resources([
		'pengusul' => 'PengusulController',
		'penguji' => 'PengujiController',
		'admin' => 'AdminController',
		'quesioner' => 'QuesionerController',
		'bupati' =>'BupatiController',
		'permission' =>'PermissionController',
		'role' => 'RoleController',
		'test' => 'TestController',
		'users' => 'UserController',
		'proposals' => 'ProposalController'
	]);

});

	

