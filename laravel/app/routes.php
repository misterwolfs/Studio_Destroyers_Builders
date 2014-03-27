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

Route::get('/', 'HomeController@showWelcome');

Route::get('about', array('uses' => 'HomeController@showAbout'));

Route::get('contact', 'HomeController@showContact');


Route::group(array('prefix' => 'admin'), function() {

    Route::get('/', array('before' => 'auth', 'uses' => 'AdminController@showOverview'));

    Route::group(array('prefix' => 'login'), function() {

        Route::get('/', 'AdminController@login');

        Route::post('check', 'AdminController@loginCheck');

    });

    Route::get('logout', array('before' => 'auth', 'uses' => 'AdminController@logout'));

});