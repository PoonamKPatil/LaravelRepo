<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Info;
use DB;

class HomeController extends Controller
{
    public function getView()
    {
    	//$info = DB::table('info')->latest()->get();

    	$info = Info::all();

        return view('userInfo/home', compact('info'));
    }

    public function getViewById($id)
    {
    	//$info = DB::table('info')->find($id);

    	$info = Info::find($id);

    	return view('userInfo/showInfo', compact('info'));
    }
}

