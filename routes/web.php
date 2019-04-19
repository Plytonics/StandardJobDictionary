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

// indexChange
Route::get('indexChange', function () {
    return view('indexChange');
});

//routes to tables
Route::get('dashboard/jobinfo', "dashboard@showjobtable");

Route::get('dashboard/userinfo', "dashboard@showusertable");

// MainPage
Route::get('MainPage', function () {
    return view('MainPage');
});

// SDJ Delete cand imdex
Route::get('SJD_delete_cand_index', function () {
    return view('SJD_delete_cand_index');
});

// SJD delete comp index
Route::get('SJD_delete_comp_index', function () {
    return view('SJD_delete_comp_index');
});

// SJD employer index
Route::get('templates', function () {
    return view('SJD_employer_index');
});

// SJD get index
Route::get('candidate', function () {
    return view('SJD_index');
});

// SJD question
Route::get('questions', function () {
    return view('SJD_Question');
});

// SJD company dash
Route::get('company', function () {
    return view('SJD_get_Dash');
});

// welcome
Route::get('welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
