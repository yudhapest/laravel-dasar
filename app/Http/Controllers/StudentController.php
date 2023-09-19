<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::with('class', 'extracurriculars')->get();
        return view('student', ['studentList' => $students]);
    }
}
