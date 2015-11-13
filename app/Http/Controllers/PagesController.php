<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function showHome(){

    	return view('index');
    }

    public function showGallery(){

    	return view('gallery');
    }
    public function showEmployment(){

    	return view('employment');
    }
    public function showContact(){

    	return view('contact');
    }
    public function showFAQ(){

    	return view('faq');
    }
}
