<div class="mx-auto pt-3 pb-10 px-5">
    <h4 class="font-bold text-2xl text-gray-darkest">Contact Information</h4>
    <div class="mt-5">
        <section>
            <div class="m-0 mb-4 p-0 flex space-x-3 justify-between">
                <span class="w-6/12">
                    <x-input id="email" wire:model="state.email" type="email" name="email" label="Email" required/>
                </span>
                <span class="w-3/12">
                    <x-input id="tel_no" wire:model="state.tel_no" type="text" name="tel_no" label="Telephone No." required/>
                </span>
                <span class="w-3/12">
                    <x-input id="mobile_no" wire:model="state.mobile_no" type="text" name="mobile_no" label="Mobile No." required/>
                </span>
            </div>
        </section>


        <div>
            <h5 class="my-5 mb-3 font-bold text-xl text-gray-darkest">Permanent Address</h5>
            <section>
                <div class="m-0 mb-4 p-0 flex space-x-3 justify-between">
                    <span class="w-1/2">
                        <x-input id="permanent_house_no" wire:model="state.permanent_house_no" type="text" name="permanent_house_no" label="House/Block/Lot No." required/>
                    </span>
                    <span class="w-1/2">
                        <x-input id="permanent_st_address" wire:model="state.permanent_st_address" type="text" name="permanent_st_address" label="Street Address" required/>
                    </span>
                </div>
                <div class="m-0 mb-4 p-0 flex space-x-3 justify-between">
                    <span class="w-1/3">
                        <x-input id="permanent_subdivision" wire:model="state.permanent_subdivision" type="text" name="permanent_subdivision" label="Subdivision/Village" required/>
                    </span>
                    <span class="w-1/3">
                        <x-input id="permanent_brgy" wire:model="state.permanent_brgy" type="text" name="permanent_brgy" label="Barangay" required/>
                    </span>
                    <span class="w-1/3">
                        <x-input id="permanent_city" wire:model="state.permanent_city" type="text" name="permanent_city" label="City/Municipality" required/>
                    </span>
                </div>
                <div class="m-0 mb-4 p-0 flex space-x-3 justify-between">
                    <span class="w-1/3">
                        <x-input id="permanent_province" wire:model="state.permanent_province" type="text" name="permanent_province" label="Province" required/>
                    </span>
                    <span class="w-1/3">
                        <x-input id="permanent_region" wire:model="state.permanent_region" type="text" name="permanent_region" label="Region" required/>
                    </span>
                    <span class="w-1/3">
                        <x-input id="permanent_zip_code" wire:model="state.permanent_zip_code" type="text" name="permanent_zip_code" label="Zip Code" required/>
                    </span>
                </div>
            </section>
        </div>

        <div>
            <h5 class="my-5 mb-3 font-bold text-xl text-gray-darkest">Residential Address</h5>
            <section>
                <div class="m-0 mb-4 p-0 flex space-x-3 justify-between">
                    <span class="w-1/2">
                        <x-input id="residential_house_no" wire:model="state.residential_house_no" type="text" name="residential_house_no" label="House/Block/Lot No." required/>
                    </span>
                    <span class="w-1/2">
                        <x-input id="residential_st_address" wire:model="state.residential_st_address" type="text" name="residential_st_address" label="Street Address" required/>
                    </span>
                </div>
                <div class="m-0 mb-4 p-0 flex space-x-3 justify-between">
                    <span class="w-1/3">
                        <x-input id="residential_subdivision" wire:model="state.residential_subdivision" type="text" name="residential_subdivision" label="Subdivision/Village" required/>
                    </span>
                    <span class="w-1/3">
                        <x-input id="residential_brgy" wire:model="state.residential_brgy" type="text" name="residential_brgy" label="Barangay" required/>
                    </span>
                    <span class="w-1/3">
                        <x-input id="residential_city" wire:model="state.residential_city" type="text" name="residential_city" label="City/Municipality" required/>
                    </span>
                </div>
                <div class="m-0 mb-4 p-0 flex space-x-3 justify-between">
                    <span class="w-1/3">
                        <x-input id="residential_province" wire:model="state.residential_province" type="text" name="residential_province" label="Province" required/>
                    </span>
                    <span class="w-1/3">
                        <x-input id="residential_region" wire:model="state.residential_region" type="text" name="residential_region" label="Region" required/>
                    </span>
                    <span class="w-1/3">
                        <x-input id="residential_zip_code" wire:model="state.residential_zip_code" type="text" name="residential_zip_code" label="Zip Code" required/>
                    </span>
                </div>
            </section>
        </div>

        <div>
            <h5 class="my-5 mb-3 font-bold text-xl text-gray-darkest">Contact Person In Case Of Emergency</h5>
            <section>
                <div class="m-0 mb-4 p-0">
                    <x-input id="contact_person_name" wire:model="state.contact_person_name" type="text" name="contact_person_name" label="Name" required/>
                </div>
                <div class="m-0 mb-4 p-0 flex space-x-3">
                    <span class="w-6/12">
                        <x-input id="contact_person_email" wire:model="state.contact_person_email" type="email" name="contact_person_email" label="Email" required/>
                    </span>
                    <span class="w-3/12">
                        <x-input id="contact_person_mobile_no" wire:model="state.contact_person_mobile_no" type="text" name="contact_person_mobile_no" label="Mobile No." required/>
                    </span>
                </div>
            </section>
        </div>

        <div>
            <h5 class="my-5 mb-3 font-bold text-xl text-gray-darkest">Work Address</h5>
            <div class="m-0 mb-4 p-0">
                <x-input id="work_address" type="text" name="work_address" label="Work Address" required/>
            </div>
        </div>

    </div>
</div>
