<?php

namespace App\Livewire\Form;

use App\Models\Personnel;
use App\Models\School;
use Livewire\Component;

class PersonalInformationForm extends Component
{
    public $personnel;
    public $first_name, $middle_name, $last_name, $name_ext,
           $date_of_birth, $place_of_birth, $civil_status, $sex,
           $citizenship, $blood_type, $height, $weight,
           $tin, $sss_num, $gsis_num, $philhealth_num,
           $pagibig_num,
           $personnel_id, $school_id, $appointment, $fund_source, $job_title, $job_status, $employment_start, $employment_end,
           $email, $tel_no, $mobile_no;
    public $showMode = false, $storeMode = false, $updateMode = false;

    protected $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'middle_name' => 'nullable',
        'name_ext' => 'nullable',
        'date_of_birth' => 'required',
        'place_of_birth' => 'required',
        'sex' => 'required',
        'civil_status' => 'required',
        'citizenship' => 'required',
        'height' => 'required',
        'weight' => 'required',
        'blood_type' => 'required',
        'personnel_id' => 'required',
        // 'tin' => 'nullable|min:8|max:12',
        // 'sss_num' => 'nullable|size:10',
        // 'gsis_num' => 'nullable|min:8|max:11',
        // 'philhealth_num' => 'nullable|size:12',
        // 'pagibig_num' => 'nullable|size:12',
        'email' => 'required',
        'tel_no' => 'nullable',
        'mobile_no' => 'required',
    ];

    public function mount($id = null)
    {
        if($id) {
            $this->personnel = Personnel::findOrFail($id);

            if ($this->personnel) {
                $this->first_name = $this->personnel->first_name;
                $this->last_name = $this->personnel->last_name;
                $this->middle_name = $this->personnel->middle_name;
                $this->name_ext = $this->personnel->name_ext;
                $this->date_of_birth = $this->personnel->date_of_birth;
                $this->place_of_birth = $this->personnel->place_of_birth;
                $this->civil_status = $this->personnel->civil_status;
                $this->sex = $this->personnel->sex;
                $this->citizenship = $this->personnel->citizenship;
                $this->blood_type = $this->personnel->blood_type;
                $this->height = $this->personnel->height;
                $this->weight = $this->personnel->weight;

                $this->tin = $this->personnel->tin;
                $this->sss_num = $this->personnel->sss_num;
                $this->gsis_num = $this->personnel->gsis_num;
                $this->philhealth_num = $this->personnel->philhealth_num;
                $this->pagibig_num = $this->personnel->pagibig_num;

                $this->personnel_id = $this->personnel->personnel_id;
                $this->school_id = $this->personnel->school->school_id;
                // $this->appointment = $this->personnel->appointment;
                // $this->fund_source = $this->personnel->fund_source;
                $this->job_title = $this->personnel->job_title;
                $this->job_status = $this->personnel->job_status;
                $this->employment_start = $this->personnel->employment_start;
                if ($this->personnel->employment_end)
                {
                    $this->employment_end = $this->personnel->employment_end;
                }

                $this->email = $this->personnel->email;
                $this->tel_no = $this->personnel->tel_no;
                $this->mobile_no = $this->personnel->mobile_no;
            }
        }
    }

    public function render()
    {
        return view('livewire.form.personal-information-form');
    }

    public function create()
    {
        $this->storeMode = true;
        $this->showMode = false;
        $this->updateMode = false;
    }

    public function store()
    {
        $this->validate();

        // Retrieve the school record based on the provided school_id
        $school = School::where('school_id', $this->school_id)->firstOrFail();

        try {
            // Prepare the data for creating a new Personnel record
            $data = [
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'middle_name' => $this->middle_name,
                'name_ext' => $this->name_ext,
                'date_of_birth' => $this->date_of_birth,
                'place_of_birth' => $this->place_of_birth,
                'sex' => $this->sex,
                'civil_status' => $this->civil_status,
                'citizenship' => $this->citizenship,
                'height' => $this->height,
                'weight' => $this->weight,
                'blood_type' => $this->blood_type,
                'tin' => $this->tin,
                'sss_num' => $this->sss_num,
                'gsis_num' => $this->gsis_num,
                'philhealth_num' => $this->philhealth_num,
                'pagibig_num' => $this->pagibig_num,
                'personnel_id' => $this->personnel_id,
                'school_id' => $school->id,
                'job_title' => $this->job_title,
                'job_status' => $this->job_status,
                'employment_start' => $this->employment_start,
                'email' => $this->email,
                'tel_no' => $this->tel_no,
                'mobile_no' => $this->mobile_no,
            ];

            if ($this->employment_end) {
                $data['employment_end'] = $this->employment_end;
            }

            // Create a new Personnel record
            $personnel = Personnel::create($data);

            // Update the mode variables if the personnel was created successfully
            if ($personnel) {
                $this->showMode = true;
                $this->updateMode = false;
                $this->storeMode = false;

                // Set the personnel property to the created personnel
                $this->personnel = $personnel;

                session()->flash('flash.banner', 'Personal Information created successfully.');
                session()->flash('flash.bannerStyle', 'success');

                // Redirect to the show route for the created personnel
                return redirect()->route('personnels.show', ['personnel' => $this->personnel->id]);
            } else {
                session()->flash('flash.banner', 'Failed to create Personal Information.');
                session()->flash('flash.bannerStyle', 'danger');
            }
        } catch (\Exception $e) {
            // Handle exceptions and display an error message
            session()->flash('flash.banner', 'Failed to create Personal Information. Error: ' . $e->getMessage());
            session()->flash('flash.bannerStyle', 'danger');
        }

        // Redirect to the create personnel route if something goes wrong
        return redirect()->route('personnels.create');
    }


    public function edit()
    {
        $this->updateMode = true;
        $this->storeMode = false;
        $this->showMode = false;
    }

    public function cancel()
    {
        $this->updateMode = true;
        $this->storeMode = false;
        $this->showMode = false;
        if($this->updateMode)
        {
            $this->updateMode = false;
            $this->storeMode = false;
            $this->showMode = true;
        } else {
            $this->updateMode = false;
            $this->storeMode = false;
            $this->showMode = false;
        }
        return redirect()->route('personnels.index');
    }

    public function back()
    {
        return redirect()->route('personnels.index');
    }

    public function update()
    {
        $this->validate();

        try {
            $this->personnel->update([
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'middle_name' => $this->middle_name,
                'name_ext' => $this->name_ext,
                'date_of_birth' => $this->date_of_birth,
                'place_of_birth' => $this->place_of_birth,
                'sex' => $this->sex,
                'civil_status' => $this->civil_status,
                'citizenship' => $this->citizenship,
                'height' => $this->height,
                'weight' => $this->weight,
                'blood_type' => $this->blood_type,
                'tin' => $this->tin,
                'sss_num' => $this->sss_num,
                'gsis_num' => $this->gsis_num,
                'philhealth_num' => $this->philhealth_num,
                'pagibig_num' => $this->pagibig_num,
                'email' => $this->email,
                'tel_no' => $this->tel_no,
                'mobile_no' => $this->mobile_no,
            ]);

            $this->showMode = true;
            $this->updateMode = false;
            $this->storeMode = false;

            session()->flash('flash.banner', 'Personal Information saved successfully');
            session()->flash('flash.bannerStyle', 'success');

            return redirect()->route('personnels.show', ['personnel' => $this->personnel->id]);
        } catch (\Exception $e) {
            session()->flash('flash.banner', 'Failed to update Personal Information. Error: ' . $e->getMessage());
            session()->flash('flash.bannerStyle', 'danger');
        }
    }
}

