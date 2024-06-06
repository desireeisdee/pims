<x-modal name="create-school-modal" max-width="3xl">
    <x-card title="Create New School">
        <div class="px-2 py-1">
            <form action="{{ route('schools.store') }}" method="POST">
                @csrf
                <div class="mb-4 flex space-x-4">
                    <span class="w-1/4">
                        <x-input id="school_id" wire:model="school_id" type="number" label="School ID" name="school_id" required/>
                    </span>
                    <span class="w-1/4">
                        <x-input id="division" wire:model="division" type="text" label="Division"  name="division" required/>
                    </span>
                    <span class="w-1/4">
                        <x-select wire:model="district_id"
                                  id="district_id"
                                  name="district_id"
                                  placeholder="Select a district"
                                  :async-data="route('api.districts.index')"
                                  option-label="name"
                                  option-value="id"
                                  label="District"
                                  class="form-control"
                        />
                    </span>
                </div>
                <div class="mb-4 flex space-x-4">
                    <span class="w-full">
                        <x-input id="school_name" wire:model="school_name" type="text" label="School Name"  name="school_name" required/>
                    </span>
                </div>
                <div class="mb-4 flex space-x-4">
                    <span class="w-full">
                        <x-input id="address" wire:model="address" type="text" label="Address"  name="address"  required/>
                    </span>
                </div>
                <div class="mb-4 flex space-x-4">
                    <span class="w-2/4">
                        <x-input id="email" wire:model="email" type="email" label="Email"  name="email" required/>
                    </span>
                    <span class="w-2/4">
                        <x-input id="phone" wire:model="phone" type="tel" label="Phone"  name="phone" required/>
                    </span>
                </div>
                <div class="mb-6">
                    <x-select label="Curricular Classifications"
                              placeholder="Select classifications"
                              multiselect
                              :options="['Kinder', 'Grade 1-6', 'Grade 7-10', 'Grade 11-12']"
                              wire:model.defer="curricular_classification"
                    />
                </div>

                <div class="flex justify-end gap-x-4">
                    <div class="w-1/4">
                        <x-button x-on:click="close" label="Cancel" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-danger hover:bg-[#fa0202d3] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-danger-700"/>
                    </div>
                    <div class="w-1/4">
                        <x-button type="submit" label="Create" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-main hover:bg-[#1f2f54] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-700"/>
                    </div>
                </div>
            </form>
        </div>
    </x-card>
</x-modal>
