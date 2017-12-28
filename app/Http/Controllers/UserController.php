<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Info;
use DB;

class UserController extends Controller
{
    public function getView()
    {
    	//$info = DB::table('info')->latest()->get();

    	$info = Info::all();

        return view('userInfo/home', compact('info'));
    }

    public function getViewById(Info $info)
    {
    	//$info = DB::table('info')->find($id);

    	return view('userInfo/showInfo', compact('info'));
    }
}

