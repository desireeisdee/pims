<?php

namespace App\Http\Controllers;

use App\Exports\SchoolsExport;
use App\Http\Controllers\Controller;
use App\Models\School;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class SchoolController extends Controller
{
    public function index()
    {
        $schools = School::all();
        return view('admin.school.index', compact('schools'));
    }

    public function export($id)
    {
        $school = School::findOrFail($id);
        $schoolData = [
            'school' => $school->toArray(),
            'funded_items' => $school->funded_items->toArray(),
            'personnels' => $school->personnels->toArray(),
        ];
        return Excel::download(new SchoolsExport($schoolData), 'schools.xlsx');
    }
}
