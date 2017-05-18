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

// Language group
Route::group(
	[
		'prefix' => LaravelLocalization::setLocale(),
		'middleware' => [ /*'localeSessionRedirect', 'localizationRedirect'*/]
	],
	function()
	{
    Route::get('/', function () {
        return view('home');
    });

    // Auth routes
    Auth::routes();

    Route::get('/home', 'HomeController@index');
		Route::get('/taules', 'ProductController@getTaules');
		Route::get('/fixacions', 'ProductController@getFixacions');
		Route::get('/botes', 'ProductController@getBotes');
		Route::get('/taules/add/{preu}', 'ProductController@calculador');
		Route::get('total/delete', 'ProductController@resetPreu');

	});
