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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', function(){
	echo "Hello Admin";
})->middleware('auth','admin');

Route::get('/student', function(){
	echo "Hello Student";
})->middleware('auth','student');

Route::get('/teacher', function(){
	echo "Hello Teacher";
})->middleware('auth','teacher');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
