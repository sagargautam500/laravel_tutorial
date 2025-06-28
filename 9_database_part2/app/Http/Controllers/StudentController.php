<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student; // Assuming you have a Student model

class StudentController extends Controller
{
    public function addStudent()
    {
        return view('add_student');
    }

    public function storeStudent(Request $request)
    {
        // Validate and store the student data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|min:1',
            'batch' => 'required|max:255',
            'password' => 'required|string|min:8|confirmed',
            
        ]);
        // Store the student data in the database
        $student = new Student();
        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->phone = $request->input('phone');
        $student->batch = $request->input('batch');
        $student->password = bcrypt($request->input('password'));
        $student->save();


        // For now, just redirect back with a success message
        return redirect()->back()->with('success', 'Student added successfully!');
        // return $request->all(); // This will return all the input data for now
    }

    public function showStudents()
    {
        // Retrieve all students from the database
        // students = Student::all();
        $students = Student::paginate(3); // Use pagination to limit the number of students displayed per page

        // Hide the 'password' attribute from the collection
        $students->makeHidden(['password']);

        // Return the collection (without the password attribute)
        return view('show_students', ['students' => $students]);

        // If you were returning a view, you would pass the collection like this:
        // return view('show_students', compact('students'));
    }

    public function deleteStudent($id)
    {
        // Find the student by ID and delete
        $student = Student::find($id);
        if ($student) {
            $student->delete();
            return redirect()->back()->with('success', 'Student deleted successfully!');
        }
        return redirect()->back()->with('error', 'Student not found.');
    }

    public function editStudent($id)
    {
        // Find the student by ID
        $student = Student::find($id);
        if (!$student) {
            return redirect()->back()->with('error', 'Student not found.');
        }

        // Return the edit view with the student data
        return view('edit_student', ['student' => $student]);
    }
    public function updateStudent(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255|min:3',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|min:1',
            'batch' => 'required|max:255',
        ]);

        // Find the student by ID
        $student = Student::find($id);
        if (!$student) {
            return redirect()->back()->with('error', 'Student not found.');
        }

        // Update the student data
        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->phone = $request->input('phone');
        $student->batch = $request->input('batch');
        $student->save();

        return redirect('/show-student')->with('success', 'Student updated successfully!');
    }

    public function searchStudent(Request $request)
    {
        $searchTerm = $request->input('search'); // Get the search term from the request

        // Query the database for students whose name contains the search term
        // You can add more fields to search (e.g., email, phone)
        // $students = Student::where('name', 'like', '%' . $searchTerm . '%')->get();
        // If you want to paginate the results, you can use:
        $students = Student::where('name', 'like', '%' . $searchTerm . '%')->paginate(5);

        // Hide the password attribute for security
        $students->makeHidden(['password']);

        // Return the search results view, passing the filtered students and the search term
        return view('show_students', [
            'students' => $students,
        ]);
    }

    public function deleteMultipleStudents(Request $request)
    {
        // Validate the request to ensure 'student_ids' is an array
        $request->validate([
            'student_ids' => 'required|array',
            'student_ids.*' => 'exists:students,id', // Ensure each ID exists in the students table
        ]);

        // Delete the selected students
        Student::destroy($request->input('student_ids'));

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Selected students deleted successfully!');
    }
}