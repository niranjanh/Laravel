<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});


Route::get('/about', function()
{
	// return "about";
	return View::make('pages.about');
});


Route::get('/contact', function()
{
	return "Contact Us";
	// return View::make('contact Us');
});


Route::get('/info', 'PagesController@showInfo');

Route::get('/moreinfo/{id?}', 'PagesController@showMoreInfo');

Route::get('/entry', 'EntryController@showPage');

Route::get('/login', 'LoginController@login');

Route::get('/userLogin', 'UserLoginController@userLogin');

Route::get('/userDetails', 'UserLoginController@userDetails');

Route::get('/register', 'RegisterController@register');

Route::get('/sendId/{id?}', 'RegisterController@sendId');

Route::get('/missing', 'RegisterController@sendTheId');

Route::post('/saveInfo', 'RegisterController@addUser');







