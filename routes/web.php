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

Route::get('/', 'HomeController@index');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/about', 'HomeController@showAbout');
Route::get('/author', 'HomeController@showAuthor');
Route::get('/jobs', 'HomeController@showJobs');
Route::get('/contact', 'HomeController@showContact');
Route::post('/query', 'HomeController@sendQuery');

Route::get('/{url}', 'HomeController@show');
