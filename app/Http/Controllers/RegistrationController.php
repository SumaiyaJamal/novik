<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function signup()
    {
        return view('website.signup');
    }
    public function login()
    {
        return view('website.login');
    }
}
