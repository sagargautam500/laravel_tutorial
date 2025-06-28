<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function showStudents()
    {
        // Logic to retrieve and display students
        $students = Student::all();
        return response()->json($students);
    }

    public function createStudent()
    {
        // Logic to create a new student
        $student = new Student();
        $student->name = 'Sagar Gautam';
        $student->email = 'sagar@example.com';
        $student->phone = '+977-9800000000';
        $student->batch = '2077';
        $student->password = 'password123';
        $student->save();

        return response()->json(['message' => 'Student created successfully', 'student' => $student]);
    }
}
