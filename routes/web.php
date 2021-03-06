<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function() {
  return redirect('login');
});

Route::middleware('auth')->group(function() {
  Route::get('dashboard/job', 'DashboardController@showJobInfo')->name('showJobInfo');
  Route::get('dashboard/user', 'DashboardController@showUserInfo')->name('showUserInfo');
  Route::post('dashboard/job/search', 'DashboardController@searchJobInfo')->name('jobsearch');
  Route::post('dashboard/user/search', 'DashboardController@searchUserInfo')->name('usersearch');
});


Auth::routes();
