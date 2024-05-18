<?php

namespace App\Livewire;

use Livewire\Component;

class PersonnelNavigation extends Component
{
    public $formNav = 'personal_information';
    public $personnelId;


    public function mount($personnel_id = null)
    {
        if($personnel_id) {
            $this->personnelId = $personnel_id;
        }
    }

    public function setFormNav($section)
    {
        $this->formNav = $section;
    }

    public function render()
    {
        return view('livewire.personnel-navigation');
    }
}
