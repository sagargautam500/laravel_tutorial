<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUser(){
       return view('user');
    }

    public function postUser(Request $request){
        // Handle the post request
        // return $request;
        echo "User data received successfully<br>";
        echo "{$request->name} <br>";
        echo "{$request->email} <br>";
        echo $request->method() . " <br>";
        echo ($request->isMethod('post') ? 'true' : 'false') . " <br>";
        echo $request->path() . " <br>";
        echo $request->url() . " <br>";
    }
    public function deleteUser(Request $request){
        // Handle the delete request
        return response()->json(['message' => 'User deleted successfully']);
    }
    public function updateUser(Request $request){
        // Handle the update request
        return response()->json(['message' => 'User updated successfully']);
    }
}
