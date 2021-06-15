<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function fetchStudents()
    {
//        return Student::all();
//        return Student::where('id', 3)->get();
//        return Student::whereBetween('id', [33,44])->get();
        return Student::whereBetween('id', [33, 44])->orderBy('id', 'DESC')->get();
    }
}
