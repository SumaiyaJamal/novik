<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('website.index');
    }
    public function sponsers()
    {
        return view('website.sponsers');
    }
    public function contact()
    {
        return view('website.contact');
    }

    public function terms()
    {
        return view('website.terms');
    }
    public function privacy()
    {
        return view('website.privacy');
    }
    public function cookies()
    {
        return view('website.cookies');
    }
    public function query()
    {
        return view('website.query');
    }
}
