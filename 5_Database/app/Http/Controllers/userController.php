<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
class userController extends Controller
{
    public function displayUser()
    {
        
        // return DB::select('select * from users');
        // $users = DB::table('users')->get();
        // $users=DB::select('select * from users');
        // print_r($users);

        $users = \App\Models\User::all(); // Using Eloquent ORM to fetch all users
        return view('users', ['users' => $users]);
    }

}