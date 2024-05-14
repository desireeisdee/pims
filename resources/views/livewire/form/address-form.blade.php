<div class="mx-auto py-8 px-10" >
    @if (!$updateMode)
        <section>
            <div class="flex justify-between">
                <h4 class="font-bold text-2xl text-gray-darkest">Address & Contact Person</h4>
                <div>
                    <x-button wire:click.prevent="edit" label="Edit" class="px-5 bg-primary font-semibold text-xs text-white uppercase tracking-widest hover:hover:bg-primary-hover"/>
                </div>
            </div>
            <div>
                <div class="mt-5">
                    <h5 class="font-bold text-xl text-gray-darkest">Permanent Address</h5>
                    @if($permanent_house_no != null)
                        <section>
                            <div class="mt-5 mb-4 p-0 flex space-x-3 justify-between">
                                <span class="w-1/2">
                                    <x-input class="bg-gray-50 border-gray-300" id="permanent_house_no" wire:model="permanent_house_no" type="text" name="permanent_house_no" label="House/Block/Lot No." readonly/>
                                </span>
                                <span class="w-1/2">
                                    <x-input class="bg-gray-50 border-gray-300" id="permanent_st_address" wire:model="permanent_st_address" type="text" name="permanent_st_address" label="Street Address" readonly/>
                                </span>
                            </div>
                            <div class="m-0 mb-4 p-0 flex space-x-3 justify-between">
                                <span class="w-1/3">
                                    <x-input class="bg-gray-50 border-gray-300" id="permanent_subdivision" wire:model="permanent_subdivision" type="text" name="permanent_subdivision" label="Subdivision/Village" readonly/>
                                </span>
                                <span class="w-1/3">
                                    <x-input class="bg-gray-50 border-gray-300" id="permanent_brgy" wire:model="permanent_brgy" type="text" name="permanent_brgy" label="Barangay" readonly/>
                                </span>
                                <span class="w-1/3">
                                    <x-input class="bg-gray-50 border-gray-300" id="permanent_city" wire:model="permanent_city" type="text" name="permanent_city" label="City/Municipality" readonly/>
                                </span>
                            </div>
                            <div class="m-0 mb-4 p-0 flex space-x-3 justify-between">
                                <span class="w-1/3">
                                    <x-input class="bg-gray-50 border-gray-300" id="permanent_province" wire:model="permanent_province" type="text" name="permanent_province" label="Province" readonly/>
                                </span>
                                <span class="w-1/3">
                                    <x-input class="bg-gray-50 border-gray-300" id="permanent_region" wire:model="permanent_region" type="text" name="permanent_region" label="Region" readonly/>
                                </span>
                                <span class="w-1/3">
                                    <x-input class="bg-gray-50 border-gray-300" id="permanent_zip_code" wire:model="permanent_zip_code" type="text" name="permanent_zip_code" label="Zip Code" readonly/>
                                </span>
                            </div>
                        </section>
                    @else
                        <p class="mt-3 w-full py-2 font-medium text-xs text-center bg-gray-200">No Permanent Address</p>
                    @endif

                </div>

                <div class="mt-10">
                    <h5 class="font-bold text-xl text-gray-darkest">Residential Address</h5>
                    @if($residential_house_no != null)
                    <section>
                        <div class="mt-5 mb-4 p-0 flex space-x-3 justify-between">
                            <span class="w-1/2">
                                <x-input class="bg-gray-50 border-gray-300" id="residential_house_no" wire:model="residential_house_no" type="text" name="residential_house_no" label="House/Block/Lot No." readonly/>
                            </span>
                            <span class="w-1/2">
                                <x-input class="bg-gray-50 border-gray-300" class="bg-gray-50 border-gray-300" id="residential_st_address" wire:model="residential_st_address" type="text" name="residential_st_address" label="Street Address" readonly/>
                            </span>
                        </div>
                        <div class="m-0 mb-4 p-0 flex space-x-3 justify-between">
                            <span class="w-1/3">
                                <x-input class="bg-gray-50 border-gray-300" id="residential_subdivision" wire:model="residential_subdivision" type="text" name="residential_subdivision" label="Subdivision/Village" readonly/>
                            </span>
                            <span class="w-1/3">
                                <x-input class="bg-gray-50 border-gray-300" id="residential_brgy" wire:model="residential_brgy" type="text" name="residential_brgy" label="Barangay" readonly/>
                            </span>
                            <span class="w-1/3">
                                <x-input class="bg-gray-50 border-gray-300" id="residential_city" wire:model="residential_city" type="text" name="residential_city" label="City/Municipality" readonly/>
                            </span>
                        </div>
                        <div class="m-0 mb-4 p-0 flex space-x-3 justify-between">
                            <span class="w-1/3">
                                <x-input class="bg-gray-50 border-gray-300" id="residential_province" wire:model="residential_province" type="text" name="residential_province" label="Province" readonly/>
                            </span>
                            <span class="w-1/3">
                                <x-input class="bg-gray-50 border-gray-300" id="residential_region" wire:model="residential_region" type="text" name="residential_region" label="Region" readonly/>
                            </span>
                            <span class="w-1/3">
                                <x-input class="bg-gray-50 border-gray-300" id="residential_zip_code" wire:model="residential_zip_code" type="text" name="residential_zip_code" label="Zip Code" readonly/>
                            </span>
                        </div>
                    </section>
                    @else
                        <p class="mt-3 w-full py-2 font-medium text-xs text-center bg-gray-200">No Residentail Address</p>
                    @endif
                </div>

                <div class="mt-10">
                    <h5 class="font-bold text-xl text-gray-darkest">Contact Person In Case Of Emergency</h5>
                    @if ($contact_person != null)
                        <section>
                            <div class="mt-5 mb-4 p-0">
                                <x-input class="bg-gray-50 border-gray-300" id="contact_person_name" wire:model="contact_person_name" type="text" name="contact_person_name" label="Name" readonly/>
                            </div>
                            <div class="m-0 mb-4 p-0 flex space-x-3">
                                <span class="w-6/12">
                                    <x-input class="bg-gray-50 border-gray-300" id="contact_person_email" wire:model="contact_person_email" type="email" name="contact_person_email" label="Email" readonly/>
                                </span>
                                <span class="w-3/12">
                                    <x-input class="bg-gray-50 border-gray-300" id="contact_person_mobile_no" wire:model="contact_person_mobile_no" type="text" name="contact_person_mobile_no" label="Mobile No." readonly/>
                                </span>
                            </div>
                        </section>
                    @else
                        <p class="mt-3 w-full py-2 font-medium text-xs text-center bg-gray-200">No Contact Person</p>
                    @endif
                </div>
            </div>
        </section>
    @else
        <div class="flex justify-between">
            <h4 class="font-bold text-2xl text-gray-darkest">Edit Address & Contact Person</h4>

            <div>
                <x-button wire:click="back" label="Back" class="px-5 bg-primary font-semibold text-xs text-white uppercase tracking-widest hover:hover:bg-primary-hover"/>
            </div>
        </div>

        @livewire('form.update-address-form')
    @endif
</div>
