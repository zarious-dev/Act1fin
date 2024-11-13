<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function showAllUsers()
    {
        $profile = Profile::all(); 
        return view('profiles',  ['profiles' => $profile]);
    }
}
