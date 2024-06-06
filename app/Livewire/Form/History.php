<?php

namespace App\Livewire\Form;

use App\Models\Personnel;
use Livewire\Component;

class History extends Component
{
    public $personnel;


    public function mount($id = null)
    {
        $this->personnel = Personnel::findOrFail($id);

    }

    public function render()
    {
        return view('livewire.form.history');
    }
}
