<?php

namespace App\Livewire\Form;

use App\Models\Personnel;
use Livewire\Component;

class VoluntaryWorkForm extends Component
{
    public $personnel;
    public $old_voluntary_works = [], $new_voluntary_works = [];
    public $showMode = false, $updateMode = false;

    protected $rules = [
        'old_voluntary_works.*.organization' => 'required',
        'old_voluntary_works.*.position' => 'required',
        'old_voluntary_works.*.inclusive_from' => 'required',
        'old_voluntary_works.*.inclusive_to' => 'required',
        'old_voluntary_works.*.hours' => 'required',
        'old_voluntary_works.*.is_gov_service' => 'required',
        'new_voluntary_works.*.organization' => 'required',
        'new_voluntary_works.*.position' => 'required',
        'new_voluntary_works.*.inclusive_from' => 'required',
        'new_voluntary_works.*.inclusive_to' => 'required',
        'new_voluntary_works.*.hours' => 'required',
        'new_voluntary_works.*.is_gov_service' => 'required',
    ];

    public function  mount($id, $showMode=true)
    {
        if($id) {
            $this->personnel = Personnel::findOrFail($id);
            // $this->old_voluntary_works = $this->personnel->workExperiences;

            $this->old_voluntary_works = $this->personnel->voluntaryWorks()->get()->map(function($voluntary_work) {
                return [
                    'id' => $voluntary_work->id,
                    'organization' => $voluntary_work->organization,
                    'position' => $voluntary_work->position,
                    'hours' => $voluntary_work->hours,
                    'inclusive_from' => $voluntary_work->inclusive_from,
                    'inclusive_to' => $voluntary_work->inclusive_to,
                    'is_gov_service' => $voluntary_work->is_gov_service,
                ];
            })->toArray();

            $this->new_voluntary_works[] = [
                'organization' => '',
                'position' => '',
                'hours' => '',
                'inclusive_from' => '',
                'inclusive_to' => '',
                'is_gov_service' => ''
            ];
        }
    }

    public function addField()
    {
        $this->new_voluntary_works[] = [
            'organization' => '',
            'position' => '',
            'hours' => '',
            'inclusive_from' => '',
            'inclusive_to' => '',
            'is_gov_service' => ''
        ];
    }

    public function removeNewField($index)
    {
        array_splice($this->new_voluntary_works, $index, 1);
    }

    public function removeOldField($index)
    {
        try {
            $voluntaryWorkId = $this->old_voluntary_works[$index]['id'];
            $voluntaryWorkModel = $this->personnel->voluntaryWorks()->findOrFail($voluntaryWorkId);

            // Delete the child from the database
            $voluntaryWorkModel->delete();

            session()->flash('flash.banner', 'Voluntary Work deleted successfully');
            session()->flash('flash.bannerStyle', 'success');

            return redirect()->route('personnels.show', ['personnel' => $this->personnel->id]);
        } catch (\Throwable $th) {
            session()->flash('flash.banner', 'Failed to delete Voluntary Work');
            session()->flash('flash.bannerStyle', 'danger');

            return redirect()->route('personnels.show', ['personnel' => $this->personnel->id]);
        }
    }

    public function edit()
    {
        $this->updateMode = true;
        $this->showMode = false;
    }

    public function cancel()
    {
        $this->resetModes();
        return redirect()->route('personnels.show', ['personnel' => $this->personnel->id]);
    }

    public function resetModes()
    {
        $this->updateMode = false;
        $this->showMode = true;
    }

    public function save()
    {
        // dd("oopo");
        $this->validate();
        // dd("oopo");
        if ($this->personnel->voluntaryWorks()->exists()) {
            foreach ($this->old_voluntary_works as $voluntary_work) {
                $this->personnel->voluntaryWorks()->where('id', $voluntary_work['id'])
                    ->update([
                        'organization' => $voluntary_work['organization'],
                        'position' => $voluntary_work['position'],
                        'inclusive_from' => $voluntary_work['inclusive_from'],
                        'inclusive_to' => $voluntary_work['inclusive_to'],
                        'hours' => $voluntary_work['hours'],
                        'is_gov_service' => $voluntary_work['is_gov_service']
                    ]);
            }
        }
dd("poo");
        if($this->new_voluntary_works != null)
        {
            foreach ($this->new_voluntary_works as $voluntary_work) {
                $this->personnel->voluntaryWorks()->create([
                    'organization' => $voluntary_work['organization'],
                    'position' => $voluntary_work['position'],
                    'inclusive_from' => $voluntary_work['inclusive_from'],
                    'inclusive_to' => $voluntary_work['inclusive_to'],
                    'hours' => $voluntary_work['hours'],
                    'is_gov_service' => $voluntary_work['is_gov_service']
                ]);
            }
        }

        $this->updateMode = false;
        $this->showMode = true;

        session()->flash('flash.banner', 'Voluntary Work saved successfully');
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('personnels.show', ['personnel' => $this->personnel->id]);
    }

    public function render()
    {
        return view('livewire.form.voluntary-work-form');
    }
}
