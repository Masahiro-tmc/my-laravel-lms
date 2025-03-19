<?php

// app/Http/Controllers/Admin/StudentController.php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // This method will show the list of students
    public function index()
    {
        // Retrieve all students
        $students = Student::all();
        
        // Return the view with students data
        return view('admin.students.index', compact('students'));
    }


    public function create()
    {
        return view('admin.students.create');
    }
    
    public function edit($id)
    {
        $student = Student::findOrFail($id);  // Find the student by ID
        return view('admin.students.edit', compact('student'));  // Pass student data to the view
    }
    public function update(Request $request, $id)
    {
    $student = Student::findOrFail($id);

    $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|email|unique:students,email,' . $id,
        // Add validation rules for other fields...
    ]);

    $student->update($request->all());

    return redirect()->route('admin.students.index')->with('success', 'Student updated successfully!');
}


    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'title' => 'nullable|string',
            'work_phone' => 'nullable|string',
            'home_phone' => 'nullable|string',
            'mobile_phone' => 'nullable|string',
            'address' => 'nullable|string',
            'usi' => 'nullable|string',
        ]);

        // Create the student with the new fields
        $student = Student::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'title' => $request->title,
            'work_phone' => $request->work_phone,
            'home_phone' => $request->home_phone,
            'mobile_phone' => $request->mobile_phone,
            'address' => $request->address,
            'usi' => $request->usi,
        ]);

        // Optionally, assign the student role
        $student->assignRole('student'); // Ensure the student role exists

        return redirect()->route('admin.students.index')->with('success', 'Student registered successfully!');
    }
}
