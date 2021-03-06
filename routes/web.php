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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', function(){
	return view('home');

});

Route::resource('blog', 'BlogController');

Route::get('admin', 'AdminController@index')->middleware('auth');
//Contact us Route

Route::get('contact', 'ContactController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
