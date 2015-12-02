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
Route::get('employment', "PagesController@showEmployment");
Route::get('faq', "PagesController@showFAQ");
Route::get('terms', "PagesController@showTerms");
Route::get('job', "PagesController@showJob");

Route::get('login', "LoginController@showLoginForm");
Route::post('processLogin',"LoginController@processLogin");
Route::get('logout',"LoginController@logout");

Route::get('contact', "PagesController@showContact");

Route::post('contact', function(){

	$data = Request::all();

	Mail::send('contactview', $data, function ($m)  {
            $m->from('theGoodGuys@website.com', 'Message From Website');

            $m->to("starlynuben97@gmail.com","Company")->subject('Website Email');
        });
});

Route::put('contents/{id}', function($id){

	$content = App\Content::find($id);
	$content -> content = Request::get("value");
	$content -> save();
	return $content->content;
});