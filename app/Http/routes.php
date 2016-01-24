<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'MainController@index');
Route::get('/about', 'MainController@showAbout');
Route::get('/join', 'MainController@showJoin');

Route::get('/download', 'DownloadController@getAutoLink');
Route::get('/d', 'DownloadController@getAutoLink');

Route::get('/strategies', 'StrategyController@index');
Route::get('/strategy/{id}', 'StrategyController@show');
Route::get('/product/{id}', 'ProductController@show');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
