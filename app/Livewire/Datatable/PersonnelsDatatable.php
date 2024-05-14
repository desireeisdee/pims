<?php

namespace App\Livewire\Datatable;

use App\Models\Personnel;
use Livewire\Component;
use Livewire\WithPagination;

class PersonnelsDatatable extends Component
{
    use WithPagination;
    public $search = '';
    public $sortDirection = 'ASC';
    public $sortColumn = 'id';

    public function doSort($column){
        if($this->sortColumn == $column){
            $this->sortDirection = $this->sortDirection ? 'DESC' : 'ASC';
            return;
        }
        $this->sortColumn = $column;
        // dd($this->sortColumn == $column);
    }

    public function render()
    {
        return view('livewire.datatable.personnels-datatable', [
            'personnels' => Personnel::search($this->search)
                         ->orderBy($this->sortColumn, $this->sortDirection)
                         ->paginate(10)
        ]);
    }
}
