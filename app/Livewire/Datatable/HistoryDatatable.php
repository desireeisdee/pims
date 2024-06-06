<?php

namespace App\Livewire\Datatable;

use App\Models\PersonnelHistory;
use Livewire\Component;
use Livewire\WithPagination;

class HistoryDatatable extends Component
{
    use WithPagination;

    public $personnel_id;
    public $selectedSchool = null, $selectedCategory = null, $selectedPosition = null, $selectedJobStatus = null;
    public $search = '';
    public $sortDirection = 'DESC';
    public $sortColumn = 'id';
    // public $school


    public function doSort($column)
    {
        if ($this->sortColumn == $column) {
            $this->sortDirection = $this->sortDirection ? 'DESC' : 'ASC';
            return;
        }
        $this->sortColumn = $column;
    }

    public function render()
    {
        $histories = PersonnelHistory::where('personnel_id', $this->personnel_id)
                    ->when($this->selectedSchool, function ($query) {
                        $query->where('school_id', $this->selectedSchool);
                    })
                    ->when($this->selectedCategory, function ($query) {
                        $query->where('category', $this->selectedCategory);
                    })
                    ->when($this->selectedPosition, function ($query) {
                        $query->where('position_id', $this->selectedPosition);
                    })
                    ->when($this->selectedJobStatus, function ($query) {
                        $query->where('job_status', $this->selectedJobStatus);
                    })
                    ->search($this->search)
                    ->orderBy($this->sortColumn, $this->sortDirection)
                    ->paginate(10);

        return view('livewire.datatable.history-datatable', ['histories' => $histories]);
    }
}
