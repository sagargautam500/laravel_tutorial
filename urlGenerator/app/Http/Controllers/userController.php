<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
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
    public function submitContact(Request $request)
    {
        // Handle the contact form submission logic here
        // For example, you can validate the request and save the data to the database

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Process the data (e.g., save to database, send email, etc.)

        // return redirect()->back()->with('success', 'Contact form submitted successfully!');
        // return response()->json([
        //     'message' => 'Contact form submitted successfully!',
        //     'data' => $validatedData
        // ]);
        // return redirect()->to('/contact')->with('success', 'Contact form submitted successfully!');
        return redirect()->route('con')->with('success', 'Contact form submitted successfully!');
    }
    public function showAboutName($name)
    {
        return view('about', ['name' => $name]);
    }
}
