<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    public function getHome(){
        return view('home');
    }
    public function getUser(){
        $users=['Ram','Sita','Shyam'];
        return view('user',['name'=>'Sagar','users'=>$users]);
    }
    public function getUserName($name){
        return view('user-detail',['name'=>$name]);
    }

    public function adminLogin(){
        if(view::exists('admin.login')){
            return view('admin.login');
        }else{
            echo 'login page not available';
        }
    }
}
