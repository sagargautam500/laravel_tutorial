<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlashController extends Controller
{

    public function showFlashForm()
    {
        return view('flash_form');
    }
    public function submitFlashForm(Request $request)
    {
        $request->session()->flash('message', 'Form submitted successfully!');
        return redirect()->back();


    }
}
