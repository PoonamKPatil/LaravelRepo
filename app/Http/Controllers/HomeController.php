<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getView()
    {
    	$info = ["Name"=>"Poonam","Age"=>22,"Designation"=>"Associate software engineer"];

    	$name = "poonam";

    	return view('home',compact('info'));
    }
}

