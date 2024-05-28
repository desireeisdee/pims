<?php

namespace App\Http\Controllers;

use App\Exports\SchoolsExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSchoolRequest;
use App\Http\Requests\UpdateSchoolRequest;
use App\Models\AppointmentsFunding;
use App\Models\FundedItem;
use App\Models\School;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Builder;

class SchoolController extends Controller
{
    public function index()
    {
        $schools = School::all();
        return view('school.index', compact('schools'));
    }

    public function create()
    {
        // $schools = School::all();
        return view('school.create');
    }

    public function show($id)
    {
        $school = School::findOrFail($id);
        return view('school.show', compact('school'));
    }

    public function edit($id)
    {
        $school = School::findOrFail($id);
        return view('school.edit', ['school' => $school]);
    }

    public function profile($school)
    {
        $school = Auth::user()->personnel->school->id;
        return view('school.show', compact('school'));
    }

    public function export($id)
    {
        $school = School::findOrFail($id);

        $schoolData = [
            'school' => $school->toArray(),
            'personnels' => $school->personnels->toArray()
            // 'assignmentDetails' => $school->personnels->assignmentDetails->toArray()
        ];

        return Excel::download(new SchoolsExport($schoolData, $school->id), 'schools.xlsx');
    }

    public function store(StoreSchoolRequest $request)
    {
        $school = School::create($request->all());
        dd($school);

        if ($school) {
            // $this->storeFundedItems($school, $request->all());
            // $this->storeAppointmentsFunding($school, $request->all());

            session()->flash('flash', ['banner' => 'School data saved successfully.', 'bannerStyle' => 'success']);
        } else {
            session()->flash('flash', ['banner' => 'Failed to save school data.', 'bannerStyle' => 'danger']);
        }

        return redirect()->route('schools.index');
    }


//     public function getSchoolID(Request $request): Collection
// {
//     // Initialize the query to select id and school_name from the School model
//     $query = School::query()
//         ->select('id', 'school_name');

//     // Apply search filter if search parameter is present in the request
//     $query->when(
//         $request->search,
//         fn (Builder $query) => $query->where('school_name', 'like', "%{$request->search}%")
//     );

//     // Check if 'selected' parameter exists in the request
//     $query->when(
//         $request->exists('selected'),
//         // If 'selected' parameter exists, filter by selected IDs
//         fn (Builder $query) => $query->whereIn('id', $request->input('selected', [])),
//         // Otherwise, limit the results to 10
//         fn (Builder $query) => $query->limit(10)
//     );

//     // Order the results by school_name
//     $query->orderBy('school_name');

//     // Execute the query and return the results as a collection
//     return $query->get();
// }


}
