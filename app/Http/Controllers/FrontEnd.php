<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEnd extends Controller
{
    public function index(){
    	return view('index');
    }
    public function about(){
    	return view('about-us');
    }
    public function service(){
    	return view('services');
    }
    public function page1(){
    	return view('portfolio');
    }
    public function page2(){
    	return view('elements');
    }
    public function blog(){
    	return view('blog');
    }
    public function blogd(){
    	return view('single-blog');
    }
    public function contact(){
    	return view('contact');
    }
}
