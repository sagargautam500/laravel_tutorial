<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getLogin()
    {
        return view('login');
    }
    public function postLogin(Request $request)
    {
        
        // return response()->json([
        //     'message' => 'Login successful',
        //     'data' => $request->all()
        // ]);

        // $name = $request->input('name');
        // $email = $request->input('email');
        // $request->session()->put('name', $name);
        // $request->session()->put('email', $email);

        $request->session()->put('data', [
            'name' => $request->input('name'),
            'email' => $request->input('email')
        ]);
        return redirect('/profile')->with('message', 'Login successful');
    }

    public function getProfile(Request $request)
    {
        // return view('profile', [
        //     'name' => $request->session()->get('data.name'),
        //     'email' => $request->session()->get('data.email'),
        // ]);
        return view('profile');
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/profile')->with('message', 'Logged out successfully');
    }
}
