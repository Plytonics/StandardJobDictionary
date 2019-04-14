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
Route::get('/StandardJobDictionary/resources/views', function () {
    return view('indexChange');
});

// MainPage
Route::get('/StandardJobDictionary/resources/views', function () {
    return view('MainPage');
});

// SDJ Delete cand imdex
Route::get('/StandardJobDictionary/resources/views', function () {
    return view('SJD_delete_cand_index');
});

// SJD delete comp index
Route::get('/StandardJobDictionary/resources/views', function () {
    return view('SJD_delete_comp_index');
});

// SJD employer index
Route::get('/StandardJobDictionary/resources/views', function () {
    return view('SJD_employer_index');
});

// SJD get Dash
Route::get('/StandardJobDictionary/resources/views', function () {
    return view('SJD_index');
});

// SJD index
Route::get('/StandardJobDictionary/resources/views', function () {
    return view('SJD_Question');
});

// SJD Questions
Route::get('/StandardJobDictionary/resources/views', function () {
    return view('welcome');
});
