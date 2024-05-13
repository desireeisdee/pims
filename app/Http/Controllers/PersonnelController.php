<?php

namespace App\Http\Controllers;

use App\Models\Personnel;
use Illuminate\Http\Request;

class PersonnelController extends Controller
{
    public function index()
    {
        $personnels = Personnel::all();
        return view('admin.personnel.index', compact('personnels'));
    }

    public function create()
    {
        return view('personnel_profile.create');
    }

    public function edit($id)
    {
        $personnel = Personnel::findOrFail($id);
        return view('admin.personnel.edit', ['personnel' => $personnel]);
    }
}
