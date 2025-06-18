<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
     public function myView()
    {
        $students = Student::all();
        $users = User::all();

        return view('students.index', compact('students', 'users'));
    }

    // CREATE
    public function addNewStudent(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'gender' => 'required',
        ]);

        $add_new = new Student;
        $add_new->id = $request->id;
        $add_new->name = $request->name;
        $add_new->age = $request->age;
        $add_new->gender = $request->gender;
        $add_new->save();



        return back()->with('success', 'Student added successfully');
    }

    // UPDATE
    public function updateView($id)
    {
        $students = Student::where('id', '=', $id)->get();
        return view('update', compact('students'));
    }


    public function updateME(Request $request)
    {
        Student::where('id', '=', $request->id)->update([
            'name' => $request->name,
            'age' => $request->age,
            'gender' => $request->gender,
        ]);

        return redirect('/')->with('success', 'Student updated successfully');
    }

    public function deleteME($id)
    {
        Student::where('id', '=', $id)->delete();
        return back()->with('success', 'Student deleted successfully');
    }
}