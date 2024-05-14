<?php

namespace App\Livewire;

use Livewire\Component;

class ChildrenFields extends Component
{
    public $new_childrens = [[]];

    public function addNewField()
    {
        $this->new_childrens[] = [
            'first_name' => '',
            'middle_name' => '',
            'last_name' => '',
            'name_ext' => '',
            'date_of_birth' => ''
        ];
    }

    public function removeField($index)
    {
        array_splice($this->new_childrens, $index, 1);
    }

    public function render()
    {
        return view('livewire.children-fields');
    }
}
