<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function login(Request $request){
        $data = $request->all();
        $user = User::where('email', $data['email'])->first();
        if($user){
            if (Hash::check($data['password'], $user->password)) {
                $token = $user->createToken('myapptoken')->plainTextToken;
                return response()->json(['message' => 'Login successful', 'token' => $token]);
            } else {
                return response()->json(['message' => 'Password does not match']);
            }
        }else{
            return response()->json(['message' => 'User does not exist']);
        }
    }
    public function signUp(Request $request){
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        User::create($data);
        return response()->json(['message' => 'User created successfully']);
    }
}
