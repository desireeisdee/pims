<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function adminHome()
    {
        return view('dashboard');
    }

    public function schoolHeadHome()
    {
        $school = Auth::user()->personnel->school->id;
        return view('school.show', ['school' => $school->id]);
    }

    public function teacherHome()
    {
        $personnel = Auth::user()->personnel->id;
        return view('personnel_profile.show', ['personnel' => $personnel->id]);
    }
}
