<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\Welcome;

use App\Http\Requests\RegistrationForm;

class RegistrationController extends Controller
{
    public function create()
    {
    	return view('registration.registration');
    }

    public function store(RegistrationForm $form)
    {
        $form->persist();
        
        return redirect()->home();
    }
}
