<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function getView()
    {
    	$info = DB::table('info')->latest()->get();

    	return view('userInfo/home', compact('info'));
    }

    public function getViewById($id)
    {
    	$info = DB::table('info')->find($id);

    	return view('userInfo/showInfo', compact('info'));
    }
}

