<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user_form_controller extends Controller
{
    public function showForm()
    {
        return view('user-form');
    }

    public function submitForm(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255|min:3|Uppercase',
            'email' => 'required|email|max:255',
            'accept_terms' => 'accepted',
            'option' => 'required|string|in:option1,option2',
            'hobbies' => 'array|required',
        ],[
            'hobbies.required' => 'Please select at least one hobby.',
            'name.required' => 'Name is required.',
            'email.required' => 'Email is required.',
            'accept_terms.accepted' => 'You must accept the terms and conditions.',
            'option.required' => 'Please select an option.',
            'option.in' => 'The selected option is invalid.',
            'name.min' => 'Name must be at least 3 characters.',
            'email.email' => 'Please enter a valid email address.',
            'email.max' => 'Email must not exceed 255 characters.',
            'name.max' => 'Name must not exceed 255 characters.',
        ]);



        // Handle form submission
        // echo "Form submitted successfully!";
        // echo "<br>Name: " . $request->input('name');
        // echo "<br>Email: " . $request->input('email');
        
        return $request;
        // echo "<br>Name:". $request->name;
        // return view('user-detail', [
            //     // 'name' => $request->input('name'),
            //     // 'email' => $request->input('email')
            //     'name' => $request->name,
            //     'email' => $request->email
            // ]);
        }
}
