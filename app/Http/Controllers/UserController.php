<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function getProfile(Request $request)
    {
        $profile = User::find($request->id)->profile();
        return view('profile', ['profile' => $profile]);
    }

    public function getCourses(Request $request)
    {
        $courses = User::find($request->id)->course();
        return view('course', ['course' => $courses]);
    }






    public function show($id)
    {
        $user = User::with('profile')->findOrFail($id);
        return view('users.show', compact('user'));
    }

    public function courses($id)
    {
        $user = User::with('courses')->findOrFail($id);
        return view('users.courses', compact('user'));
    }
}
