<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function showHome()
    {
        return view('home');
    }
    public function showAbout()
    {
        return view('about');
    }
    public function showContact()
    {
        return view('contact');
    }
}
