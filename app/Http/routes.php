<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('home', "PagesController@showHome");
Route::get('gallery', "PagesController@showGallery");
Route::get('contact', "PagesController@showContact");
Route::get('employment', "PagesController@showEmployment");
Route::get('faq', "PagesController@showFAQ");
