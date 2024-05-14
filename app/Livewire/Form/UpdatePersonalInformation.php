<?php

namespace App\Livewire\Form;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class UpdatePersonalInformation extends PersonalInformation
{
    public function render()
    {
        return view('livewire.form.update-personal-information');
    }
}
