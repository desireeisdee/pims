<?php

namespace App\Livewire;

use Livewire\Component;

class PersonnelNavigation extends Component
{
    public $formNav = 'personal_information';
    public $personnelId;
    public $showMode = false, $storeMode = false, $updateMode = false;

    public function mount($personnel_id = null)
    {
        if($personnel_id) {
            $this->personnelId = $personnel_id;
        }
    }

    public function edit()
    {
        $this->updateMode = true;
        $this->showMode = false;
    }

    public function back()
    {
        $this->updateMode = false;
        $this->showMode = true;

        return redirect()->back();
    }

    public function cancel()
    {
        $this->resetModes();
        return redirect()->back()->with('message', 'Back.');
    }

    public function resetModes()
    {
        $this->updateMode = false;
        $this->showMode = false;
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
