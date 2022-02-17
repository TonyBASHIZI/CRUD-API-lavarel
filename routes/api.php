<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// get all Employees
Route::get('employee','EmployeeController@getEmployee');
// get specific By detail
Route::get('employee/{id}','EmployeeController@getEmployeeById');
// add employee
Route::post('addEmployee','EmployeeController@AddNewEmployee');

// update Employee
Route::post('updateEmployee/{id}','EmployeeController@updateEmployee');