<div class="mx-auto py-8 px-10" >
    @if (!$updateMode)
        <section>
            <div class="flex justify-between">
                <h4 class="font-bold text-2xl text-gray-darkest">Family</h4>
                <div>
                    <x-button wire:click.prevent="edit" label="Edit" class="px-5 bg-primary font-semibold text-xs text-white uppercase tracking-widest hover:hover:bg-primary-hover"/>
                </div>
            </div>

            <div>
                <div class="mt-5 mb-4 p-0 flex space-x-3 justify-between">
                    <span class="w-1/4">
                        <x-input id="fathers_first_name" wire:model="state.fathers_first_name" label="Father's First Name" type="text" name="fathers_first_name" required/>
                    </span>
                    <span class="w-1/4">
                        <x-input id="fathers_middle_name" wire:model="state.fathers_middle_name" label="Father's Middle Name" type="text" name="fathers_middle_name" required/>
                    </span>
                    <span class="w-1/4">
                        <x-input id="fathers_last_name" wire:model="state.fathers_last_name" label="Father's Last Name" type="text" name="fathers_last_name" required/>
                    </span>
                    <span class="w-1/4">
                        <x-input id="fathers_name_ext" wire:model="state.fathers_name_ext" label="Father's Name Extension" type="text" name="name_ext" required/>
                    </span>
                </div>
                <div class="mt-5 mb-4 p-0 flex space-x-3">
                    <span class="w-1/4">
                        <x-input id="mothers_first_name" wire:model="state.mothers_first_name" label="Mother's First Name" type="text" name="mothers_first_name" required/>
                    </span>
                    <span class="w-1/4">
                        <x-input id="mothers_middle_name" wire:model="state.mothers_middle_name" label="Mother's Middle Name" type="text" name="mothers_middle_name" required/>
                    </span>
                    <span class="w-1/4">
                        <x-input id="mothers_last_name" wire:model="state.mothers_last_name" label="Mother's Maiden Name" type="text" name="mothers_last_name" required/>
                    </span>
                    <span class="w-1/4">
                    </span>
                </div>
            </div>

            <div class="mt-10">
                <h5 class="mt-5 mb-3 font-bold text-xl text-gray-darkest">Spouse</h5>
                <div class="m-0 mb-4 p-0 flex space-x-3 justify-between">
                    <span class="w-1/4">
                        <x-input id="spouse_first_name" wire:model="state.spouse_first_name" label="First Name" type="texr" name="spouse_first_name" required/>
                    </span>
                    <span class="w-1/4">
                        <x-input id="spouse_middle_name" wire:model="state.spouse_middle_name" label="Middle Name" type="text" name="spouse_middle_name" required/>
                    </span>
                    <span class="w-1/4">
                        <x-input id="spouse_last_name" wire:model="state.spouse_last_name" label="Last Name" type="text" name="spouse_last_name" required/>
                    </span>
                    <span class="w-1/4">
                        <x-input id="spouse_name_ext" wire:model="state.spouse_name_ext" label="Name Extension" type="text" name="spouse_name_ext" required/>
                    </span>
                </div>
                <div class="m-0 mb-4 p-0 flex space-x-3 justify-between">
                    <span class="w-1/2">
                        <x-input id="spouse_occupation" wire:model="state.spouse_occupation" label="Occupation" type="text" name="spouse_occupation" required/>
                    </span>
                    <span class="w-1/2">
                        <x-input id="spouse_business_name" wire:model="state.spouse_business_name" label="Employer/Business Name" type="text" name="spouse_business_name" required/>
                    </span>
                </div>
                <div class="m-0 mb-4 p-0 flex space-x-3 justify-between">
                    <span class="w-1/2">
                        <x-input id="spouse_business_address" wire:model="state.spouse_business_address" label="Business Address" type="text" name="spouse_business_address" required/>
                    </span>
                    <span class="w-1/2">
                        <x-input id="spouse_tel_no" wire:model="state.spouse_tel_no" label="Telephone No." type="text" name="spouse_tel_no" required/>
                    </span>
                </div>
            </div>

            <div class="mt-10">
                <h5 class="mt-5 mb-3 font-bold text-xl text-gray-darkest">Children</h5>
                <div class="mt-5">
                    <div class="mt-3">
                        <div class="ps-5 w-full flex space-x-3 h-10 border border-gray-100 bg-gray-lightest items-center">
                            <h6 class="w-9/12">
                                <span class="text-xs text-gray-dark font-semibold uppercase">Full Name</span>
                            </h6>
                            <h6 class="w-2/12">
                                <span class="text-xs text-gray-dark font-semibold uppercase">Date of Birth</span>
                            </h6>
                        </div>
                        <div class="mt-2">
                            @livewire('children-fields')
                        </div>
                    </div>
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
