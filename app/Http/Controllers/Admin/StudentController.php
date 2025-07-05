<?php

namespace App\Http\Controllers\Admin;

use App\Models\Student;
// use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StudentRequest;

class StudentController extends Controller
{
    //

    public function index()
    {
        return view('pages.list-students', [
            'students' => Student::paginate(4),
        ]);
    }
    public function create()
    {
        return view('pages.add-student');
    }
    public function store(StudentRequest $request)
    {
        // Validate and store the student data
        $data = $request->validated();
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/students'), $filename);
            $data['photo'] = $filename;
        } else {
            $data['photo'] = null; // or set a default image path
        }
        Student::create($data);
        return redirect()->route('student.create')->with('success', 'Student added successfully!');
    }
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('pages.update-student', compact('student'));
    }
    public function update(StudentRequest $request, $id)
    {
        $student = Student::findOrFail($id);
        $data = $request->validated();
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/students'), $filename);
            $data['photo'] =  $filename;
        } else {
            $data['photo'] = $student->photo; // Keep the old photo if no new photo is uploaded
        }
        $student->update($data);
        return redirect()->route('student.index')->with('success', 'Student updated successfully!');
    }
    public function delete($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->route('student.index')->with('success', 'Student delete with successfull');
    }
}
