<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student; // Corrected namespace
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    public function studentsList() {
        // Retrieve students with pagination
        // $data = Student::paginate(10); // Get 10 students per page
        $data = Student::all();

        // Hide sensitive fields like password if they exist
        // $data->makeHidden(['password']); // Example: hide the password field

        return response()->json($data);

    }
    public function createStudent(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:students,email',
            'phone' => 'required|string|min:1',
            'batch' => 'required|max:255',
            'password' => 'required|string|min:4|confirmed',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->batch = $request->batch;
        $student->password = bcrypt($request->password);
        $student->save();

        return response()->json(['message' => 'Student created successfully', 'id' => $student->id]);
    }
     public function updateStudent(Request $request, $id) {
         $student = Student::find($id);

         if (!$student) {
             return response()->json(['message' => 'Student not found']);
         }

         $updated = false;

         if ($request->has('name')) {
             $student->name = $request->name;
             $updated = true;
         }

         if ($request->has('email')) {
             $student->email = $request->email;
             $updated = true;
         }

         if ($request->has('phone')) {
             $student->phone = $request->phone;
             $updated = true;
         }

         if ($request->has('batch')) {
             $student->batch = $request->batch;
             $updated = true;
         }

         if ($updated) {
             $student->save();
             return response()->json(['message' => 'Student updated successfully', 'id' => $id]);
         }

         return response()->json(['message' => 'No changes detected']);
     }

     public function deleteStudent($id) {           //id is the student id get from the url
        $student = Student::find($id);
        if (!$student) {
            return response()->json(['message' => 'Student not found']);
        }
        $student->delete();
        // Handle the create request
        return response()->json(['message' => 'Student deleted successfully','id'=>$id]);
    }

}