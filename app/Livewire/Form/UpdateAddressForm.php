<?php

namespace App\Livewire\Form;

use App\Models\Address;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UpdateAddressForm extends AddressForm
{
    // public $personnel, $permanent_address, $residential_address, $contact_person,
    //        $permanent_house_no, $permanent_st_address, $permanent_subdivision, $permanent_brgy, $permanent_city, $permanent_province, $permanent_region, $permanent_zip_code,
    //        $residential_house_no, $residential_st_address, $residential_subdivision, $residential_brgy, $residential_city, $residential_province, $residential_region, $residential_zip_code,
    //        $name, $email, $mobile_no, $updateMode = false, $showMode = true;

    // public function mount()
    // {
    //     $this->personnel = Auth::user()->personnel;
    //     $this->permanent_address = $this->personnel->permanentAddress;
    //     $this->residential_address = $this->personnel->residentialAddress;
    //     // $this->permanent_address = Address::where('personnel_id', $this->personnel->id)
    //                                 // ->where('address_type', 'permanent')
    //                                 // ->get();

    //     if ($this->permanent_address != null) {
    //         $this->permanent_house_no = $this->permanent_address->house_no;
    //         $this->permanent_st_address = $this->permanent_address->street;
    //         $this->permanent_subdivision = $this->permanent_address->subdivision;
    //         $this->permanent_brgy = $this->permanent_address->brgy;
    //         $this->permanent_city = $this->permanent_address->city;
    //         $this->permanent_province = $this->permanent_address->province;
    //         $this->permanent_region = $this->permanent_address->region;
    //         $this->permanent_zip_code = $this->permanent_address->zip_code;
    //     } else {
    //         Address::create([
    //             'address_type' => 'permanent',
    //             'house_no' => $this->permanent_address->house_no,
    //             'street' => $this->permanent_address->street,
    //             'subdivision' => $this->permanent_address->subdivision,
    //             'barangay' => $this->permanent_address->brgy,
    //             'city' => $this->permanent_address->city,
    //             'province' => $this->permanent_address->province,
    //             'region' => $this->permanent_address->region,
    //             'zip_code' => $this->permanent_address->zip_code
    //         ]);
    //     }

    //     if ($this->residential_address != null) {
    //         $this->residential_house_no = $this->residential_address->house_no;
    //         $this->residential_st_address = $this->residential_address->street;
    //         $this->residential_subdivision = $this->residential_address->subdivision;
    //         $this->residential_brgy = $this->residential_address->brgy;
    //         $this->residential_city = $this->residential_address->city;
    //         $this->residential_province = $this->residential_address->province;
    //         $this->residential_region = $this->residential_address->region;
    //         $this->residential_zip_code = $this->residential_address->zip_code;
    //     } else {
    //         Address::create([
    //             'address_type' => 'residential',
    //             'house_no' => "",
    //             'street' => "",
    //             'subdivision' => "",
    //             'barangay' => "",
    //             'city' =>  "",
    //             'province' => "",
    //             'region' => "",
    //             'zip_code' =>  "",
    //             'personnel_id' => $this->personnel->id
    //         ]);
    //     }

    //     // $this->residential_address = Auth::user()->personnel->address->where('address_type', 'residential');
    //     // $this->contact_person = Auth::user()->personnel->contact_person;
    // }

    // public function back()
    // {
    //     $this->updateMode = false;
    //     $this->showMode = true;
    // }

    public function render()
    {
        return view('livewire.form.update-address-form');
    }
}
