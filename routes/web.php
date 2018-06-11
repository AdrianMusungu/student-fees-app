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

Route::get('/', function () {
    return view('91375/home');
});
Route::get('/student', function(){
	return view('91375/student');
});
Route::get('/home', function () {
    return view('91375/home');
});
Route::get('/totalfees', function () {
    return view('91375/totalfees');
});

Route::resource('students', 'StudentController');
Route::resource('fees','FeesController');

Route::get('/fees', function(){
	return view('91375/fees');
});
