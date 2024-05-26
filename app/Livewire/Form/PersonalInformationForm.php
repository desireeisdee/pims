<?php

namespace App\Livewire\Form;

use App\Models\Personnel;
use App\Models\School;
use Livewire\Component;
use App\Livewire\PersonnelNavigation;

class PersonalInformationForm extends PersonnelNavigation
{
    public $personnel;
    public $first_name, $middle_name, $last_name, $name_ext,
           $date_of_birth, $place_of_birth, $civil_status, $sex,
           $citizenship, $blood_type, $height, $weight,
           $tin, $sss_num, $gsis_num, $philhealth_num,
           $pagibig_num,
           $personnel_id, $school_id, $position_id, $appointment, $fund_source, $job_status, $category, $employment_start, $employment_end, $salary_grade, $step, $classification, $position,
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
        'school_id' => 'required',
        'position_id' => 'required',
        'appointment' => 'required',
        'fund_source' => 'required',
        'salary_grade' => 'required',
        'step' => 'required',
        'category' => 'required',
        'job_status' => 'required',
        'classification' => 'required',
        'employment_start' => 'required',

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
                $this->position = $this->personnel->position->title;
                $this->position_id = $this->personnel->position->id;
                $this->appointment = $this->personnel->appointment;
                $this->fund_source = $this->personnel->fund_source;
                $this->salary_grade = $this->personnel->salary_grade;
                $this->step = $this->personnel->step;
                $this->category = $this->personnel->category;
                $this->job_status = $this->personnel->job_status;
                $this->classification = $this->personnel->classification;
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

    public function cancel()
    {
        $this->storeMode = false;
        $this->showMode = true;
        $this->updateMode = false;

        return redirect()->back()->route('personnels.index');
    }

    public function save()
    {
        $this->validate();

        try {
            $school = School::findOrFail($this->school_id);

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
                'position_id' => $this->position_id,
                'appointment' => $this->appointment,
                'fund_source' => $this->fund_source,
                'salary_grade' => $this->salary_grade,
                'step' => $this->step,
                'category' => $this->category,
                'job_status' => $this->job_status,
                'employment_start' => $this->employment_start,
                'employment_end' => $this->employment_end,

                'email' => $this->email,
                'tel_no' => $this->tel_no,
                'mobile_no' => $this->mobile_no
            ];
            if($this->personnel == null)
            {
                $this->personnel = Personnel::create($data);
                session()->flash('flash.banner', 'Personnel created successfully');
            } else {
                $this->personnel->update($data);
                session()->flash('flash.banner', 'Personal Information saved successfully');
            }

            $this->updateMode = false;
            $this->storeMode = false;
            $this->showMode = true;


            session()->flash('flash.bannerStyle', 'success');

            return redirect()->route('personnels.show', ['personnel' => $this->personnel->id]);
        } catch (\Throwable $th) {
            session()->flash('flash.banner', 'Failed to save Personal Information');
            session()->flash('flash.bannerStyle', 'danger');

            return redirect()->route('personnels.index');
        }
    }

}

