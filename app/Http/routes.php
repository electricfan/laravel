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

Route::get('/', 'mot@index');
Route::get('home', 'mot@index');
Route::get('profile', 'mot@profile');
Route::get('employee-data', 'mot@employee_data');
Route::get('updates', 'mot@updates');
Route::get('sales', 'mot@sales');
Route::get('finance', 'mot@finance');
Route::get('legal', 'mot@legal');
Route::get('credit-officer-status/{branchname}/{name}', 'mot@cos');
Route::get('branch-company-kpi/{branchname}', 'mot@bckpi');
Route::get('credit-officer-sales-kpi/{branchname}/{name}', 'mot@coskpi');
Route::get('disputes/{name}', 'mot@disputes');
Route::get('ob/{name}', 'mot@ob');
Route::get('client-total-due', 'mot@ctd');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

//Route::post('test');
