<?php

namespace App\Livewire\Form;

use App\Models\Personnel;
use Livewire\Component;

class PersonalInformation extends Component
{
    public $personnel;
    public $first_name, $middle_name, $last_name, $name_ext,
           $date_of_birth, $place_of_birth, $civil_status, $sex,
           $citizenship, $blood_type, $height, $weight,
           $tin, $sss_num, $gsis_num, $philhealth_num,
           $pagibig_num, $personnel_id, $email, $tel_no, $mobile_no;
    public $updateMode = false;

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
        'tin' => 'nullable|min:8|max:12',
        'sss_num' => 'nullable|size:10',
        'gsis_num' => 'nullable|min:8|max:11',
        'philhealth_num' => 'nullable|size:12',
        'pagibig_num' => 'nullable|size:12',
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
                $this->weight = $this->personnel->weight;
                $this->tin = $this->personnel->tin;
                $this->sss_num = $this->personnel->sss_num;
                $this->gsis_num = $this->personnel->gsis_num;
                $this->philhealth_num = $this->personnel->philhealth_num;
                $this->pagibig_num = $this->personnel->pagibig_num;
                $this->personnel_id = $this->personnel->personnel_id;
                $this->email = $this->personnel->email;
                $this->tel_no = $this->personnel->tel_no;
                $this->mobile_no = $this->personnel->mobile_no;
            }
        }
    }

    public function render()
    {
        return view('livewire.form.personal-information');
    }

    public function edit()
    {
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate();

        try {
            $this->personnel->update($this->validate());

            $this->updateMode = false;

            session()->flash('flash.banner', 'Personal Information saved successfully');
            session()->flash('flash.bannerStyle', 'success');

            return redirect()->to('/teacher/profile');
        } catch (\Exception $e) {
            session()->flash('flash.banner', 'Failed to update Personal Information. Error: ' . $e->getMessage());
            session()->flash('flash.bannerStyle', 'danger');
        }
    }
}

