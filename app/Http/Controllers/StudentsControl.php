<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student; // Import the Student model

class StudentsControl extends Controller
{
    public function students()
    {
        // Fetch all students using Eloquent ORM
        $students = Student::all();
        // return $students;

        // Example 1: Return as JSON
        // return response()->json($students);

        // Example 2: Pass data to a Blade view
        return view('student', ['student' => $students]);
    }
}

