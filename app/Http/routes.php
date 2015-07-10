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
// root route...
Route::get('/', function () {
    return view('welcome');
});

Route::get('/error', function () {
	return view('errors.503');
});


Route::get('/switch_db/{database_name}', [ 'as' => 'switch.database', 'uses' => function($database_name){

	/**
	* function connect_to_database()
	*
	* @var $params (array of database connection configuration. If unset, the default configuration is taken.)
	* @return String : Capsule::MySQLConnection::getDatabaseName()
	*/

	$database = connect_to_database(['database' => $database_name]);
	return 'We are connection to '.$database;
	
}]);


// Controllers RESTful routes...
Route::resource('files', 'FilesController');
Route::resource('organisms', 'OrganismsController');

Route::get('roles_and_permissions/create_permission',[
								'as' => 'roles_and_permissions.permission.create', 
								'uses' => 'RolesAndPermissionsController@create_permission'
													]);

Route::post('roles_and_permissions/permission_store',[
								'as' => 'roles_and_permissions.permission.store', 
								'uses' => 'RolesAndPermissionsController@store_permission'
													]);

Route::get('roles_and_permissions/create_role',[
								'as' => 'roles_and_permissions.role.create', 
								'uses' => 'RolesAndPermissionsController@create_role'
													]);

Route::post('roles_and_permissions/role_store',[
								'as' => 'roles_and_permissions.role.store', 
								'uses' => 'RolesAndPermissionsController@store_role'
													]);

Route::resource('roles_and_permissions', 'RolesAndPermissionsController');


// // Authentication routes...
Route::get('auth/login', ['as' => 'auth.login',
						  'uses' => 'Auth\AuthController@getLogin']
						  );

Route::post('auth/login', ['as' => 'auth.login.post',
						  'uses' => 'Auth\AuthController@postLogin']
						  );

Route::get('auth/logout', ['as' => 'auth.logout',
						  'uses' => 'Auth\AuthController@getLogout']
						  );

Route::get('/dashboard', ['as' => 'auth.dashboard',
							  'uses' => 'Auth\AuthController@getDashboard']
							  );



// Registration routes...
Route::get('auth/register', ['as' => 'auth.sing_up',
						  'uses' => 'Auth\AuthController@getRegister']
						  );

Route::post('auth/register', ['as' => 'auth.sing_up',
						  'uses' => 'Auth\AuthController@postRegister']
						  );