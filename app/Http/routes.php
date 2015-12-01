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

Route::post('contact', function(){

	$data = Request::all();

	Mail::send('contactview', $data, function ($m)  {
            $m->from('hello@app.com', 'Your Application');

            $m->to("starlynuben97@gmail.com","Dad")->subject('Website Email');
        });
});
Route::get('employment', "PagesController@showEmployment");
Route::get('faq', "PagesController@showFAQ");
Route::get('terms', "PagesController@showTerms");
Route::get('job', "PagesController@showJob");
