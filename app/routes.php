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

Route::get('/', array('as'=>'home', 'uses' => 'HomeController@home'));
Route::get('/contact', array('as'=>'contact', 'uses' => 'HomeController@contact'));
Route::get('/rooms', array('as'=>'rooms', 'uses' => 'HomeController@rooms'));
Route::get('/rooms/nordicbalcony/', array('as'=>'nordicbalcony', 'uses' => 'HomeController@nordicbalcony'));
Route::get('/rooms/nordicsuites', array('as'=>'nordicbalcony', 'uses' => 'HomeController@nordicsuites'));
Route::get('/rooms/deluxebalcony', array('as'=>'deluxebalcony', 'uses' => 'HomeController@deluxebalcony'));
Route::get('/rooms/deluxe', array('as'=>'deluxe', 'uses' => 'HomeController@deluxe'));
Route::get('/rooms/standard', array('as'=>'standard', 'uses' => 'HomeController@standard'));
Route::get('/offer', array('as'=>'offer', 'uses' => 'HomeController@offer'));
Route::get('/about', array('as'=>'about', 'uses' => 'HomeController@about'));
Route::get('/gallery', array('as'=>'gallery', 'uses' => 'HomeController@gallery'));
Route::get('/terms', array('as'=>'terms', 'uses' => 'HomeController@terms'));
Route::post('/addbooking', array('as'=>'addbooking', 'uses' => 'HomeController@addbooking'));
