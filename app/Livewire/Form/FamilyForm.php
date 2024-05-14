<?php

namespace App\Livewire\Form;

use Livewire\Component;

class FamilyForm extends Component
{
    public $personnel, $first_name, $middle_name, $last_name, $name_ext, $date_of_birth, $place_of_birth, $civil_status, $sex, $citizenship, $blood_type, $height, $weight, $tin, $sss_num, $gsis_num, $philhealth_num, $pagibig_num, $personnel_id, $email, $tel_no, $mobile_no, $updateMode = false;

    public function render()
    {
        return view('livewire.form.family-form');
    }

    public function edit(){
        $this->updateMode = true;
    }
}
