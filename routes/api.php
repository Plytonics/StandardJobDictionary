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
Route::get('/getVersion', function(){
		return response("Laravel 6.5", 200);
});
Route::post('store/JobInfo', 'BackupController@createJobInfo');
Route::post('store/UserProfiles', 'BackupController@createUserprofiles');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
