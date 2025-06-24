<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentController extends Controller
{
    public function displayStudent()
    {
        // return DB::select('select * from students');
        // $students = DB::table('students')->get();
        // $students = DB::select('select * from students');

         $testFunctionResult = new \App\Models\Student; // Example of calling a method from the Student model
         echo $testFunctionResult->testFunction(); // This will call the testFunction defined in the Student model
         
        $students = \App\Models\Student::all(); // Using Eloquent ORM to fetch all students
        return view('students', ['students' => $students]);
    }
}
