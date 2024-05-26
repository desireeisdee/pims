<?php

namespace App\Livewire\Form;

use App\Models\Personnel;
use Livewire\Component;

class ReferencesForm extends Component
{
    public $personnel;
    public $old_references = [], $new_references = [];
    public $showMode = false, $updateMode = false;

    protected $rules = [
        'old_references.*.full_name' => 'required',
        'old_references.*.address' => 'required',
        'old_references.*.tel_no' => 'required',
        'new_references.*.full_name' => 'required',
        'new_references.*.address' => 'required',
        'new_references.*.tel_no' => 'required'
    ];

    public function  mount($id, $showMode=true)
    {
        if($id) {
            $this->personnel = Personnel::findOrFail($id);
            $this->old_references = $this->personnel->references()->get()->map(function($reference) {
                return [
                    'id' => $reference->id,
                    'full_name' => $reference->full_name,
                    'address' => $reference->address,
                    'tel_no' => $reference->tel_no
                ];
            })->toArray();

            $this->new_references[] = [
                'full_name' =>'',
                'address' => '',
                'tel_no' => ''
            ];
        }
    }

    public function addField()
    {
        $this->new_references[] = [
            'full_name' =>'',
            'address' => '',
            'tel_no' => ''
        ];
    }

    public function removeNewField($index)
    {
        array_splice($this->new_references, $index, 1);
    }

    public function removeOldField($index)
    {
        try {
            $referenceId = $this->old_references[$index]['id'];
            $referenceModel = $this->personnel->references()->findOrFail($referenceId);

            // Delete the child from the database
            $referenceModel->delete();

            session()->flash('flash.banner', 'Reference deleted successfully');
            session()->flash('flash.bannerStyle', 'success');

            return redirect()->route('personnels.show', ['personnel' => $this->personnel->id]);
        } catch (\Throwable $th) {
            session()->flash('flash.banner', 'Failed to delete Reference');
            session()->flash('flash.bannerStyle', 'success');

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

    public function save()
    {
        $this->validate();

        if ($this->personnel->civilServiceEligibilities()->exists()) {
            foreach ($this->old_references as $reference) {
                $this->personnel->references()->where('id', $reference['id'])
                    ->update([
                        'full_name' => $reference['full_name'],
                        'address' => $reference['address'],
                        'tel_no' => $reference['tel_no']
                    ]);
            }
        }

        if($this->new_references != null)
        {
            foreach ($this->new_references as $reference) {
                $this->personnel->references()->create([
                    'full_name' => $reference['full_name'],
                    'address' => $reference['address'],
                    'tel_no' => $reference['tel_no']
                ]);
            }
        }

        $this->updateMode = false;
        $this->showMode = true;

        session()->flash('flash.banner', 'Civil Service Eligibility saved successfully');
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('personnels.show', ['personnel' => $this->personnel->id]);
    }

    public function render()
    {
        return view('livewire.form.references-form');
    }
}
