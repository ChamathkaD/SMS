<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentStore;
use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function store(StudentStore $request){

        //return $request->all();

        Student::create ($request->all());
        return back()->with('success', 'Update Successfully');

    }
    public function addStudent(){
        return view('addStudent');

    }

   /* public function addNewStudent(){
        return back()->with('success', 'Update Successfully');
    }*/

    public function students(){
        $students = Student::all();
        return view('student', [
            'student' => $students
        ]);

    }
}
