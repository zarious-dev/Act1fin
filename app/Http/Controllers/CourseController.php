<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function users($id)
    {
        $course = Course::with('users')->findOrFail($id);
        return view('courses.users', compact('course'));
    }
}
