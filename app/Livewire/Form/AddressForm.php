<?php

namespace App\Livewire\Form;

use App\Models\Address;
use App\Models\ContactPerson;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddressForm extends Component
{
    public $personnel, $permanent_address, $residential_address, $contact_person,
           $permanent_house_no, $permanent_st_address, $permanent_subdivision, $permanent_brgy, $permanent_city, $permanent_province, $permanent_region, $permanent_zip_code,
           $residential_house_no, $residential_st_address, $residential_subdivision, $residential_brgy, $residential_city, $residential_province, $residential_region, $residential_zip_code,
           $contact_person_name, $contact_person_email, $contact_person_mobile_no, $updateMode = false, $showMode = true;

    protected $rules = [
        'permanent_house_no' => 'required',
        'permanent_st_address' => 'required',
        'permanent_subdivision' => 'nullable',
        'permanent_brgy' => 'required',
        'permanent_city' => 'required',
        'permanent_province' => 'nullable',
        'permanent_region' => 'required',
        'permanent_zip_code' => 'required',
        'residential_house_no' => 'required',
        'residential_st_address' => 'required',
        'residential_subdivision' => 'nullable',
        'residential_brgy' => 'required',
        'residential_city' => 'required',
        'residential_province' => 'required',
        'residential_region' => 'required',
        'residential_zip_code' => 'required',
        'contact_person_name' => 'required',
        'contact_person_email' => 'nullable',
        'contact_person_mobile_no' => 'required'
    ];

    public function mount()
    {
        $this->personnel = Auth::user()->personnel;
        $this->permanent_address = $this->personnel->permanentAddress;
        $this->residential_address = $this->personnel->residentialAddress;
        $this->contact_person = $this->personnel->contact_person;

        if ($this->permanent_address != null) {
            $this->permanent_house_no = $this->permanent_address->house_no;
            $this->permanent_st_address = $this->permanent_address->street;
            $this->permanent_subdivision = $this->permanent_address->subdivision;
            $this->permanent_brgy = $this->permanent_address->barangay;
            $this->permanent_city = $this->permanent_address->city;
            $this->permanent_province = $this->permanent_address->province;
            $this->permanent_region = $this->permanent_address->region;
            $this->permanent_zip_code = $this->permanent_address->zip_code;
        }

        if ($this->residential_address != null) {
            $this->residential_house_no = $this->residential_address->house_no;
            $this->residential_st_address = $this->residential_address->street;
            $this->residential_subdivision = $this->residential_address->subdivision;
            $this->residential_brgy = $this->residential_address->barangay;
            $this->residential_city = $this->residential_address->city;
            $this->residential_province = $this->residential_address->province;
            $this->residential_region = $this->residential_address->region;
            $this->residential_zip_code = $this->residential_address->zip_code;
        }

        if ($this->contact_person != null) {
            $this->contact_person_name = $this->contact_person->name;
            $this->contact_person_email = $this->contact_person->email;
            $this->contact_person_mobile_no = $this->contact_person->mobile_no;
        }
    }

    public function create()
    {
        $this->updateMode = true;
    }

    public function store()
    {
        $this->validate();
        try {
            $this->storePermanentAddress();
            $this->storeResidentialAddress();

            session()->flash('flash.banner', 'Address saved successfully');
            session()->flash('flash.bannerStyle', 'success');
        } catch (\Exception $ex) {
            session()->flash('error','Something goes wrong!!');
        }
    }

    public function storePermanentAddress()
    {
        Address::create([
            'address_type' => 'permanent',
            'house_no' => $this->permanent_house_no,
            'street' => $this->permanent_st_address,
            'subdivision' => $this->permanent_subdivision,
            'barangay' => $this->permanent_brgy,
            'city' => $this->permanent_city,
            'province' => $this->permanent_province,
            'region' => $this->permanent_region,
            'zip_code' => $this->permanent_zip_code,
            'personnel_id' => $this->personnel->id
        ]);
    }

    public function storeResidentialAddress()
    {
        Address::create([
            'address_type' => 'residential',
            'house_no' => $this->residential_house_no,
            'street' => $this->residential_st_address,
            'subdivision' => $this->residential_subdivision,
            'barangay' => $this->residential_brgy,
            'city' => $this->residential_city,
            'province' => $this->residential_province,
            'region' => $this->residential_region,
            'zip_code' => $this->residential_zip_code,
            'personnel_id' => $this->personnel->id
        ]);
    }

    public function storeContactPerson()
    {
        ContactPerson::create([
            'name' => $this->contact_person_name,
            'email' => $this->contact_person_email,
            'mobile_no' => $this->contact_person_mobile_no,
            'personnel_id' => $this->personnel->id
        ]);
    }

    public function edit()
    {
        $this->updateMode = true;
    }

    public function render()
    {
        return view('livewire.form.address-form');
    }

    public function back()
    {
        $this->updateMode = false;
        $this->showMode = true;
    }

    public function update()
    {
        $this->validate();

        if($this->personnel->permanentAddress != null)
        {
            $this->permanent_address->update([
                'house_no' => $this->permanent_house_no,
                'street' => $this->permanent_st_address,
                'subdivision' => $this->permanent_subdivision,
                'barangay' => $this->permanent_brgy,
                'city' => $this->permanent_city,
                'province' => $this->permanent_province,
                'region' => $this->permanent_region,
                'zip_code' => $this->permanent_zip_code
            ]);
        } else {
            $this->storePermanentAddress();
        }

        if($this->personnel->residentialAddress != null)
        {
            $this->residential_address->update([
                'house_no' => $this->residential_house_no,
                'street' => $this->residential_st_address,
                'subdivision' => $this->residential_subdivision,
                'barangay' => $this->residential_brgy,
                'city' => $this->residential_city,
                'province' => $this->residential_province,
                'region' => $this->residential_region,
                'zip_code' => $this->residential_zip_code
            ]);
        } else {
            $this->storeResidentialAddress();
        }

        if($this->personnel->contactPerson != null)
        {
            $this->contact_person->update([
                'name' => $this->contact_person_name,
                'email' => $this->contact_person_email,
                'mobile_no' => $this->contact_person_mobile_no
            ]);
        } else {
            $this->storeContactPerson();
        }

        $this->updateMode = false;

        session()->flash('flash.banner', 'Address and Contact Person saved successfully');
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->to('/teacher/profile');
    }
}
