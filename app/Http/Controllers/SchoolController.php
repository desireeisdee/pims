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

class SchoolController extends Controller
{
    public function index()
    {
        $schools = School::all();
        return view('school.index', compact('schools'));
    }

    public function create()
    {
        $schools = School::all();
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
            'funded_items' => $school->funded_items->toArray(),
            'personnels' => $school->personnels->toArray(),
        ];

        return Excel::download(new SchoolsExport($schoolData, $school->id), 'schools.xlsx');
    }

    public function store(StoreSchoolRequest $request)
    {
        $school = School::create($request->all());

        if ($school) {
            $this->storeFundedItems($school, $request->all());
            $this->storeAppointmentsFunding($school, $request->all());

            session()->flash('flash', ['banner' => 'School data saved successfully.', 'bannerStyle' => 'success']);
        } else {
            session()->flash('flash', ['banner' => 'Failed to save school data.', 'bannerStyle' => 'danger']);
        }

        return redirect()->route('schools.index');
    }

    private function storeFundedItems($school, $data)
    {
        if (isset($data['new_item_title'])) {
            foreach ($data['new_item_title'] as $index => $title) {
                $itemData = [
                    'school_id' => $school->id,
                    'title' => $title,
                    'non_teaching' => $data['new_item_category'][$index] == 'non-teaching',
                    'incumbent' => $data['new_item_incumbent'][$index]
                ];

                FundedItem::create($itemData);
            }
        }
    }

    private function storeAppointmentsFunding($school, $data)
    {
        if (isset($data['new_appointment_title'])) {
            foreach ($data['new_appointment_title'] as $index => $title) {
                $appointmentData = [
                    'school_id' => $school->id,
                    'title' => $title,
                    'appointment' => $data['new_appointment_appointment'][$index],
                    'fund_source' => $data['new_appointment_fund_source'][$index],
                    'incumbent_teaching' => $data['new_appointment_incumbent_teaching'][$index],
                    'incumbent_non_teaching' => $data['new_appointment_incumbent_non_teaching'][$index]
                ];

                AppointmentsFunding::create($appointmentData);
            }
        }
    }

    public function update(UpdateSchoolRequest $request, string $id)
    {
        $school = School::findOrFail($id);
        $school->update($request->all());

        if ($request->has('funded_item_id')) {
            // $i = 0;
            // foreach ($request->funded_item_id as $index => $fundedItemId) {
            //     $update_funded_item_request = [
            //         'title' => $request->funded_item_title[$i],
            //         'category' => $request->funded_item_category[$i],
            //         'incumbent' => $request->funded_item_incumbent[$i]
            //     ];
            //     $i++;
            //     $this->updateFundedItem(new Request ($update_funded_item_request), $fundedItemId);
            // }
            $this->updateFundedItems($school, $request->all());
        }

        if ($request->has('appointments_funding_id')) {
            // $i = 0;
            // foreach ($request->funded_item_id as $index => $appointmentsFundingId) {
            //     $update_appointments_funding_request = [
            //         'title' => $request->appointments_funding_title[$i],
            //         'appointment' => $request->appointments_funding_appointment[$i],
            //         'fund_source' => $request->appointments_funding_fund_source[$i],
            //         'incumbent_teaching' => $request->appointments_funding_incumbent_teaching[$i],
            //         'incumbent_non_teaching' => $request->appointments_funding_incumbent_non_teaching[$i]
            //     ];
            //     $i++;
            //     $this->updateFundedItem(new Request ($update_appointments_funding_request), $appointmentsFundingId);
            // }
            $this->updateAppointmentsFunding($school, $request->all());
        }

        // If created new data
        if ($request->has('new_item_title')) {
            $this->storeFundedItems($school, $request->all());
        }

        if ($request->has('new_appointments_funding_title')) {
            $this->storeAppointmentsFunding($school, $request->all());
        }

        return redirect()->route('schools.index');
    }

    private function updateFundedItems($school, $data)
    {
        if (isset($data['new_item_title'])) {
            foreach ($data['new_item_title'] as $index => $title) {
                $itemData = [
                    'school_id' => $school->id,
                    'title' => $title,
                    'non_teaching' => $data['new_item_category'][$index] == 'non-teaching',
                    'incumbent' => $data['new_item_incumbent'][$index]
                ];

                FundedItem::create($itemData);
            }
        }
    }

    private function updateAppointmentsFunding($school, $data)
    {
        if (isset($data['new_appointment_title'])) {
            foreach ($data['new_appointment_title'] as $index => $title) {
                $appointmentData = [
                    'school_id' => $school->id,
                    'title' => $title,
                    'appointment' => $data['new_appointment_appointment'][$index],
                    'fund_source' => $data['new_appointment_fund_source'][$index],
                    'incumbent_teaching' => $data['new_appointment_incumbent_teaching'][$index],
                    'incumbent_non_teaching' => $data['new_appointment_incumbent_non_teaching'][$index]
                ];

                AppointmentsFunding::create($appointmentData);
            }
        }
    }


}
